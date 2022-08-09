$(function () {
	// load datatable
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
			bDestroy: true,
			ajax: {
				url: apiURL + "admin/orders",
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
						return `
							<span class="text-primary fw-medium">${data.order_no}</span>
            `;
					},
				},

				// Customer Name
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

				// Restaurant
				{
					data: null,
					render: (data) => {
						const restaurantImage = data.restaurant.resto_img;
						const restaurantName = data.restaurant.resto_name;

						return `
              <div class="d-flex align-items-center fw-medium">
                <img src="${restaurantImage}" alt="${restaurantName}" class="avatar-xs rounded-circle me-2">
                ${restaurantName}
              </div>
						`;
					},
				},

				// Price
				{
					data: null,
					render: (data) => {
						return `
              <h5 class="text-info fw-medium">₱ ${data.order_total}</h5>
            `;
					},
				},

				// Date Ordered
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

				// Order Status
				{
					data: null,
					render: (data) => {
						const orderStatus = data.order_status;

						if (orderStatus === "Pending") {
							return `
                <div class="d-block badge badge-soft-primary align-items-center">
                  <i class="me-2 mdi mdi-cart-heart fs-13"></i>
                  <span class="text-uppercase">${orderStatus}</span>
                </div>
								`;
						} else if (orderStatus === "In Process") {
							return `
                <div class="d-block badge badge-soft-warning align-items-center">
                  <i class="me-2 bx bx-dish fs-13"></i>
                  <span class="text-uppercase">${orderStatus}</span>
                </div>
              `;
						} else if (orderStatus === "Cancelled") {
							return `
                <div class="d-block badge badge-soft-dark align-items-center">
                  <i class="me-2 mdi mdi-basket-remove-outline fs-13"></i>
                  <span class="text-uppercase">${orderStatus}</span>
                </div>
              `;
						} else if (orderStatus === "On the Way") {
							return `
                <div class="d-block badge badge-soft-secondary align-items-center">
                  <i class="me-2 ri-truck-line fs-13"></i>
                  <span class="text-uppercase">${orderStatus}</span>
                </div>
              `;
						} else if (orderStatus === "Delivered") {
							return `
                <div class="d-block badge badge-soft-success align-items-center">
                  <i class="me-2 mdi mdi-package-variant fs-13"></i>
                  <span class="text-uppercase">${orderStatus}</span>
                </div>
              `;
						} else if (orderStatus === "Rejected") {
							return `
                <div class="d-block badge badge-soft-danger align-items-center">
                  <i class="me-2 ri-close-circle-line fs-13"></i>
                  <span class="text-uppercase">${orderStatus}</span>
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
              <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewOrderModal" onclick = "viewOrderDetails('${data.order_id}')">View</button>
						`;
					},
				},
			],
			order: [[0, "asc"]],
		});
	}
};

// View Order Details
viewOrderDetails = (order_id) => {
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
		url: apiURL + `admin/order/${order_id}`,
		dataType: "json",
		success: (result) => {
			const data = result.data;

			$("#order_no").html(data.order_no);

			let customerName = `${data.created.first_name}  ${
				data.created.middle_name === null ? "" : data.created.middle_name
			}  ${data.created.last_name}`;
			$("#customer_name").html(customerName);

			let customerGender = "";
			if (data.created.gender === "Male") {
				customerGender += `
					<i class="mdi mdi-gender-male text-primary me-2"></i> ${data.created.gender}
				`;
			} else if (data.gender === "Female") {
				customerGender += `
					<i class="mdi mdi-gender-female text-danger me-2"></i> ${data.created.gender}
				`;
			}
			$("#customer_gender").html(customerGender);

			let customerEmail = `
				<i class="ri-mail-fill text-warning me-2"></i>${data.created.email_address}
			`;
			$("#customer_email").html(customerEmail);

			let customerPhone = `
				<i class="ri-phone-fill text-success me-2"></i>${data.created.phone_number}
			`;
			$("#customer_phone").html(customerPhone);

			let restoImage = `
				<img src="${data.restaurant.resto_img}" alt="${data.restaurant.resto_name}" class="avatar-sm rounded-circle me-2">
			`;
			$("#resto_img").html(restoImage);

			$("#resto_name").html(data.restaurant.resto_name);

			let restoCategory = "";
			const restocatg_name = data.restaurant.restaurant_category.restocatg_name;

			if (restocatg_name == "Cafe") {
				restoCategory += `
          <span class="badge badge-soft-warning my-1">${restocatg_name}</span>
				`;
			} else if (restocatg_name == "Korean") {
				restoCategory += `
          <span class="badge badge-soft-secondary my-1">${restocatg_name}</span>
        `;
			} else if (restocatg_name == "Bakery") {
				restoCategory += `
          <span class="badge badge-soft-success my-1">${restocatg_name}</span>
        `;
			} else if (restocatg_name == "Pizzerias") {
				restoCategory += `
          <span class="badge badge-soft-info my-1">${restocatg_name}</span>
        `;
			} else if (restocatg_name == "Fine Dining") {
				restoCategory += `
          <span class="badge badge-soft-primary my-1">${restocatg_name}</span>
        `;
			} else if (restocatg_name == "Fast Food") {
				restoCategory += `
          <span class="badge badge-soft-danger my-1">${restocatg_name}</span>
        `;
			} else {
				restoCategory += `
          <span class="badge badge-soft-dark my-1">${restocatg_name}</span>
        `;
			}
			$("#restocatg_name").html(restoCategory);

			let restoEmail = `
				<i class="ri-mail-fill text-warning me-2"></i>${data.restaurant.resto_email}
			`;
			$("#resto_email").html(restoEmail);

			let restoPhone = `
				<i class="ri-phone-fill text-success me-2"></i>${data.restaurant.resto_landline}
			`;
			$("#resto_phone").html(restoPhone);

			let orderDishes = "";
			data.order_dishes.forEach((dish) => {
				orderDishes += `
					<div class="d-block text-wrap px-3 py-2">
						<div class="d-flex align-items-center">
							<img src="${dish.dish_img}" class="me-3 avatar-sm bg-light">
							<div class="flex-1">
								<h6 class="mt-0 mb-1 fs-14">
									${dish.dish_name}
								</h6>
								<p class="mb-0 fs-12 text-muted">
									Quantity: <span>₱ ${dish.dish_price} x ${dish.OrderDetails.quantity}</span>
								</p>
							</div>
							<div class="px-2">
								<h6 class="m-0 fw-normal"><span>₱ ${dish.OrderDetails.subtotal}</span></h6>
							</div>
						</div>
					</div>
				`;
			});
			$("#dishes").html(orderDishes);

			let orderTotal = `
				<h6 class="text-muted">Total:</h6>
				<div class="px-2">
					<h6 class="fw-bolder fs-15">₱ ${data.order_total}</h6>
				</div>
			`;
			$("#order_total").html(orderTotal);

			if (data.order_comment !== null) {
				orderComment = `
					<span class="badge rounded-pill bg-primary fs-12">Order Comment</span>
					<div class="bg-light ms-1 text-wrap">
						<p class="p-2">${data.order_comment}</p>
					</div>
				`;
				$("#order_comment").html(orderComment);
			}

			const pending_date = data.date_created;
			let pendingDate = `
				${moment(pending_date).format("ddd")}, ${moment(pending_date).format(
				"D MMM YYYY"
			)}
			`;
			$("#date_created").html(pendingDate);

			let pendingDateFull = `
				${moment(pending_date).format("ddd")}, ${moment(pending_date).format(
				"D MMM YYYY"
			)} - ${moment(pending_date).format("hh:mm A")}
			`;
			$("#full_date_created").html(pendingDateFull);

			let inProcess = "";
			if (data.date_processed !== null) {
				inProcess += `
					<div class="accordion-header" id="headingTwo">
            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 avatar-xs">
                  <div class="avatar-title bg-success rounded-circle shadow">
                    <i class="bx bx-dish"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0 fw-semibold">IN PROCESS - <span class="fw-normal">
									${moment(data.date_processed).format("ddd")}, 
									${moment(data.date_processed).format("D MMM YYYY")}</span></h6>
                </div>
              </div>
            </a>
          </div>
          <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body ms-2 ps-5 py-0">
              <h6 class="mb-1">Seller has proccessed your order.</h6>
              <p class="text-muted">
							${moment(data.date_processed).format("ddd")},
							${moment(data.date_processed).format("D MMM YYYY")} - 
							${moment(data.date_processed).format("hh:mm A")}
							</p>
            </div>
          </div>
				`;
				$("#in_process").html(inProcess);
			} else if (data.date_processed === null) {
				inProcess += `
					<div class="accordion-header" id="headingTwo">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-light text-success rounded-circle shadow">
										<i class="bx bx-dish"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="mb-0 fw-semibold">IN PROCESS</h6>
								</div>
							</div>
						</a>
					</div>
				`;
				$("#in_process").html(inProcess);
			}

			let onTheWay = "";
			if (data.date_released !== null) {
				onTheWay += `
					<div class="accordion-header" id="headingThree">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-success rounded-circle shadow">
										<i class="ri-truck-line"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="mb-1 fw-semibold">ON THE WAY - <span class="fw-normal">
									${moment(data.date_released).format("ddd")}, 
									${moment(data.date_released).format("D MMM YYYY")}
									</span></h6>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<h6>${data.delivery_details.courier.courier_name} - 
							${data.delivery_details.tracking_no}</h6>
							<h6 class="mb-1">The order has been picked up by the courier partner.</h6>
							<p class="text-muted mb-0">
							${moment(data.date_released).format("ddd")},
							${moment(data.date_released).format("D MMM YYYY")} - 
							${moment(data.date_released).format("hh:mm A")}</p>
						</div>
					</div>
				`;
				$("#on_the_way").html(onTheWay);
			} else if (data.date_released === null) {
				onTheWay += `
					<div class="accordion-header" id="headingThree">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-light text-success rounded-circle shadow">
										<i class="ri-truck-line"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="mb-0 fw-semibold">ON THE WAY</h6>
								</div>
							</div>
						</a>
					</div>
				`;
				$("#on_the_way").html(onTheWay);
			}

			let Delivered = "";
			if (
				data.delivery_details !== null &&
				data.order_status !== "On the Way"
			) {
				const date_received = data.delivery_details.date_received;
				if (date_received !== null) {
					Delivered += `
						<div class="accordion-header" id="headingFour">
							<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<div class="d-flex align-items-center">
									<div class="flex-shrink-0 avatar-xs">
										<div class="avatar-title bg-success rounded-circle shadow">
											<i class="mdi mdi-package-variant"></i>
										</div>
									</div>
									<div class="flex-grow-1 ms-3">
										<h6 class="mb-1 fw-semibold">DELIVERED - <span class="fw-normal">
										${moment(date_received).format("ddd")}, 
										${moment(date_received).format("D MMM YYYY")}</span></h6>
									</div>
								</div>
							</a>
						</div>
						<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
							<div class="accordion-body ms-2 ps-5 pt-0">
								<h6 class="mb-1">The order has been delivered.</h6>
								<p class="text-muted mb-0">
								${moment(date_received).format("ddd")},
								${moment(date_received).format("D MMM YYYY")} - 
								${moment(date_received).format("hh:mm A")}
								</p>
							</div>
						</div>
					`;
					$("#delivered").html(Delivered);
				}
			} else {
				Delivered += `
					<div class="accordion-header" id="headingFour">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-light text-success rounded-circle shadow">
										<i class="mdi mdi-package-variant"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="mb-1 fw-semibold">DELIVERED</h6>
								</div>
							</div>
						</a>
					</div>
				`;
				$("#delivered").html(Delivered);
			}

			$("#address_owner").html(data.address.full_name);
			$("#address_phone").html(data.address.phone_number);
			let address = `
				${data.address.address_1}  
				${data.address.address_2 === null ? "" : data.address.address_2}  
				${data.address.barangay}  ${data.address.city}  ${data.address.province}  
				${data.address.region}  
				${data.address.zip_code}
			`;
			$("#address").html(address);

			if (data.delivery_details !== null) {
				$("#delivery_details").removeClass("d-none");
				let deliveryDetails = `
					<div class="col-lg-12">
						<h6>Delivery Details</h6>
						<blockquote class="mx-3 blockquote custom-blockquote blockquote-outline blockquote-dark rounded shadow mb-3">
							<div class="d-flex align-items-center">
								<div class="col-8">
									<h5 class="fs-13 mb-1">Courier</h5>
								</div>
								<div class="col-4">
									<div class="fs-13 fw-medium">${data.delivery_details.courier.courier_name}</div>
								</div>
							</div>
							<div class="d-flex align-items-center">
								<div class="col-8">
									<h5 class="fs-13 mb-1">Tracking No</h5>
								</div>
								<div class="col-4">
									<div class="fs-13 fw-medium">${data.delivery_details.tracking_no}</div>
								</div>
							</div>
							<div class="d-flex align-items-center">
								<div class="col-8">
									<h5 class="fs-13 mb-1">Driver Name</h5>
								</div>
								<div class="col-4">
									<div class="fs-13 fw-medium">${data.delivery_details.driver_name}</div>
								</div>
							</div>
							<div class="d-flex align-items-center">
								<div class="col-8">
									<h5 class="fs-13 mb-1">Driver Phone</h5>
								</div>
								<div class="col-4">
									<div class="fs-13 fw-medium">${data.delivery_details.driver_phone}</div>
								</div>
							</div>
						</blockquote>
					</div>
				`;
				$("#delivery_details").html(deliveryDetails);
			}

			$("#payment_no").html("PYT-29863618971");
			$("#payment_status").html("Paid");

			let paymentDate = `
				${moment(data.date_created).format("MMM. D, YYYY")} 
				<small class="text-muted ms-1">
				${moment(data.date_created).format("hh:mm A")}</small>
			`;
			$("#payment_date").html(paymentDate);

			let paymentTotal = `
				₱ ${data.order_total}
			`;
			$("#payment_total").html(paymentTotal);
		},
	}).fail(() =>
		console.error("There was an error in getting the order details")
	);
};
