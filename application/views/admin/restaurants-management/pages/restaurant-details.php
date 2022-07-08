<div class="row">
    <div class="col-xxl-3">
        <div class="card">
            <div class="card-body p-4">
                <div class="mt-5 pt-5">
                    <div class="flex-shrink-0 avatar-md mx-auto">
                        <div class="avatar-title bg-light rounded">
                            <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jollibee.jpg" alt="" height="100" />
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <h5 class="mb-1">Jollibee</h5>
                        <p class="text-muted">Ernesto Tanmantiong</p>
                    </div>
                    <div class="table-responsive">
                        <table class="table mt-5 mb-5 table-borderless">
                            <tbody>
                                <tr>
                                    <th><span class="fw-medium">Restaurant Name</span></th>
                                    <td>Jollibee</td>
                                </tr>
                                <tr>
                                    <th><span class="fw-medium">Category</span></th>
                                    <td>Fast Food</td>
                                </tr>
                                <tr>
                                    <th><span class="fw-medium">Email</span></th>
                                    <td>president@jollibee.com.ph</td>
                                </tr>
                                <tr>
                                    <th><span class="fw-medium">Website</span></th>
                                    <td><a href="http://www.jollibee.com.ph/" class="link-primary">www.jollibee.com.ph</a></td>
                                </tr>
                                <tr>
                                    <th><span class="fw-medium">Phone No.</span></th>
                                    <td>+63 917 131 8000</td>
                                </tr>
                                <tr>
                                    <th><span class="fw-medium">Landline No.</span></th>
                                    <td>(02) 8-7000</td>
                                </tr>
                                <tr>
                                    <th><span class="fw-medium">Status</span></th>
                                    <td>Open</td>
                                </tr>
                                <tr>
                                    <th><span class="fw-medium">Address</span></th>
                                    <td>10/F Jollibee Plaza Building, <br> Emerald Ave., Ortigas Center, <br> Pasig City 1600</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end card-body-->
            <div class="card-body p-4 border-top border-top-dashed">
                <h6 class="text-muted text-uppercase fw-semibold mb-4">Contact Support</h6>
                <form action="#">
                    <div class="mb-5">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Enter your messages..."></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary"><i class="ri-mail-send-line align-bottom me-1"></i> Send Messages</button>
                    </div>
                </form>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->

    <div class="col-xxl-9">
        <div class="card">
            <div class="card-header border-0 align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                <div>
                    <button type="button" class="btn btn-soft-secondary btn-sm">
                        ALL
                    </button>
                    <button type="button" class="btn btn-soft-secondary btn-sm">
                        1M
                    </button>
                    <button type="button" class="btn btn-soft-secondary btn-sm">
                        6M
                    </button>
                    <button type="button" class="btn btn-soft-primary btn-sm">
                        1Y
                    </button>
                </div>
            </div><!-- end card header -->

            <div class="card-header p-0 border-0 bg-soft-light">
                <div class="row g-0 text-center">
                    <div class="col-4 col-sm-4">
                        <div class="p-3 border border-dashed border-start-0">
                            <h5 class="mb-1"><span class="counter-value" data-target="7585">0</span></h5>
                            <p class="text-muted mb-0">Orders</p>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-4 col-sm-4">
                        <div class="p-3 border border-dashed border-start-0">
                            <h5 class="mb-1">₱<span class="counter-value" data-target="22.89">0</span>k</h5>
                            <p class="text-muted mb-0">Earnings</p>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-4 col-sm-4">
                        <div class="p-3 border border-dashed border-start-0">
                            <h5 class="mb-1"><span class="counter-value" data-target="367">0</span></h5>
                            <p class="text-muted mb-0">Refunds</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            </div><!-- end card header -->

            <div class="card-body p-0 pb-2">
                <div>
                    <div id="customer_impression_charts" data-colors='["--vz-success", "--vz-primary", "--vz-danger"]' class="apex-charts"></div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->

        <div class="row g-4 mb-3">
            <div class="col-sm">
                <div class="d-flex justify-content-sm-end">
                    <div class="search-box ms-2">
                        <input type="text" class="form-control" placeholder="Search Products...">
                        <i class="ri-search-line search-icon"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div id="table-product-list-all" class="table-card gridjs-border-none"></div>
            </div>
        </div>

    </div>
    <!--end col-->
</div>
<!--end row-->