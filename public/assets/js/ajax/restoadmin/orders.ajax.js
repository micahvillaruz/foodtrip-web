$(function () {
	$(".courier-name").hide();
	$(".driver-name").hide();
	$(".driver-phone").hide();

	$("#order_status").change(function () {
		var orderStatus = $(this).val();
		if (orderStatus === "2") {
			$(".courier-name").show();
			$(".driver-name").show();
			$(".driver-phone").show();
		} else {
			$(".courier-name").hide();
			$(".driver-name").hide();
			$(".driver-phone").hide();
		}
	});
	loadOrdersTable();
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
                  <a href="${baseURL}restoadmin/orders/order-details" role="button" class="text-black-50 d-inline-block">
                    <i class="ri-eye-fill fs-16"></i>
                  </a>
                </li>
                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                  <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
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
