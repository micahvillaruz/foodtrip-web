<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="d-flex align-items-center">
                    <h5 class="card-title mb-0 fw-semibold flex-grow-1">Explore Menu</h5>
                    <div>
                        <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample"><i class="ri-filter-2-line align-bottom"></i> Filters</a>
                    </div>
                </div>
                <div class="collaps show" id="collapseExample">
                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1 mt-3 g-3">
                        <div class="col">
                            <h6 class="text-uppercase fs-12 mb-2">Search</h6>
                            <input type="text" class="form-control" placeholder="Search Dish Name" autocomplete="off" id="searchProductList">
                        </div>
                        <div class="col">
                            <h6 class="text-uppercase fs-12 mb-2">Restaurant Category</h6>
                            <select class="form-control" data-choices name="restocatg_name" data-choices-search-false id="restocatg_name">
                                <option value="">Select Restaurant Category</option>
                                <option value="1">Fine Dining</option>
                                <option value="2">Casual Dining</option>
                                <option value="2">Chinese</option>
                                <option value="3">Contemporary Casual</option>
                                <option value="4">Family Style</option>
                                <option value="5">Fast Casual</option>
                                <option value="6">Fast Food</option>
                                <option value="7">Cafe</option>
                                <option value="8">Buffet</option>
                                <option value="9">Bakery</option>
                                <option value="10">Quick Bites</option>
                                <option value="11">Japanese</option>
                                <option value="12">Filipino</option>
                                <option value="13">Italian</option>
                                <option value="14">American</option>
                            </select>
                        </div>
                        <div class="col">
                            <h6 class="text-uppercase fs-12 mb-2">Restaurant</h6>
                            <select class="form-control" data-choices name="resto_name" data-choices-search-false id="resto_name">
                                <option value="">Select Restaurant</option>
                                <option value="1">ArmyNavy</option>
                                <option value="2">Baliwag</option>
                                <option value="3">Banapple</option>
                                <option value="4">Barrio Fiesta</option>
                                <option value="5">Black Scoop</option>
                                <option value="6">Burger King</option>
                                <option value="7">The Coffee Bean & Tea Leaf</option>
                                <option value="8">Chowking</option>
                                <option value="9">Conti's Bakeshop & Restaurant</option>
                                <option value="10">David's Tea House</option>
                                <option value="11">Dunkin' Donuts</option>
                                <option value="12">Frankie's New York Buffalo Wings</option>
                                <option value="13">Goldilocks</option>
                                <option value="14">Greenwich</option>
                                <option value="15">Hot Star</option>
                                <option value="16">J.CO Donuts & Coffee</option>
                                <option value="17">Jollibee</option>
                                <option value="18">Kenny Rogers Roasters </option>
                                <option value="19">KFC</option>
                                <option value="20">Kuya J Restaurant</option>
                                <option value="21">Marugame Udon</option>
                                <option value="22">Max's Restaurant</option>
                                <option value="23">McDonald's</option>
                                <option value="24">Pan De Manila</option>
                                <option value="25">PizzaExpress</option>
                                <option value="26">Red Ribbon Bakeshop</option>
                                <option value="27">Starbucks</option>
                                <option value="28">Subway</option>
                                <option value="29">Tim Hortons</option>
                                <option value="30">Tokyo Tokyo</option>
                                <option value="31">Wendy's</option>
                                <option value="32">Yabu House of Katsu</option>
                                <option value="33">Yoshinoya</option>
                            </select>
                        </div>
                        <div class="col">
                            <h6 class="text-uppercase fs-12 mb-2">Dish Category</h6>
                            <select class="form-control" data-choices name="dishcatg_name" data-choices-search-false id="dishcatg_name">
                                <option value="">Select Dish Category</option>
                                <option value="1">Family Meals</option>
                                <option value="2">Breakfast Joys</option>
                                <option value="3">Breakfast</option>
                                <option value="4">Chickenjoy</option>
                                <option value="5">Burgers</option>
                                <option value="6">Jolly Spaghetti</option>
                                <option value="7">Burger Steak</option>
                                <option value="8">Super Meals</option>
                                <option value="9">Chicken Sandwich</option>
                                <option value="10">Jolly Hotdog & Pies</option>
                                <option value="11">Palabok</option>
                                <option value="12">Fries & Sides</option>
                                <option value="13">Desserts</option>
                                <option value="14">Beverages</option>
                                <option value="15">Jolly Kiddie Meal</option>
                            </select>
                        </div>
                        <div class="col">
                            <h6 class="text-uppercase fs-12 mb-4">Price</h6>
                            <div class="slider" id="dish_price"></div>
                            <input class="form-control" type="hidden" id="minCost" value="0" />
                            <input class="form-control" type="hidden" id="maxCost" value="1000" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="d-flex align-items-center mb-4">
            <div class="flex-grow-1">
                <p class="text-muted fs-14 mb-0">Result: 8745</p>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
    <div class="col">
        <div class="card explore-box card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/kfc.png" alt="" class="avatar-xs rounded-circle" />
                    <div class="ms-2 flex-grow-1">
                        <h6 class="mb-0 fs-15">KFC</h6>
                        <p class="mb-0 text-muted">Fast Food</p>
                    </div>
                </div>
                <div class="explore-place-bid-img overflow-hidden rounded">
                    <img src="<?php echo base_url('public/assets') ?>/images/food/kfc/img-1.png" alt="" class="img-fluid explore-img">
                    <div class="bg-overlay"></div>
                    <div class="place-bid-btn">
                        <a href="#!" class="btn btn-success">Order Now</a>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="fs-16">2 - pc. Spicy Gangnam Chicken Combo Meal</h6>
                    <p class="text-muted mt-0 mb-3">Signature Meals</p>
                    <h5 class="text-secondary mb-3">₱ 239.00</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="ri-shopping-cart-2-line"></i> Add to Cart</button>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="ri-bank-card-line"></i> Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card explore-box card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jollibee.jpg" alt="" class="avatar-xs rounded-circle" />
                    <div class="ms-2 flex-grow-1">
                        <h6 class="mb-0 fs-15">Jollibee</h6>
                        <p class="mb-0 text-muted">Fast Food</p>
                    </div>
                </div>
                <div class="explore-place-bid-img overflow-hidden rounded">
                    <img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-1.png" alt="" class="img-fluid explore-img">
                    <div class="bg-overlay"></div>
                    <div class="place-bid-btn">
                        <a href="#!" class="btn btn-success">Order Now</a>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="fs-16">1 - pc. Chickenjoy w/ Half Jolly Spaghetti & Shanghai Super Meal</h6>
                    <p class="text-muted mt-0 mb-3">Super Meals</p>
                    <h5 class="text-secondary mb-3">₱ 210.00</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="ri-shopping-cart-2-line"></i> Add to Cart</button>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="ri-bank-card-line"></i> Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card explore-box card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/burger-king.png" alt="" class="avatar-xs rounded-circle" />
                    <div class="ms-2 flex-grow-1">
                        <h6 class="mb-0 fs-15">Burger King</h6>
                        <p class="mb-0 text-muted">Quick Bites</p>
                    </div>
                </div>
                <div class="explore-place-bid-img overflow-hidden rounded">
                    <img src="<?php echo base_url('public/assets') ?>/images/food/burger-king/img-1.png" alt="" class="img-fluid explore-img">
                    <div class="bg-overlay"></div>
                    <div class="place-bid-btn">
                        <a href="#!" class="btn btn-success">Order Now</a>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="fs-16">Original King Feast for 2 with Regular Sides & Drinks</h6>
                    <p class="text-muted mt-0 mb-3">Group Meals</p>
                    <h5 class="text-secondary mb-3">₱ 324.00</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="ri-shopping-cart-2-line"></i> Add to Cart</button>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="ri-bank-card-line"></i> Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card explore-box card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/chowking.jpg" alt="" class="avatar-xs rounded-circle" />
                    <div class="ms-2 flex-grow-1">
                        <h6 class="mb-0 fs-15">Chowking</h6>
                        <p class="mb-0 text-muted">Fast Food</p>
                    </div>
                </div>
                <div class="explore-place-bid-img overflow-hidden rounded">
                    <img src="<?php echo base_url('public/assets') ?>/images/food/chowking/img-1.png" alt="" class="img-fluid explore-img">
                    <div class="bg-overlay"></div>
                    <div class="place-bid-btn">
                        <a href="#!" class="btn btn-success">Order Now</a>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="fs-16">Siomai Beef Chao Fan Family Platter</h6>
                    <p class="text-muted mt-0 mb-3">Good for Sharing</p>
                    <h5 class="text-secondary mb-3">₱ 376.00</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="ri-shopping-cart-2-line"></i> Add to Cart</button>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="ri-bank-card-line"></i> Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card explore-box card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jco.png" alt="" class="avatar-xs rounded-circle" />
                    <div class="ms-2 flex-grow-1">
                        <h6 class="mb-0 fs-15">J.CO Donuts & Coffee</h6>
                        <p class="mb-0 text-muted">Bakery</p>
                    </div>
                </div>
                <div class="explore-place-bid-img overflow-hidden rounded">
                    <img src="<?php echo base_url('public/assets') ?>/images/food/jco/img-1.png" alt="" class="img-fluid explore-img">
                    <div class="bg-overlay"></div>
                    <div class="place-bid-btn">
                        <a href="#!" class="btn btn-success">Order Now</a>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="fs-16">Half Dozen Jclub + Half Dozen Donuts</h6>
                    <p class="text-muted mt-0 mb-3">Packages</p>
                    <h5 class="text-secondary mb-3">₱ 548.00</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="ri-shopping-cart-2-line"></i> Add to Cart</button>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="ri-bank-card-line"></i> Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
    <div class="col">
        <div class="card explore-box card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/starbucks.png" alt="" class="avatar-xs rounded-circle" />
                    <div class="ms-2 flex-grow-1">
                        <h6 class="mb-0 fs-15">Starbucks</h6>
                        <p class="mb-0 text-muted">Cafe</p>
                    </div>
                </div>
                <div class="explore-place-bid-img overflow-hidden rounded">
                    <img src="<?php echo base_url('public/assets') ?>/images/food/starbucks/img-1.jpeg" alt="" class="img-fluid explore-img">
                    <div class="bg-overlay"></div>
                    <div class="place-bid-btn">
                        <a href="#!" class="btn btn-success">Order Now</a>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="fs-16">Hazelnut Mocha Cheesecake Latte</h6>
                    <p class="text-muted mt-0 mb-3">Highlight Beverages</p>
                    <h5 class="text-secondary mb-3">₱ 200.00</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="ri-shopping-cart-2-line"></i> Add to Cart</button>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="ri-bank-card-line"></i> Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col">
        <div class="card explore-box card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/kuyaj.jpg" alt="" class="avatar-xs rounded-circle" />
                    <div class="ms-2 flex-grow-1">
                        <h6 class="mb-0 fs-15">Kuya J Restaurant</h6>
                        <p class="mb-0 text-muted">Casual Dining</p>
                    </div>
                </div>
                <div class="explore-place-bid-img overflow-hidden rounded">
                    <img src="<?php echo base_url('public/assets') ?>/images/food/kuya-j/img-1.png" alt="" class="img-fluid explore-img">
                    <div class="bg-overlay"></div>
                    <div class="place-bid-btn">
                        <a href="#!" class="btn btn-success">Order Now</a>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="fs-16">Crispy Pata Regular Bundle</h6>
                    <p class="text-muted mt-0 mb-3">Pork</p>
                    <h5 class="text-secondary mb-3">₱ 1,099.00</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="ri-shopping-cart-2-line"></i> Add to Cart</button>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="ri-bank-card-line"></i> Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col">
        <div class="card explore-box card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/conti-bakeshop.jpg" alt="" class="avatar-xs rounded-circle" />
                    <div class="ms-2 flex-grow-1">
                        <h6 class="mb-0 fs-15">Conti's Bakeshop & Restaurant</h6>
                        <p class="mb-0 text-muted">Bakery</p>
                    </div>
                </div>
                <div class="explore-place-bid-img overflow-hidden rounded">
                    <img src="<?php echo base_url('public/assets') ?>/images/food/conti's/img-1.jpg" alt="" class="img-fluid explore-img">
                    <div class="bg-overlay"></div>
                    <div class="place-bid-btn">
                        <a href="#!" class="btn btn-success">Order Now</a>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="fs-16">Mango Bravo</h6>
                    <p class="text-muted mt-0 mb-3">Fabulous Cakes</p>
                    <h5 class="text-secondary mb-3">₱ 1,035.00</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="ri-shopping-cart-2-line"></i> Add to Cart</button>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="ri-bank-card-line"></i> Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col">
        <div class="card explore-box card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/frankies-buffalo-wings.jpg" alt="" class="avatar-xs rounded-circle" />
                    <div class="ms-2 flex-grow-1">
                        <h6 class="mb-0 fs-15">Frankie's NY Buffalo Wings</h6>
                        <p class="mb-0 text-muted">Casual Dining</p>
                    </div>
                </div>
                <div class="explore-place-bid-img overflow-hidden rounded">
                    <img src="<?php echo base_url('public/assets') ?>/images/food/frankie's/img-1.png" alt="" class="img-fluid explore-img">
                    <div class="bg-overlay"></div>
                    <div class="place-bid-btn">
                        <a href="#!" class="btn btn-success">Order Now</a>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="fs-16">Classic Buffalo Jr Wings (1 Dozen)</h6>
                    <p class="text-muted mt-0 mb-3">Boneless</p>
                    <h5 class="text-secondary mb-3">₱ 438.90</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="ri-shopping-cart-2-line"></i> Add to Cart</button>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="ri-bank-card-line"></i> Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col">
        <div class="card explore-box card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/wendy's.png" alt="" class="avatar-xs rounded-circle" />
                    <div class="ms-2 flex-grow-1">
                        <h6 class="mb-0 fs-15">Wendy's</h6>
                        <p class="mb-0 text-muted">Quick Bites</p>
                    </div>
                </div>
                <div class="explore-place-bid-img overflow-hidden rounded">
                    <img src="<?php echo base_url('public/assets') ?>/images/food/wendy's/img-1.png" alt="" class="img-fluid explore-img">
                    <div class="bg-overlay"></div>
                    <div class="place-bid-btn">
                        <a href="#!" class="btn btn-success">Order Now</a>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="fs-16">Taco Salad (big)</h6>
                    <p class="text-muted mt-0 mb-3">Healthy Salads</p>
                    <h5 class="text-secondary mb-3">₱ 160.00</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="ri-shopping-cart-2-line"></i> Add to Cart</button>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="ri-bank-card-line"></i> Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

</div>
<!-- end row -->
<div class="py-4 text-center" id="noresult" style="display: none;">
    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px"></lord-icon>
    <h5 class="mt-4">Sorry! No Result Found</h5>
</div>
<div class="text-center mb-3">
    <button class="btn btn-link shadow-none text-success mt-2" id="loadmore"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load More </button>
</div>