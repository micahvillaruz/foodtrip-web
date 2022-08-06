$(function () {
	loadRestoCategories();
	loadPopularDishes();
	loadPopularRestaurants();
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
		url: apiURL + `customer/some-resto-cat`,
		dataType: "json",
		success: (result) => {
			const data = result.data;
			let count = 0;

			data.forEach((category) => {
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
								<a href="http://localhost/foodtrip-web/customer/restaurants" class="float-end"> View All <i class="ri-arrow-right-line align-bottom"></i></a>
								<h5 class="mb-0 fs-16">
									<a href="http://localhost/foodtrip-web/customer/restaurants">${
										category.restocatg_name
									}
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
		console.error("There was an error in getting the restaurant category")
	);
};

// View Popular Dishes
loadPopularDishes = () => {
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
		url: apiURL + `customer/pop-dishes`,
		dataType: "json",
		success: (result) => {
			const data = result.data;
			data.forEach((dishData) => {
				dish = `
			<div class="col">
				<div class="card explore-box card-animate">
					<div class="card-body">
						<div class="d-flex align-items-center mb-3">
							<img src="${dishData.restaurant.resto_img}" alt="${dishData.restaurant.resto_name}" class="avatar-xs rounded-circle" />
							<div class="ms-2 flex-grow-1">
								<h6 class="mb-0 fs-15">${dishData.restaurant.resto_name}</h6>
								<p class="mb-0 text-muted">${dishData.restaurant.restaurant_category.restocatg_name}</p>
							</div>
						</div>
						<div class="explore-place-bid-img overflow-hidden rounded">
							<img src="${dishData.dish_img}" alt="${dishData.dish_name}" class="img-fluid explore-img">
							<div class="bg-overlay"></div>
							<div class="place-bid-btn">
								<a onclick="addToCart('${dishData.dish_id}')" class="btn btn-success">Order Now</a>
							</div>
						</div>
						<div class="mt-3">
							<h6 class="fs-16">${dishData.dish_name}</h6>
							<h5 class="text-secondary mb-3">${dishData.dish_price}</h5>
							<div class="row">
							</div>
						</div>
					</div>
				</div>
			</div>
			`;
				$("#popular_dishes").append(dish);
			});
		},
	}).fail(() =>
		console.error("There was an error in getting the popular dishes")
	);
};

// View Popular Restaurants
loadPopularRestaurants = () => {
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
		url: apiURL + `customer/pop-restaurants`,
		dataType: "json",
		success: (result) => {
			const data = result.data;
			data.forEach((restoData) => {
				resto = `
			<div class="col">
				<div class="card explore-box card-animate">
					<div class="explore-place-bid-img">
						<img src="${restoData.resto_img}" alt="${restoData.resto_name}" class="card-img-top explore-img" />
						<div class="bg-overlay"></div>
						<div class="place-bid-btn">
							<a href="http://localhost/foodtrip-web/customer/restaurants/restaurant-details" class="btn btn-success"><i class="ri-search-eye-line align-bottom me-1"></i> View
								Details</a>
						</div>
					</div>
					<div class="card-body">
						<h4 class="mb-1 text-center fs-5"><a href="http://localhost/foodtrip-web/customer/restaurants/restaurant-details">${restoData.resto_name}</a></h4>
						<p class="text-muted mb-0 text-center">${restoData.restaurant_category.restocatg_name}</p>
					</div>
					<div class="card-footer border-top border-top-dashed">
						<div class="d-flex align-items-center">
							<div class="flex-grow-1 fs-14 mb-2">
								<i class="ri-phone-fill text-warning align-bottom me-1"></i> <span class="fw-medium">${restoData.resto_landline}</span>
							</div>
						</div>
						<div class="d-flex align-items-center">
							<div class="flex-grow-1 fs-14">
								<i class="ri-link text-success align-bottom me-1"></i> <a href="https://${restoData.resto_website}" target="_blank" class="link-primary">${restoData.resto_website}</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			`;
				$("#popular_restaurants").append(resto);
			});
		},
	}).fail(() =>
		console.error("There was an error in getting the popular restaurants")
	);
};
