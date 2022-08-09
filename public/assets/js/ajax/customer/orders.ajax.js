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

	$("#orders").html("");
	$.ajax({
		type: "GET",
		cache: false,
		url: apiURL + `customer/orders`,
		dataType: "json",
		success: (result) => {
			const data = result.data;

			let amounts = {
				Pending: 0,
				"In Process": 0,
				"On the Way": 0,
				Delivered: 0,
				Rejected: 0,
				Cancelled: 0,
			};

			data.forEach((order) => {
				orderStatus = order.order_status.replace(/\s+/g, "-").toLowerCase();
				amounts[order.order_status]++;

				let orderEl = `
                        <div class="card card-light product-item ${orderStatus}">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-header bg-white">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="${order.restaurant.resto_img}" alt="${order.restaurant.resto_name}" class="avatar-xs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="card-text fw-medium">${order.restaurant.resto_name} </p>
                                            </div>
                                            <div class="flex-end ms-3">
                                                <a href="${baseURL}customer/orders/order-details" 
                                                onclick="viewOrder('${order.order_id}')" type="button" class="badge badge-soft-primary text-uppercase fs-12"><i class="me-2 mdi mdi-cart-heart fs-15"></i> ${order.order_status}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive pt-2">
                                            <table class="table table-borderless align-middle mb-0">
                                                <tbody id="${order.order_no}">                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <div class="d-flex justify-content-between">
                                            <button onclick="cancelOrder('${order.order_id}')" type="button" class="btn btn-danger btn-animation waves-effect waves-light ${orderStatus}" data-text="Cancel Order"><span>Cancel Order</span></button>
                                            <p class="mb-0 d-inline-block">Total Amount (PHP) :
                                                <span class="fw-semibold ms-3 fs-20">
                                                    ₱ ${order.order_total}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                `;
				$("#orders").append(orderEl);

				if (order.order_status === "Cancelled") $("button.cancelled").remove();

				order.order_dishes.forEach((dish) => {
					$(`#${order.order_no}`).append(`
                                            <tr>
                                                <td class="col-1">
                                                    <div class="avatar-lg bg-light rounded p-1">
                                                        <img src="${dish.dish_img}" alt="${dish.dish_name}" class="img-fluid d-block">
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14"><a href="#!" class="text-dark">
                                                    ${dish.dish_name}</a></h5>
                                                    <p class="text-muted">Category : <span class="fw-medium">${dish.dish_category.dishcatg_name}</span></p>
                                                    <p class="mb-0">${dish.dish_price} x ${dish.OrderDetails.quantity}</p>
                                                </td>
                                                <td class="text-end fs-15">₱ ${dish.OrderDetails.subtotal}</td>
                                            </tr>
                    `);
				});
			});

			$("#orderStatus").html(`
                        <li class="nav-item">
                            <a class="nav-link active py-3" data-bs-toggle="tab" role="tab" aria-selected="true" data-filter="all">
                                <i class="mdi mdi-book-multiple-outline me-1 align-bottom"></i> All Orders <span class="badge bg-danger align-middle ms-1">${data.length}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="false" data-filter="pending">
                                <i class="mdi mdi-cart-heart me-1 align-bottom"></i> Pending <span class="badge bg-danger align-middle ms-1">${amounts.Pending}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="false" data-filter="in-process">
                                <i class="bx bx-dish me-1 align-middle"></i> In Process <span class="badge bg-danger align-middle ms-1">${amounts["In Process"]}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="false" data-filter="on-the-way">
                                <i class="ri-truck-line me-1 align-bottom"></i> On the Way <span class="badge bg-danger align-middle ms-1">${amounts["On the Way"]}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="false" data-filter="delivered">
                                <i class="mdi mdi-package-variant me-1 align-bottom"></i> Delivered <span class="badge bg-danger align-middle ms-1">${amounts.Delivered}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="false" data-filter="rejected">
                                <i class="ri-close-circle-line me-1 align-bottom"></i> Rejected <span class="badge bg-danger align-middle ms-1">${amounts.Rejected}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="false" data-filter="cancelled">
                                <i class="mdi mdi-basket-remove-outline me-1 align-bottom"></i> Cancelled <span class="badge bg-danger align-middle ms-1">${amounts.Cancelled}</span>
                            </a>
                        </li>
            `);
		},
	}).fail(() => console.error("There was an error in getting the orders"));
};

cancelOrder = (orderID) => {
	$.ajaxSetup({
		headers: {
			Accept: "application/json",
			Authorization: "Bearer " + token,
			ContentType: "application/x-www-form-urlencoded",
		},
	});

	Swal.fire({
		html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Are you sure ?</h4><p class="text-muted mx-4 mb-0">Are you sure You want to remove this Order ?</p></div></div>',
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
				type: "PUT",
				cache: false,
				url: apiURL + `customer/order/cancelled/${orderID}`,
				dataType: "json",
				success: (data) => {
					viewOrders();
					loadJS();
					Swal.fire({
						title: "Cancelled!",
						text: "Order has been cancelled successfully",
						icon: "success",
						confirmButtonClass: "btn btn-primary w-xs mt-2",
						buttonsStyling: false,
					});
				},
			});
		}
	});
};

viewOrder = (order_id) => {
	localStorage.setItem("order_id", order_id);
};

loadJS = () => {
	setTimeout(() => {
		try {
			var setEndDate1 = "March 19, 2024 6:0:0",
				setEndDate2 = "April 16, 2023 5:3:1",
				setEndDate3 = "Dec 01, 2023 1:0:1",
				setEndDate4 = "Nov 26, 2024 1:2:1",
				setEndDate5 = "May 27, 2023 1:6:6",
				setEndDate6 = "May 20, 2023 2:5:5",
				setEndDate7 = "June 10, 2023 5:1:4",
				setEndDate8 = "June 25, 2023 1:6:3",
				setEndDate9 = "July 08, 2023 1:5:2";
			function startCountDownDate(t) {
				return new Date(t).getTime();
			}
			function countDownTimer(t, e) {
				var n = t - new Date().getTime(),
					o = (o = Math.floor(n / 864e5)) < 10 ? "0" + o : o,
					a = (a = Math.floor((n % 864e5) / 36e5)) < 10 ? "0" + a : a,
					c = (c = Math.floor((n % 36e5) / 6e4)) < 10 ? "0" + c : c,
					t = (t = Math.floor((n % 6e4) / 1e3)) < 10 ? "0" + t : t;
				(document.querySelector("#" + e).textContent =
					o + " : " + a + " : " + c + " : " + t),
					n < 0 &&
						(document.querySelector("#" + e).textContent = "00 : 00 : 00 : 00");
			}
			var cdd1 = startCountDownDate(setEndDate1),
				cdd2 = startCountDownDate(setEndDate2),
				cdd3 = startCountDownDate(setEndDate3),
				cdd4 = startCountDownDate(setEndDate4),
				cdd5 = startCountDownDate(setEndDate5),
				cdd6 = startCountDownDate(setEndDate6),
				cdd7 = startCountDownDate(setEndDate7),
				cdd8 = startCountDownDate(setEndDate8),
				cdd9 = startCountDownDate(setEndDate9);
			document.getElementById("auction-time-1") &&
				setInterval(function () {
					countDownTimer(cdd1, "auction-time-1");
				}, 1e3),
				document.getElementById("auction-time-2") &&
					setInterval(function () {
						countDownTimer(cdd2, "auction-time-2");
					}, 1e3),
				document.getElementById("auction-time-3") &&
					setInterval(function () {
						countDownTimer(cdd3, "auction-time-3");
					}, 1e3),
				document.getElementById("auction-time-4") &&
					setInterval(function () {
						countDownTimer(cdd4, "auction-time-4");
					}, 1e3),
				document.getElementById("auction-time-5") &&
					setInterval(function () {
						countDownTimer(cdd5, "auction-time-5");
					}, 1e3),
				document.getElementById("auction-time-6") &&
					setInterval(function () {
						countDownTimer(cdd6, "auction-time-6");
					}, 1e3),
				document.getElementById("auction-time-7") &&
					setInterval(function () {
						countDownTimer(cdd7, "auction-time-7");
					}, 1e3),
				document.getElementById("auction-time-8") &&
					setInterval(function () {
						countDownTimer(cdd8, "auction-time-8");
					}, 1e3),
				document.getElementById("auction-time-9") &&
					setInterval(function () {
						countDownTimer(cdd9, "auction-time-9");
					}, 1e3);
		} catch (t) {}
		var filterBtns = document.querySelectorAll(".filter-btns .nav-link"),
			productItems = document.querySelectorAll(".product-item");
		filterBtns.forEach(function (t) {
			t.addEventListener("click", function (t) {
				t.preventDefault();
				for (var e = 0; e < filterBtns.length; e++)
					filterBtns[e].classList.remove("active");
				this.classList.add("active");
				var n = t.target.dataset.filter;
				productItems.forEach(function (t) {
					"all" === n || t.classList.contains(n)
						? (t.style.display = "block")
						: (t.style.display = "none");
				});
			});
		});
	}, 750);
};
