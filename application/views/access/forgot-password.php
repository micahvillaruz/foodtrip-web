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
                  <div class="p-lg-5 p-4 auth-one-bg h-100">
                    <div class="bg-overlay"></div>
                    <div class="position-relative h-100 d-flex flex-column">
                      <div class="mb-4">
                        <a href="index.html" class="d-block">
                          <img src="<?php echo base_url('public/assets') ?>/images/logo-light.png" alt="" height="50">
                        </a>
                      </div>
                      <div class="mt-auto">
                        <div class="mb-3">
                          <i class="ri-double-quotes-l display-4 text-success"></i>
                        </div>

                        <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                          <div class="carousel-inner text-center text-white pb-5">
                            <div class="carousel-item active">
                              <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                            </div>
                            <div class="carousel-item">
                              <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."</p>
                            </div>
                            <div class="carousel-item">
                              <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                            </div>
                          </div>
                        </div>
                        <!-- end carousel -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end col -->

                <div class="col-lg-6">
                  <div class="p-lg-5 p-4">
                    <h5 class="text-primary">Forgot Password?</h5>
                    <p class="text-muted">Reset password with velzon</p>

                    <div class="mt-2 text-center">
                      <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c" class="avatar-xl">
                      </lord-icon>
                    </div>

                    <div class="alert alert-borderless alert-warning text-center mb-2 mx-2" role="alert">
                      Enter your email and instructions will be sent to you!
                    </div>
                    <div class="p-2">
                      <form>
                        <div class="mb-4">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter email address">
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