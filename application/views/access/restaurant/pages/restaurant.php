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
                    </div>
                    <div class="mt-4 form-steps">
                      <div class="row gy-5">
                        <div class="d-none">
                          <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-resto-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-resto-info" type="button" role="tab" aria-controls="v-pills-resto-info" aria-selected="true">
                            </button>
                            <button class="nav-link" id="v-pills-resto-address-tab" data-bs-toggle="pill" data-bs-target="#v-pills-resto-address" type="button" role="tab" aria-controls="v-pills-resto-address" aria-selected="false">
                            </button>
                            <button class="nav-link" id="v-pills-resto-hours-tab" data-bs-toggle="pill" data-bs-target="#v-pills-resto-hours" type="button" role="tab" aria-controls="v-pills-resto-hours" aria-selected="false">
                            </button>
                            <button class="nav-link" id="v-pills-resto-admin-tab" data-bs-toggle="pill" data-bs-target="#v-pills-resto-admin" type="button" role="tab" aria-controls="v-pills-resto-admin" aria-selected="false">
                            </button>
                            <button class="nav-link" id="v-pills-finish-tab" data-bs-toggle="pill" data-bs-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false">
                            </button>
                          </div>
                          <!-- end nav -->
                        </div> <!-- end col-->
                        <div class="col-lg-12">
                          <div>
                            <div class="tab-content">
                              <div class="tab-pane fade show active" id="v-pills-resto-info" role="tabpanel" aria-labelledby="v-pills-resto-info-tab">
                                <h5 class="text-primary">Register Restaurant</h5>
                                <p class="text-muted">Enter the Restaurant's Basic Information.</p>
                                <form class="needs-validation" novalidate>
                                  <div class="mb-3">
                                    <label for="resto_img" class="form-label">Restaurant Image <span class="text-danger">*</span></label>
                                    <input class="form-control" type="file" id="resto_img" name="resto_img" accept="image/png, image/jpeg" required>
                                    <div class="invalid-feedback">
                                      Please select Restaurant Image
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="resto_name" class="form-label">Restaurant Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="resto_name" name="resto_name" placeholder="Enter Restaurant Name" required>
                                    <div class="invalid-feedback">
                                      Please enter Restaurant Name
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="resto_email" class="form-label">Restaurant Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="resto_email" name="resto_email" placeholder="Enter Restaurant Email Address" required>
                                    <div class="invalid-feedback">
                                      Please enter Restaurant Email Address
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="resto_phone" class="form-label">Restaurant Phone </label>
                                    <input type="number" class="form-control" id="resto_phone" name="resto_phone" placeholder="Enter Restaurant Phone">
                                    <div class="invalid-feedback">
                                      Please enter Restaurant Phone
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="resto_landline" class="form-label">Restaurant Landline <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="resto_landline" name="resto_landline" placeholder="Enter Restaurant Landline" required>
                                    <div class="invalid-feedback">
                                      Please enter Restaurant Landline
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="resto_website" class="form-label">Restaurant Website <span class="text-danger">*</span></label>
                                    <input type="url" class="form-control" id="resto_website" name="resto_website" placeholder="Enter Restaurant Website" required>
                                    <div class="invalid-feedback">
                                      Please enter Restaurant Website
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <div class="col-lg-12">
                                      <label for="restocatg_name" class="form-label">Restaurant Category <span class="text-danger">*</span></label>
                                      <select class="js-example-basic-single" id="restocatg_name" name="restocatg_name">
                                        <option value="" selected disabled>Select Restaurant Category</option>
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

                                  <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-resto-address-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Address</button>
                                  </div>
                                </form>
                              </div>
                              <!-- end tab pane -->
                              <div class="tab-pane fade" id="v-pills-resto-address" role="tabpanel" aria-labelledby="v-pills-resto-address-tab">
                                <h5 class="text-primary">Register Restaurant</h5>
                                <p class="text-muted">Enter the Restaurant's Registered Address.</p>
                                <form class="needs-validation" novalidate>
                                  <div class="mb-3">
                                    <label for="region" class="form-label">Region <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="region" name="region" placeholder="Enter Restaurant Region" required>
                                    <div class="invalid-feedback">
                                      Please enter Region
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="province" class="form-label">Province <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="province" name="province" placeholder="Enter Restaurant Province" required>
                                    <div class="invalid-feedback">
                                      Please enter Province
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter Restaurant City">
                                    <div class="invalid-feedback">
                                      Please enter City
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="barangay" class="form-label">Barangay <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Enter Restaurant Barangay" required>
                                    <div class="invalid-feedback">
                                      Please enter Barangay
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="zip_code" class="form-label">ZIP Code <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Enter Restaurant ZIP Code" required>
                                    <div class="invalid-feedback">
                                      Please enter ZIP Code
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <div class="col-lg-12">
                                      <label for="address_1" class="form-label">Address Line 1 <span class="text-danger">*</span></label>
                                      <input type="text" class="form-control" id="address_1" name="address_1" placeholder="Enter Floor No, Building Name, Street Name" required>
                                      <div class="invalid-feedback">
                                        Please enter Address Line 1
                                      </div>
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <div class="col-lg-12">
                                      <label for="address_2" class="form-label">Address Line 2 <span class="text-danger">*</span></label>
                                      <input type="text" class="form-control" id="address_2" name="address_2" placeholder="Road, Subdivision, Center, Avenue">
                                    </div>
                                  </div>

                                  <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-resto-hours-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Opening Hours</button>
                                  </div>
                                </form>
                              </div>
                              <!-- end tab pane -->
                              <div class="tab-pane fade" id="v-pills-resto-hours" role="tabpanel" aria-labelledby="v-pills-resto-hours-tab">
                                <h5 class="text-primary">Register Restaurant</h5>
                                <p class="text-muted">Enter the Restaurant's Opening Hours.</p>
                                <form class="needs-validation" novalidate>
                                  <div id="newlink">
                                    <div id="1">
                                      <div class="row">
                                        <div class="col-md-6 mb-3">
                                          <label for="day" class="form-label">Day of the Week <span class="text-danger">*</span></label>
                                          <select class="form-control" data-choices data-choices-sorting-false data-choices-search-false id="day" name="day">
                                            <option value="" selected disabled>Select Day</option>
                                            <option value="1">Monday</option>
                                            <option value="2">Tuesday</option>
                                            <option value="3">Wednesday</option>
                                            <option value="4">Thursday</option>
                                            <option value="5">Friday</option>
                                            <option value="6">Saturday</option>
                                            <option value="7">Sunday</option>
                                          </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="open_time" class="form-label">Open Time <span class="text-danger">*</span></label>
                                          <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="open_time" name="open_time" required>
                                          <div class="invalid-feedback">
                                            Please select an Open Time
                                          </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="close_time" class="form-label">Close Time</label>
                                          <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="close_time" name="close_time" required>
                                          <div class="invalid-feedback">
                                            Please select a Close Time
                                          </div>
                                        </div>
                                        <div class="hstack gap-2 mb-4 justify-content-end">
                                          <a class="btn btn-success" href="javascript:deleteEl(1)">Delete</a>
                                        </div>
                                      </div>
                                      <!--end row-->
                                    </div>
                                  </div>
                                  <div id="newForm" style="display: none;">

                                  </div>
                                  <div class="col-lg-12">
                                    <div class="hstack gap-2">
                                      <a href="javascript:new_link()" class="btn btn-primary">Add New</a>
                                    </div>
                                  </div>
                                  <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-resto-admin-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Go to RestoAdmin</button>
                                  </div>
                                </form>
                              </div>
                              <!-- end tab pane -->
                              <div class="tab-pane fade" id="v-pills-resto-admin" role="tabpanel" aria-labelledby="v-pills-resto-admin-tab">
                                <h5 class="text-primary">Register Restaurant</h5>
                                <p class="text-muted">Sign up a Restaurant Admin to manage your restaurant.</p>
                                <form class="needs-validation" novalidate>
                                  <div class="mb-3">
                                    <label for="first-name" class="form-label">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="first-name" name="first-name" placeholder="Enter First Name" required>
                                    <div class="invalid-feedback">
                                      Please enter First Name
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="middle-name" class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" id="middle-name" name="middle-name" placeholder="Enter Middle Name">
                                  </div>
                                  <div class="mb-3">
                                    <label for="last-name" class="form-label">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Enter Last Name">
                                    <div class="invalid-feedback">
                                      Please enter Last Name
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <label for="email_address" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter Email Address" required>
                                    <div class="invalid-feedback">
                                      Please enter Email Address
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                                    <div class="position-relative auth-pass-inputgroup">
                                      <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
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

                                  <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-finish-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Sign Up</button>
                                  </div>
                                </form>
                              </div>
                              <!-- end tab pane -->
                              <div class="tab-pane fade" id="v-pills-finish" role="tabpanel" aria-labelledby="v-pills-finish-tab">
                                <div class="text-center pt-4 pb-2">

                                  <div class="mb-4">
                                    <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                  </div>
                                  <h5>You have successfully Signed Up !</h5>
                                  <p class="text-muted mb-5">You can now login to the FoodTrip website and manage your restaurant.</p>
                                  <a href="">Go to Login</a>
                                </div>
                              </div>
                              <!-- end tab pane -->
                            </div>
                            <!-- end tab content -->
                          </div>
                        </div>
                        <!-- end col -->
                      </div>
                      <!-- end row -->
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