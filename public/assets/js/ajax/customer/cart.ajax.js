$(function () {
	loadCartIcon();
});

addToCart = (dishID) => {
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
		url: apiURL + `customer/dish/${dishID}/add-to-cart`,
		dataType: "json",
		success: (result) => {
			Toastify({
				text: "Successfully Added to Cart",
				duration: 3000,
				newWindow: true,
				close: true,
				gravity: "top",
				position: "right",
				stopOnFocus: true,
			}).showToast();
			loadCartIcon();
		},
	}).fail(() => {
		Swal.fire({
			html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon><div class="mt-4 pt-2 fs-15 mx-5"><h4>Replace Cart?</h4><p class="text-muted mx-4 mb-0">The current items in the cart have different restaurant.?</p></div></div>',
			showCancelButton: !0,
			confirmButtonClass: "btn btn-primary w-xs me-2 mb-1",
			confirmButtonText: "Yes, replace It!",
			cancelButtonClass: "btn btn-danger w-xs mb-1",
			buttonsStyling: !1,
			showCloseButton: !0,
		}).then(function (result) {
			if (result.value) {
				replaceCart(dishID);
			}
		});
	});
};

replaceCart = (dishID) => {
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
		url: apiURL + `customer/cart/replace/${dishID}`,
		dataType: "json",
		success: (result) => {
			Toastify({
				text: "Successfully Added to Cart",
				duration: 3000,
				newWindow: true,
				close: true,
				gravity: "top",
				position: "right",
				stopOnFocus: true,
			}).showToast();
			loadCartIcon();
		},
	});
};

loadCartIcon = () => {
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
			if (result.data != null) {
				$("#cartBtn").removeAttr("onclick");
				$("#cartBtn").attr("href", "cart");
				$("#cart").html(result.data.cart_dishes.length);
			} else {
				$("#cartBtn").removeAttr("href");
				$("#cartBtn").attr("onclick", "emptyCart()");
			}
		},
	});
};

emptyCart = () => {
	Swal.fire({
		html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Empty Cart!</h4><p class="text-muted mx-4 mb-0">Please Add Items to Cart</p></div></div>',
		showCancelButton: !0,
		showConfirmButton: !1,
		cancelButtonClass: "btn btn-primary w-xs mb-1",
		cancelButtonText: "Dismiss",
		buttonsStyling: !1,
		showCloseButton: !0,
	});
};
