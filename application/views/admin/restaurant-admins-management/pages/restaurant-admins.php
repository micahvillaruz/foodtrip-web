<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center flex-wrap gap-2">
                    <div class="flex-grow-1">
                        <div>
                            <h5 class="card-title mb-0">Restaurant Admin List</h5>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="hstack text-nowrap gap-2">
                            <div id="export-buttons">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-9">
        <div class="card" id="restoadminList">
            <div class="card-body border-bottom-dashed border-bottom">
                <table id="buttons-datatables" class="table dt-responsive nowrap align-middle" style="width:100%">
                    <thead class="bg-light">
                        <tr>
                            <th>No.</th>
                            <th>Full Name</th>
                            <th>Restaurant</th>
                            <th>Email Address</th>
                            <th>Joining Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="text-primary fw-medium">USR-73781874100</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                                    <span class="d-block fw-medium">Ernesto Tanmantiong</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jollibee.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    Jollibee
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> etanmantiong@gmail.com</span>
                                </div>
                            </td>
                            <td>24 Apr, 2022 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">USR-26199137369</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                                    <span class="d-block fw-medium">Kenneth S. Yang</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/mcdonalds.png" alt="" class="avatar-xs rounded-circle me-2">
                                    McDonald's
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> kennethyang@gmail.com</span>
                                </div>
                            </td>
                            <td>10 Jun, 2022 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">USR-43718865417</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                                    <span class="d-block fw-medium">Manuel U. Agustines</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/kfc.png" alt="" class="avatar-xs rounded-circle me-2">
                                    KFC
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> manuelagustines@gmail.com</span>
                                </div>
                            </td>
                            <td>19 Sep, 2021 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">USR-66394466395</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                                    <span class="d-block fw-medium">Robert Kuan</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/chowking.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    Chowking
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> robertkuan@gmail.com</span>
                                </div>
                            </td>
                            <td>13 Aug, 2021 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">USR-76000499940</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                                    <span class="d-block fw-medium">Edgar Sia II</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/mang-inasal.png" alt="" class="avatar-xs rounded-circle me-2">
                                    Mang Inasal
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> edgarsia@gmail.com</span>
                                </div>
                            </td>
                            <td>10 May, 2022 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">USR-40934455569</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                                    <span class="d-block fw-medium">Robert Ramon F. Trota</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/max-restaurant.png" alt="" class="avatar-xs rounded-circle me-2">
                                    Max's Restaurant
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> roberttrota@gmail.com</span>
                                </div>
                            </td>
                            <td>21 Mar, 2020 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">USR-40534207854</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                                    <span class="d-block fw-medium">Mario L. Montellano</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/tropical-hut.png" alt="" class="avatar-xs rounded-circle me-2">
                                    Tropical Hut
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> mariomontellano@gmail.com</span>
                                </div>
                            </td>
                            <td>12 Nov, 2021 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">USR-73809250630</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                                    <span class="d-block fw-medium">Frederick Siy</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/kenny-rogers-roasters.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    Kenny Rogers Roasters
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> fredericksiy@gmail.com</span>
                                </div>
                            </td>
                            <td>12 Oct, 2022 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">USR-55700818714</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                                    <span class="d-block fw-medium">Manuel V. Pangilinan</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/burger-king.png" alt="" class="avatar-xs rounded-circle me-2">
                                    Burger King
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> manuelpangilinan@gmail.com</span>
                                </div>
                            </td>
                            <td>21 Mar, 2019 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">USR-17188884245</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                                    <span class="d-block fw-medium">Noey Lopez</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/starbucks.png" alt="" class="avatar-xs rounded-circle me-2">
                                    Starbucks
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> noeylopez@gmail.com</span>
                                </div>
                            </td>
                            <td>24 Apr, 2020 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">USR-83637157886</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                                    <span class="d-block fw-medium">Dolores Salcedo</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/baliwag.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    Baliwag Lechon Manok
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> doloresalcedo@gmail.com</span>
                                </div>
                            </td>
                            <td>15 Sep, 2022 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">USR-10174985807</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                                    <span class="d-block fw-medium">Carlos Chan</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jco.png" alt="" class="avatar-xs rounded-circle me-2">
                                    J.CO Donuts & Coffee
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> carloschan@gmail.com</span>
                                </div>
                            </td>
                            <td>28 May, 2022 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">USR-22225772821</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                                    <span class="d-block fw-medium">Winglip K. Chang</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/kuyaj.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    Kuya J Restaurant
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> winglipchang@gmail.com</span>
                                </div>
                            </td>
                            <td>10 March, 2021 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">USR-63782662229</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                                    <span class="d-block fw-medium">Clarita Leelin Go</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/goldilocks.png" alt="" class="avatar-xs rounded-circle me-2">
                                    Goldilocks
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> claritago@gmail.com</span>
                                </div>
                            </td>
                            <td>28 April, 2022 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-xxl-3">
        <div class="card">
            <div class="card-header text-center bg-soft-primary">
                <h3 class="mt-4 mb-2 fw-bold">Carlos Chan</h3>
                <p class="fs-15 fw-medium">J.CO Donuts & Coffee</p>
            </div>
            <div class="card-body">
                <h6 class="text-muted text-uppercase fw-semibold mb-4">Personal Information</h6>
                <div class="table-responsive table-card">
                    <table class="table table-borderless mb-0">
                        <tbody>
                            <tr>
                                <td class="fw-medium" scope="row">User No</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <i class="fs-18 bx bxs-contact text-secondary me-2"></i>
                                        <span class="fw-medium">USR-10174985807</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">First Name</td>
                                <td>
                                    <span class="badge rounded-pill badge-outline-primary fs-12">Carlos</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Middle Name</td>
                                <td>
                                    <span class="fst-italic">No Middle Name</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Last Name</td>
                                <td>
                                    <span class="badge rounded-pill badge-outline-primary fs-12">Chan</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Email Address</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> carloschan@gmail.com</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">User Type</td>
                                <td><span class="fs-12 badge badge-soft-success">Resto_Admin</span></td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Joining Date</td>
                                <td>28 May, 2022 <small class="text-muted">08:58AM</small></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h6 class="mt-5 text-muted text-uppercase fw-semibold mb-4">Restaurant Information</h6>
                <div class="table-responsive table-card">
                    <table class="table table-borderless mb-0">
                        <tbody>
                            <tr>
                                <td class="fw-medium" scope="row">Restaurant Name</td>
                                <td>
                                    <div class="d-flex align-items-center fw-medium">
                                        <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jco.png" alt="" class="avatar-xxs rounded-circle me-2">
                                        J.CO Donuts & Coffee
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Category</td>
                                <td>
                                    <span class="fs-12 badge bg-info">Bakery</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Address</td>
                                <td>
                                    <div class="d-flex">
                                        <i class="fs-18 bx bxs-building-house text-danger me-2"></i>
                                        <span>Unit 107 G/F Promenade Bldg <br> Ortigas Ave Greenhills <br> San Juan City Metro Manila, 1502</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Restaurant Email</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> hello@jcodonuts.com.ph</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->