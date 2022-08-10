<div class="row">
    <div class="col-lg-12">
        <div class="card" id="invoiceList">
            <div class="card-header border-bottom-dashed">
                <div class="row g-4 align-items-center">
                    <div class="col-sm">
                        <div>
                            <h5 class="card-title mb-0">Invoices</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div id="export-buttons">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="model-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th>Payment No</th>
                            <th>Order No</th>
                            <th>Restaurant</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="<?php echo base_url() ?>customer/invoices/invoice-details" class="fw-medium link-primary">#60524012573</a></td>
                            <td><a href="javascript:void(0);" class="fw-medium link-primary">#97464507680</a></td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jollibee.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    <a href="javascript:void(0);" class="text-dark">Jollibee</a>
                                </div>
                            </td>
                            <td class="date">18 Jul, 2022 <small class="text-muted">11:30 AM</small></td>
                            <td>₱ 1,750.00</td>
                            <td><span class="badge badge-soft-success text-uppercase fs-13 d-block">Paid</span></td>
                            <td>
                                <ul class="list-inline hstack gap-3 justify-content-center mb-0">
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                        <a href="#!" class="text-black-50 d-inline-block">
                                            <i class="ri-eye-fill fs-16"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Download">
                                        <a class="text-info d-inline-block">
                                            <i class="ri-download-2-fill fs-16"></i>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0);" class="fw-medium link-primary">#86480774487</a></td>
                            <td><a href="javascript:void(0);" class="fw-medium link-primary">#30823265449</a></td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/mcdonalds.png" alt="" class="avatar-xs rounded-circle me-2">
                                    <a href="javascript:void(0);" class="text-dark">McDonald's</a>
                                </div>
                            </td>
                            <td class="date">19 Jul, 2022 <small class="text-muted">06:15 PM</small></td>
                            <td>₱ 1,280.00</td>
                            <td><span class="badge badge-soft-success text-uppercase fs-13 d-block">Paid</span></td>
                            <td>
                                <ul class="list-inline hstack gap-3 justify-content-center mb-0">
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                        <a href="#!" class="text-black-50 d-inline-block">
                                            <i class="ri-eye-fill fs-16"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Download">
                                        <a class="text-info d-inline-block">
                                            <i class="ri-download-2-fill fs-16"></i>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0);" class="fw-medium link-primary">#12201394280</a></td>
                            <td><a href="javascript:void(0);" class="fw-medium link-primary">#47655229297</a></td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/kenny-rogers-roasters.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    <a href="javascript:void(0);" class="text-dark">Kenny Rogers Roasters</a>
                                </div>
                            </td>
                            <td class="date">19 Jul, 2022 <small class="text-muted">04:55 PM</small></td>
                            <td>₱ 1,980.00</td>
                            <td><span class="badge badge-soft-success text-uppercase fs-13 d-block">Paid</span></td>
                            <td>
                                <ul class="list-inline hstack gap-3 justify-content-center mb-0">
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                        <a href="#!" class="text-black-50 d-inline-block">
                                            <i class="ri-eye-fill fs-16"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Download">
                                        <a class="text-info d-inline-block" data-bs-toggle="modal" href="#deleteOrder">
                                            <i class="ri-download-2-fill fs-16"></i>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0);" class="fw-medium link-primary">#11368545495</a></td>
                            <td><a href="javascript:void(0);" class="fw-medium link-primary">#16538545794</a></td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/burger-king.png" alt="" class="avatar-xs rounded-circle me-2">
                                    <a href="javascript:void(0);" class="text-dark">Burger King</a>
                                </div>
                            </td>
                            <td class="date">07 Jul, 2022 <small class="text-muted">04:52 PM</small></td>
                            <td>₱ 4,430.00</td>
                            <td><span class="badge badge-soft-success text-uppercase fs-13 d-block">Paid</span></td>
                            <td>
                                <ul class="list-inline hstack gap-3 justify-content-center mb-0">
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                        <a href="#!" class="text-black-50 d-inline-block">
                                            <i class="ri-eye-fill fs-16"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Download">
                                        <a class="text-info d-inline-block">
                                            <i class="ri-download-2-fill fs-16"></i>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0);" class="fw-medium link-primary">#50911490329</a></td>
                            <td><a href="javascript:void(0);" class="fw-medium link-primary">#31402861718</a></td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/starbucks.png" alt="" class="avatar-xs rounded-circle me-2">
                                    <a href="javascript:void(0);" class="text-dark">Starbucks</a>
                                </div>
                            </td>
                            <td class="date">14 Jul, 2022 <small class="text-muted">09:35 AM</small></td>
                            <td>₱ 1,235.00</td>
                            <td><span class="badge badge-soft-danger text-uppercase fs-13 d-block">Rejected</span></td>
                            <td>
                                <ul class="list-inline hstack gap-3 justify-content-center mb-0">
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                        <a href="#!" class="text-black-50 d-inline-block">
                                            <i class="ri-eye-fill fs-16"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Download">
                                        <a class="text-info d-inline-block">
                                            <i class="ri-download-2-fill fs-16"></i>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!--end col-->
</div>
<!--end row-->