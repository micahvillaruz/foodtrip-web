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
			title: "Replace Cart?",
			text: "The current items in the cart have different restaurant.",
			icon: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
			cancelButtonClass: "btn btn-danger w-xs mt-2",
			confirmButtonText: "Yes, replace it!",
			buttonsStyling: false,
			showCloseButton: false,
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
			$("#cart").html(result.data.cart_dishes.length);
		},
	});
};
