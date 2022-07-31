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
                  <a class="nav-link active" data-bs-toggle="tab" href="#restaurantDetails" role="tab">
                    <i class="fas fa-home"></i> Restaurant Details
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#openingHours" role="tab">
                    <i class="far fa-envelope"></i> Opening Hours
                  </a>
                </li>
              </ul>
            </div>
            <div class="card-body p-4">
              <div class="tab-content">
                <div class="tab-pane active" id="restaurantDetails" role="tabpanel">
                  <form action="javascript:void(0);">
                    <div class="row">
                      <div class="mb-4">
                        <h5 class="fs-13 mb-1 text-dark form-label">Restaurant Image</h5>
                        <div class="text-center">
                          <div class="position-relative d-inline-block">
                            <div class="position-absolute top-100 start-100 translate-middle">
                              <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                <div class="avatar-xs">
                                  <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                    <i class="ri-image-fill"></i>
                                  </div>
                                </div>
                              </label>
                              <input class="form-control d-none" value="" id="product-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                            </div>
                            <div class="avatar-lg">
                              <div class="avatar-title bg-light rounded">
                                <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jollibee.jpg" id="product-img" class="avatar-md h-auto" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="mb-3">
                          <label for="resto_name" class="form-label">Restaurant Name</label>
                          <div class="form-icon">
                            <input type="text" class="form-control form-control-icon" id="resto_name" placeholder="Enter Restaurant Name" value="Jollibee">
                            <i class="ri-building-fill"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label for="restocatg_name" class="form-label d-flex justify-content-between">Restaurant Category <a href="#" class="text-decoration-underline">Add
                              New</a></label>
                          <select class="form-select" id="restocatg_name" name="restocatg_name" data-choices data-choices-search>
                            <option value="1">American</option>
                            <option value="2">Bakery</option>
                            <option value="3">Buffet</option>
                            <option value="4">Cafe</option>
                            <option value="5">Casual Dining</option>
                            <option value="6">Chinese</option>
                            <option value="7">Contemporary Casual</option>
                            <option value="8">Family Style</option>
                            <option value="9">Fast Casual</option>
                            <option value="10" selected>Fast Food</option>
                            <option value="11">Filipino</option>
                            <option value="12">Fine Dining</option>
                            <option value="13">Italian</option>
                            <option value="14">Japanese</option>
                            <option value="15">Quick Bites</option>
                          </select>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label for="resto_website" class="form-label">Website</label>
                          <div class="form-icon">
                            <input type="url" class="form-control form-control-icon" id="resto_website" placeholder="Enter Restaurant Website" value="www.jollibee.com.ph">
                            <i class="ri-global-line"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label for="resto_phone" class="form-label">Phone Number</label>
                          <div class="form-icon">
                            <input type="text" class="form-control form-control-icon" id="resto_phone" placeholder="Enter Phone Number" value="+63 917 131 8000">
                            <i class="mdi mdi-cellphone"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label for="resto_landline" class="form-label">Landline Number</label>
                          <div class="form-icon">
                            <input type="text" class="form-control form-control-icon" id="resto_landline" placeholder="Enter Landline Number" value="(02) 8-7000">
                            <i class="ri-phone-fill"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label for="email_address" class="form-label">E-mail</label>
                          <div class="form-icon">
                            <input type="email" class="form-control form-control-icon" id="email_address" placeholder="Enter Email Address" value="president@jollibee.com.ph">
                            <i class="ri-mail-fill"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label for="gender" class="form-label">Status</label>
                          <select class="form-control" id="gender" name="gender" data-choices data-choices-search-false data-choices-removeItem>
                            <option value="">Select Status</option>
                            <option value="Open" selected>Open</option>
                            <option value="Closed">Closed</option>
                          </select>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label for="region" class="form-label">Region</label>
                          <div class="form-icon">
                            <input type="text" class="form-control form-control-icon" id="region" placeholder="Enter Region" value="Metro Manila">
                            <i class="ri-map-pin-range-fill"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label for="province" class="form-label">Province</label>
                          <div class="form-icon">
                            <input type="text" class="form-control form-control-icon" id="province" placeholder="Enter Province" value="Metro Manila">
                            <i class="mdi mdi-map-legend fs-15"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label for="city" class="form-label">City</label>
                          <div class="form-icon">
                            <input type="text" class="form-control form-control-icon" id="city" placeholder="Enter City" value="Pasig City">
                            <i class="bx bxs-city fs-15"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label for="barangay" class="form-label">Barangay</label>
                          <div class="form-icon">
                            <input type="text" class="form-control form-control-icon" id="barangay" placeholder="Enter Barangay" value="San Antonio">
                            <i class="mdi mdi-home-group fs-18"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label for="zip_code" class="form-label">ZIP Code</label>
                          <div class="form-icon">
                            <input type="number" class="form-control form-control-icon" id="zip_code" placeholder="Enter ZIP Code" value="1600">
                            <i class="mdi mdi-mailbox fs-15"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-12">
                        <div class="mb-3">
                          <label for="address_1" class="form-label">Address Line 1</label>
                          <div class="form-icon">
                            <input type="text" class="form-control form-control-icon" id="address_1" name="address_1" placeholder="Enter Lot & Block No, House No, Street Name" value="10/F Jollibee Plaza Building">
                            <i class="ri-home-heart-line"></i>
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-12 mb-4 pb-3">
                        <div class="mb-3">
                          <label for="address_2" class="form-label">Address Line 2</label>
                          <div class="form-icon">
                            <input type="text" class="form-control form-control-icon" id="address_2" name="address_2" placeholder="Enter Bulding Name, Subdivision, Avenue" value="Emerald Ave., Ortigas Center">
                            <i class="ri-community-line fs-15"></i>
                          </div>

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
                <div class="tab-pane" id="openingHours" role="tabpanel">
                  <form>
                    <div id="newlink">
                      <div id="1">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="day" class="form-label">Day of the Week</label>
                              <select class="form-control" data-choices data-choices-sorting-false data-choices-search-false name="day" id="day">
                                <option value="">Select Day</option>
                                <option value="1" selected>Monday</option>
                                <option value="2">Tuesday</option>
                                <option value="3">Wednesday</option>
                                <option value="4">Thursday</option>
                                <option value="5">Friday</option>
                                <option value="6">Saturday</option>
                                <option value="7">Sunday</option>
                              </select>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <div class="hstack opentime-gap">
                                <label for="open_time" class="form-label">Open Time</label>
                                <label for="close_time" class="form-label">Close Time</label>
                              </div>
                              <div class="row">
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="open_time" value="07:00 AM">
                                </div>
                                <!--end col-->
                                <div class="col-auto align-self-center">
                                  to
                                </div>
                                <!--end col-->
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="close_time" value="12:00 AM">
                                </div>
                                <!--end col-->
                              </div>
                              <!--end row-->
                            </div>
                          </div>
                          <!--end col-->
                          <div class="hstack gap-2 justify-content-end">
                            <a class="deletebtn-gap btn btn-success" href="javascript:deleteEl(1)">Delete</a>
                          </div>
                        </div>
                        <!--end row-->
                      </div>
                      <div id="2">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="day" class="form-label">Day of the Week</label>
                              <select class="form-control" data-choices data-choices-sorting-false data-choices-search-false name="day" id="day">
                                <option value="">Select Day</option>
                                <option value="1">Monday</option>
                                <option value="2" selected>Tuesday</option>
                                <option value="3">Wednesday</option>
                                <option value="4">Thursday</option>
                                <option value="5">Friday</option>
                                <option value="6">Saturday</option>
                                <option value="7">Sunday</option>
                              </select>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <div class="hstack opentime-gap">
                                <label for="open_time" class="form-label">Open Time</label>
                                <label for="close_time" class="form-label">Close Time</label>
                              </div>
                              <div class="row">
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="open_time" value="12:00 AM">
                                </div>
                                <!--end col-->
                                <div class="col-auto align-self-center">
                                  to
                                </div>
                                <!--end col-->
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="close_time" value="12:00 AM">
                                </div>
                                <!--end col-->
                              </div>
                              <!--end row-->
                            </div>
                          </div>
                          <!--end col-->
                          <div class="hstack gap-2 justify-content-end">
                            <a class="deletebtn-gap btn btn-success" href="javascript:deleteEl(2)">Delete</a>
                          </div>
                        </div>
                        <!--end row-->
                      </div>
                      <div id="3">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="day" class="form-label">Day of the Week</label>
                              <select class="form-control" data-choices data-choices-sorting-false data-choices-search-false name="day" id="day">
                                <option value="">Select Day</option>
                                <option value="1">Monday</option>
                                <option value="2">Tuesday</option>
                                <option value="3" selected>Wednesday</option>
                                <option value="4">Thursday</option>
                                <option value="5">Friday</option>
                                <option value="6">Saturday</option>
                                <option value="7">Sunday</option>
                              </select>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <div class="hstack opentime-gap">
                                <label for="open_time" class="form-label">Open Time</label>
                                <label for="close_time" class="form-label">Close Time</label>
                              </div>
                              <div class="row">
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="open_time" value="12:00 AM">
                                </div>
                                <!--end col-->
                                <div class="col-auto align-self-center">
                                  to
                                </div>
                                <!--end col-->
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="close_time" value="12:00 AM">
                                </div>
                                <!--end col-->
                              </div>
                              <!--end row-->
                            </div>
                          </div>
                          <!--end col-->
                          <div class="hstack gap-2 justify-content-end">
                            <a class="deletebtn-gap btn btn-success" href="javascript:deleteEl(3)">Delete</a>
                          </div>
                        </div>
                        <!--end row-->
                      </div>
                      <div id="4">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="day" class="form-label">Day of the Week</label>
                              <select class="form-control" data-choices data-choices-sorting-false data-choices-search-false name="day" id="day">
                                <option value="">Select Day</option>
                                <option value="1">Monday</option>
                                <option value="2">Tuesday</option>
                                <option value="3">Wednesday</option>
                                <option value="4" selected>Thursday</option>
                                <option value="5">Friday</option>
                                <option value="6">Saturday</option>
                                <option value="7">Sunday</option>
                              </select>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <div class="hstack opentime-gap">
                                <label for="open_time" class="form-label">Open Time</label>
                                <label for="close_time" class="form-label">Close Time</label>
                              </div>
                              <div class="row">
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="open_time" value="12:00 AM">
                                </div>
                                <!--end col-->
                                <div class="col-auto align-self-center">
                                  to
                                </div>
                                <!--end col-->
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="close_time" value="12:00 AM">
                                </div>
                                <!--end col-->
                              </div>
                              <!--end row-->
                            </div>
                          </div>
                          <!--end col-->
                          <div class="hstack gap-2 justify-content-end">
                            <a class="deletebtn-gap btn btn-success" href="javascript:deleteEl(4)">Delete</a>
                          </div>
                        </div>
                        <!--end row-->
                      </div>
                      <div id="5">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="day" class="form-label">Day of the Week</label>
                              <select class="form-control" data-choices data-choices-sorting-false data-choices-search-false name="day" id="day">
                                <option value="">Select Day</option>
                                <option value="1">Monday</option>
                                <option value="2">Tuesday</option>
                                <option value="3">Wednesday</option>
                                <option value="4">Thursday</option>
                                <option value="5" selected>Friday</option>
                                <option value="6">Saturday</option>
                                <option value="7">Sunday</option>
                              </select>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <div class="hstack opentime-gap">
                                <label for="open_time" class="form-label">Open Time</label>
                                <label for="close_time" class="form-label">Close Time</label>
                              </div>
                              <div class="row">
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="open_time" value="12:00 AM">
                                </div>
                                <!--end col-->
                                <div class="col-auto align-self-center">
                                  to
                                </div>
                                <!--end col-->
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="close_time" value="12:00 AM">
                                </div>
                                <!--end col-->
                              </div>
                              <!--end row-->
                            </div>
                          </div>
                          <!--end col-->
                          <div class="hstack gap-2 justify-content-end">
                            <a class="deletebtn-gap btn btn-success" href="javascript:deleteEl(5)">Delete</a>
                          </div>
                        </div>
                        <!--end row-->
                      </div>
                      <div id="6">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="day" class="form-label">Day of the Week</label>
                              <select class="form-control" data-choices data-choices-sorting-false data-choices-search-false name="day" id="day">
                                <option value="">Select Day</option>
                                <option value="1">Monday</option>
                                <option value="2">Tuesday</option>
                                <option value="3">Wednesday</option>
                                <option value="4">Thursday</option>
                                <option value="5">Friday</option>
                                <option value="6" selected>Saturday</option>
                                <option value="7">Sunday</option>
                              </select>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <div class="hstack opentime-gap">
                                <label for="open_time" class="form-label">Open Time</label>
                                <label for="close_time" class="form-label">Close Time</label>
                              </div>
                              <div class="row">
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="open_time" value="08:00 AM">
                                </div>
                                <!--end col-->
                                <div class="col-auto align-self-center">
                                  to
                                </div>
                                <!--end col-->
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="close_time" value="07:00 PM">
                                </div>
                                <!--end col-->
                              </div>
                              <!--end row-->
                            </div>
                          </div>
                          <!--end col-->
                          <div class="hstack gap-2 justify-content-end">
                            <a class="deletebtn-gap btn btn-success" href="javascript:deleteEl(6)">Delete</a>
                          </div>
                        </div>
                        <!--end row-->
                      </div>
                      <div id="7">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="day" class="form-label">Day of the Week</label>
                              <select class="form-control" data-choices data-choices-sorting-false data-choices-search-false name="day" id="day">
                                <option value="">Select Day</option>
                                <option value="1">Monday</option>
                                <option value="2">Tuesday</option>
                                <option value="3">Wednesday</option>
                                <option value="4">Thursday</option>
                                <option value="5">Friday</option>
                                <option value="6">Saturday</option>
                                <option value="7" selected>Sunday</option>
                              </select>
                            </div>
                          </div>
                          <!--end col-->
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <div class="hstack opentime-gap">
                                <label for="open_time" class="form-label">Open Time</label>
                                <label for="close_time" class="form-label">Close Time</label>
                              </div>
                              <div class="row">
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="open_time" value="07:00 AM">
                                </div>
                                <!--end col-->
                                <div class="col-auto align-self-center">
                                  to
                                </div>
                                <!--end col-->
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="close_time" value="11:00 PM">
                                </div>
                                <!--end col-->
                              </div>
                              <!--end row-->
                            </div>
                          </div>
                          <!--end col-->
                          <div class="hstack gap-2 justify-content-end">
                            <a class="deletebtn-gap btn btn-success" href="javascript:deleteEl(7)">Delete</a>
                          </div>
                        </div>
                        <!--end row-->
                      </div>
                    </div>
                    <div id="newForm" style="display: none;">

                    </div>
                    <div class="col-lg-12 pt-3 mb-5">
                      <div class="hstack gap-2">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="javascript:new_link()" class="btn btn-primary">Add New</a>
                      </div>
                    </div>
                    <!--end col-->
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