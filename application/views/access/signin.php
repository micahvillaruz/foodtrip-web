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
                                                <form action="index.html">

                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email Address</label>
                                                        <input type="email" class="form-control" id="email" placeholder="Enter email address" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <div class="float-end">
                                                            <a href="auth-pass-reset-cover.html" class="text-muted">Forgot password?</a>
                                                        </div>
                                                        <label class="form-label" for="password-input">Password</label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input type="password" class="form-control pe-5" placeholder="Enter password" id="password-input" required>
                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        </div>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
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
                                                <p class="mb-0">Don't have an account ? <a href="auth-signup-cover.html" class="fw-semibold text-primary text-decoration-underline"> Signup</a> </p>
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