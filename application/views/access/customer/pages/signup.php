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
                        <img src="<?php echo base_url('public/assets') ?>/images/small/food-1.jpg" alt="" class="foodtrip-bg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="<?php echo base_url('public/assets') ?>/images/small/food-2.jpg" alt="" class="foodtrip-bg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="<?php echo base_url('public/assets') ?>/images/small/food-3.jpg" alt="" class="foodtrip-bg" />
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="p-lg-5 p-4">
                    <div>
                      <div class="mb-4">
                        <a href="index.html" class="d-flex justify-content-center">
                          <img src="<?php echo base_url('public/assets') ?>/images/logo-dark.png" alt="" height="50">
                        </a>
                      </div>
                      <h5 class="text-primary">Register Account</h5>
                      <p class="text-muted">Get your Free FoodTrip account now.</p>
                    </div>

                    <div class="mt-4">
                      <form id="signup_form" class="needs-validation" novalidate>
                        <div class="mb-3">
                          <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
                          <div class="invalid-feedback">
                            Please enter First Name
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="middle-name" class="form-label">Middle Name</label>
                          <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter Middle Name">
                        </div>
                        <div class="mb-3">
                          <label for="last-name" class="form-label">Last Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
                          <div class="invalid-feedback">
                            Please enter Last Name
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="useremail" class="form-label">Email Address <span class="text-danger">*</span></label>
                          <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter email address" data-parsley-type="email" required>
                          <div class="invalid-feedback">
                            Please enter Email Address
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="phone_number" class="form-label">Phone Number <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="phone_number" name="phone_number" required pattern="^(09|\+639)\d{9}$" placeholder="####-###-####">
                          <div class="invalid-feedback">
                            Please enter a valid Phone Number
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="col-lg-12">
                            <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
                            <select class="form-select js-example-basic-single" id="gender" name="gender" data-choices data-choices-search-false required>
                              <option value="" selected disabled>Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Others">Others</option>
                            </select>
                            <div class="invalid-feedback">
                              Please select Gender
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                          <div class="position-relative auth-pass-inputgroup mb-3">
                            <input type="password" class="form-control pe-5" placeholder="Enter Password" id="password" name="password" required>
                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none" type="button" id="password-addon"><i class="bi bi-eye-slash" id="togglePassword"></i></button>
                            <div class="invalid-feedback">
                              Please create a Password
                            </div>
                          </div>
                        </div>

                        <div class="mt-4">
                          <button class="btn btn-success w-100" type="submit">Sign Up</button>
                        </div>

                        <div class="mt-4 text-center">
                          <div class="signin-other-title">
                            <h5 class="fs-13 mb-4 title text-muted">OR</h5>
                          </div>

                          <div id="buttonDiv" class="d-flex justify-content-center"></div>
                        </div>
                      </form>
                    </div>

                    <div class="mt-5 text-center">
                      <p class="mb-0">Already have an account ? <a href="<?php echo base_url() ?>signin" class="fw-semibold text-primary text-decoration-underline"> Signin</a> </p>
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