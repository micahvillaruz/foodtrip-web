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
                                        <h5 class="fs-14 mb-0">Delivery Address</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                                            <i class="ri-map-pin-add-line"></i> Add New Address
                                        </button> <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-info mb-3">
                                            <i class="ri-quill-pen-line"></i> Manage Addresses
                                        </button>
                                    </div>
                                </div>
                                <div class="row gy-3">
                                    <div class="col-lg-4 col-sm-6 my-3">
                                        <div class="form-check card-radio">
                                            <input id="shippingAddress01" name="shippingAddress" type="radio" class="form-check-input" checked>
                                            <label class="form-check-label" for="shippingAddress01">
                                                <span class="fs-14 mb-2 d-block">Avrielle Haven Fernandez Juarez</span>
                                                <span class="fs-14 mb-2 d-block">09872537193</span>
                                                <span class="text-muted fw-normal text-wrap mb-1 d-block">1071 Del Monte Avenue, Barangay Paltok, Quezon City, Metro Manila, 1105</span>
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
                                    <div class="col-lg-4 col-sm-6 my-3">
                                        <div class="form-check card-radio">
                                            <input id="shippingAddress02" name="shippingAddress" type="radio" class="form-check-input">
                                            <label class="form-check-label" for="shippingAddress02">
                                                <span class="fs-14 mb-2 d-block">Avrielle Haven Fernandez Juarez</span>
                                                <span class="fs-14 mb-2 d-block">09872537193</span>
                                                <span class="text-muted fw-normal text-wrap mb-1 d-block">Block 8 Lot 34 Sunrise Street, Maligaya Subdivision, Barangay 177, Caloocan City, Metro Manila, 1424</span>
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
                                    <div class="col-lg-4 col-sm-6 my-3">
                                        <div class="form-check card-radio">
                                            <input id="shippingAddress03" name="shippingAddress" type="radio" class="form-check-input">
                                            <label class="form-check-label" for="shippingAddress03">
                                                <span class="fs-14 mb-2 d-block">Louisse Natasha Valeria</span>
                                                <span class="fs-14 mb-2 d-block">09271829173</span>
                                                <span class="text-muted fw-normal text-wrap mb-1 d-block">1218b Grass Residence, Barangay Santo Cristo, Quezon City, Metro Manila, 1105</span>
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
                                    <div class="col-lg-4 col-sm-6 my-3">
                                        <div class="form-check card-radio">
                                            <input id="shippingAddress04" name="shippingAddress" type="radio" class="form-check-input">
                                            <label class="form-check-label" for="shippingAddress04">
                                                <span class="fs-14 mb-2 d-block">Samantha Maureen Vera</span>
                                                <span class="fs-14 mb-2 d-block">09182938290</span>
                                                <span class="text-muted fw-normal text-wrap mb-1 d-block">1105 Pagcor Annex, Carmen Building, corner Ma. Orosa, UN Avenue, Barangay 660-A, Ermita, Metro Manila, 1000</span>
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
                                    <div class="col-lg-4 col-sm-6 my-3">
                                        <div class="form-check card-radio">
                                            <input id="shippingAddress05" name="shippingAddress" type="radio" class="form-check-input">
                                            <label class="form-check-label" for="shippingAddress05">
                                                <span class="fs-14 mb-2 d-block">Akihiro Leonel Juarez</span>
                                                <span class="fs-14 mb-2 d-block">09171839204</span>
                                                <span class="text-muted fw-normal text-wrap mb-1 d-block">Lot 21, Block 16, Molave St., Violago Homes Parkwoods, Barangay Payatas, Quezon City, Metro Manila, 1119</span>
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

                                <h3 class="fw-semibold">Order No: <a href="#!" class="text-decoration-underline">97464507680</a></h3>
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
                            <tr class="table-success">
                                <th colspan="3">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jollibee.jpg" alt="" class="rounded-circle avatar-xs shadow me-2"><a href="#!" class="text-dark"> Jollibee</a>
                                </th>
                            </tr>
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
                                        <img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-27.png" alt="" class="img-fluid d-block">
                                    </div>
                                </td>
                                <td>
                                    <h5 class="fs-14"><a href="#!" class="text-dark">8pc Chickenjoy w/ Jolly Spaghetti Pan</a></h5>
                                    <p class="text-muted mb-0">₱ 776.00 x 1</p>
                                </td>
                                <td class="text-end">₱ 776.00</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar-md bg-light rounded p-1">
                                        <img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-15.png" alt="" class="img-fluid d-block">
                                    </div>
                                </td>
                                <td>
                                    <h5 class="fs-14"><a href="#!" class="text-dark">Amazing Aloha Champ Jr.</a></h5>
                                    <p class="text-muted mb-0">₱ 109.00 x 5</p>
                                </td>
                                <td class="text-end">₱ 545.00</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar-md bg-light rounded p-1">
                                        <img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-28.png" alt="" class="img-fluid d-block">
                                    </div>
                                </td>
                                <td>
                                    <h5 class="fs-14"><a href="#!" class="text-dark">1pc Burger Steak w/ Shanghai w/ Drink</a></h5>
                                    <p class="text-muted mb-0">₱ 143.00 x 3</p>
                                </td>
                                <td class="text-end">₱ 429.00</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold" colspan="2">Sub Total :</td>
                                <td class="fw-semibold text-end">₱ 1,750.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card body -->
            <div class="card-footer bg-gradient bg-light">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title mb-0 d-inline-block">Total Amount (PHP) :</h5>
                    <span class="fw-semibold fs-15">
                        ₱ 1,750.00
                    </span>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->