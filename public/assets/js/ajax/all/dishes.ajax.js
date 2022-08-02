$(function () {
	loadDishCategories();
	loadDishes();
});

loadDishes = () => {
	$.ajax({
		type: "GET",
		cache: false,
		url: apiURL + "home/dishes",
		dataType: "json",
		success: function (response) {
			response.data.forEach((dish) => {
				let dishEl = "";

				dishEl = `
                <div
	class="col-lg-4 product-item 3d-style ${dish.dish_category.dishcatg_name
		.replace(/\s+/g, "-")
		.toLowerCase()}">
	<div class="card explore-box card-animate">
		<div class="explore-place-bid-img">
			<img src="${dish.dish_img}" alt="${
					dish.dish_name
				}" class="card-img-top explore-img" />
			<div class="bg-overlay"></div>
			<div class="place-bid-btn">
				<a href="${baseURL}signin" class="btn btn-success"
					><i class="ri-auction-fill align-bottom me-1"></i> Order Now</a
				>
			</div>
		</div>
		<div class="card-body">
			<h5 class="mb-1"><a>${dish.dish_name}</a></h5>
			<p class="text-muted mb-0">${dish.restaurant.resto_name}</p>
		</div>
		<div class="card-footer border-top border-top-dashed">
			<div class="d-flex align-items-center">
				<div class="flex-grow-1 fs-14">
					<i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i>
					<span class="fw-medium">₱${dish.dish_price}</span>
				</div>
			</div>
		</div>
	</div>
</div>

                `;

				$("#all_dishes").append(dishEl);
			});
		},
	});
};

loadDishCategories = () => {
	$.ajax({
		type: "GET",
		cache: false,
		url: apiURL + "home/dish-cat",
		dataType: "json",
		success: function (response) {
			response.data.forEach((dishcats) => {
				let dishcat = `
                 <li class="nav-item" role="presentation">
                 <button class="nav-link fw-medium" type="button" data-filter="${dishcats.dishcatg_name
										.replace(/\s+/g, "-")
										.toLowerCase()}">
                     ${dishcats.dishcatg_name}
                 </button>
                </li>
                 `;

				$("#all_dishcats").append(dishcat);
			});
		},
	});
};
