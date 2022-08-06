$(function () {
	viewOrders();
});

viewOrders = () => {
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
		url: apiURL + `customer/orders`,
		dataType: "json",
		success: (result) => {
			const data = result.data;

			let ordersList = "";
			console.log(data);
			if (data.order_status === "Pending") {
				ordersList += `
                <div class="card card-light product-item pending">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-header bg-white">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="${data.restaurant.resto_img}" alt="" class="avatar-xs rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="card-text fw-medium">${data.restaurant.resto_name} </p>
                                    </div>
                                    <div class="flex-end ms-3">
                                        <span class="badge badge-soft-primary text-uppercase fs-12"><i class="me-2 mdi mdi-cart-heart fs-15"></i> ${data.order_status}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive pt-2">
                                    <table class="table table-borderless align-middle mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="col-1">
                                                    <div class="avatar-lg bg-light rounded p-1">
                                                        <img src="${data.order_dishes.dish_img}" alt="" class="img-fluid d-block">
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14"><a href="#!" class="text-dark">
                                                            ${data.order_dishes.dish_name}</a></h5>
                                                    <p class="text-muted">Category : <span class="fw-medium">${data.order_dishes.dish_category.dishcatg_name}</span></p>
                                                    <p class="mb-0">₱ ${data.order_dishes.dish_price} x ${data.order_dishes.OrderDetails.quantity}</p>
                                                </td>
                                                <td class="text-end fs-15">₱ ${data.order_dishes.OrderDetails.subtotal}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                            <div class="card-footer bg-white">
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-danger btn-animation waves-effect waves-light" data-text="Cancel Order"><span>Cancel Order</span></button>
                                    <p class="mb-0 d-inline-block">Total Amount (PHP) :
                                        <span class="fw-semibold ms-3 fs-20">
                                            ₱ ${data.order_total}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
					`;
			}
			$("#orders").html(ordersList);
		},
	}).fail(() => console.error("There was an error in getting the orders"));
};
