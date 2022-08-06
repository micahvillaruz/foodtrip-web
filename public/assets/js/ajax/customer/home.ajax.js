$(function () {
	loadRestoCategories();
	loadPopularDishes();
});

// View Customer Details
loadRestoCategories = () => {
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
		url: apiURL + `customer/resto-cat`,
		dataType: "json",
		success: (result) => {
			const data = result.data;
			let count = 0;

			data.forEach((category) => {
				console.log(count);
				console.log(Object.keys(category.restaurants).length);
				if (count < 4 && Object.keys(category.restaurants).length === 4) {
					count += 1;
					restoCategoryList = `
					<div class="col-lg-3 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="row g-1 mb-3">
									<div class="col-lg-6">
										<img src="${
											category.restaurants[0].resto_img
										}" alt="" class="img-fluid rounded">
										<img src="${
											category.restaurants[1].resto_img
										}" alt="" class="img-fluid rounded mt-1">
									</div>
									<!--end col-->
									<div class="col-lg-6">
										<img src="${
											category.restaurants[2].resto_img
										}" alt="" class="img-fluid rounded mb-1">
										<img src="${
											category.restaurants[3].resto_img
										}" alt="" class="img-fluid rounded">
									</div>
									<!--end col-->
								</div>
								<!--end row-->
								<a href="#!" class="float-end"> View All <i class="ri-arrow-right-line align-bottom"></i></a>
								<h5 class="mb-0 fs-16">
									<a href="#!">${category.restocatg_name}
										<span class="badge badge-soft-success">${
											Object.keys(category.restaurants).length
										}</span>
									</a>
								</h5>
							</div>
						</div>
					</div>
					`;
					$("#resto_categories").append(restoCategoryList);
				}
			});
		},
	}).fail(() =>
		console.error("There was an error in getting the customer details")
	);
};
