$(function () {
	$("#cartDiv").hide();

	loadCheckout();
});

loadCheckout = () => {
	loadAddresses();
	loadOrderSummary();
};

loadOrderSummary = () => {
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
		url: apiURL + `customer/cart`,
		dataType: "json",
		success: (result) => {
			const data = result.data;
			let body = `
        <div class="card-body">
            <div class="table-responsive table-card">
                <table class="table table-borderless align-middle mb-0">
                    <thead class="table-light text-muted">
                        <tr class="table-success">
                            <th colspan="3">
                                <img src="${data.restaurant.resto_img}" alt="${data.restaurant.resto_name}" class="rounded-circle avatar-xs shadow me-2"><a href="${baseURL}customer/restaurants/restaurant-details" class="text-dark"> ${data.restaurant.resto_name}</a>
                            </th>
                        </tr>
                        <tr>
                            <th style="width: 90px;" scope="col">Product</th>
                            <th scope="col">Product Info</th>
                            <th scope="col" class="text-end">Price</th>
                        </tr>
                    </thead>
                    <tbody id="orderDishes">                      
                        <tr>
                            <td class="fw-semibold" colspan="2">Sub Total :</td>
                            <td class="fw-semibold text-end">₱ ${data.cart_total}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
            `;
			$("#orderDetails").append(body);
			data.cart_dishes.forEach((dish) => {
				let dishes = `
                        <tr>
                            <td>
                                <div class="avatar-md bg-light rounded p-1">
                                    <img src="${dish.dish_img}" alt="${dish.dish_name}" class="img-fluid d-block">
                                </div>
                            </td>
                            <td>
                                <h5 class="fs-14"><a href="${baseURL}customer/products/product-details" class="text-dark">${dish.dish_name}</a></h5>
                                <p class="text-muted mb-0">₱ ${dish.dish_price} x ${dish.CartDetail.quantity}</p>
                            </td>
                            <td class="text-end">₱ ${dish.CartDetail.subtotal}</td>
                        </tr>
                `;
				$("#orderDishes").append(dishes);
			});

			let footer = `
            <div class="card-footer bg-gradient bg-light">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title mb-0 d-inline-block">Total Amount (PHP) :</h5>
                    <span class="fw-semibold fs-15">
                        ₱ ${data.cart_total}
                    </span>
                </div>
            </div>
            `;
			$("#orderDetails").append(footer);
		},
	});
};

loadAddresses = () => {
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
		url: apiURL + `customer/address`,
		dataType: "json",
		success: (result) => {
			const data = result.data;
			data.forEach((address) => {
				$("#addresses").append(`
<div class="col-lg-4 col-sm-6 my-3">
    <div class="form-check card-radio">
        <input id="${
					address.address_id
				}" type="radio" name="shippingAddress" class="form-check-input" ${
					address.is_default ? "checked" : ""
				}>
        <label class="form-check-label" for="${address.address_id}">
            <span class="fs-14 mb-2 d-block">${address.full_name}</span>
            <span class="fs-14 mb-2 d-block">${address.phone_number}</span>
            <span class="text-muted fw-normal text-wrap mb-1 d-block">${
							address.address_1
						} ${address.address_2}, ${address.barangay}, ${address.city}, ${
					address.region
				}, ${address.province} ${address.zip_code}</span>
        </label>
    </div>
    <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1">
        <div>
            <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#addAddressModal"><i class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
        </div>
        <div>
            <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
        </div>
    </div>
</div>
                `);
			});
		},
	});
};

createOrder = () => {
	$("#pills-finish-tab").removeAttr("disabled");
	$("#completeBtn").attr("data-nexttab", "pills-finish-tab");

	$.ajaxSetup({
		headers: {
			Accept: "application/json",
			Authorization: "Bearer " + token,
			ContentType: "application/x-www-form-urlencoded",
		},
	});

	$.ajax({
		type: "POST",
		cache: false,
		url: apiURL + "customer/order",
		data: {
			order_comment: localStorage.getItem("comment"),
			address_id: localStorage.getItem("address_id"),
		},
		dataType: "json",
		success: function (response) {
			localStorage.setItem("order_id", `${response.data.order_id}`);
			$("#order_no").html(`
                Order No: <a href="${baseURL}customer/orders/order-details" class="text-decoration-underline">${response.data.order_no}</a>
            `);
		},
	});
};

setTimeout(() => {
	$("input[name='shippingAddress']").click(function () {
		var id = $(this).attr("id");
		localStorage.setItem("address_id", id);
	});
}, 1000);
