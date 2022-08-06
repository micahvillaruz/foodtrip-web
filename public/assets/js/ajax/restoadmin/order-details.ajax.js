$(function () {
	viewOrderDetails(localStorage.getItem("orderID"));
});

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
		url: apiURL + `resto-admin/order/${order_id}`,
		dataType: "json",
		success: (result) => {
			const data = result.data;

			let orderNo = data.order_no;
			$("#order_no").html(orderNo);

			let orderDishes = "";
			data.order_dishes.forEach((dish) => {
				orderDishes += `
						<tr>
							<td>
								<div class="d-flex">
									<div class="flex-shrink-0 avatar-md bg-light rounded p-1">
										<img src="${dish.dish_img}" alt="" class="img-fluid d-block">
									</div>
									<div class="flex-grow-1 ms-3">
										<h5 class="fs-15">
											<a href="#!" class="link-primary">${dish.dish_name}</a>
										</h5>
										<p class="text-muted mb-0">Category: 
											<span class="fw-medium">${dish.dish_category.dishcatg_name}</span>
										</p>
									</div>
								</div>
							</td>
							<td>
								<span>₱ ${dish.dish_price}</span>
							</td>
							<td>
								<span>${dish.OrderDetails.quantity}</span></td>
							<td class="text-end">
								<span class="fw-medium"> ₱
								${dish.OrderDetails.subtotal}
								</span>
							</td>
					</tr>
				`;
			});
			$("#dishes").prepend(orderDishes);

			$("#comment").html(data.order_comment);

			let orderTotal = data.order_total;
			orderTotal = `₱ ${data.order_total}`;
			$("#total").html(orderTotal);

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
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-success rounded-circle shadow">
										<i class="bx bx-dish"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="fs-15 mb-0 fw-semibold">In Process - 
										<span class="fw-normal">
											${moment(data.date_processed).format("ddd")}, 
											${moment(data.date_processed).format("D MMM YYYY")}
										</span>
									</h6>
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
										<h6 class="fs-15 mb-0 fw-semibold">In Process</h6>
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
									<h6 class="fs-15 mb-1 fw-semibold">On the Way - 
										<span class="fw-normal">
											${moment(data.date_released).format("ddd")}, 
											${moment(data.date_released).format("D MMM YYYY")}
										</span>
									</h6>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<h6 class="fs-14">LalaMove - 26325016208</h6>
							<h6 class="mb-1">The order has been picked up by the courier partner.</h6>
							<p class="text-muted mb-0">
								${moment(data.date_released).format("ddd")},
								${moment(data.date_released).format("D MMM YYYY")} - 
								${moment(data.date_released).format("hh:mm A")}
							</p>
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
									<h6 class="fs-15 mb-0 fw-semibold">On the Way</h6>
								</div>
							</div>
						</a>
					</div>
				`;
				$("#on_the_way").html(onTheWay);
			}

			let Delivered = "";
			if (data.order_status === "Delivered") {
				let date_delivered = new Date();
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
									<h6 class="fs-15 mb-1 fw-semibold">Delivered - 
										<span class="fw-normal">
											${moment(date_delivered).format("ddd")}, 
											${moment(date_delivered).format("D MMM YYYY")}
										</span>
									</h6>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<h6 class="mb-1">The order has been delivered.</h6>
							<p class="text-muted mb-0">
								${moment(data.date_delivered).format("ddd")},
								${moment(data.date_delivered).format("D MMM YYYY")} - 
								${moment(data.date_delivered).format("hh:mm A")}
							</p>
						</div>
					</div>
				`;
				$("#delivered").html(Delivered);
			} else if (data.order_status !== "Delivered") {
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
									<h6 class="fs-15 mb-0 fw-semibold">Delivered</h6>
								</div>
							</div>
						</a>
					</div>
				`;
				$("#delivered").html(Delivered);
			}

			let deliveryDetails = "";
			if (data.delivery_details !== null) {
				deliveryDetails += `
				<div class="card-header">
					<div class="d-flex">
						<h5 class="card-title flex-grow-1 mb-0"><i class="mdi mdi-truck-fast-outline align-middle me-1 text-muted"></i> Delivery Details</h5>
						<div class="flex-shrink-0">
							<a href="javascript:void(0);" class="badge badge-soft-primary fs-11">Track Order</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="text-center">
						<lord-icon src="https://cdn.lordicon.com/uetqnvvg.json" trigger="loop" colors="primary:#4b38b3,secondary:#0ab39c" style="width:80px;height:80px"></lord-icon>
						<h5 class="fs-16 mt-2">LalaMove</h5>
						<p class="text-muted mb-0">Tracking No: 26325016208</p>
						<p class="text-muted mb-0">Driver Name : Adonis Saide Figueroa</p>
						<p class="text-muted mb-0">Driver Phone : 09918291232</p>
					</div>
				</div>
				`;
			} else if (data.deliveryDetails === null) {
				deliveryDetails += `
				<div class="card-header">
					<div class="d-flex">
						<h5 class="card-title flex-grow-1 mb-0"><i class="mdi mdi-truck-fast-outline align-middle me-1 text-muted"></i> Delivery Details</h5>
						<div class="flex-shrink-0">
							<a href="javascript:void(0);" class="badge badge-soft-primary fs-11">Track Order</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="text-center">
						<i class="h1 mdi mdi-close-circle-outline text-danger"></i>
						<h5 class="fs-16 mt-2">Order has not yet been shipped.</h5>
						<p class="text-muted mb-0">No delivery information available</p>
					</div>
				</div>
				`;
			}

			const fullName = `${data.created.first_name}  ${
				data.created.middle_name === null ? "" : data.created.middle_name
			}  ${data.created.last_name}`;

			$("#customer_name").html(fullName);
			$("#email").html(data.created.email_address);
			$("#phone").html(data.created.phone_number);

			$("#address_owner").html(data.address.full_name);
			$("#address_owner_phone").html(data.address.phone_number);

			let addressFirstLine = `${data.address.address_1} ${
				data.address.address_2 === null ? "" : data.address.address_2
			}`;

			$("#address_first_line").html(addressFirstLine);

			let addressSecondLine = `${data.address.barangay} ${data.address.city}`;

			$("#address_second_line").html(addressSecondLine);

			let addressThirdLine = `${data.address.province} ${data.address.region} ${data.address.zip_code}`;

			$("#address_third_line").html(addressThirdLine);
		},
	}).fail(() =>
		console.error("There was an error in getting the order details")
	);
};
