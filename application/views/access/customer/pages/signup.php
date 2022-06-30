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
                      <form class="needs-validation" novalidate action="index.html">
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
                          <div class="invalid-feedback">
                            Please enter Middle Name
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="last-name" class="form-label">Last Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name">
                          <div class="invalid-feedback">
                            Please enter Last Name
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="useremail" class="form-label">Email Address <span class="text-danger">*</span></label>
                          <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter email address" required>
                          <div class="invalid-feedback">
                            Please enter Email Address
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="phone_number" class="form-label">Phone Number <span class="text-danger">*</span></label>
                          <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone Number">
                          <div class="invalid-feedback">
                            Please enter Phone Number
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="col-lg-12">
                            <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
                            <select class="js-example-basic-single" id="gender" name="gender">
                              <option value="1">Male</option>
                              <option value="2">Female</option>
                              <option value="3">Others</option>
                            </select>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="password-input">Password</label>
                          <div class="position-relative auth-pass-inputgroup">
                            <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                            <div class="invalid-feedback">
                              Please enter password
                            </div>
                          </div>
                        </div>
                        <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                          <h5 class="fs-13">Password must contain:</h5>
                          <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                          <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                          <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                          <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
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
                      <p class="mb-0">Already have an account ? <a href="auth-signin-cover.html" class="fw-semibold text-primary text-decoration-underline"> Signin</a> </p>
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