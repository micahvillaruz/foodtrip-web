<div class="modal fade zoomIn" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header p-3 bg-soft-info">
                <h5 class="modal-title" id="exampleModalLabel">Dish Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <input type="hidden" id="dish_id" />
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <div class="table-responsive pt-2">
                                <table class="table table-borderless align-middle mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="col-1 ps-0">
                                                <div class="avatar-lg bg-light rounded p-1">
                                                    <img src="<?php echo base_url('public/assets') ?>/images/food/burger-king/img-6.png" alt="" class="img-fluid d-block">
                                                </div>
                                            </td>
                                            <td>
                                                <h4 class="fw-medium"><a href="#!" class="text-dark">
                                                        BBQ X-tra Long Chicken Jr. w/ Rice Meal</a></h4>
                                                <p class="text-muted">Category : <span class="fw-medium">Crispy & Tender Chicken</span></p>
                                            </td>
                                            <td class="text-end fs-19 fw-medium">₱ 99.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div>
                                <h5 class="fs-15 badge rounded-pill badge-outline-info">Description :</h5>
                                <p class="ms-5">Enjoy our new and improved gravy that perfectly complements X-tra Long Chicken with Rice.</p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <h5 class="fs-15 badge rounded-pill badge-outline-info">Status :</h5>
                            <p class="ms-5">
                                <badge type="button" class="badge badge-soft-success position-relative fs-15">
                                    Available
                                    <i class="ms-1 mdi fs-15 mdi-food"></i>
                                </badge>
                            </p>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <h5 class="fs-15 badge rounded-pill badge-outline-info">Restaurant :</h5>
                            <p class="ms-5">
                                <span class="flex-shrink-0">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/burger-king.png" alt="" class="avatar-xxs rounded-circle">
                                </span>
                                <span class="flex-grow-1 ms-2">
                                    Burger King
                                </span>
                            </p>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <h5 class="fs-15 badge rounded-pill badge-outline-info">Published :</h5>
                            <p class="ms-5">26 Mar, 2021<small class="text-muted ms-1">11:40 AM</small></p>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <h5 class="fs-15 badge rounded-pill badge-outline-info">Created By :</h5>
                            <p class="ms-5">Manuel V. Pangilinan</p>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-soft-info" id="close-modal" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end modal-->