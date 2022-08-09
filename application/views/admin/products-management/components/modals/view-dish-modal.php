<div class="modal fade zoomIn" id="viewDishDetailsModal" tabindex="-1" aria-labelledby="viewDishDetailsModal" aria-hidden="true">
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
                                                <div id="dish_img" class="avatar-lg bg-light rounded p-1">
                                                </div>
                                            </td>
                                            <td>
                                                <h4 class="fw-medium">
                                                    <a href="#!" id="dish_name" class="text-dark text-uppercase"></a>
                                                </h4>
                                                <p class="text-muted fs-14">Category : <span id="dishcatg_name" class="fw-medium"></span></p>
                                            </td>
                                            <td class="text-end fs-19 fw-medium">₱ <span id="dish_price"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                        <!--end col-->

                        <div data-simplebar class="mx-n3">
                            <ul class="list list-group list-group-flush mb-0">
                                <li class="list-group-item" data-id="01">
                                    <div class="d-flex">
                                        <div class="col-6">
                                            <h5 class="fs-13 mb-1">
                                                <a href="#" class="link text-dark">Description</a>
                                            </h5>
                                        </div>

                                        <div class="col-6">
                                            <div class="text-wrap" style="width: 20rem;">
                                                <p id="dish_desc" class="mb-0">

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end list item -->
                                <li class="list-group-item" data-id="02">
                                    <div class="d-flex">
                                        <div class="col-6">
                                            <h5 class="fs-13 mb-1">
                                                <a href="#" class="link text-dark">Status</a>
                                            </h5>
                                        </div>
                                        <div id="dish_status" class="col-6">
                                        </div>
                                    </div>
                                </li>
                                <!-- end list item -->
                                <li class="list-group-item" data-id="03">
                                    <div class="d-flex align-items-center">
                                        <div class="col-6">
                                            <h5 class="fs-13 mb-1">
                                                <a href="#" class="link text-dark">Restaurant</a>
                                            </h5>
                                        </div>
                                        <div class="me-2">
                                            <div id="resto_img">
                                            </div>
                                        </div>
                                        <div>
                                            <p id="resto_name" class="mb-0"></p>
                                        </div>
                                    </div>
                                </li>
                                <!-- end list item -->
                                <li class="list-group-item" data-id="04">
                                    <div class="d-flex align-items-center">
                                        <div class="col-6">
                                            <h5 class="fs-13 mb-1">
                                                <a href="#" class="link text-dark">Published</a>
                                            </h5>
                                        </div>
                                        <div class="col-6">
                                            <p class="mb-0">
                                                <i class="bx bx-calendar text-primary fs-13 me-1"></i>
                                                <span id="date_created"></span>
                                                <small id="time_created" class="text-muted ms-1"></small>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <!-- end list item -->
                                <li class="list-group-item" data-id="05">
                                    <div class="d-flex align-items-center">
                                        <div class="col-6">
                                            <h5 class="fs-13 mb-1">
                                                <a href="#" class="link text-dark">Created By</a>
                                            </h5>
                                        </div>
                                        <div class="col-6">
                                            <p class="mb-0 d-flex align-items-center">
                                                <i class="ri-account-circle-fill text-secondary fs-15 me-2"></i>
                                                <span id="created_by"></span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <!-- end list item -->
                            </ul>
                            <!-- end ul list -->
                        </div>
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