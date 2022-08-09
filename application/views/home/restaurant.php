<body data-bs-spy="scroll" data-bs-target="#navbar-example">

  <!-- Begin page -->
  <div class="layout-wrapper landing">
    <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url() ?>restaurant">
          <img src="<?php echo base_url('public/assets') ?>/images/logo-dark.png" class="card-logo card-logo-dark" alt="logo dark" height="50">
          <img src="<?php echo base_url('public/assets') ?>/images/logo-light.png" class="card-logo card-logo-light" alt="logo light" height="50">
        </a>
        <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="mdi mdi-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
            <li class="nav-item">
              <a class="nav-link fs-14 active" href="<?php echo base_url() ?>restaurant">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-14" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-14" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-14" href="#faq">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-14" href="#reviews">Reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-14" href="#usecase">Use Cases</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-14" href="#contact">Contact</a>
            </li>
          </ul>

          <div class="">
            <a href="<?php echo base_url() ?>signin" class="btn btn-link fw-medium text-decoration-none text-dark">Sign in</a>
            <a href="<?php echo base_url() ?>register/restaurant" class="btn btn-primary">Sign Up</a>
          </div>
        </div>

      </div>
    </nav>
    <!-- end navbar -->

    <!-- start hero section -->
    <section class="section pb-0 hero-section" id="hero">
      <div class="bg-overlay bg-overlay-pattern"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-sm-10">
            <div class="text-center mt-lg-5 pt-5">
              <h1 class="display-6 fw-semibold mb-3 lh-base">Deliver success to your business with <span class="text-success"> FoodTrip </span></h1>
              <p class="lead text-muted lh-base">Grow your business by getting your food out the door and onto the tables of hungry customers. FoodTrip's fast-checkout process increase average order value by 20%, save 15 minutes per table and generate 40% more tips.</p>

              <div class="d-flex gap-2 justify-content-center mt-4">
                <a href="<?php echo base_url() ?>register/restaurant" class="btn btn-primary">Register Now <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                <a href="<?php echo base_url() ?>register/restaurant" class="btn btn-danger">Book a Demo <i class="ri-booklet-line align-middle ms-1"></i></a>
              </div>
            </div>

            <div class="mt-4 mt-sm-5 pt-sm-5 mb-sm-n5 demo-carousel">
              <div class="demo-img-patten-top d-none d-sm-block">
                <img src="<?php echo base_url('public/assets') ?>/images/landing/img-pattern.png" class="d-block img-fluid" alt="...">
              </div>
              <div class="demo-img-patten-bottom d-none d-sm-block">
                <img src="<?php echo base_url('public/assets') ?>/images/landing/img-pattern.png" class="d-block img-fluid" alt="...">
              </div>
              <div class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner shadow-lg p-2 bg-white rounded">
                  <div class="carousel-item active" data-bs-interval="2000">
                    <img src="<?php echo base_url('public/assets') ?>/images/landing/img-1.jpg" class="d-block w-100 resto-landing-img" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?php echo base_url('public/assets') ?>/images/landing/img-2.jpg" class="d-block w-100 resto-landing-img" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?php echo base_url('public/assets') ?>/images/landing/img-3.jpg" class="d-block w-100 resto-landing-img" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?php echo base_url('public/assets') ?>/images/landing/img-4.jpg" class="d-block w-100 resto-landing-img" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?php echo base_url('public/assets') ?>/images/landing/img-5.jpg" class="d-block w-100 resto-landing-img" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?php echo base_url('public/assets') ?>/images/landing/img-6.jpg" class="d-block w-100 resto-landing-img" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?php echo base_url('public/assets') ?>/images/landing/img-7.jpg" class="d-block w-100 resto-landing-img" alt="...">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
      <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
          <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">
            <path d="M 0,118 C 288,98.6 1152,40.4 1440,21L1440 140L0 140z">
            </path>
          </g>
        </svg>
      </div>
      <!-- end shape -->
    </section>
    <!-- end hero section -->

    <!-- start client section -->
    <div class="pt-5 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="text-center mt-5">
              <h5 class="fs-20">Trusted by the Leading Businesses Around the World
              </h5>

              <!-- Swiper -->
              <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="client-images">
                      <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jollibee.jpg" alt="client-img" class="mx-auto img-fluid d-block">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="client-images">
                      <img src="<?php echo base_url('public/assets') ?>/images/restaurants/kfc.png" alt="client-img" class="mx-auto img-fluid d-block">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="client-images">
                      <img src="<?php echo base_url('public/assets') ?>/images/restaurants/chowking.jpg" alt="client-img" class="mx-auto img-fluid d-block">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="client-images">
                      <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jco.png" alt="client-img" class="mx-auto img-fluid d-block">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="client-images">
                      <img src="<?php echo base_url('public/assets') ?>/images/restaurants/goldilocks.png" alt="client-img" class="mx-auto img-fluid d-block">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="client-images">
                      <img src="<?php echo base_url('public/assets') ?>/images/restaurants/burger-king.png" alt="client-img" class="mx-auto img-fluid d-block">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end client section -->

    <!-- start services -->
    <section class="section" id="services">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="text-center mb-5">
              <h1 class="mb-3 ff-secondary fw-semibold lh-base">Streamline your operations and increase revenues</h1>
              <p class="text-muted">No matter how much your business grows, you will always be able to take free unlimited orders with zero costs. Power your business with FoodTrip & you'll never have to worry about fees or commissions.</p>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row g-3">
          <div class="col-lg-4">
            <div class="d-flex p-3">
              <div class="flex-shrink-0 me-3">
                <div class="avatar-sm icon-effect">
                  <div class="avatar-title bg-transparent text-success rounded-circle">
                    <i class="bx bx-bowl-hot fs-36"></i>
                  </div>
                </div>
              </div>
              <div class="flex-grow-1">
                <h5 class="fs-18">Best Dinning Experience</h5>
                <p class="text-muted my-3 ff-secondary">Offer an elegant, simple and high-quality menu with your branding. Simply choose a paper menu layout or include eye-catching visuals of your dishes to enhance the dining experience. Match the aesthetic of your food with your menu.</p>
                <div>
                  <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-4">
            <div class="d-flex p-3">
              <div class="flex-shrink-0 me-3">
                <div class="avatar-sm icon-effect">
                  <div class="avatar-title bg-transparent text-success rounded-circle">
                    <i class="bx bx-brain fs-36"></i>
                  </div>
                </div>
              </div>
              <div class="flex-grow-1">
                <h5 class="fs-18">Make Smarter Decisions</h5>
                <p class="text-muted my-3 ff-secondary">While you offer high-quality food and exceptional dining experience, understand your restaurant's trends and make smart, data-driven business decisions. Track restaurant sales and understand your customer's purchasing patterns.</p>
                <div>
                  <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-4">
            <div class="d-flex p-3">
              <div class="flex-shrink-0 me-3">
                <div class="avatar-sm icon-effect">
                  <div class="avatar-title bg-transparent text-success rounded-circle">
                    <i class="ri-lightbulb-flash-line fs-36"></i>
                  </div>
                </div>
              </div>
              <div class="flex-grow-1">
                <h5 class="fs-18">Strategy Solutions</h5>
                <p class="text-muted my-3 ff-secondary">Compare sales, orders & measure customer satisfaction. Analyze the latest trends and understand the dynamics of your operations for a better strategy.</p>
                <div>
                  <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-4">
            <div class="d-flex p-3">
              <div class="flex-shrink-0 me-3">
                <div class="avatar-sm icon-effect">
                  <div class="avatar-title bg-transparent text-success rounded-circle">
                    <i class="las la-handshake fs-36"></i>
                  </div>
                </div>
              </div>
              <div class="flex-grow-1">
                <h5 class="fs-18">Awesome Support</h5>
                <p class="text-muted my-3 ff-secondary">FoodTrip's support team is available on 24/7 to support and guide you if you have any inquiries. Our experienced team has a hands-on approach to solve your problem.</p>
                <div>
                  <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-4">
            <div class="d-flex p-3">
              <div class="flex-shrink-0 me-3">
                <div class="avatar-sm icon-effect">
                  <div class="avatar-title bg-transparent text-success rounded-circle">
                    <i class="bx bx-laptop fs-36"></i>
                  </div>
                </div>
              </div>
              <div class="flex-grow-1">
                <h5 class="fs-18">Truly Multipurpose</h5>
                <p class="text-muted my-3 ff-secondary">Have a single platform where you can control your operations. Edit and update your menu, view sales and orders on one platform. With our easy-to-use interface, your customers can view, browse and select menu items, add notes and confirm their order in seconds!</p>
                <div>
                  <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-4">
            <div class="d-flex p-3">
              <div class="flex-shrink-0 me-3">
                <div class="avatar-sm icon-effect">
                  <div class="avatar-title bg-transparent text-success rounded-circle">
                    <i class="ri-settings-2-line fs-36"></i>
                  </div>
                </div>
              </div>
              <div class="flex-grow-1">
                <h5 class="fs-18">Easy to customize</h5>
                <p class="text-muted my-3 ff-secondary">You can make quick changes to your menu, add or remove items, and include weekday specials such as Chicken Pasta or Boneless Wings with one click. Your menu will be updated automatically across your restaurant</p>
                <div>
                  <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->

          <div class="col-lg-4">
            <div class="d-flex p-3">
              <div class="flex-shrink-0 me-3">
                <div class="avatar-sm icon-effect">
                  <div class="avatar-title bg-transparent text-success rounded-circle">
                    <i class="ri-slideshow-line fs-36"></i>
                  </div>
                </div>
              </div>
              <div class="flex-grow-1">
                <h5 class="fs-18">Responsive & Clean Design</h5>
                <p class="text-muted my-3 ff-secondary">Include eye-catchy images of your delicious foods and beverages. Add enticing product descriptions and increase customer satisfaction by eliminating errors in communication. </p>
                <div>
                  <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-4">
            <div class="d-flex p-3">
              <div class="flex-shrink-0 me-3">
                <div class="avatar-sm icon-effect">
                  <div class="avatar-title bg-transparent text-success rounded-circle">
                    <i class="mdi mdi-cash-multiple fs-36"></i>
                  </div>
                </div>
              </div>
              <div class="flex-grow-1">
                <h5 class="fs-18">Maximize Profit</h5>
                <p class="text-muted my-3 ff-secondary">Your food, your customer, your revenue. Keep all your revenue to yourself by paying zero commission to FoodTrip. Own your customer data, create engagement and reach out to new customers.</p>
                <div>
                  <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-4">
            <div class="d-flex p-3">
              <div class="flex-shrink-0 me-3">
                <div class="avatar-sm icon-effect">
                  <div class="avatar-title bg-transparent text-success rounded-circle">
                    <i class="lab la-cc-paypal fs-36"></i>
                  </div>
                </div>
              </div>
              <div class="flex-grow-1">
                <h5 class="fs-18">Mobile Payment</h5>
                <p class="text-muted my-3 ff-secondary">Keep your traditional service experience while offering an easy payment process. Spend less time settling and splitting the bills, turn tables faster and collect more tips. Integrated with the world's leading payment systems - no app needed.</p>
                <div>
                  <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end services -->

    <!-- start cta -->
    <section class="py-5 bg-primary position-relative">
      <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
      <div class="container">
        <div class="row align-items-center gy-4">
          <div class="col-sm">
            <div>
              <h4 class="text-white mb-0 fw-semibold">Keep Your Business Up and Profitable</h4>
            </div>
          </div>
          <!-- end col -->
          <div class="col-sm-auto">
            <div>
              <a href="<?php echo base_url() ?>register/restaurant" target="_blank" class="btn bg-gradient btn-danger"><i class="ri-hand-coin-line align-middle me-1"></i> Partner with Us</a>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end cta -->

    <!-- start features -->
    <section class="section py-5" id="features">
      <div class="container">
        <div class="row align-items-center gy-4">
          <div class="col-lg-6 col-sm-7 mx-auto">
            <div>
              <img src="https://i.pinimg.com/originals/fc/71/63/fc71635c7f1b09ed30413f59bb749582.gif" alt="" class="img-fluid mx-auto">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="text-muted">
              <div class="avatar-sm icon-effect mb-4">
                <div class="avatar-title bg-transparent rounded-circle text-success h1">
                  <i class="ri-collage-line fs-36"></i>
                </div>
              </div>
              <h3 class="mb-3 fs-20">Well Designed Dashboard</h3>
              <p class="mb-4 ff-secondary fs-16">The Dashboard is an actionable web-based application for sales reporting and product management that is integrated into the FoodTrip Food Ordering App.</p>
              <div class="vstack gap-2">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-2">
                    <div class="avatar-xs icon-effect">
                      <div class="avatar-title bg-transparent text-success rounded-circle h2">
                        <i class="ri-check-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0">Know your best selling item and filter by day, week, month.</p>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-2">
                    <div class="avatar-xs icon-effect">
                      <div class="avatar-title bg-transparent text-success rounded-circle h2">
                        <i class="ri-check-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0">View & manage restaurant remotely anytime, anywhere in real-time.</p>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-2">
                    <div class="avatar-xs icon-effect">
                      <div class="avatar-title bg-transparent text-success rounded-circle h2">
                        <i class="ri-check-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0">Know your low periods and set up promotions.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end features -->

    <!-- start features -->
    <section class="section">
      <div class="container">
        <div class="row align-items-center gy-4">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="text-muted">
              <h5 class="fs-12 text-uppercase text-success">Excellent Customer Satisfactionn</h5>
              <h4 class="mb-3">Cashless payments and Contactless ordering</h4>
              <p class="mb-4 ff-secondary">Create a seamless food ordering app experience for your customers and generate more ROI from your business.</p>

              <div class="vstack gap-2">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-2">
                    <div class="avatar-xs icon-effect">
                      <div class="avatar-title bg-transparent text-success rounded-circle h2">
                        <i class="ri-check-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0">Save manpower & hiring budget as your employees don't need to take orders manually</p>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-2">
                    <div class="avatar-xs icon-effect">
                      <div class="avatar-title bg-transparent text-success rounded-circle h2">
                        <i class="ri-check-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0">Allow customers to add more items or reorder from the comfort of their homes.</p>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-2">
                    <div class="avatar-xs icon-effect">
                      <div class="avatar-title bg-transparent text-success rounded-circle h2">
                        <i class="ri-check-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0">Update your menu anytime with just one click.</p>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-2">
                    <div class="avatar-xs icon-effect">
                      <div class="avatar-title bg-transparent text-success rounded-circle h2">
                        <i class="ri-check-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0">Shorten waiting time so you can serve more customers.</p>
                  </div>
                </div>
              </div>

              <div class="mt-4">
                <a href="<?php echo base_url() ?>register/restaurant" class="btn btn-primary">Learn More <i class="ri-arrow-right-line align-middle ms-1"></i></a>
              </div>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
            <div>
              <img src="https://cdn.dribbble.com/users/228367/screenshots/5469415/storytelling_assets_2_new_thumbnail.gif" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <!-- end row -->

        <div class="row align-items-center mt-5 pt-lg-5 gy-4">
          <div class="col-lg-6 col-sm-7 col-10 mx-auto">
            <div>
              <img src="<?php echo base_url('public/assets') ?>/images/landing/resto.gif" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="text-muted ps-lg-5">
              <h5 class="fs-12 text-uppercase text-success">Maximized Revenue</h5>
              <h4 class="mb-3">Focus On What Really Matters</h4>
              <p class="mb-4">Leave everything that can be automated to FoodTrip so that you can make use of the time and effort in providing the best service to your customers.</p>

              <div class="vstack gap-2">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-2">
                    <div class="avatar-xs icon-effect">
                      <div class="avatar-title bg-transparent text-success rounded-circle h2">
                        <i class="ri-check-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0">Using the FoodTrip ordering system you can track which meals and beverages sell the most.</p>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-2">
                    <div class="avatar-xs icon-effect">
                      <div class="avatar-title bg-transparent text-success rounded-circle h2">
                        <i class="ri-check-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0">Find which meals and beverages provide the highest margin.</p>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-2">
                    <div class="avatar-xs icon-effect">
                      <div class="avatar-title bg-transparent text-success rounded-circle h2">
                        <i class="ri-check-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0">Understand and analyze view/sales data to optimize your operations</p>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-2">
                    <div class="avatar-xs icon-effect">
                      <div class="avatar-title bg-transparent text-success rounded-circle h2">
                        <i class="ri-check-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0">Improve your menu with the analytics and insights about your customer's sales patterns</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>

    <!-- end features -->

    <!-- start faq -->
    <section class="section bg-light" id="faq">
      <div class="bg-overlay bg-overlay-pattern"></div>
      <div class="container">
        <div class="row justify-content-center">
          <!-- start faqs -->
          <section class="section">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="text-center mb-5">
                    <h3 class="mb-3 fw-semibold">Frequently Asked Questions</h3>
                    <p class="text-muted mb-4 ff-secondary">If you can not find answer to your question in our FAQ, you can always contact us or email us. We will answer you shortly!</p>

                    <div class="">
                      <button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i> Email Us</button>
                      <button type="button" class="btn btn-info btn-label rounded-pill"><i class="ri-twitter-line label-icon align-middle rounded-pill fs-16 me-2"></i> Send Us Tweet</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->

              <div class="row g-lg-5 g-4">
                <div class="col-lg-6">
                  <div class="d-flex align-items-center mb-2">
                    <div class="flex-shrink-0 me-1">
                      <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-0 fw-semibold">General Questions</h5>
                    </div>
                  </div>
                  <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box" id="genques-accordion">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="genques-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseOne" aria-expanded="true" aria-controls="genques-collapseOne">
                          What is FoodTrip ?
                        </button>
                      </h2>
                      <div id="genques-collapseOne" class="accordion-collapse collapse show" aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                        <div class="accordion-body ff-secondary">
                          FoodTrip is a food ordering app that brings great food from local restaurants, straight to the doorsteps of hungry consumers.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="genques-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseTwo" aria-expanded="false" aria-controls="genques-collapseTwo">
                          Why register your restaurant to FoodTrip ?
                        </button>
                      </h2>
                      <div id="genques-collapseTwo" class="accordion-collapse collapse" aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                        <div class="accordion-body ff-secondary">
                          We help drive additional business to your restaurant or stall! Working with us allows you to tap into millions of hungry consumers on FoodTrip, allowing you to extend your business into the online space!
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="genques-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseThree" aria-expanded="false" aria-controls="genques-collapseThree">
                          How do I become a FoodTrip Merchant-partner ?
                        </button>
                      </h2>
                      <div id="genques-collapseThree" class="accordion-collapse collapse" aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                        <div class="accordion-body ff-secondary">
                          Register your restaurant by clicking the Register Now button. Please ensure to fill in the restaurants details as accurately as possible. After submitting the form, you will be redirected to a sign up page for a restaurant admin that will handle your restaurant's account on the FoodTrip website. When done signing up, the restaurant admin can now sign in using the email address and password that they have provided on the form.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="genques-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseFour" aria-expanded="false" aria-controls="genques-collapseFour">
                          What is a restaurant admin ?
                        </button>
                      </h2>
                      <div id="genques-collapseFour" class="accordion-collapse collapse" aria-labelledby="genques-headingFour" data-bs-parent="#genques-accordion">
                        <div class="accordion-body ff-secondary">
                          A restaurant admin is the person responsible in managing the account of the restaurant that has been registed on the FoodTrip website. They are the one who can access the dashboard, orders, invoices and products offered by the restaurant. They can also edit the restaurant details which the customer can see when they browse on the restaurant, update a particular order status and issue an invoice to customers.
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end accordion-->

                </div>
                <!-- end col -->
                <div class="col-lg-6">
                  <div class="d-flex align-items-center mb-2">
                    <div class="flex-shrink-0 me-1">
                      <i class="las la-store-alt fs-24 align-middle text-success me-1"></i>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-0 fw-semibold">Restaurant Management</h5>
                    </div>
                  </div>

                  <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box" id="privacy-accordion">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="privacy-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseOne" aria-expanded="false" aria-controls="privacy-collapseOne">
                          Can I cancel an order ?
                        </button>
                      </h2>
                      <div id="privacy-collapseOne" class="accordion-collapse collapse" aria-labelledby="privacy-headingOne" data-bs-parent="#privacy-accordion">
                        <div class="accordion-body ff-secondary">
                          We understand that sometimes, your items run out quickly or your kitchen is too busy and you need to cancel an existing order. FoodTrip allows you to cancel an existing order directly from the app by editing its order status. In order to avoid upsetting customers with cancellation for upcoming orders, please change the item availability immediately if the item is no longer available. Once the order is cancelled successfully, the customers will be informed automatically.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="privacy-headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseTwo" aria-expanded="true" aria-controls="privacy-collapseTwo">
                          Does my menu need to be the same price as it is in my store ?
                        </button>
                      </h2>
                      <div id="privacy-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="privacy-headingTwo" data-bs-parent="#privacy-accordion">
                        <div class="accordion-body ff-secondary">
                          Yes, Merchant shall guarantee that all Retail Prices of Meals offered on the FoodTrip App are substantially similar to the prices offered by Merchant to consumers through its own platform, channel or facility.

                          If you choose to list combo/set menus to sell on FoodTrip, please ensure that the items are available as ala-carte items in your in-store menu. Combo prices should be consistent as the sum of the ala carte prices in store.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="privacy-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseThree" aria-expanded="false" aria-controls="privacy-collapseThree">
                          How do I modify/update my menu ?
                        </button>
                      </h2>
                      <div id="privacy-collapseThree" class="accordion-collapse collapse" aria-labelledby="privacy-headingThree" data-bs-parent="#privacy-accordion">
                        <div class="accordion-body ff-secondary">
                          You can edit, add or remove products and categories from your menu on the FoodTrip App. Simply tap Products at the sidebar of your app to view the products list view, details and add product page. If adding an item, fill in all the mandatory fields (Item name, Price, Category) and add a photo of the item with description. Customers are more likely to choose dishes that are visually appealing. If editing an item, go to the product you wish to upadate and edit the details you have to revise. Upon successful completion, this message will appear: Item details updated. To permanently delete the item from the menu, choose Delete to confirm and a message will appear The item has been deleted.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="privacy-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseFour" aria-expanded="false" aria-controls="privacy-collapseFour">
                          How to search for items or orders in FoodTrip website ?
                        </button>
                      </h2>
                      <div id="privacy-collapseFour" class="accordion-collapse collapse" aria-labelledby="privacy-headingFour" data-bs-parent="#privacy-accordion">
                        <div class="accordion-body ff-secondary">
                          As your orders increase, it can also get challenging to manage them. That's why we've enhanced the Search feature in the FoodTrip app so that you can find the right item or order easily, save time, and be more efficient in managing your store. In the Orders page, tap the Search icon to look for an order. The search results will display in their corresponding status tabs (In Process, On the Way, Delivered, Rejected). You can also start typing in the Search bar to look for an item in your menu/catalog. Tooltips will be available to guide you through this feature.
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end accordion-->
                </div>
                <!-- end col -->
              </div>
              <!-- end row -->
            </div>
            <!-- end container -->
          </section>
          <!-- end faqs -->
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end faq -->



    <!-- start review -->
    <section class="section bg-primary" id="reviews">
      <div class="bg-overlay bg-overlay-pattern"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="text-center">
              <div>
                <i class="ri-double-quotes-l text-success display-3"></i>
              </div>
              <h4 class="text-white mb-5"><span class="text-success">19k</span>+ Satisfied clients</h4>

              <!-- Swiper -->
              <div class="swiper client-review-swiper rounded" dir="ltr">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="row justify-content-center">
                      <div class="col-10">
                        <div class="text-white-50">
                          <p class="fs-20 ff-secondary mb-4">" FoodTrip has helped our customers be aware of our menu items, in terms of bestsellers and different menu pairings. It has also given us a better understanding of our customers' feedback and most viewed products. Updating the menu is also very easy as we can update our menu instantaneously with one click of a button. "</p>
                          <div>
                            <h5 class="text-white">D' Original Pares</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end slide -->
                  <div class="swiper-slide">
                    <div class="row justify-content-center">
                      <div class="col-10">
                        <div class="text-white-50">
                          <p class="fs-20 ff-secondary mb-4">" As our brand Papa John's Pizza is growing, FoodTrip allowed us to simplify the ordering process and overall menu presentation to our customers. FoodTrip has been an integral part of Papa John's Pizza since our very first outlet in Quezon City. "</p>
                          <div>
                            <h5 class="text-white">Papa John's Pizza</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end slide -->
                  <div class="swiper-slide">
                    <div class="row justify-content-center">
                      <div class="col-10">
                        <div class="text-white-50">
                          <p class="fs-20 ff-secondary mb-4">" Phenomenal app - gives you such control over your menu for adding/removing items, amending prices, adding specials etc without having to go to the massive expense of a reprint each time. Our sales and tips increased by 20% - 30% using FoodTrip. Some days I don't understand how I get through without FoodTrip."</p>

                          <div>
                            <h5 class="text-white">Zark's Burgers</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end slide -->
                </div>
                <div class="swiper-button-next bg-white rounded-circle"></div>
                <div class="swiper-button-prev bg-white rounded-circle"></div>
                <div class="swiper-pagination position-relative mt-5"></div>
              </div>
              <!-- end slider -->
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end review -->

    <!-- start counter -->
    <section class="py-5 position-relative bg-light">
      <div class="container">
        <div class="row text-center gy-4">
          <div class="col-lg-3 col-6">
            <div>
              <h2 class="mb-2"><span class="counter-value" data-target="50">0</span>k+</h2>
              <div class="text-muted">Orders Completed</div>
            </div>
          </div>
          <!-- end col -->

          <div class="col-lg-3 col-6">
            <div>
              <h2 class="mb-2"><span class="counter-value" data-target="24">0</span></h2>
              <div class="text-muted">Win Awards</div>
            </div>
          </div>
          <!-- end col -->

          <div class="col-lg-3 col-6">
            <div>
              <h2 class="mb-2"><span class="counter-value" data-target="20.3">0</span>k</h2>
              <div class="text-muted">Satisfied Clients</div>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-3 col-6">
            <div>
              <h2 class="mb-2"><span class="counter-value" data-target="50">0</span></h2>
              <div class="text-muted">Employees</div>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end counter -->

    <!-- start Work Process -->
    <section class="section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="text-center mb-5">
              <h3 class="mb-3 fw-semibold">Our Work Process</h3>
              <p class="text-muted mb-4 ff-secondary">It's simple: we list your menu and products online, help you process orders, and deliver them to hungry customers - all in a heartbeat!
                Interested? Let's start your FoodTrip partnership today</p>
            </div>
          </div>
        </div>
        <!-- end row -->

        <div class="row text-center">
          <div class="col-lg-4">
            <div class="process-card mt-4">
              <div class="process-arrow-img d-none d-lg-block">
                <img src="<?php echo base_url('public/assets') ?>/images/landing/process-arrow-img.png" alt="" class="img-fluid">
              </div>
              <div class="avatar-sm icon-effect mx-auto mb-4">
                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                  <i class="ri-quill-pen-line"></i>
                </div>
              </div>

              <h5>Register your restaurant.</h5>
              <p class="text-muted ff-secondary">Sign up your restaurant on the FoodTrip website by clicking the Register Now / Sign Up button. Make sure to type the restaurant details as accurately as possible.</p>
              <a href="<?php echo base_url() ?>register/restaurant" class="btn btn-primary">Register <i class="ri-arrow-right-line ms-1 align-bottom"></i></a>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-4">
            <div class="process-card mt-4">
              <div class="process-arrow-img d-none d-lg-block">
                <img src="<?php echo base_url('public/assets') ?>/images/landing/process-arrow-img.png" alt="" class="img-fluid">
              </div>
              <div class="avatar-sm icon-effect mx-auto mb-4">
                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                  <i class="ri-user-follow-line"></i>
                </div>
              </div>

              <h5>Sign Up a Restaurant Admin</h5>
              <p class="text-muted ff-secondary">After submitting the form, you will be redirected to register a restaurant admin. Type the details of the restaurant admin on the form. The restaurant admin will be the one to manage your restaurant's products, orders and invoices on the FoodTrip website.</p>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-4">
            <div class="process-card mt-4">
              <div class="avatar-sm icon-effect mx-auto mb-4">
                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                  <i class="mdi mdi-presentation-play"></i>
                </div>
              </div>

              <h5>GO LIVE on FoodTrip</h5>
              <p class="text-muted ff-secondary">Congratulations! You are now a FoodTrip merchant-partner. You can now login to the FoodTrip website and gain access to your restaurant's account.</p>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end Work Process -->

    <!-- start usecase -->
    <section class="section bg-light" id="usecase">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="text-center mb-5">
              <h3 class="mb-3 fw-semibold">Our <span class="text-danger">Use Case</span></h3>
              <p class="text-muted mb-4 ff-secondary">Awesome features to streamline your restaurant business. Check them below.</p>
            </div>
          </div>
        </div>
        <!-- end row -->
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div class="card-body text-center p-4">
                <div class="mx-auto mb-4 position-relative">
                  <img src="https://www.gifcen.com/wp-content/uploads/2021/07/ramen-gif-3.gif" alt="" class="img-fluid use-cases">
                </div>
                <!-- end card body -->
                <h5 class="mb-1"><a href="<?php echo base_url() ?>register/restaurant" class="text-body">Menu Management</a></h5>
                <p class="text-muted mb-0 ff-secondary">Build and edit your menu anytime by yourself with one click. Customize your menu to reflect your branding. A faster and easier experience for all restaurant managers</p>
              </div>
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div class="card-body text-center p-4">
                <div class="mx-auto mb-4 position-relative">
                  <img src="https://delivery.namkalam.in/wp-content/uploads/2021/03/delivery.gif" alt="" class="img-fluid use-cases">
                </div>
                <!-- end card body -->
                <h5 class="mb-1"><a href="<?php echo base_url() ?>register/restaurant" class="text-body">Order Management</a></h5>
                <p class="text-muted mb-0 ff-secondary">Customers place their orders on FoodTrip without any help. The orders are reflected on the client side and can be managed by the restaurant admin.</p>
              </div>
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div class="card-body text-center p-4">
                <div class="mx-auto mb-4 position-relative">
                  <img src="https://cdn.dribbble.com/users/520375/screenshots/3645713/weblet-animation.gif" alt="" class="img-fluid use-cases">
                </div>
                <!-- end card body -->
                <h5 class="mb-1"><a href="<?php echo base_url() ?>register/restaurant" class="text-body">Payment Management</a></h5>
                <p class="text-muted mb-0 ff-secondary">52 % of the consumers want to make ordering and payment easier during dining activities. FoodTrip's payment module allows you to take online payments.</p>
              </div>
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div class="card-body text-center p-4">
                <div class="mx-auto mb-4 position-relative">
                  <img src="https://images.ctfassets.net/pnliwdxhy0tx/4BObUpGsDEaSOiUjoKGd68/a0991616b97aec2c7a9e4692f96f62b2/img.gif" alt="" class="img-fluid use-cases">
                </div>
                <!-- end card body -->
                <h5 class="mb-1"><a href="<?php echo base_url() ?>register/restaurant" class="text-body">Data Management</a></h5>
                <p class="text-muted mb-0 ff-secondary">The actions your guests make on your menu is precious. FoodTrip gives you a summary of the most/least sold items and revenue share across sections.</p>
              </div>
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center mt-2">
              <a href="#" class="btn btn-primary">View More <i class="ri-arrow-right-line ms-1 align-bottom"></i></a>
            </div>
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end usecase -->

    <!-- start contact -->
    <section class="section" id="contact">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="text-center mb-5">
              <h3 class="mb-3 fw-semibold">Get In Touch</h3>
              <p class="text-muted mb-4 ff-secondary">Contact us today to learn how FoodTrip can support your business. Fill out the form below and we'll be in touch as soon as possible.</p>
            </div>
          </div>
        </div>
        <!-- end row -->

        <div class="row gy-4">
          <div class="col-lg-4">
            <div>
              <div class="mt-4">
                <h5 class="fs-13 text-muted text-uppercase">Office Address 1:</h5>
                <div class="ff-secondary fw-semibold">Don Fabian St., Commonwealth, <br />Quezon City Philippines</div>
              </div>
              <div class="mt-4">
                <h5 class="fs-13 text-muted text-uppercase">Office Address 2:</h5>
                <div class="ff-secondary fw-semibold">A. Mabini Campus, Anonas Street, <br />Sta. Mesa
                  Manila, Philippines</div>
              </div>
              <div class="mt-4">
                <h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
                <div class="ff-secondary fw-semibold">9:00am to 6:00pm</div>
              </div>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-8">
            <div>
              <form>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <label for="name" class="form-label fs-13">Name</label>
                      <input name="name" id="name" type="text" class="form-control bg-light border-light" placeholder="Your name*">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <label for="email" class="form-label fs-13">Email</label>
                      <input name="email" id="email" type="email" class="form-control bg-light border-light" placeholder="Your email*">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="mb-4">
                      <label for="subject" class="form-label fs-13">Subject</label>
                      <input type="text" class="form-control bg-light border-light" id="subject" name="subject" placeholder="Your Subject.." />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label for="comments" class="form-label fs-13">Message</label>
                      <textarea name="comments" id="comments" rows="3" class="form-control bg-light border-light" placeholder="Your message..."></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 text-end">
                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end contact -->

    <!-- start cta -->
    <section class="py-5 bg-primary position-relative">
      <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
      <div class="container">
        <div class="row align-items-center gy-4">
          <div class="col-sm">
            <div>
              <h4 class="text-white mb-0 fw-semibold">Keep Your Business Up and Profitable</h4>
            </div>
          </div>
          <!-- end col -->
          <div class="col-sm-auto">
            <div>
              <a href="<?php echo base_url() ?>register/restaurant" target="_blank" class="btn bg-gradient btn-danger"><i class="ri-hand-coin-line align-middle me-1"></i> Partner with Us</a>
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
                <p>FoodTrip's easy-to-use platform increases table turn turnover, improves dining experience, and streamlines operations of casual restaurants.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-7 ms-lg-auto">
            <div class="row">
              <div class="col-sm-4 mt-4">
                <h5 class="text-white mb-0">Partner Restaurants</h5>
                <div class="text-muted mt-3">
                  <ul class="list-unstyled ff-secondary footer-list fs-14">
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
                  <ul class="list-unstyled ff-secondary footer-list fs-14">
                    <li><a href="#">Chinese Food</a></li>
                    <li><a href="#">Fast Food</a></li>
                    <li><a href="#">Filipino Food</a></li>
                    <li><a href="#">Japanese Food</a></li>
                    <li><a href="#">Mexican Food</a></li>
                    <li><a href="#">Seafood</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4 mt-4">
                <h5 class="text-white mb-0">Support</h5>
                <div class="text-muted mt-3">
                  <ul class="list-unstyled ff-secondary footer-list fs-14">
                    <li><a href="#">Help</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="<?php echo base_url() ?>register/restaurant">Be a FoodTrip Merchant</a></li>
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