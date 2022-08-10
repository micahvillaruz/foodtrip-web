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
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div id="restoadminList" class="col-xxl-12">
        <div class="card">
            <div class="card-body border-bottom-dashed border-bottom">
                <table id="restoadmins-datatables" class="table dt-responsive nowrap align-middle" style="width:100%">
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
                    </tbody>
                </table>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-xxl-3">
        <div id="restoAdminCard" class="card d-none">
            <div class="card-header text-center bg-soft-primary">
                <h3 id="full_name" class="mt-4 mb-2 fw-bold"></h3>
                <p id="resto_name_top" class="fs-15 fw-medium"></p>
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
                                        <span id="user_no" class="fw-medium"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">First Name</td>
                                <td>
                                    <span id="first_name" class="badge rounded-pill badge-outline-primary fs-12"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Middle Name</td>
                                <td>
                                    <span id="middle_name" class="badge rounded-pill badge-outline-primary fs-12"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Last Name</td>
                                <td>
                                    <span id="last_name" class="badge rounded-pill badge-outline-primary fs-12"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Email Address</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span id="email_address" class="fs-12 badge badge-soft-dark badge-border">
                                            <i class="ri-mail-fill text-warning me-1"></i>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">User Type</td>
                                <td><span id="user_type" class="fs-12 text-uppercase badge badge-soft-success"></span></td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Joining Date</td>
                                <td>
                                    <span id="date_created"></span>
                                    <small id="time_created" class="text-muted"></small>
                                </td>
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
                                    <div id="resto_name" class="d-flex align-items-center fw-medium">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Category</td>
                                <td>
                                    <div id="restocatg_name">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Address</td>
                                <td>
                                    <div id="address" class="d-flex">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Restaurant Email</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span id="resto_email" class="fs-12 badge badge-soft-dark badge-border">
                                        </span>
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

<script src="<?php echo base_url('public/assets') ?>/js/ajax/admin/restaurant-admins.ajax.js"></script>