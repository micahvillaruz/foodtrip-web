<body data-bs-spy="scroll" data-bs-target="#navbar-example">

  <!-- Begin page -->
  <div class="layout-wrapper landing">
    <nav class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url() ?>">
          <img src="<?php echo base_url('public/assets') ?>/images/logo-dark.png" class="card-logo card-logo-dark" alt="logo dark" height="50">
          <img src="<?php echo base_url('public/assets') ?>/images/logo-light.png" class="card-logo card-logo-light" alt="logo light" height="50">
        </a>
        <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="mdi mdi-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
            <li class="nav-item">
              <a class="nav-link fs-15 active" href="<?php echo base_url() ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-15" href="#menu">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-15" href="#restaurant">Restaurants</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-15" href="#categories">Categories</a>
            </li>
          </ul>

          <div class="">
            <a href="<?php echo base_url() ?>signup/customer" class="btn btn-success">Create Account</a>
          </div>
        </div>

      </div>
    </nav>
    <div class="bg-overlay bg-overlay-pattern"></div>
    <!-- end navbar -->

    <!-- start hero section -->
    <section class="section nft-hero" id="hero">
      <div class="bg-overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-sm-10">
            <div class="text-center">
              <h1 class="display-4 fw-medium mb-4 lh-base text-white">Browse over Restaurants & Order your <span class="text-success">Favorite Foods</span></h1>
              <p class="lead text-white-50 lh-base mb-4 pb-2">Food means everything to Filipino culture, whether ordering at home, visiting restaurants or cooking your favorite meal. From small bites to big meals, we won't limit your appetite. Go ahead and order all you want.</p>

              <div class="hstack gap-2 justify-content-center">
                <a href="<?php echo base_url() ?>signin" class="btn btn-primary">Sign In Now <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                <a href="<?php echo base_url() ?>signin" class="btn btn-danger">Explore Now <i class="ri-arrow-right-line align-middle ms-1"></i></a>
              </div>
            </div>
          </div>
          <!--end col-->
        </div><!-- end row -->
      </div><!-- end container -->
    </section><!-- end hero section -->

    <!-- start home -->
    <section class="section" id="main">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="text-center mb-5">
              <h2 class="mb-3 fw-semibold lh-base">There's something for everyone!</h2>
              <p class="text-muted">Find and order your favorite cuisines across the Philippines - order food online in just a few taps, from pandesal with kape for Breakfast, to sinigang na baboy for Lunch, from tapsilog for brunch to sisig with egg for Dinner! We are here to satisfy your hunger with a wide selection of merchant partners.</p>
            </div>
          </div><!-- end col -->
        </div><!-- end row -->

        <div class="row g-4">
          <div class="col-lg-4">
            <div class="card text-center border">
              <div class="card-body py-5 px-4">
                <img src="<?php echo base_url('public/assets') ?>/images/home/menu.png" alt="" height="60" class="mb-3 pb-2">
                <h5>Menu</h5>
                <p class="text-muted pb-1 fs-13">FoodTrip is a perfect solution when you don't feel like cooking or eating out. You can order the best food in Manila right to your doorstep and indulge your favorite meal with your loved ones.</p>
                <a href="#menu" class="btn btn-info">Explore Now</a>
              </div>
            </div>
          </div><!-- end col -->
          <div class="col-lg-4">
            <div class="card text-center border">
              <div class="card-body py-5 px-4">
                <img src="<?php echo base_url('public/assets') ?>/images/home/restaurant.png" alt="" height="60" class="mb-3 pb-2">
                <h5>Restaurants</h5>
                <p class="text-muted pb-1 fs-13">Satisfy your cravings with a huge selection of restaurants! You can order food online from all your favorite food spots from Mcdonalds, Jollibee, Chowking, KFC, and many many more! </p>
                <a href="#restaurant" class="btn btn-info">Explore Now</a>
              </div>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-4">
            <div class="card text-center border">
              <div class="card-body py-5 px-4">
                <img src="<?php echo base_url('public/assets') ?>/images/home/category.png" alt="" height="60" class="mb-3 pb-2">
                <h5>Category</h5>
                <p class="text-muted pb-1 fs-13">From Japanese, Chinese, American, or whatever cuisine you're craving for, FoodTrip will be there to satisfy your cravings! You'll never get tired of eating the same type of meals every day! </p>
                <a href="#categories" class="btn btn-info">Explore Now</a>
              </div>
            </div>
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end container -->
    </section><!-- end main -->

    <!-- start menu -->
    <section class="section bg-light" id="menu">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="text-center mb-5">
              <h2 class="mb-3 fw-semibold lh-base">Explore Menu</h2>
              <p class="text-muted mb-4">We have curated all your favorite dishes, restaurants, and cuisines to help you grab your food in the easiest & quickest way possible.</p>
              <ul class="nav nav-pills filter-btns justify-content-center" role="tablist" id="all_dishcats">
                <li class="nav-item" role="presentation">
                  <button class="nav-link fw-medium active" type="button" data-filter="all">All Dishes</button>
                </li>
              </ul>
            </div>
          </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" id="all_dishes">
        </div>
      </div><!-- end container -->
    </section>
    <!-- end marketplace -->

    <!-- start Discover Items-->
    <section class="section" id="restaurant">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="d-flex align-items-center mb-5">
              <h2 class="mb-0 fw-semibold lh-base flex-grow-1">Discover Restaurants</h2>
              <a href="<?php echo base_url() ?>signin" class="btn btn-primary">View All <i class="ri-arrow-right-line align-bottom"></i></a>
            </div>
          </div>
        </div><!-- end row -->
        <div class="row" id="all_restaurants">
          <!--end col-->
        </div>
        <!--end row-->
      </div>
      <!--end container-->
    </section>
    <!--end Discover Items-->

    <!-- start plan -->
    <section class="section bg-light" id="categories">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="text-center mb-5">
              <h2 class="mb-3 fw-semibold lh-base">Trending All Categories</h2>
              <p class="text-muted">From local Filipino cuisine to delicious western dishes like steak and burgers, there is something for everyone. Whether you're searching for the best restaurants in Manila or wondering where to eat in Quezon City, there is one destination where you can find it all : FoodTrip 😋.</p>
            </div>
          </div><!-- end col -->
        </div><!-- end row -->
        <div class="row">
          <div class="col-lg-12">
            <!-- Swiper -->
            <div class="swiper mySwiper pb-4">
              <div class="swiper-wrapper mb-5 all_restocat">
              </div>
              <div class="swiper-pagination swiper-pagination-dark"></div>
            </div>
          </div>
        </div>
      </div><!-- end container -->
    </section>
    <!-- end plan -->

    <!-- start cta -->
    <section class="py-5 bg-primary position-relative">
      <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
      <div class="container">
        <div class="row align-items-center gy-4">
          <div class="col-sm">
            <div>
              <h4 class="text-white mb-0 fw-semibold">End all your cravings here.</h4>
            </div>
          </div>
          <!-- end col -->
          <div class="col-sm-auto">
            <div>
              <a href="<?php echo base_url() ?>signin" class="btn-lg bg-gradient btn-danger">Order Now</a>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end cta -->

    <!-- Start footer -->
    <footer class="custom-footer bg-dark py-5 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mt-4">
            <div>
              <div>
                <img src="<?php echo base_url('public/assets') ?>/images/logo-light.png" alt="logo light" height="50">
              </div>
              <div class="mt-4">
                <p>A Food Ordering Web Application</p>
                <p> From flavorful Asian delicacies to mouthwatering Mexican food, FoodTrip has got it all. With over 30 different cuisines to choose from, you can taste different flavors of the world everyday.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-7 ms-lg-auto">
            <div class="row">
              <div class="col-sm-4 mt-4">
                <h5 class="text-white mb-0">Partner Restaurants</h5>
                <div class="text-muted mt-3">
                  <ul class="list-unstyled ff-secondary footer-list">
                    <li><a href="#">Bonchon</a></li>
                    <li><a href="#">Chowking</a></li>
                    <li><a href="#">Greenwich</a></li>
                    <li><a href="#">Jollibee</a></li>
                    <li><a href="#">KFC</a></li>
                    <li><a href="#">McDonald's</a></li>
                    <li><a href="#">PizzaHut</a></li>
                    <li><a href="#">Shakeys</a></li>
                    <li><a href="#">Yellow Cab</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4 mt-4">
                <h5 class="text-white mb-0">Popular Cuisines</h5>
                <div class="text-muted mt-3">
                  <ul class="list-unstyled ff-secondary footer-list">
                    <li><a href="#">Chinese Food</a></li>
                    <li><a href="#">Fast Food</a></li>
                    <li><a href="#">Filipino Food</a></li>
                    <li><a href="#">Japanese Food</a></li>
                    <li><a href="#">Korean Food</a></li>
                    <li><a href="#">Mexican Food</a></li>
                    <li><a href="#">Seafood</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4 mt-4">
                <h5 class="text-white mb-0">Support</h5>
                <div class="text-muted mt-3">
                  <ul class="list-unstyled ff-secondary footer-list">
                    <li><a href="#">Help</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="<?php echo base_url() ?>restaurant">Be a FoodTrip Merchant</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row text-center text-sm-start align-items-center mt-5">
          <div class="col-sm-6">

            <div>
              <p class="copy-rights mb-0">
                <script>
                  document.write(new Date().getFullYear())
                </script> © <?php echo SYSTEM_NAME ?>
              </p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="text-sm-end mt-3 mt-sm-0">
              <ul class="list-inline mb-0 footer-social-link">
                <li class="list-inline-item">
                  <a href="javascript: void(0);" class="avatar-xs d-block">
                    <div class="avatar-title rounded-circle">
                      <i class="ri-facebook-fill"></i>
                    </div>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript: void(0);" class="avatar-xs d-block">
                    <div class="avatar-title rounded-circle">
                      <i class="ri-github-fill"></i>
                    </div>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript: void(0);" class="avatar-xs d-block">
                    <div class="avatar-title rounded-circle">
                      <i class="ri-linkedin-fill"></i>
                    </div>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript: void(0);" class="avatar-xs d-block">
                    <div class="avatar-title rounded-circle">
                      <i class="ri-google-fill"></i>
                    </div>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript: void(0);" class="avatar-xs d-block">
                    <div class="avatar-title rounded-circle">
                      <i class="ri-dribbble-line"></i>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end footer -->

  </div>
  <!-- end layout wrapper -->
  <script src="<?php echo base_url('public/assets') ?>/js/ajax/all/dishes.ajax.js"></script>
  <script src="<?php echo base_url('public/assets') ?>/js/ajax/all/restaurants.ajax.js"></script>