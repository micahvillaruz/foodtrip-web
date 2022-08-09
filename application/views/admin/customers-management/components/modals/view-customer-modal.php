<div class="modal fade" id="viewCustomerModal" tabindex="-1" aria-labelledby="viewCustomerModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-soft-primary p-3">
        <h5 class="modal-title" id="exampleModalLabel">View Customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
      </div>
      <form>
        <div class="modal-body">
          <div data-simplebar class="mx-n3">
            <ul class="list list-group list-group-flush mb-0">
              <li class="list-group-item" data-id="01">
                <div class="d-flex align-items-start">
                  <div class="flex-shrink-0 me-3">
                    <div>
                      <img class="image avatar-xs rounded-circle shadow" alt="" src="<?php echo base_url('public/assets') ?>/images/users/user-dummy-img.jpg">
                    </div>
                  </div>

                  <div class="flex-grow-1 overflow-hidden">
                    <h5 class="fs-15 mb-1"><a href="#" id="full_name" class="link text-dark"></a></h5>
                    <div id="gender">
                    </div>
                  </div>
                </div>
              </li>
              <!-- end list item -->
              <li class="list-group-item" data-id="02">
                <div class="d-flex align-items-center">
                  <div class="col-6">
                    <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">User No</a></h5>
                  </div>
                  <div class="col-6">
                    <div id="user_no" class="fs-13 text-secondary fw-bold"></div>
                  </div>
                </div>
              </li>
              <!-- end list item -->
              <li class="list-group-item" data-id="03">
                <div class="d-flex align-items-center">
                  <div class="col-6">
                    <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">First Name</a></h5>
                  </div>
                  <div class="col-6">
                    <span id="first_name" class="fs-12 badge rounded-pill badge-outline-primary"></span>
                  </div>
                </div>
              </li>
              <!-- end list item -->
              <li class="list-group-item" data-id="04">
                <div class="d-flex align-items-center">
                  <div class="col-6">
                    <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Middle Name</a></h5>
                  </div>
                  <div class="col-6">
                    <span id="middle_name" class="fs-12 badge rounded-pill badge-outline-primary"></span>
                  </div>
                </div>
              </li>
              <!-- end list item -->
              <li class="list-group-item" data-id="04">
                <div class="d-flex align-items-center">
                  <div class="col-6">
                    <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Last Name</a></h5>
                  </div>
                  <div class="col-6">
                    <span id="last_name" class="fs-12 badge rounded-pill badge-outline-primary"></span>
                  </div>
                </div>
              </li>
              <!-- end list item -->
              <li class="list-group-item" data-id="05">
                <div class="d-flex align-items-center">
                  <div class="col-6">
                    <h5 class="fs-13 mb-1">Email Address</h5>
                  </div>
                  <div class="col-6">
                    <div id="email_address" class="d-flex fs-13 fw-medium"></div>
                  </div>
                </div>
              </li>
              <!-- end list item -->
              <li class="list-group-item" data-id="06">
                <div class="d-flex align-items-center">
                  <div class="col-6">
                    <h5 class="fs-13 mb-1">Phone Number</h5>
                  </div>
                  <div class="col-6">
                    <div id="phone_number" class="d-flex fs-13 fw-medium"></div>
                  </div>
                </div>
              </li>
              <!-- end list item -->
              <li class="list-group-item" data-id="06">
                <div class="d-flex align-items-center">
                  <div class="col-6">
                    <h5 class="fs-13 mb-1">Joining Date</h5>
                  </div>
                  <div class="col-6">
                    <div class="fw-medium">
                      <span id="date_created"></span>
                      <small id="time_created" class="text-muted ms-1"></small>
                    </div>
                  </div>
                </div>
              </li>
              <!-- end list item -->
              <li class="list-group-item" data-id="07">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1">
                    <h5 class="fs-13 mb-3">Address</h5>
                    <div id="addresses">
                    </div>
                  </div>
                </div>
              </li>
              <!-- end list item -->
            </ul>
            <!-- end ul list -->
          </div>
        </div>
        <div class="modal-footer">
          <div class="hstack gap-2 justify-content-end">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>