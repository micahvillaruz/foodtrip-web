<div class="row">
    <div class="col-lg-12">
        <div class="card" id="customerList">
            <div class="card-header border-bottom-dashed">

                <div class="row g-4 align-items-center">
                    <div class="col-sm">
                        <div>
                            <h5 class="card-title mb-0">Customer List</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div id="export-buttons">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body border-bottom-dashed border-bottom">
                <table id="customers-datatables" class="table dt-responsive nowrap align-middle" style="width:100%">
                    <thead class="bg-light">
                        <tr>
                            <th>No.</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Joining Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <h5 class="fs-15 mb-1"><a href="#" class="link text-dark">James Paul Lim Tulod</a></h5>
                                        <i class="mdi mdi-gender-male text-primary"></i>
                                        <small>Male</small>
                                    </div>
                                </div>
                            </li>
                            <!-- end list item -->
                            <li class="list-group-item" data-id="02">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">User No</a></h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="fs-12 text-secondary fw-bold">USR-2489149724337</div>
                                    </div>
                                </div>
                            </li>
                            <!-- end list item -->
                            <li class="list-group-item" data-id="03">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">First Name</a></h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <span class="fs-11 badge rounded-pill badge-outline-primary">James Paul</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end list item -->
                            <li class="list-group-item" data-id="04">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Middle Name</a></h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <span class="fs-11 badge rounded-pill badge-outline-primary">Lim</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end list item -->
                            <li class="list-group-item" data-id="04">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Last Name</a></h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <span class="fs-11 badge rounded-pill badge-outline-primary">Tulod</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end list item -->
                            <li class="list-group-item" data-id="05">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-1">Email Address</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="d-flex fs-13 fw-medium"> <i class="ri-mail-fill text-warning me-2"></i>jptulod123@gmail.com</div>
                                    </div>
                                </div>
                            </li>
                            <!-- end list item -->
                            <li class="list-group-item" data-id="06">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-1">Phone Number</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="d-flex fs-13 fw-medium"> <i class="ri-phone-fill text-success me-2"></i>09451152076</div>
                                    </div>
                                </div>
                            </li>
                            <!-- end list item -->
                            <li class="list-group-item" data-id="06">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-1">Joining Date</h5>
                                    </div>
                                    <div class="flex-shrink-0 bg-light ms-2">
                                        <div class="fw-medium">Aug. 2, 2022<small class="text-muted ms-1">05:39 PM</small></div>
                                    </div>
                                </div>
                            </li>
                            <!-- end list item -->
                            <li class="list-group-item" data-id="07">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-3">Address</h5>
                                        <blockquote class="mx-3 blockquote custom-blockquote blockquote-outline blockquote-dark rounded shadow mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1">Full Name</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="fs-13 fw-medium">James Paul Lim Tulod</div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1">Phone Number</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="fs-13 fw-medium">09451152076</div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1">Address</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2 text-end">
                                                    <div class="fs-13 fw-medium text-wrap" style="width: 15rem; text-align: justify;">Block 8 Lot 34 Sunrise Street, Maligaya Subdivision Barangay 177, Caloocan City, Metro Manila, 1424</div>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class=" mx-3 blockquote custom-blockquote blockquote-outline blockquote-dark rounded shadow mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1">Full Name</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="fs-13 fw-medium">Micah Villaruz</div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1">Phone Number</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="fs-13 fw-medium">09561437674</div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1">Address</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="fs-13 fw-medium text-wrap" style="width: 15rem; text-align: justify;">Lot 21 Block 16 Molave Street, Violago Homes Parkwoods Payatas B, Quezon City, Metro Manila, 1119</div>
                                                </div>
                                            </div>
                                        </blockquote>
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
</div>

</div>
<!--end col-->
</div>
<!--end row-->

<script src="<?php echo base_url('public/assets') ?>/js/ajax/admin/customers.ajax.js"></script>