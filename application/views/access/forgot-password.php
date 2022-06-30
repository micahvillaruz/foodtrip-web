<body>

  <!-- auth-page wrapper -->
  <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-overlay"></div>
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card overflow-hidden">
              <div class="row justify-content-center g-0">
                <div class="col-lg-6">
                  <img src="https://cdn.dribbble.com/users/1741026/screenshots/6549026/nest_forgot_password_dribbble.gif" class="foodtrip-bg" alt="" height="50">
                  <div class="position-relative h-100 d-flex flex-column">
                  </div>
                </div>
                <!-- end col -->

                <div class="col-lg-6">
                  <div class="p-lg-5 p-4">
                    <div class="mb-4">
                      <a href="index.html" class="d-flex justify-content-center">
                        <img src="<?php echo base_url('public/assets') ?>/images/logo-dark.png" alt="" height="50">
                      </a>
                    </div>
                    <h5 class="text-primary">Forgot Password?</h5>
                    <p class="text-muted">Reset password with FoodTrip</p>

                    <div class="mt-2 text-center">
                      <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c" class="avatar-xl">
                      </lord-icon>
                    </div>

                    <div class="alert alert-borderless alert-warning text-center mb-2 mx-2" role="alert">
                      Enter your email and instructions will be sent to you!
                    </div>
                    <div class="p-2">
                      <form class="needs-validation" novalidate>
                        <div class=" mb-4">
                          <label for="email_address" class="form-label">Email Address <span class="text-danger">*</span></label>
                          <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter Email Address" required>
                          <div class="invalid-feedback">
                            Please enter Email Address
                          </div>
                        </div>

                        <div class="text-center mt-4">
                          <button class="btn btn-success w-100" type="submit">Send Reset Link</button>
                        </div>
                      </form><!-- end form -->
                    </div>

                    <div class="mt-5 text-center">
                      <p class="mb-0">Wait, I remember my password... <a href="auth-signin-cover.html" class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
                    </div>
                  </div>
                </div>
                <!-- end col -->
              </div>
              <!-- end row -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->

        </div>
        <!-- end row -->