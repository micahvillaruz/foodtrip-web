<div class="row justify-content-center">
    <div class="col-xxl-9">
        <div class="card" id="demo">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header border-bottom-dashed p-4">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <img src="<?php echo base_url('public/assets') ?>/images/restaurants/kfc.png" alt="restaurant logo" height="120">
                                <div class="mt-sm-5 mt-4">
                                    <h6 class="text-muted text-uppercase fw-semibold">Address</h6>
                                    <p class="text-muted mb-1">Retail A, Cyberpod Three</p>
                                    <p class="text-muted mb-1">Eton Centris EDSA cor Quezon Avenue</p>
                                    <p class="text-muted mb-0">Brgy Pinyahan, Quezon City, Metro Manila, 1103</p>
                                </div>
                            </div>
                            <div class="flex-shrink-0 mt-sm-0 mt-3">
                                <h6><span class="text-muted fw-normal">Restaurant Name: </span><span id="legal-register-no">KFC</span></h6>
                                <h6><span class="text-muted fw-normal">Category: </span><span id="legal-register-no">Fast Food</span></h6>
                                <h6><span class="text-muted fw-normal">Email:</span><span id="email"> customercare@kfc.ph</span></h6>
                                <h6><span class="text-muted fw-normal">Website:</span> <a href="https://www.kfc.com.ph/" class="link-primary" target="_blank" id="website">www.kfc.com.ph</a></h6>
                                <h6 class="mb-0"><span class="text-muted fw-normal">Landline No: </span><span id="contact-no">(02) 8887-8888</span></h6>
                            </div>
                        </div>
                    </div>
                    <!--end card-header-->
                </div>
                <!--end col-->
                <div class="col-lg-12">
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-lg-3 col-6">
                                <p class="text-muted mb-2 text-uppercase fw-semibold">Payment No</p>
                                <h5 class="fs-14 mb-0">#<span id="payment-no">29863618971</span></h5>
                            </div>
                            <!--end col-->
                            <div class="col-lg-3 col-6">
                                <p class="text-muted mb-2 text-uppercase fw-semibold">Date</p>
                                <h5 class="fs-14 mb-0"><span id="invoice-date">09 Jul, 2022</span> <small class="text-muted" id="invoice-time">02:05PM</small></h5>
                            </div>
                            <!--end col-->
                            <div class="col-lg-3 col-6">
                                <p class="text-muted mb-2 text-uppercase fw-semibold">Payment Status</p>
                                <span class="badge badge-soft-success fs-11" id="payment-status">Paid</span>
                            </div>
                            <!--end col-->
                            <div class="col-lg-3 col-6">
                                <p class="text-muted mb-2 text-uppercase fw-semibold">Total Amount</p>
                                <h5 class="fs-14 mb-0">₱<span id="total-amount">1,458.00</span></h5>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end col-->
                <div class="col-lg-12">
                    <div class="card-body p-4 border-top border-top-dashed">
                        <div class="row g-3">
                            <div class="col-6">
                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Billing Address</h6>
                                <p class="fw-medium mb-2">Akihiro Leonel Juarez</p>
                                <p class="text-muted mb-1">1186 Zone 6 Puelay</p>
                                <p class="text-muted mb-1">Villasis, Pangasinan</p>
                                <p class="text-muted mb-1">North Luzon, 2427</p>
                                <p class="text-muted mb-1"><span>Phone: </span><span>09171839204</span></p>
                                <p class="text-muted mb-0"><span>Email: </span><span id="email">hirojuarez@gmail.com</span></p>
                            </div>
                            <!--end col-->
                            <div class="col-6">
                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Shipping Address</h6>
                                <p class="fw-medium mb-2">Akihiro Leonel Juarez</p>
                                <p class="text-muted mb-1">1186 Zone 6 Puelay</p>
                                <p class="text-muted mb-1">Villasis, Pangasinan</p>
                                <p class="text-muted mb-1">North Luzon, 2427</p>
                                <p class="text-muted mb-1"><span>Phone: </span><span>09171839204</span></p>
                                <p class="text-muted mb-0"><span>Email: </span><span id="email">hirojuarez@gmail.com</span></p>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end col-->
                <div class="col-lg-12">
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                <thead>
                                    <tr class="table-active">
                                        <th scope="col" style="width: 50px;">#</th>
                                        <th scope="col">Dish Name</th>
                                        <th scope="col">Dish Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col" class="text-end">Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody id="products-list">
                                    <tr>
                                        <th scope="row">01</th>
                                        <td class="text-start">
                                            <span class="fw-medium">2 - pc. Spicy Gangnam Chicken Combo Meal</span>
                                            <p class="text-muted mb-0">Category: <span class="fw-medium">Signature Meals</span></p>
                                        </td>
                                        <td>₱239.00</td>
                                        <td>2</td>
                                        <td class="text-end">₱478.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">02</th>
                                        <td class="text-start">
                                            <span class="fw-medium">Ala King Zinger Steak Meal With Buttered Corn</span>
                                            <p class="text-muted mb-0">Category: <span class="fw-medium">Signature Meals </span></p>
                                        </td>
                                        <td>₱149.00</td>
                                        <td>3</td>
                                        <td class="text-end">₱447.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">03</th>
                                        <td class="text-start">
                                            <span class="fw-medium">Large Shots</span>
                                            <p class="text-muted mb-0">Category: <span class="fw-medium">Snacks</span></p>
                                        </td>
                                        <td>₱120.00</td>
                                        <td>1</td>
                                        <td class="text-end">₱120.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">04</th>
                                        <td class="text-start">
                                            <span class="fw-medium">Ala King Rice Bowl Meal</span>
                                            <p class="text-muted mb-0">Category: <span class="fw-medium">Pastas and Bowls</span></p>
                                        </td>
                                        <td>₱149.00</td>
                                        <td>1</td>
                                        <td class="text-end">₱149.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">05</th>
                                        <td class="text-start">
                                            <span class="fw-medium">Junior Bucket of Fries</span>
                                            <p class="text-muted mb-0">Category: <span class="fw-medium">Fixins and Extras</span></p>
                                        </td>
                                        <td>₱85.00</td>
                                        <td>1</td>
                                        <td class="text-end">₱85.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">06</th>
                                        <td class="text-start">
                                            <span class="fw-medium">Chicken Chops Fully Loaded Meal</span>
                                            <p class="text-muted mb-0">Category: <span class="fw-medium">Fully Loaded Meals</span></p>
                                        </td>
                                        <td>₱179.00</td>
                                        <td>1</td>
                                        <td class="text-end">₱179.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end table-->
                        </div>
                        <div class="border-top border-top-dashed mt-2">
                            <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                <tbody>
                                    <tr class="border-top border-top-dashed fs-15">
                                        <th scope="row">Total Amount</th>
                                        <th class="text-end">₱1,458.00</th>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end table-->
                        </div>
                        <div class="mt-3">
                            <h6 class="text-muted text-uppercase fw-semibold mb-3">Payment Details:</h6>
                            <p class="text-muted mb-1">Payment Number: <span class="fw-medium">29863618971</span></p>
                            <p class="text-muted mb-1">Payment Status: <span class="fw-medium">Paid</span></p>
                            <p class="text-muted mb-1">Date Paid: <span class="fw-medium">09 Jul,2022 2:05 PM</span></p>
                            <p class="text-muted">Total Amount: <span class="fw-medium">₱</span><span id="card-total-amount">1,458.00</span></p>
                        </div>
                        <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                            <a href="javascript:window.print()" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Print</a>
                            <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download</a>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->