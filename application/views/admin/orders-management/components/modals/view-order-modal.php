<div class="modal fade zoomIn" id="viewOrderModal" tabindex="-1" aria-labelledby="viewOrderModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0">
      <div class="modal-header p-3 bg-soft-primary">
        <h5 class="modal-title" id="viewOrderModalLabel">Order Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
      </div>
      <form action="">
        <div class="modal-body">
          <div class="row g-3 py-2">
            <h2 class="text-center"><span id="order_no" class="badge badge-outline-primary text-center fw-bold"></span></h2>
            <!--end col-->
            <div class="col-lg-12">
              <h6>Customer</h6>
              <div class="d-flex mb-3">
                <img src="<?php echo base_url('public/assets') ?>/images/users/user-dummy-img.jpg" alt="" class="avatar-sm rounded-circle me-2">
                <div>
                  <span id="customer_name" class="d-block fw-medium"></span>
                  <div class="hstack gap-4">
                    <small id="customer_gender"></small>
                    <small id="customer_email"></small>
                    <small id="customer_phone"></small>
                  </div>
                </div>
              </div>
            </div>
            <!--end col-->
            <div class="col-lg-12">
              <h6>Restaurant</h6>
              <div class="d-flex align-items-center fw-medium mb-3">
                <div id="resto_img">
                </div>
                <div>
                  <span id="resto_name" class="d-block fw-medium"></span>
                  <div id="restocatg_name">
                  </div>
                  <div class="hstack gap-4">
                    <small id="resto_email"></small>
                    <small id="resto_phone"></small>
                  </div>
                </div>
              </div>
            </div>
            <!--end col-->
            <div class="col-lg-12">
              <h6>Dishes</h6>
              <div id="dishes">
              </div>
              <div id="order_total" class="d-flex justify-content-between align-items-center px-3 pt-3">
              </div>
            </div>
            <!--end col-->
            <div id="order_comment" class="col-lg-12">
            </div>
            <!--end col-->
            <div class="col-lg-12">
              <h6>Order Status</h6>
              <div class="profile-timeline">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item border-0">
                    <div class="accordion-header" id="headingOne">
                      <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 avatar-xs">
                            <div class="avatar-title bg-success rounded-circle shadow">
                              <i class="mdi mdi-cart-heart"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0 fw-semibold">PENDING - <span id="date_created" class="fw-normal"></span></h6>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body ms-2 ps-5 py-0">
                        <h6 class="mb-1">An order has been placed.</h6>
                        <p id="full_date_created" class="text-muted"></p>
                      </div>
                    </div>
                  </div>
                  <div id="in_process" class="accordion-item border-0">
                  </div>
                  <div id="on_the_way" class="accordion-item border-0">
                  </div>
                  <div id="delivered" class="accordion-item border-0">
                  </div>
                </div>
                <!--end accordion-->
              </div>
            </div>
            <!--end col-->
            <div class="col-lg-12">
              <h6>Shipping Address</h6>
              <blockquote class="mx-3 blockquote custom-blockquote blockquote-outline blockquote-dark rounded shadow mb-3">
                <div class="d-flex align-items-center">
                  <div class="col-8">
                    <h5 class="fs-13 mb-1">Full Name</h5>
                  </div>
                  <div class="col-4">
                    <div id="address_owner" class="fs-13 fw-medium"></div>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="col-8">
                    <h5 class="fs-13 mb-1">Phone Number</h5>
                  </div>
                  <div class="col-4">
                    <div id="address_phone" class="fs-13 fw-medium"></div>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="col-8">
                    <h5 class="fs-13 mb-1">Address</h5>
                  </div>
                  <div class="col-4">
                    <div id="address" class="fs-13 fw-medium text-wrap" style="width: 15rem;"></div>
                  </div>
                </div>
              </blockquote>
            </div>
            <!--end col-->
            <div id="delivery_details" class="col-lg-12 d-none">
            </div>
            <!--end col-->
            <div class="col-lg-12">
              <h6>Payment Details</h6>
              <blockquote class="mx-3 blockquote custom-blockquote blockquote-outline blockquote-dark rounded shadow mb-3">
                <div class="d-flex align-items-center">
                  <div class="col-8">
                    <h5 class="fs-13 mb-1">Payment No</h5>
                  </div>
                  <div class="col-4">
                    <div id="payment_no" class="fs-13 fw-medium"></div>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="col-8">
                    <h5 class="fs-13 mb-1">Payment Status</h5>
                  </div>
                  <div class="col-4">
                    <div id="payment_status" class="fs-13 fw-medium text-uppercase"></div>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="col-8">
                    <h5 class="fs-13 mb-1">Date Paid</h5>
                  </div>
                  <div class="col-4">
                    <div id="payment_date" class="fs-13 fw-medium"></div>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="col-8">
                    <h5 class="fs-13 mb-1">Total Amount</h5>
                  </div>
                  <div class="col-4">
                    <div id="payment_total" class="fs-13 fw-medium"></div>
                  </div>
                </div>
              </blockquote>
            </div>
            <!--end col-->
          </div>
          <!--end row-->
        </div>
        <div class="modal-footer">
          <div class="hstack gap-2 justify-content-end">
            <button type="button" class="btn btn-primary" id="close-modal" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- view orders ajax js -->
<script src="<?php echo base_url('public/assets') ?>/js/ajax/admin/orders.ajax.js"></script>