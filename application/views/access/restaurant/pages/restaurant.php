<body>

  <!-- auth-page wrapper -->
  <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-overlay"></div>
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card overflow-hidden m-0">
              <div class="row justify-content-center g-0">
                <div class="col-lg-6">
                  <div class="swiper effect-fade-swiper rounded h-100">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="<?php echo base_url('public/assets') ?>/images/small/resto-1.jpg" alt="" class="foodtrip-bg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="<?php echo base_url('public/assets') ?>/images/small/resto-2.jpg" alt="" class="foodtrip-bg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="<?php echo base_url('public/assets') ?>/images/small/resto-3.jpg" alt="" class="foodtrip-bg" />
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="p-lg-5 p-4">
                    <div>
                      <div class="mb-4">
                        <a href="index.html" class="d-block text-center">
                          <img src="<?php echo base_url('public/assets') ?>/images/logo-dark.png" alt="" height="50">
                        </a>
                      </div>
                      <h5 class="text-primary">Register Restaurant</h5>
                      <p class="text-muted">Register your restaurant with FoodTrip now.</p>
                    </div>
                    <div class="mt-4">
                      <form class="needs-validation" novalidate>
                        <div class="mb-3">
                          <label for="restaurant-img" class="form-label">Restaurant Image <span class="text-danger">*</span></label>
                          <input class="form-control" type="file" id="restaurant-img" accept="image/png, image/jpeg" required>
                        </div>
                        <div class="mb-3">
                          <label for="restaurant-name" class="form-label">Restaurant Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="restaurant-name" placeholder="Enter Restaurant Name" required>
                          <div class="invalid-feedback">
                            Please enter Restaurant Name
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="restaurant-email" class="form-label">Restaurant Email Address <span class="text-danger">*</span></label>
                          <input type="email" class="form-control" id="restaurant-email" placeholder="Enter Restaurant Email Address" required>
                          <div class="invalid-feedback">
                            Please enter Restaurant Email Address
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="restaurant-phone" class="form-label">Restaurant Phone </label>
                          <input type="number" class="form-control" id="restaurant-phone" placeholder="Enter Restaurant Phone">
                          <div class="invalid-feedback">
                            Please enter Restaurant Phone
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="restaurant-landline" class="form-label">Restaurant Landline <span class="text-danger">*</span></label>
                          <input type="number" class="form-control" id="restaurant-landline" placeholder="Enter Restaurant Landline" required>
                          <div class="invalid-feedback">
                            Please enter Restaurant Landline
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="restaurant-website" class="form-label">Restaurant Website <span class="text-danger">*</span></label>
                          <input type="url" class="form-control" id="restaurant-website" placeholder="Enter Restaurant Website" required>
                          <div class="invalid-feedback">
                            Please enter Restaurant Website
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="col-lg-12">
                            <label for="restaurant-category" class="form-label">Restaurant Category <span class="text-danger">*</span></label>
                            <select class="js-example-basic-single" name="restaurant-category">
                              <option value="1">Fine Dining</option>
                              <option value="2">Casual Dining</option>
                              <option value="3">Contemporary Casual</option>
                              <option value="4">Family Style</option>
                              <option value="5">Fast Casual</option>
                              <option value="6">Fast Food</option>
                              <option value="7">Cafe</option>
                              <option value="8">Buffet</option>
                            </select>
                          </div>
                        </div>

                        <div class="mt-5">
                          <button class="btn btn-success w-100" type="submit">Register Restaurant</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->

        </div>
        <!-- end row -->