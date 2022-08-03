$(function () {
	loadRestaurants();
	loadRestoCat();
});

loadRestaurants = () => {
	$.ajax({
		type: "GET",
		cache: false,
		url: apiURL + "home/restaurants",
		dataType: "json",
		success: function (response) {
			response.data.forEach((resto) => {
				let restoEl = `
                <div class="col-lg-4">
	<div class="card explore-box card-animate border">
		<div class="card-body">
			<div class="d-flex align-items-center mb-3">
				<div class="ms-2 flex-grow-1 card-header">
					<a href="#!">
						<h6 class="mb-0 fs-15">${resto.resto_name}</h6>
					</a>
				</div>
			</div>
			<div class="explore-place-bid-img overflow-hidden rounded">
				<img
					src="${resto.resto_img}"
					alt="${resto.resto_name}"
					class="explore-img w-100"
				/>
				<div class="bg-overlay"></div>
				<div class="place-bid-btn">
					<a href="${baseURL}signin" class="btn btn-success"
						><i class="ri-auction-fill align-bottom me-1"></i> Order Now</a
					>
				</div>
			</div>
			<div class="mt-3">
				<a href="javascript:void(0)" class="btn btn-info btn-sm d-block"
					>See Details</a
				>
			</div>
		</div>
	</div>
</div>
                `;
				$("#all_restaurants").append(restoEl);
			});
		},
	});
};

loadRestoCat = () => {
	$.ajax({
		type: "GET",
		cache: false,
		url: apiURL + "home/resto-categories",
		dataType: "json",
		success: function (response) {
			response.data.forEach((restocat) => {
				restcatEl = `
                <div class="swiper-slide">
                <div class="card">
                  <div class="card-body">
                    <div class="row g-1 mb-3 restos">
                      <div class="col-lg-6">
                      <img src="${restocat.restaurants[0].resto_img}" alt="${
					restocat.restaurants[0].resto_name
				}" class="img-fluid rounded category-img">
                      <img src="${restocat.restaurants[1].resto_img}" alt="${
					restocat.restaurants[1].resto_name
				}" alt="" class="img-fluid rounded category-img">
                      </div>
                      <!--end col-->
                      <div class="col-lg-6">
                        <img src="${restocat.restaurants[2].resto_img}" alt="${
					restocat.restaurants[2].resto_name
				}" class="img-fluid rounded category-img">
                        <img src="${restocat.restaurants[3].resto_img}" alt="${
					restocat.restaurants[3].resto_name
				}" class="img-fluid rounded category-img">
                      </div>
                      <!--end col-->
                    </div>
                    <!--end row-->
                    <a href="${baseURL}signin" class="float-end"> View All <i class="ri-arrow-right-line align-bottom"></i></a>
                    <h5 class="mb-0 fs-16"><a href="${baseURL}signin">${
					restocat.restocatg_name
				}<span class="badge badge-soft-success">${
					Object.keys(restocat.restaurants).length
				}</span></a></h5>
                  </div>
                </div>
                </div>
                `;
				$(".all_restocat").append(restcatEl);
			});
		},
	});
};
