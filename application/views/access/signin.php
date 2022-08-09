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
                            <div class="row g-0">
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
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <div class="mb-4">
                                                <a href="index.html" class="d-flex justify-content-center pb-3">
                                                    <img src="<?php echo base_url('public/assets') ?>/images/logo-dark.png" alt="" height="60">
                                                </a>
                                                <h5 class="text-primary pt-2">Welcome Back !</h5>
                                                <p class="text-muted">Sign in to continue to FoodTrip.</p>
                                            </div>

                                            <div class="mt-4">
                                                <form class="needs-validation" novalidate id="signin_form" name="signin_form" enctype="multipart/form-data">

                                                    <div class="mb-3">
                                                        <label for="email_address" class="form-label">Email Address <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter Email Address" required>
                                                        <div class="invalid-feedback">
                                                            Please enter Email Address
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <div class="float-end">
                                                            <a href="#" class="text-muted">Forgot password?</a>
                                                        </div>
                                                        <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input type="password" class="form-control pe-5" placeholder="Enter Password" id="password" name="password" required>
                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none" type="button" id="password-addon"><i class="bi bi-eye-slash" id="togglePassword"></i></button>
                                                            <div class="invalid-feedback">
                                                                Please enter Password
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="remember-check" name="remember-check">
                                                        <label class="form-check-label" for="remember-check">Remember me</label>
                                                    </div>

                                                    <div class="mt-4">
                                                        <button class="btn btn-success w-100" type="submit">Sign In</button>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <div class="signin-other-title">
                                                            <h5 class="fs-13 mb-4 title">OR</h5>
                                                        </div>
                                                        <div id="buttonDiv" class="d-flex justify-content-center"></div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="mt-5 text-center">
                                                <p class="mb-0">Don't have an account ? <a href="<?php echo base_url() ?>signup/customer" class="fw-semibold text-primary text-decoration-underline"> Signup</a> </p>
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