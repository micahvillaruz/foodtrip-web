<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body checkout-tab">
                <form action="#">
                    <div class="step-arrow-nav mt-n3 mx-n3 mb-3">
                        <ul class="nav nav-pills nav-justified custom-nav" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fs-15 p-3 active" id="pills-bill-address-tab" data-bs-toggle="pill" data-bs-target="#pills-bill-address" type="button" role="tab" aria-controls="pills-bill-address" aria-selected="true">
                                    <i class="ri-truck-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i> Shipping Info
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fs-15 p-3" id="pills-payment-tab" data-bs-toggle="pill" data-bs-target="#pills-payment" type="button" role="tab" aria-controls="pills-payment" aria-selected="false">
                                    <i class="ri-bank-card-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i> Payment Info
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fs-15 p-3" id="pills-finish-tab" data-bs-toggle="pill" data-bs-target="#pills-finish" type="button" role="tab" aria-controls="pills-finish" aria-selected="false" disabled>
                                    <i class="ri-checkbox-circle-line fs-16 p-2 bg-soft-primary text-primary rounded-circle align-middle me-2"></i> Finish
                                </button>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <!-- end tab pane -->
                        <div class="tab-pane fade show active" id="pills-bill-address" role="tabpanel" aria-labelledby="pills-bill-address-tab">
                            <div>
                                <h5 class="mb-1">Shipping Information</h5>
                                <p class="text-muted mb-4">Please fill all information below</p>
                            </div>

                            <div class="mt-4">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-14 mb-0">Delivery Address</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                                            <i class="ri-map-pin-add-line"></i> Add New Address
                                        </button> <!-- Button trigger modal -->
                                        <a href="<?php echo base_url() ?>customer/profile" type="button" class="btn btn-sm btn-info mb-3">
                                            <i class="ri-quill-pen-line"></i> Manage Addresses
                                        </a>
                                    </div>
                                </div>
                                <div class="row gy-3" id="addresses">
                                </div>
                            </div>

                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button type="button" class="btn btn-primary btn-label right ms-auto nexttab" data-nexttab="pills-payment-tab"><i class="ri-bank-card-line label-icon align-middle fs-16 ms-2"></i>Continue to Payment</button>
                            </div>
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
                            <div>
                                <h5 class="mb-1">Payment Selection</h5>
                                <p class="text-muted mb-4">Please select and enter your billing information</p>
                            </div>

                            <div class="row g-4">
                                <div class="col-12">
                                    <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse" aria-expanded="true" aria-controls="paymentmethodCollapse">
                                        <div class="form-check card-radio">
                                            <input id="paymentMethod01" name="paymentMethod" type="radio" class="form-check-input" checked>
                                            <label class="form-check-label text-center" for="paymentMethod01">
                                                <span class="fs-16 text-muted me-2"><i class="ri-bank-card-fill align-bottom"></i></span>
                                                <span class="fs-14 text-wrap">GCash</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse show" id="paymentmethodCollapse">
                                <div class="card p-4 border shadow-none mb-0 mt-4">
                                    <div class="row gy-3">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="GCash-firstName" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="GCash-firstName" placeholder="Enter First Name" value="">
                                                <small class="text-muted">First Name of GCash Account Owner</small>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="GCash-lastName" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="gcash-lastName" placeholder="Enter Last Name" value="">
                                                <small class="text-muted">Last Name of GCash Account Owner</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div>
                                                <label for="gcash-email" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="gcash-email" placeholder="Enter Email Address">
                                                <small class="text-muted">Email Address registered on GCash</small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div>
                                                <label for="gcash-phone" class="form-label">Phone Number</label>
                                                <input type="number" class="form-control" id="gcash-phone" placeholder="Enter Phone Number">
                                                <small class="text-muted">Phone Number registered on GCash</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-muted mt-2 fst-italic">
                                    <i data-feather="lock" class="text-muted icon-xs"></i> Your transaction is secured with SSL encryption
                                </div>
                            </div>

                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button type="button" class="btn btn-light btn-label previestab" data-previous="pills-bill-address-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back to Shipping</button>
                                <button onclick='createOrder()' id="completeBtn" type="button" class="btn btn-primary btn-label right ms-auto nexttab"><i class="ri-shopping-basket-line label-icon align-middle fs-16 ms-2"></i>Complete Order</button>
                            </div>
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane fade" id="pills-finish" role="tabpanel" aria-labelledby="pills-finish-tab">
                            <div class="text-center py-5">
                                <div class="mb-4">
                                    <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                </div>
                                <h5>Thank you ! Your Order is Completed !</h5>
                                <p class="text-muted">You will receive an order confirmation email with details of your order.</p>
                                <h3 class="fw-semibold" id="order_no"></h3>
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
    <!-- end col -->

    <div class="col-xl-4">
        <div class="card" id="orderDetails">
            <div class="card-header">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-0">Order Summary</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<script src="<?php echo base_url('public/assets') ?>/js/ajax/customer/checkout.ajax.js"></script>