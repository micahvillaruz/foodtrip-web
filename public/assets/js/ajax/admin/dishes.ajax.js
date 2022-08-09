$(function () {
	loadDishesFilter();
	loadRestaurantsFilter();
	loadDishesTable();
	viewDishDetails();
});

loadDishesFilter = () => {
	$.ajax({
		type: "GET",
		cache: false,
		url: apiURL + "admin/dish-cat",
		dataType: "json",
		success: function (response) {
			let dishCategory = "";
			dishCategory = `<p class="text-muted text-uppercase fs-12 fw-medium mb-2">Dishes</p>
        <ul class="list-unstyled mb-0 filter-list">`;
			response.data.forEach((category) => {
				dishCategory += `
					<li>
						<a href="#" class="d-flex py-1 align-items-center">
							<div class="flex-grow-1">
								<h5 class="fs-13 mb-0 listname">${category.dishcatg_name}</h5>
							</div>
						</a>
					</li>`;
			});
			dishCategory += `</ul>`;
			$("#dish_filter").append(dishCategory);
			$("#dish_filter").each(function () {
				$("li:gt(10)", this).hide();
			});
		},
	});
};

loadRestaurantsFilter = () => {
	$.ajax({
		type: "GET",
		cache: false,
		url: apiURL + "admin/restaurants",
		dataType: "json",
		success: function (response) {
			response.data.forEach((restaurant) => {
				$("#restaurant_filter").append(`
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="${restaurant.resto_name}" id="${restaurant.resto_id}">
						<label class="form-check-label" for="${restaurant.resto_id}">${restaurant.resto_name}</label>
					</div>
					`);
			});
			$("#restaurant_filter").each(function () {
				$("div:gt(10)", this).hide();
			});
		},
	});
};

// Load Dishes DataTable
loadDishesTable = () => {
	const dt = $("#dishes-datatables");

	$.ajaxSetup({
		headers: {
			Accept: "application/json",
			Authorization: "Bearer " + token,
			ContentType: "application/x-www-form-urlencoded",
		},
	});

	if (dt.length) {
		dt.DataTable({
			ajax: {
				url: apiURL + "admin/dishes",
				type: "GET",
				ContentType: "application/x-www-form-urlencoded",
			},

			columns: [
				// Restaurant
				{
					data: null,
					render: (data) => {
						const resto_name = data.restaurant.resto_name;
						const resto_img = data.restaurant.resto_img;

						return `
								<div class="d-flex align-items-center fw-medium">
									<img src="${resto_img}" alt="" class="avatar-xs me-2">
									<a class="badge rounded-pill badge-outline-primary">${resto_name}</a>
								</div>
            `;
					},
				},

				// Dish
				{
					data: null,
					render: (data) => {
						const dish_img = data.dish_img;
						const dish_name = data.dish_name;
						const dishcatg_name = data.dish_category.dishcatg_name;

						return `
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 me-3">
										<div class="avatar-sm bg-light rounded p-1">
											<img src="${dish_img}" alt="" class="img-fluid d-block">
										</div>
								</div>
								<div class="flex-grow-1">
										<h5 class="fs-14 mb-1">
											<a href="#!" class="text-dark">${dish_name}</a>
										</h5>
										<p class="text-muted mb-0">Category : <span class="fw-medium">${dishcatg_name}</span></p>
								</div>
							</div>
						`;
					},
				},

				// Price
				{
					data: null,
					render: (data) => {
						return `₱ ${data.dish_price}`;
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						const status = data.status;

						if (status == "Available") {
							return `
								<span class="badge badge-soft-success text-uppercase">${status}</span>
								`;
						} else {
							return `
								<span class="badge badge-soft-danger text-uppercase">${status}</span>
								`;
						}
					},
				},

				// Published
				{
					data: null,
					render: (data) => {
						const date = moment(data.date_created).format("MMM. D, YYYY");
						const time = moment(data.date_created).format("hh:mm A");

						return `
							${date} <small class="text-muted">${time}</small>
						`;
					},
				},

				//Action
				{
					data: null,
					class: "text-center",
					render: (data) => {
						return `
							<button class="btn btn-sm btn-soft-info" data-bs-toggle="modal" data-bs-target="#viewDishDetailsModal" onclick = "viewDishDetails('${data.dish_id}')">
								View
							</button>
						`;
					},
				},
			],
			order: [[0, "asc"]],
		});
	}
};

// View Dish Details
viewDishDetails = (dish_id) => {
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
		url: apiURL + `admin/dish/${dish_id}`,
		dataType: "json",
		success: (result) => {
			const data = result.data;

			$("#dish_id").html(data.dish_id);

			let dishImage = `<img src="${data.dish_img}" alt="" class="img-fluid d-block">`;
			$("#dish_img").html(dishImage);

			$("#dish_name").html(data.dish_name);
			$("#dishcatg_name").html(data.dish_category.dishcatg_name);
			$("#dish_price").html(data.dish_price);
			$("#dish_desc").html(data.dish_desc);

			let dishStatus = "";

			if (data.status === "Available") {
				dishStatus += `
					<span class="fs-13 badge badge-soft-success">${data.status}
						<i class="ms-1 mdi fs-15 mdi-food"></i>
					</span>
				`;
			} else if (data.status === "Unavailable") {
				dishStatus += `
					<span class="fs-13 badge badge-soft-danger">${data.status}
						<i class="ms-1 mdi fs-15 mdi-food-off"></i>
					</span>
				`;
			}
			$("#dish_status").html(dishStatus);

			let restoImage = `
					<img class="image avatar-xs rounded-circle shadow" alt="" src="${data.restaurant.resto_img}">
				`;
			$("#resto_img").html(restoImage);

			$("#resto_name").html(data.restaurant.resto_name);
			const date_published = data.date_created;
			$("#date_created").html(moment(date_published).format("MMM. D, YYYY"));
			$("#time_created").html(moment(date_published).format("hh:mm A"));
		},
	}).fail(() =>
		console.error("There was an error in getting the dish details")
	);
};
