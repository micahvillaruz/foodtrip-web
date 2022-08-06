<div class="row">
    <div class="col-xl-12">
        <div id="resto_categories" class="row">
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-lg-12">
        <div class="card overflow-hidden">
            <div class="card-body bg-soft-success text-success fw-semibold d-flex">
                <marquee class="fs-14">
                    Discover food you'll love ! From swanky upscale restaurants to the cosiest hidden gems serving the
                    most incredible food, FoodTrip covers it all. Explore menus, and order direct for delivery from over
                    31,000 restaurants at exclusive prices.
                </marquee>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-lg-12">
        <div class="d-lg-flex align-items-center mb-4">
            <div class="flex-grow-1">
                <h5 class="card-title mb-0 fw-semibold fs-16">Popular Dishes</h5>
            </div>
            <div class="flex-shrink-0 mt-4 mt-lg-0">
                <a href="<?php echo base_url() ?>customer/products" class="btn btn-primary">View All <i class="ri-arrow-right-line align-bottom"></i></a>
            </div>
        </div>
    </div>
</div>
<div id="popular_dishes" class="row row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
</div>
<!--end row-->

<div class="row">
    <div class="col-lg-12">
        <div class="d-lg-flex align-items-center mb-4">
            <div class="flex-grow-1">
                <h5 class="card-title mb-0 fw-semibold fs-16">Popular Restaurants</h5>
            </div>
            <div class="flex-shrink-0 mt-4 mt-lg-0">
                <a href="<?php echo base_url() ?>customer/restaurants" class="btn btn-primary">View All <i class="ri-arrow-right-line align-bottom"></i></a>
            </div>
        </div>
    </div>
</div>

<div id="popular_restaurants" class="row row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
</div>
<!--end row-->

<script src="<?php echo base_url('public/assets') ?>/js/ajax/customer/home.ajax.js"></script>
<script src="<?php echo base_url('public/assets') ?>/js/ajax/customer/cart.ajax.js"></script>