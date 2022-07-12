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
                                <button class="nav-link fs-15 p-3" id="pills-finish-tab" data-bs-toggle="pill" data-bs-target="#pills-finish" type="button" role="tab" aria-controls="pills-finish" aria-selected="false">
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
                                        <h5 class="fs-14 mb-0">Saved Address</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                                            Add Address
                                        </button>
                                    </div>
                                </div>
                                <div class="row gy-3">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-check card-radio">
                                            <input id="shippingAddress01" name="shippingAddress" type="radio" class="form-check-input" checked>
                                            <label class="form-check-label" for="shippingAddress01">
                                                <span class="mb-4 fw-semibold d-block text-muted text-uppercase">Home Address</span>

                                                <span class="fs-14 mb-2 d-block">Marcus Alfaro</span>
                                                <span class="text-muted fw-normal text-wrap mb-1 d-block">4739 Bubby Drive Austin, TX 78729</span>
                                                <span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
                                            </label>
                                        </div>
                                        <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1">
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#addAddressModal"><i class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
                                            </div>
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-check card-radio">
                                            <input id="shippingAddress02" name="shippingAddress" type="radio" class="form-check-input">
                                            <label class="form-check-label" for="shippingAddress02">
                                                <span class="mb-4 fw-semibold d-block text-muted text-uppercase">Office Address</span>

                                                <span class="fs-14 mb-2 d-block">James Honda</span>
                                                <span class="text-muted fw-normal text-wrap mb-1 d-block">1246 Virgil Street Pensacola, FL 32501</span>
                                                <span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
                                            </label>
                                        </div>
                                        <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1">
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#addAddressModal"><i class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
                                            </div>
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
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
                                <div class="col-lg-4 col-sm-6">
                                    <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse.show" aria-expanded="false" aria-controls="paymentmethodCollapse">
                                        <div class="form-check card-radio">
                                            <input id="paymentMethod01" name="paymentMethod" type="radio" class="form-check-input">
                                            <label class="form-check-label" for="paymentMethod01">
                                                <span class="fs-16 text-muted me-2"><i class="ri-paypal-fill align-bottom"></i></span>
                                                <span class="fs-14 text-wrap">Paypal</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button type="button" class="btn btn-light btn-label previestab" data-previous="pills-bill-address-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back to Shipping</button>
                                <button type="button" class="btn btn-primary btn-label right ms-auto nexttab" data-nexttab="pills-finish-tab"><i class="ri-shopping-basket-line label-icon align-middle fs-16 ms-2"></i>Complete Order</button>
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

                                <h3 class="fw-semibold">Order ID: <a href="apps-ecommerce-order-details.html" class="text-decoration-underline">VZ2451</a></h3>
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
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-0">Order Summary</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive table-card">
                    <table class="table table-borderless align-middle mb-0">
                        <thead class="table-light text-muted">
                            <tr>
                                <th style="width: 90px;" scope="col">Product</th>
                                <th scope="col">Product Info</th>
                                <th scope="col" class="text-end">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="avatar-md bg-light rounded p-1">
                                        <img src="<?php echo base_url('public/assets') ?>/images/products/img-8.png" alt="" class="img-fluid d-block">
                                    </div>
                                </td>
                                <td>
                                    <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-dark">Sweatshirt for Men (Pink)</a></h5>
                                    <p class="text-muted mb-0">$ 119.99 x 2</p>
                                </td>
                                <td class="text-end">$ 239.98</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar-md bg-light rounded p-1">
                                        <img src="<?php echo base_url('public/assets') ?>/images/products/img-7.png" alt="" class="img-fluid d-block">
                                    </div>
                                </td>
                                <td>
                                    <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-dark">Noise Evolve Smartwatch</a></h5>
                                    <p class="text-muted mb-0">$ 94.99 x 1</p>
                                </td>
                                <td class="text-end">$ 94.99</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar-md bg-light rounded p-1">
                                        <img src="<?php echo base_url('public/assets') ?>/images/products/img-3.png" alt="" class="img-fluid d-block">
                                    </div>
                                </td>
                                <td>
                                    <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-dark">350 ml Glass Grocery Container</a></h5>
                                    <p class="text-muted mb-0">$ 24.99 x 1</p>
                                </td>
                                <td class="text-end">$ 24.99</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold" colspan="2">Sub Total :</td>
                                <td class="fw-semibold text-end">$ 359.96</td>
                            </tr>
                            <tr class="table-active">
                                <th colspan="2">Total:</th>
                                <td class="text-end">
                                    <span class="fw-semibold">
                                        $353.15
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->