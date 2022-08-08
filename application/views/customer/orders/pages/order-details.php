<div class="row">
    <div class="col-xl-9">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h5 id="order_no" class="card-title flex-grow-1 mb-0 fw-medium link-primary"></h5>
                    <div class="flex-shrink-0">
                        <a href="<?php echo base_url() ?>customer/invoices/invoice-details" class="btn btn-success btn-sm"><i class="ri-download-2-fill align-middle me-1"></i> Invoice</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive table-card">
                    <table class="table table-nowrap align-middle table-borderless mb-0">
                        <thead class="table-light text-muted">
                            <tr>
                                <th scope="col">Dish Name</th>
                                <th scope="col">Dish Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col" class="text-end">Sub Total</th>
                            </tr>
                        </thead>
                        <tbody id="dishes">
                            <tr class="border-top border-top-dashed">
                                <td colspan="2">
                                </td>
                                <td colspan="2" class="fw-medium p-0 align-center">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row"><span class="fs-15">Total (PHP) :</span></th>
                                                <th class="text-end"><span id="total" class="fs-15"></span></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr class="border-top border-top-dashed">
                                <td colspan="4">
                                    <span class="badge rounded-pill bg-primary fs-12">Order Comment</span>
                                    <div class="bg-light ms-1 col-10 text-wrap">
                                        <p id="comment" class="p-2"></p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end card-->
        <div class="card">
            <div class="card-header">
                <div class="d-sm-flex align-items-center">
                    <h5 class="card-title flex-grow-1 mb-0">Order Status</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="profile-timeline">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingOne">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-success rounded-circle shadow">
                                                <i class="mdi mdi-cart-heart"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="fs-15 mb-0 fw-semibold">Pending - <span id="date_created" class="fw-normal"></span></h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body ms-2 ps-5 py-0">
                                    <h6 class="mb-1">An order has been placed.</h6>
                                    <p id="full_date_created" class="text-muted"></p>
                                </div>
                            </div>
                        </div>
                        <div id="in_process" class="accordion-item border-0">
                        </div>
                        <div id="on_the_way" class="accordion-item border-0">
                        </div>
                        <div id="delivered" class="accordion-item border-0">
                        </div>
                    </div>
                    <!--end accordion-->
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-xl-3">
        <!-- <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <h5 class="card-title flex-grow-1 mb-0"><i class="mdi mdi-truck-fast-outline align-middle me-1 text-muted"></i> Delivery Details</h5>
                    <div class="flex-shrink-0">
                        <a href="javascript:void(0);" class="badge badge-soft-primary fs-11">Track Order</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <lord-icon src="https://cdn.lordicon.com/uetqnvvg.json" trigger="loop" colors="primary:#4b38b3,secondary:#0ab39c" style="width:80px;height:80px"></lord-icon>
                    <h5 class="fs-16 mt-2">LalaMove</h5>
                    <p class="text-muted mb-0">Tracking No: 26325016208</p>
                    <p class="text-muted mb-0">Driver Name : Adonis Saide Figueroa</p>
                    <p class="text-muted mb-0">Driver Phone : 09918291232</p>
                </div>
            </div>
        </div> -->
        <div id="delivery-details" class="card">
        </div>
        <!--end card-->
        <div class="card" id="restaurantDetails">
        </div>
        <!--end card-->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0"><i class="ri-map-pin-line align-middle me-1 text-muted"></i> Shipping Address</h5>
            </div>
            <div class="card-body">
                <ul class="list-unstyled vstack gap-2 fs-13 mb-0">
                    <li class="fw-medium fs-14"><span id="address_owner"></span></li>
                    <li><span id="address_owner_phone"></span></li>
                    <li><span id="address_first_line"></span></li>
                    <li><span id="address_second_line"></span></li>
                    <li><span id="address_third_line"></span></li>
                </ul>
            </div>
        </div>
        <!--end card-->

        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0"><i class="ri-secure-payment-line align-bottom me-1 text-muted"></i> Payment Details</h5>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center mb-2">
                    <div class="flex-shrink-0">
                        <p class="text-muted mb-0">Payment No:</p>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h6 id="payment_no" class="mb-0"></h6>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="flex-shrink-0">
                        <p class="text-muted mb-0">Payment Status:</p>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h6 id="payment_status" class="mb-0"></h6>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="flex-shrink-0">
                        <p class="text-muted mb-0">Date Paid:</p>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h6 id="payment_date" class="mb-0"></h6>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <p class="text-muted mb-0">Total Amount:</p>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h6 id="payment_total" class="mb-0"></h6>
                    </div>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->
<script src="<?php echo base_url('public/assets') ?>/js/ajax/customer/order_details.ajax.js"></script>