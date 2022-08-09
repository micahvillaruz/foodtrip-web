<div class="row">
    <div class="col-xl-3 col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h5 class="fs-16 mb-0">Filters</h5>
                    </div>
                </div>
            </div>

            <div class="accordion accordion-flush filter-accordion">

                <div class="card-body border-bottom">
                    <div id="dish_filter">
                    </div>
                    <div>
                        <button type="button" id="seeMoreDishCat" class="btn btn-link text-decoration-none text-uppercase fw-medium p-0 mt-2">See More</button>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingBrands">
                        <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseBrands" aria-expanded="true" aria-controls="flush-collapseBrands">
                            <span class="text-muted text-uppercase fs-12 fw-medium">Restaurants</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                        </button>
                    </h2>

                    <div id="flush-collapseBrands" class="accordion-collapse collapse show" aria-labelledby="flush-headingBrands">
                        <div class="accordion-body text-body pt-0">
                            <div class="search-box search-box-sm">
                                <input type="text" class="form-control bg-light border-0" id="searchBrandsList" placeholder="Search Restaurants...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                            <div id="restaurant_filter" class="d-flex flex-column gap-2 mt-3 filter-check">
                            </div>
                            <div>
                                <button type="button" class="btn btn-link text-decoration-none text-uppercase fw-medium p-0 mt-2">See More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end accordion-item -->
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-9 col-lg-8">
        <div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">List of Dishes</h5>
                </div>
                <div class="card-body">
                    <table id="dishes-datatables" class="table dt-responsive nowrap align-middle" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>Restaurant</th>
                                <th>Dish</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Published</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<script src="<?php echo base_url('public/assets') ?>/js/ajax/admin/dishes.ajax.js"></script>