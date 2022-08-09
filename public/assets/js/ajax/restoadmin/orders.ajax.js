$(function () {
	loadOrdersTable();
	loadCouriers();
});

// Load Orders DataTable
loadOrdersTable = () => {
	const dt = $("#orders-datatables");

	$.ajaxSetup({
		headers: {
			Accept: "application/json",
			Authorization: "Bearer " + token,
			ContentType: "application/x-www-form-urlencoded",
		},
	});

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + "resto-admin/orders",
				type: "GET",
				ContentType: "application/x-www-form-urlencoded",
			},
			dom: "Bfrtip",
			buttons: ["copy", "csv", "excel", "print", "pdf"],

			columns: [
				// Order No.
				{
					data: null,
					render: (data) => {
						const orderNo = data.order_no;

						return `
							<span class="text-primary fw-medium">${orderNo}</span>
            `;
					},
				},

				// Customer
				{
					data: null,
					render: (data) => {
						const gender = data.created.gender;
						const fullName = `${data.created.first_name}  ${
							data.created.middle_name === null ? "" : data.created.middle_name
						}  ${data.created.last_name}`;

						if (gender == "Male") {
							return `
								<div class="d-flex">
									<i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
									<div>
										<span class="d-block fw-medium">${fullName}</span>
										<i class="mdi mdi-gender-male text-primary"></i>
										<small>${gender}</small>
									</div>
								</div>
								`;
						} else {
							return `
								<div class="d-flex">
									<i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
									<div>
										<span class="d-block fw-medium">${fullName}</span>
										<i class="mdi mdi-gender-female text-danger"></i>
										<small>${gender}</small>
									</div>
								</div>
								`;
						}
					},
				},

				// Order Date
				{
					data: null,
					render: (data) => {
						const date = moment(data.date_created).format("MMM. D, YYYY");
						const time = moment(data.date_created).format("hh:mm A");

						return `
							<div class="fw-medium">${date}<small class="text-muted ms-1">${time}</small></div>
						`;
					},
				},

				// Order Total
				{
					data: null,
					render: (data) => {
						return `
							<h5 class="text-info fw-medium">₱ ${data.order_total}</h5>
						`;
					},
				},

				// Order Status
				{
					data: null,
					render: (data) => {
						const order_status = data.order_status;

						if (order_status === "Pending") {
							return `
								<div class="d-block badge badge-soft-primary align-items-center">
									<i class="me-2 mdi mdi-cart-heart fs-13"></i>
									<span class="text-uppercase">${order_status}</span>
								</div>
								`;
						} else if (order_status === "In Process") {
							return `
								<div class="d-block badge badge-soft-warning align-items-center">
									<i class="me-2 bx bx-dish fs-13"></i>
									<span class="text-uppercase">${order_status}</span>
								</div>
							`;
						} else if (order_status === "Cancelled") {
							return `
								<div class="d-block badge badge-soft-dark align-items-center">
									<i class="me-2 mdi mdi-basket-remove-outline fs-13"></i>
									<span class="text-uppercase">${order_status}</span>
								</div>
							`;
						} else if (order_status === "On the Way") {
							return `
								<div class="d-block badge badge-soft-secondary align-items-center">
									<i class="me-2 ri-truck-line fs-13"></i>
									<span class="text-uppercase">${order_status}</span>
								</div>
							`;
						} else if (order_status === "Delivered") {
							return `
								<div class="d-block badge badge-soft-success align-items-center">
									<i class="me-2 mdi mdi-package-variant fs-13"></i>
									<span class="text-uppercase">${order_status}</span>
								</div>
							`;
						} else if (order_status === "Rejected") {
							return `
								<div class="d-block badge badge-soft-danger align-items-center">
									<i class="me-2 ri-close-circle-line fs-13"></i>
									<span class="text-uppercase">${order_status}</span>
								</div>
								`;
						}
					},
				},

				//Action
				{
					data: null,
					class: "text-center",
					render: (data) => {
						return `
							<ul class="list-inline hstack gap-3 justify-content-center mb-0">
                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                  <a href="${baseURL}restoadmin/orders/order-details" role="button" onclick="localStorage.setItem('orderID', '${data.order_id}');
				  " class="text-black-50 d-inline-block">
                    <i class="ri-eye-fill fs-16"></i>
                  </a>
                </li>
                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                  <a href="#editOrderModal" data-bs-toggle="modal" onclick = "editOrder('${data.order_id}')" class="text-primary d-inline-block edit-item-btn">
                    <i class="ri-pencil-fill fs-16"></i>
                  </a>
                </li>
              </ul>
						`;
					},
				},
			],
			order: [[0, "asc"]],
		});
	}
};

// Update Order Status
editOrder = (order_id) => {
	$.ajax({
		type: "GET",
		cache: false,
		url: apiURL + `resto-admin/order/${order_id}`,
		dataType: "json",
		success: (result) => {
			const data = result.data;
			$("#order_no").prop("readonly", false);
			$("#order_no").val(data.order_no);
			$("#order_no").prop("readonly", true);

			$("#order_status").change(() => {
				let orderStatus = $("#order_status").val();
				// Update order status via AJAX

				if (orderStatus === "On the Way") {
					$("#courierName").removeClass("d-none");
					$("#driverName").removeClass("d-none");
					$("#driverPhone").removeClass("d-none");
				}
			});

			$("#editOrderStatusForm").on("submit", function (e) {
				e.preventDefault(); // prevent page refresh

				{
					// no validation error
					const form = new FormData($("#editOrderStatusForm")[0]);

					let data = {
						order_status: form.get("order_status"),
					};

					if (data.order_status === "Rejected") {
						$.ajaxSetup({
							headers: {
								Accept: "application/json",
								Authorization: "Bearer " + token,
								ContentType: "application/x-www-form-urlencoded",
							},
						});

						$.ajax({
							type: "PUT",
							cache: false,
							url: apiURL + `resto-admin/order/rejected/${order_id}`,
							dataType: "json",
							success: (result) => {
								if (result) {
									document.getElementById("close-modal").click();

									// Show success alert
									Swal.fire({
										position: "center",
										icon: "success",
										title: "Order status updated successfully!",
										showConfirmButton: false,
										timer: 2000,
										showCloseButton: true,
									});

									// Reload the DataTable
									loadOrdersTable();
								}
							},
						}).fail(() =>
							console.error("There was a problem in updating the order status")
						);
					} else if (data.order_status === "In Process") {
						$.ajaxSetup({
							headers: {
								Accept: "application/json",
								Authorization: "Bearer " + token,
								ContentType: "application/x-www-form-urlencoded",
							},
						});

						$.ajax({
							type: "PUT",
							cache: false,
							url: apiURL + `resto-admin/order/in-process/${order_id}`,
							dataType: "json",
							success: (result) => {
								if (result) {
									document.getElementById("close-modal").click();

									// Show success alert
									Swal.fire({
										position: "center",
										icon: "success",
										title: "Order status updated successfully!",
										showConfirmButton: false,
										timer: 2000,
										showCloseButton: true,
									});

									// Reload the DataTable
									loadOrdersTable();
								}
							},
						}).fail(() =>
							console.error("There was a problem in updating the order status")
						);
					} else if (data.order_status === "On the Way") {
						data = {
							courier_id: form.get("courier"),
							driver_name: form.get("driver_name"),
							driver_phone: form.get("driver_phone"),
						};

						$.ajaxSetup({
							headers: {
								Accept: "application/json",
								Authorization: "Bearer " + token,
								ContentType: "application/x-www-form-urlencoded",
							},
						});

						$.ajax({
							type: "PUT",
							cache: false,
							url: apiURL + `resto-admin/order/otw/${order_id}`,
							data: data,
							dataType: "json",
							success: (result) => {
								if (result) {
									document.getElementById("close-modal").click();

									// Show success alert
									Swal.fire({
										position: "center",
										icon: "success",
										title: "Order status updated successfully!",
										showConfirmButton: false,
										timer: 2000,
										showCloseButton: true,
									});

									// Reload the DataTable
									loadOrdersTable();
								}
							},
						}).fail(() =>
							console.error("There was a problem in updating the order status")
						);
					} else if (data.order_status === "Delivered") {
						$.ajaxSetup({
							headers: {
								Accept: "application/json",
								Authorization: "Bearer " + token,
								ContentType: "application/x-www-form-urlencoded",
							},
						});

						$.ajax({
							type: "PUT",
							cache: false,
							url: apiURL + `resto-admin/order/delivered/${order_id}`,
							data: data,
							dataType: "json",
							success: (result) => {
								if (result) {
									document.getElementById("close-modal").click();

									// Show success alert
									Swal.fire({
										position: "center",
										icon: "success",
										title: "Order status updated successfully!",
										showConfirmButton: false,
										timer: 2000,
										showCloseButton: true,
									});

									// Reload the DataTable
									loadOrdersTable();
								}
							},
						}).fail(() =>
							console.error("There was a problem in updating the order status")
						);
					}
				}
			});
		},
	}).fail(() =>
		console.error("There was an error in getting the order details")
	);
};

// Load Couriers
loadCouriers = () => {
	$.ajaxSetup({
		headers: {
			Accept: "application/json",
			Authorization: "Bearer " + token,
			ContentType: "application/x-www-form-urlencoded",
		},
	});
	$.ajax({
		type: "GET",
		cache: false,
		url: apiURL + `resto-admin/couriers`,
		dataType: "json",
		success: (result) => {
			const data = result.data;
			data.forEach((courier) => {
				$("#couriers").append(
					`<option value="${courier.courier_id}">${courier.courier_name}</option>`
				);
			});
		},
	});
};
