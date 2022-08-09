$(function () {
	$("#cartDiv").hide();
	loadCartPage();
});

loadCartPage = () => {
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
			if (result.message === "Cart is empty") {
				$("#wholeCart").html(`
                    <div class="d-flex flex-column py-5 my-5 justify-content-center align-items-center">
                        <img src="${baseURL}public/assets/images/empty-cart.png" alt="" height="200" class="my-5">
                        <h5 class="text-center  text-dark fw-bold">Your Shopping Cart is Empty!</h5>
                        <p class="text-center mb-5">Add items to your cart and place order here.</p>
                        <a href="${baseURL}customer/explore" type="button" class="mt-3 btn btn-soft-primary waves-effect waves-light shadow-none">Continue browsing</a>
                    </div>
                `);
			} else {
				let wholeCart = "";
				let cartDetails = "";
				const data = result.data;
				let resto = `
                <div class="row align-items-center gy-3 mb-3">
                    <div class="col-sm">
                        <div>
                            <h5 class="fs-14 mb-0"">Your Cart (${data.cart_dishes.length} items)</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <a href="${baseURL}customer/explore" class="link-primary text-decoration-underline">Continue Shopping</a>
                    </div>
                </div>
                <div class="card bg-soft-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="${data.restaurant.resto_img}" alt="${data.restaurant.resto_name}" class="avatar-sm rounded-circle">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p class="card-text fs-15 fw-medium">${data.restaurant.resto_name}</p>
                            </div>
                        </div>
                    </div>
                </div>
            `;
				cartDetails += resto;
				data.cart_dishes.forEach((cartDish) => {
					let cart_dishes = `
                <div class="card product">
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-sm-auto">
                            <div class="avatar-lg bg-light rounded p-1">
                                <img src="${cartDish.dish_img}" alt="${cartDish.dish_name}" class="img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-sm">
                            <h5 class="fs-14 text-truncate"><a href="${baseURL}customer/products/product-details" class="text-dark">${cartDish.dish_name}</a></h5>
                            <ul class="list-inline text-muted">
                                <li class="list-inline-item">Category : <span class="fw-medium">${cartDish.dish_category.dishcatg_name}</span></li>
                            </ul>

                            <div class="input-step light">
                                <button onclick="subtractQuantity('${cartDish.CartDetail.cartdetail_id}')" type="button" class="minus shadow">–</button>
                                <input readonly id="quantity" type="number" class="product-quantity" value="${cartDish.CartDetail.quantity}" min="1" max="100">
                                <button onclick="addQuantity('${cartDish.CartDetail.cartdetail_id}')" type="button" class="plus shadow">+</button>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="text-lg-end">
                                <p class="text-muted mb-1">Item Price:</p>
                                <h5 class="fs-14">₱<span id="dishPrice" class="product-price">${cartDish.dish_price}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row align-items-center gy-3">
                        <div class="col-sm">
                            <div class="d-flex flex-wrap my-n1">
                                <div>
                                    <a href="#" onclick="deleteCartDetails('${cartDish.CartDetail.cartdetail_id}')" class="d-block text-body p-1 px-2"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="d-flex align-items-center gap-2 text-muted">
                                <div>Total :</div>
                                <h5 class="fs-14 mb-0">₱<span class="product-line-price">${cartDish.CartDetail.subtotal}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `;
					cartDetails += cart_dishes;
				});

				cartDetails += `
                <div class="text-end mb-4">
                    <a href="${baseURL}customer/checkout" onclick="toCheckout('${data.cart_id}')" class="btn btn-success btn-label right ms-auto"><i class="ri-arrow-right-line label-icon align-bottom fs-16 ms-2"></i> Checkout</a>
                </div>
            `;
				$("#cartDetails").html(cartDetails);

				let summary = `
        <div class="col-xl-4" id="summary">
            <div class="sticky-side-div">
                <div class="card">
                    <div class="card-body">
                        <div class="p-3 mt-n3 mx-n3 bg-soft-secondary rounded-top">
                            <div class="text-center">
                                <img src="${baseURL}public/assets/images/shopping-logo.gif" alt="shopping logo" height="100">
                            </div>
                        </div>
        
                        <div class="py-3">
                            <h5 class="card-title mb-0">Order Summary</h5>
                            <div class="table-responsive pt-2">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Sub Total :</td>
                                            <td class="text-end">₱${data.cart_total}</td>
                                        </tr>
                                        <tr class="table-active">
                                            <th>Total (PHP) :</th>
                                            <td class="text-end">
                                                <span class="fw-semibold">
                                                    ₱${data.cart_total}
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
        
                <div class="alert border-dashed alert-danger" role="alert">
                    <div class="d-flex align-items-center">
                        <img src="${baseURL}public/assets/images/comment.gif" alt="comment" height="100">
                        <h5 class="fs-14 text-danger fw-semibold d-inline-block m-0"> Special instructions</h5>
                    </div>
                    <div class="mx-3 my-3">
                        <textarea id="orderComment" class="form-control border-danger bg-soft-danger" placeholder="E.g. No onions please" id="des-info-description-input" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
            `;
				wholeCart += summary;
				$("#summary").remove();
				$("#wholeCart").append(wholeCart);
			}
		},
	});
};

deleteCartDetails = (cartDetailsID) => {
	$.ajaxSetup({
		headers: {
			Accept: "application/json",
			Authorization: "Bearer " + token,
			ContentType: "application/x-www-form-urlencoded",
		},
	});

	Swal.fire({
		html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Are you sure ?</h4><p class="text-muted mx-4 mb-0">Are you sure You want to remove this Product ?</p></div></div>',
		showCancelButton: !0,
		showConfirmButton: !0,
		confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
		cancelButtonClass: "btn btn-danger w-xs mt-2",
		confirmButtonText: "Yes, delete it!",
		cancelButtonText: "Dismiss",
		buttonsStyling: !1,
		showCloseButton: !0,
	}).then(function (result) {
		if (result.value) {
			$.ajax({
				type: "DELETE",
				cache: false,
				url: apiURL + `customer/cart/${cartDetailsID}`,
				success: function (response) {
					loadCartPage();
					Swal.fire({
						title: "Deleted!",
						text: "Dish has been deleted successfully",
						icon: "success",
						confirmButtonClass: "btn btn-primary w-xs mt-2",
						buttonsStyling: false,
					});
				},
			});
		}
	});
};

addQuantity = (cartDetailsID) => {
	$.ajaxSetup({
		headers: {
			Accept: "application/json",
			Authorization: "Bearer " + token,
			ContentType: "application/x-www-form-urlencoded",
		},
	});

	$.ajax({
		type: "POST",
		url: apiURL + `customer/cart/add-quantity/${cartDetailsID}`,
		cache: false,
		success: function (response) {
			$("#quantity").html(response.data.quantity);
			Toastify({
				text: response.message,
				duration: 3000,
				newWindow: true,
				close: true,
				gravity: "bottom",
				position: "center",
				stopOnFocus: true,
			}).showToast();
			loadCartPage();
		},
	});
};

subtractQuantity = (cartDetailsID) => {
	$.ajaxSetup({
		headers: {
			Accept: "application/json",
			Authorization: "Bearer " + token,
			ContentType: "application/x-www-form-urlencoded",
		},
	});

	$.ajax({
		type: "POST",
		url: apiURL + `customer/cart/sub-quantity/${cartDetailsID}`,
		cache: false,
		success: function (response) {
			$("#quantity").html(response.data.quantity);
			Toastify({
				text: response.message,
				duration: 3000,
				newWindow: true,
				close: true,
				gravity: "bottom",
				position: "center",
				stopOnFocus: true,
			}).showToast();
			loadCartPage();
		},
	}).fail(() => {
		Toastify({
			text: "Cannot Subtract Dish anymore",
			duration: 3000,
			newWindow: true,
			close: true,
			gravity: "bottom",
			position: "center",
			stopOnFocus: true,
			className: "bg-danger",
		}).showToast();
		loadCartPage();
	});
};

toCheckout = (cartID) => {
	localStorage.setItem("cartID", cartID);
	localStorage.setItem("comment", $("#orderComment").val());
};
