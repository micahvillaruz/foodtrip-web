<div class="main-content">

  <div class="page-content">
    <div class="container-fluid">

      <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-setting-img">
          <img src="<?php echo base_url('public/assets') ?>/images/auth-one-bg.jpg" class="profile-wid-img" alt="">
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
                            <input type="text" class="form-control form-control-icon" id="first_name" placeholder="Enter your First Name" value="Ernesto">
                            <i class="bx bx-id-card fs-16"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label for="middle_name" class="form-label">Middle Name</label>
                          <div class="form-icon">
                            <input type="text" class="form-control form-control-icon" id="middle_name" placeholder="Enter your Middle Name">
                            <i class="ri-account-box-line fs-16"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label for="last_name" class="form-label">Last Name</label>
                          <div class="form-icon">
                            <input type="text" class="form-control form-control-icon" id="last_name" placeholder="Enter your Last Name" value="Tanmantiong">
                            <i class="mdi mdi-account-edit-outline fs-17"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label for="email_address" class="form-label">Email Address</label>
                          <div class="form-icon">
                            <input type="email" class="form-control form-control-icon" id="email_address" placeholder="Enter your Email Address" value="etanmantiong@gmail.com">
                            <i class="ri-mail-unread-line"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label for="phone_number" class="form-label">Phone Number</label>
                          <div class="form-icon">
                            <input type="number" class="form-control form-control-icon" id="phone_number" placeholder="Enter your Phone Number" value="09171318000">
                            <i class="ri-phone-line"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-12">
                        <div class="mb-3">
                          <label for="gender" class="form-label">Gender</label>
                          <select class="form-control" id="gender" name="gender" data-choices data-choices-search-false data-choices-removeItem>
                            <option value="">Select Gender</option>
                            <option value="Male" selected> Male</option>
                            <option value="Female"> Female</option>
                            <option value="Others"> Others</option>
                          </select>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-12">
                        <div class="hstack gap-2 justify-content-end">
                          <button type="submit" class="btn btn-primary">Updates</button>
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
                  <form action="javascript:void(0);">
                    <div class="row mb-3">
                      <div class="col-lg-3">
                        <label for="password" class="form-label">Old Password</label>
                      </div>
                      <div class="col-lg-9">
                        <input type="password" class="form-control" id="password" placeholder="Enter Current Password">
                        <div class="mt-1 ms-1">
                          <a href="javascript:void(0);" class="link-primary fs-12 fst-italic text-primary">Forgot Password ?</a>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-lg-3">
                        <label for="new-password" class="form-label">New Password</label>
                      </div>
                      <div class="col-lg-9">
                        <input type="password" class="form-control" id="new-password" placeholder="Enter New Password">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-lg-3">
                        <label for="confirm-password" class="form-label">Confirm Password</label>
                      </div>
                      <div class="col-lg-9">
                        <input type="password" class="form-control" id="confirm-password" placeholder="Confirm New Password">
                      </div>
                    </div>
                    <div class="text-end">
                      <button type="submit" class="btn btn-success">Change Password</button>
                    </div>
                  </form>
                </div>
                <!--end tab-pane-->
              </div>
            </div>
          </div>
        </div>
        <!--end col-->
      </div>
      <!--end row-->