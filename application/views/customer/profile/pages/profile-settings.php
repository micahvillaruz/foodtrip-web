<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg profile-setting-img">
                    <img src="<?php echo base_url('public/assets') ?>/images/auth-one-bg.jpg" class="profile-wid-img"
                        alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                        <i class="fas fa-home"></i> Personal Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                        <i class="far fa-user"></i> Change Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <form action="javascript:void(0);">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="first_name" class="form-label">First Name</label>
                                                    <div class="form-icon">
                                                        <input type="text" class="form-control form-control-icon"
                                                            id="first_name" placeholder="Enter your First Name"
                                                            value="Avrielle Haven">
                                                        <i class="bx bx-id-card fs-16"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="middle_name" class="form-label">Middle Name</label>
                                                    <div class="form-icon">
                                                        <input type="text" class="form-control form-control-icon"
                                                            id="middle_name" placeholder="Enter your Middle Name"
                                                            value="Fernandez">
                                                        <i class="ri-account-box-line fs-16"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="last_name" class="form-label">Last Name</label>
                                                    <div class="form-icon">
                                                        <input type="text" class="form-control form-control-icon"
                                                            id="last_name" placeholder="Enter your Last Name"
                                                            value="Juarez">
                                                        <i class="mdi mdi-account-edit-outline fs-17"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="email_address" class="form-label">Email Address</label>
                                                    <div class="form-icon">
                                                        <input type="email" class="form-control form-control-icon"
                                                            id="email_address" placeholder="Enter your Email Address"
                                                            value="avijuarez@gmail.com">
                                                        <i class="ri-mail-unread-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="phone_number" class="form-label">Phone Number</label>
                                                    <div class="form-icon">
                                                        <input type="text" class="form-control form-control-icon"
                                                            id="phone_number" placeholder="Enter your Phone Number"
                                                            value="09872537193">
                                                        <i class="ri-phone-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="gender" class="form-label">Gender</label>
                                                    <select class="form-control" id="gender" name="gender" data-choices
                                                        data-choices-search-false data-choices-removeItem>
                                                        <option value="">Select Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female" selected>Female</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                    <button type="button" class="btn btn-soft-success">Cancel</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <!--end tab-pane-->
                                <div class="tab-pane" id="changePassword" role="tabpanel">
                                    <div class="card shadow-none">
                                        <div class="card-body form-steps">
                                            <form action="#">
                                                <div id="custom-progress-bar" class="progress-nav mb-4">
                                                    <div class="progress" style="height: 1px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>

                                                    <ul class="nav nav-pills progress-bar-tab custom-nav"
                                                        role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link rounded-pill active"
                                                                data-progressbar="custom-progress-bar"
                                                                id="pills-gen-info-tab" data-bs-toggle="pill"
                                                                data-bs-target="#pills-gen-info" type="button"
                                                                role="tab" aria-controls="pills-gen-info"
                                                                aria-selected="true">1</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link rounded-pill"
                                                                data-progressbar="custom-progress-bar"
                                                                id="pills-info-desc-tab" data-bs-toggle="pill"
                                                                data-bs-target="#pills-info-desc" type="button"
                                                                role="tab" aria-controls="pills-info-desc"
                                                                aria-selected="false">2</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link rounded-pill"
                                                                data-progressbar="custom-progress-bar"
                                                                id="pills-success-tab" data-bs-toggle="pill"
                                                                data-bs-target="#pills-success" type="button" role="tab"
                                                                aria-controls="pills-success"
                                                                aria-selected="false">3</button>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="pills-gen-info"
                                                        role="tabpanel" aria-labelledby="pills-gen-info-tab">
                                                        <div>
                                                            <div class="mb-4">
                                                                <div>
                                                                    <h5 class="mb-1">Account Information</h5>
                                                                    <p class="text-muted">Fill all Information as below
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="password">Old
                                                                    Password</label>
                                                                <input type="password" class="form-control mb-3"
                                                                    id="password" placeholder="Enter Current Password">
                                                                <a href="javascript:void(0);"
                                                                    class="link-primary text-decoration-underline">Forgot
                                                                    Password ?</a>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-start gap-3 mt-4">
                                                            <button type="button"
                                                                class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                                data-nexttab="pills-info-desc-tab"><i
                                                                    class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Change
                                                                Password</button>
                                                        </div>
                                                    </div>
                                                    <!-- end tab pane -->

                                                    <div class="tab-pane fade" id="pills-info-desc" role="tabpanel"
                                                        aria-labelledby="pills-info-desc-tab">
                                                        <div>
                                                            <div>
                                                                <div class="mb-4">
                                                                    <label class="form-label" for="password">New
                                                                        Password</label>
                                                                    <input type="text" class="form-control"
                                                                        id="password" placeholder="Enter New Password">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="mb-4">
                                                                    <label class="form-label"
                                                                        for="password-confirm">Confirm Password</label>
                                                                    <input type="text" class="form-control"
                                                                        id="password-confirm"
                                                                        placeholder="Confirm Password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-start gap-3 mt-4">
                                                            <button type="button"
                                                                class="btn btn-link text-decoration-none btn-label previestab"
                                                                data-previous="pills-gen-info-tab"><i
                                                                    class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>
                                                                Back</button>
                                                            <button type="button"
                                                                class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                                data-nexttab="pills-success-tab"><i
                                                                    class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
                                                        </div>
                                                    </div>
                                                    <!-- end tab pane -->

                                                    <div class="tab-pane fade" id="pills-success" role="tabpanel"
                                                        aria-labelledby="pills-success-tab">
                                                        <div>
                                                            <div class="text-center">

                                                                <div class="mb-4">
                                                                    <lord-icon
                                                                        src="https://cdn.lordicon.com/lupuorrc.json"
                                                                        trigger="loop"
                                                                        colors="primary:#0ab39c,secondary:#405189"
                                                                        style="width:120px;height:120px"></lord-icon>
                                                                </div>
                                                                <h5>Well Done !</h5>
                                                                <p class="text-muted">You have Successfully Changed your
                                                                    Password</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end tab pane -->
                                                </div>
                                                <!-- end tab content -->
                                            </form>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end tab-pane-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->