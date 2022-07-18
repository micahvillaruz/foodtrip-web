<div class="row">
    <div class="col-lg-12">
        <div class="card" id="orderList">
            <div class="card-header  border-0">
                <div class="d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Order History</h5>
                </div>
            </div>
            <div class="card-body border border-dashed border-end-0 border-start-0">
                <form>
                    <div class="row g-3">
                        <div class="col-xxl-5 col-sm-6">
                            <div class="search-box">
                                <input type="text" class="form-control search" placeholder="Search for restaurant name, dish name, order status or something...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-sm-6">
                            <div>
                                <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" id="demo-datepicker" placeholder="Select date">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-sm-6">
                            <div>
                                <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idStatus">
                                    <option value="">Order Status</option>
                                    <option value="all" selected>All</option>
                                    <option value="In Process">In Process</option>
                                    <option value="On the Way">On the Way</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Rejected">Rejected</option>
                                </select>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-1 col-sm-6">
                            <div>
                                <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i class="ri-equalizer-fill me-1 align-bottom"></i>
                                    Filters
                                </button>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
            </div>
            <div class="card-body pt-0">
                <div>
                    <ul class="nav nav-tabs nav-tabs-custom nav-success mb-3 filter-btns" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active py-3" data-bs-toggle="tab" role="tab" aria-selected="true" data-filter="all">
                                <i class="mdi mdi-book-multiple-outline me-1 align-bottom"></i> All Orders <span class="badge bg-danger align-middle ms-1">5</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="false" data-filter="in-process">
                                <i class="mdi mdi-food-takeout-box-outline me-1 align-bottom"></i> In Process <span class="badge bg-danger align-middle ms-1">1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="false" data-filter="on-the-way">
                                <i class="ri-truck-line me-1 align-bottom"></i> On the Way <span class="badge bg-danger align-middle ms-1">1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="false" data-filter="delivered">
                                <i class="mdi mdi-package-variant me-1 align-bottom"></i> Delivered <span class="badge bg-danger align-middle ms-1">2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-3" data-bs-toggle="tab" role="tab" aria-selected="false" data-filter="rejected">
                                <i class="ri-close-circle-line me-1 align-bottom"></i> Rejected <span class="badge bg-danger align-middle ms-1">1</span>
                            </a>
                        </li>
                    </ul>

                    <div class="col-12">
                        <div class="card card-light product-item delivered">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-header bg-white">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jollibee.jpg" alt="" class="avatar-xs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="card-text fw-medium">Jollibee</p>
                                            </div>
                                            <div class="flex-end ms-3">
                                                <span class="badge badge-soft-success text-uppercase fs-12"><i class="me-2 mdi mdi-package-variant fs-15"></i> Delivered</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive pt-2">
                                            <table class="table table-borderless align-middle mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-1">
                                                            <div class="avatar-lg bg-light rounded p-1">
                                                                <img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-27.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14"><a href="#!" class="text-dark">8pc Chickenjoy w/ Jolly Spaghetti Pan</a></h5>
                                                            <p class="text-muted">Category : <span class="fw-medium">Family Meals</span></p>
                                                            <p class="mb-0">₱ 776.00 x 1</p>
                                                        </td>
                                                        <td class="text-end fs-15">₱ 776.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-1">
                                                            <div class="avatar-lg bg-light rounded p-1">
                                                                <img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-15.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14"><a href="#!" class="text-dark">Amazing Aloha Champ Jr.</a></h5>
                                                            <p class="text-muted">Category : <span class="fw-medium">Burgers</span></p>
                                                            <p class="mb-0">₱ 109.00 x 5</p>
                                                        </td>
                                                        <td class="text-end fs-15">₱ 545.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-1">
                                                            <div class="avatar-lg bg-light rounded p-1">
                                                                <img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-28.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14"><a href="#!" class="text-dark">1pc Burger Steak w/ Shanghai w/ Drink</a></h5>
                                                            <p class="text-muted">Category : <span class="fw-medium">Burger Steak</span></p>
                                                            <p class="mb-0">₱ 143.00 x 3</p>
                                                        </td>
                                                        <td class="text-end fs-15">₱ 429.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                    <div class="card-footer bg-white">
                                        <div class="d-flex justify-content-end">
                                            <p class="mb-0 d-inline-block">Total Amount (PHP) :
                                                <span class="fw-semibold ms-3 fs-20">
                                                    ₱ 1,750.00
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                        <div class="card card-light product-item in-process">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-header bg-white">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="<?php echo base_url('public/assets') ?>/images/restaurants/mcdonalds.png" alt="" class="avatar-xs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="card-text fw-medium">McDonald's</p>
                                            </div>
                                            <div class="flex-end ms-3">
                                                <span class="badge badge-soft-warning text-uppercase fs-12"><i class="me-2 mdi mdi-food-takeout-box-outline fs-15"></i> In Process</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive pt-2">
                                            <table class="table table-borderless align-middle mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-1">
                                                            <div class="avatar-lg bg-light rounded p-1">
                                                                <img src="<?php echo base_url('public/assets') ?>/images/food/mcdo/img-2.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14"><a href="#!" class="text-dark">BFF Fries Good for 20</a></h5>
                                                            <p class="text-muted">Category : <span class="fw-medium">Group Meals</span></p>
                                                            <p class="mb-0">₱ 1,280.00 x 1</p>
                                                        </td>
                                                        <td class="text-end fs-15">₱ 1,280.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                    <div class="card-footer bg-white">
                                        <div class="d-flex justify-content-end">
                                            <p class="mb-0 d-inline-block">Total Amount (PHP) :
                                                <span class="fw-semibold ms-3 fs-20">
                                                    ₱ 1,280.00
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                        <div class="card card-light product-item on-the-way">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-header bg-white">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="<?php echo base_url('public/assets') ?>/images/restaurants/kenny-rogers-roasters.jpg" alt="" class="avatar-xs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="card-text fw-medium">Kenny Rogers Roasters</p>
                                            </div>
                                            <div class="flex-end ms-3">
                                                <span class="badge badge-soft-secondary text-uppercase fs-12"><i class="me-2 ri-truck-line fs-15"></i> On the Way</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive pt-2">
                                            <table class="table table-borderless align-middle mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-1">
                                                            <div class="avatar-lg bg-light rounded p-1">
                                                                <img src="<?php echo base_url('public/assets') ?>/images/food/kenny-rogers/img-1.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14"><a href="#!" class="text-dark">Chimichurri Roast Solo B</a></h5>
                                                            <p class="text-muted">Category : <span class="fw-medium">Chimichurri Roast</span></p>
                                                            <p class="mb-0">₱ 340.00 x 4</p>
                                                        </td>
                                                        <td class="text-end fs-15">₱ 1,360.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-1">
                                                            <div class="avatar-lg bg-light rounded p-1">
                                                                <img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-15.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14"><a href="#!" class="text-dark">Solo B Roasted Chicken</a></h5>
                                                            <p class="text-muted">Category : <span class="fw-medium">Solo Plates</span></p>
                                                            <p class="mb-0">₱ 310.00 x 2</p>
                                                        </td>
                                                        <td class="text-end fs-15">₱ 620.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                    <div class="card-footer bg-white">
                                        <div class="d-flex justify-content-end">
                                            <p class="mb-0 d-inline-block">Total Amount (PHP) :
                                                <span class="fw-semibold ms-3 fs-20">
                                                    ₱ 1,980.00
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                        <div class="card card-light product-item delivered">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-header bg-white">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="<?php echo base_url('public/assets') ?>/images/restaurants/burger-king.png" alt="" class="avatar-xs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="card-text fw-medium">Burger King</p>
                                            </div>
                                            <div class="flex-end ms-3">
                                                <span class="badge badge-soft-success text-uppercase fs-12"><i class="me-2 mdi mdi-package-variant fs-15"></i> Delivered</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive pt-2">
                                            <table class="table table-borderless align-middle mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-1">
                                                            <div class="avatar-lg bg-light rounded p-1">
                                                                <img src="<?php echo base_url('public/assets') ?>/images/food/burger-king/img-5.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14"><a href="#!" class="text-dark">X-tra Long Chicken Sandwich Meal</a></h5>
                                                            <p class="text-muted">Category : <span class="fw-medium">X-tra Long Chicken</span></p>
                                                            <p class="mb-0">₱ 195.00 x 11</p>
                                                        </td>
                                                        <td class="text-end fs-15">₱ 2,145.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-1">
                                                            <div class="avatar-lg bg-light rounded p-1">
                                                                <img src="<?php echo base_url('public/assets') ?>/images/food/burger-king/img-6.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14"><a href="#!" class="text-dark">BBQ X-tra Long Chicken w/ Rice Meal</a></h5>
                                                            <p class="text-muted">Category : <span class="fw-medium">Crispy & Tender Chicken</span></p>
                                                            <p class="mb-0">₱ 133.00 x 5</p>
                                                        </td>
                                                        <td class="text-end fs-15">₱ 665.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-1">
                                                            <div class="avatar-lg bg-light rounded p-1">
                                                                <img src="<?php echo base_url('public/assets') ?>/images/food/burger-king/img-7.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14"><a href="#!" class="text-dark">Onion Rings</a></h5>
                                                            <p class="text-muted">Category : <span class="fw-medium">Ultimate Sidekicks</span></p>
                                                            <p class="mb-0">₱ 55.00 x 8</p>
                                                        </td>
                                                        <td class="text-end fs-15">₱ 440.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-1">
                                                            <div class="avatar-lg bg-light rounded p-1">
                                                                <img src="<?php echo base_url('public/assets') ?>/images/food/burger-king/img-8.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14"><a href="#!" class="text-dark">Flame-Grilled Quadruple Cheeseburger</a></h5>
                                                            <p class="text-muted">Category : <span class="fw-medium">Flame-Grilled Cheeseburger</span></p>
                                                            <p class="mb-0">₱ 295.00 x 4</p>
                                                        </td>
                                                        <td class="text-end fs-15">₱ 1,180.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                    <div class="card-footer bg-white">
                                        <div class="d-flex justify-content-end">
                                            <p class="mb-0 d-inline-block">Total Amount (PHP) :
                                                <span class="fw-semibold ms-3 fs-20">
                                                    ₱ 4,430.00
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                        <div class="card card-light product-item rejected">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-header bg-white">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="<?php echo base_url('public/assets') ?>/images/restaurants/starbucks.png" alt="" class="avatar-xs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="card-text fw-medium">Starbucks</p>
                                            </div>
                                            <div class="flex-end ms-3">
                                                <span class="badge badge-soft-danger text-uppercase fs-12"><i class="me-2 ri-close-circle-line fs-15"></i> Rejected</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive pt-2">
                                            <table class="table table-borderless align-middle mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-1">
                                                            <div class="avatar-lg bg-light rounded p-1">
                                                                <img src="<?php echo base_url('public/assets') ?>/images/food/starbucks/img-4.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14"><a href="#!" class="text-dark">Caramel Frappuccino</a></h5>
                                                            <p class="text-muted">Category : <span class="fw-medium">Frappuccino</span></p>
                                                            <p class="mb-0">₱ 180.00 x 2</p>
                                                        </td>
                                                        <td class="text-end fs-15">₱ 360.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-1">
                                                            <div class="avatar-lg bg-light rounded p-1">
                                                                <img src="<?php echo base_url('public/assets') ?>/images/food/starbucks/img-5.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14"><a href="#!" class="text-dark">Chai Tea Latte</a></h5>
                                                            <p class="text-muted">Category : <span class="fw-medium">Teavana Teas</span></p>
                                                            <p class="mb-0">₱ 175.00 x 5</p>
                                                        </td>
                                                        <td class="text-end fs-15">₱ 875.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                    <div class="card-footer bg-white">
                                        <div class="d-flex justify-content-end">
                                            <p class="mb-0 d-inline-block">Total Amount (PHP) :
                                                <span class="fw-semibold ms-3 fs-20">
                                                    ₱ 1,235.00
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>
            </div>
        </div>

    </div>
    <!--end col-->
</div>
<!--end row-->