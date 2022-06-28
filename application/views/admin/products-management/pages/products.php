<div class="row">
    <div class="col-xl-3 col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex mb-3">
                    <div class="flex-grow-1">
                        <h5 class="fs-16">Filters</h5>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="#" class="text-decoration-underline" id="clearall">Clear All</a>
                    </div>
                </div>

                <div class="filter-choices-input">
                    <input class="form-control" data-choices data-choices-removeItem type="text" id="filter-choices-input" value="T-Shirts" />
                </div>
            </div>

            <div class="accordion accordion-flush filter-accordion">

                <div class="card-body border-bottom">
                    <div>
                        <p class="text-muted text-uppercase fs-12 fw-medium mb-2">Products</p>
                        <ul class="list-unstyled mb-0 filter-list">
                            <li>
                                <a href="#" class="d-flex py-1 align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0 listname">Grocery</h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex py-1 align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0 listname">Fashion</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <span class="badge bg-light text-muted">5</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex py-1 align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0 listname">Watches</h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex py-1 align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0 listname">Electronics</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <span class="badge bg-light text-muted">5</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex py-1 align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0 listname">Furniture</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <span class="badge bg-light text-muted">6</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex py-1 align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0 listname">Automotive Accessories</h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex py-1 align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0 listname">Appliances</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <span class="badge bg-light text-muted">7</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="d-flex py-1 align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0 listname">Kids</h5>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body border-bottom">
                    <p class="text-muted text-uppercase fs-12 fw-medium mb-4">Price</p>

                    <div id="product-price-range" data-slider-color="primary"></div>
                    <div class="formCost d-flex gap-2 align-items-center mt-3">
                        <input class="form-control form-control-sm" type="text" id="minCost" value="0" /> <span class="fw-semibold text-muted">to</span> <input class="form-control form-control-sm" type="text" id="maxCost" value="1000" />
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingBrands">
                        <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseBrands" aria-expanded="true" aria-controls="flush-collapseBrands">
                            <span class="text-muted text-uppercase fs-12 fw-medium">Brands</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                        </button>
                    </h2>

                    <div id="flush-collapseBrands" class="accordion-collapse collapse show" aria-labelledby="flush-headingBrands">
                        <div class="accordion-body text-body pt-0">
                            <div class="search-box search-box-sm">
                                <input type="text" class="form-control bg-light border-0" id="searchBrandsList" placeholder="Search Brands...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                            <div class="d-flex flex-column gap-2 mt-3 filter-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Boat" id="productBrandRadio5" checked>
                                    <label class="form-check-label" for="productBrandRadio5">Boat</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="OnePlus" id="productBrandRadio4">
                                    <label class="form-check-label" for="productBrandRadio4">OnePlus</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Realme" id="productBrandRadio3">
                                    <label class="form-check-label" for="productBrandRadio3">Realme</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Sony" id="productBrandRadio2">
                                    <label class="form-check-label" for="productBrandRadio2">Sony</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="JBL" id="productBrandRadio1" checked>
                                    <label class="form-check-label" for="productBrandRadio1">JBL</label>
                                </div>

                                <div>
                                    <button type="button" class="btn btn-link text-decoration-none text-uppercase fw-medium p-0">1,235
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end accordion-item -->

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingDiscount">
                        <button class="accordion-button bg-transparent shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseDiscount" aria-expanded="true" aria-controls="flush-collapseDiscount">
                            <span class="text-muted text-uppercase fs-12 fw-medium">Discount</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                        </button>
                    </h2>
                    <div id="flush-collapseDiscount" class="accordion-collapse collapse" aria-labelledby="flush-headingDiscount">
                        <div class="accordion-body text-body pt-1">
                            <div class="d-flex flex-column gap-2 filter-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="50% or more" id="productdiscountRadio6">
                                    <label class="form-check-label" for="productdiscountRadio6">50% or more</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="40% or more" id="productdiscountRadio5">
                                    <label class="form-check-label" for="productdiscountRadio5">40% or more</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="30% or more" id="productdiscountRadio4">
                                    <label class="form-check-label" for="productdiscountRadio4">
                                        30% or more
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="20% or more" id="productdiscountRadio3" checked>
                                    <label class="form-check-label" for="productdiscountRadio3">
                                        20% or more
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="10% or more" id="productdiscountRadio2">
                                    <label class="form-check-label" for="productdiscountRadio2">
                                        10% or more
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Less than 10%" id="productdiscountRadio1">
                                    <label class="form-check-label" for="productdiscountRadio1">
                                        Less than 10%
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end accordion-item -->

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingRating">
                        <button class="accordion-button bg-transparent shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseRating" aria-expanded="false" aria-controls="flush-collapseRating">
                            <span class="text-muted text-uppercase fs-12 fw-medium">Rating</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                        </button>
                    </h2>

                    <div id="flush-collapseRating" class="accordion-collapse collapse" aria-labelledby="flush-headingRating">
                        <div class="accordion-body text-body">
                            <div class="d-flex flex-column gap-2 filter-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="4 & Above Star" id="productratingRadio4" checked>
                                    <label class="form-check-label" for="productratingRadio4">
                                        <span class="text-muted">
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star"></i>
                                        </span> 4 & Above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="3 & Above Star" id="productratingRadio3">
                                    <label class="form-check-label" for="productratingRadio3">
                                        <span class="text-muted">
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                        </span> 3 & Above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="2 & Above Star" id="productratingRadio2">
                                    <label class="form-check-label" for="productratingRadio2">
                                        <span class="text-muted">
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                        </span> 2 & Above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1 Star" id="productratingRadio1">
                                    <label class="form-check-label" for="productratingRadio1">
                                        <span class="text-muted">
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                        </span> 1
                                    </label>
                                </div>
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
                <div class="card-header border-0">
                    <div class="row g-4">
                        <div class="col-sm-auto">
                            <div>
                                <a href="apps-ecommerce-add-product.html" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Product</a>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end">
                                <div class="search-box ms-2">
                                    <input type="text" class="form-control" id="searchProductList" placeholder="Search Products...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#productnav-all" role="tab">
                                        All <span class="badge badge-soft-danger align-middle rounded-pill ms-1">12</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-published" role="tab">
                                        Published <span class="badge badge-soft-danger align-middle rounded-pill ms-1">5</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-draft" role="tab">
                                        Draft
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <div id="selection-element">
                                <div class="my-n1 d-flex align-items-center text-muted">
                                    Select <div id="select-content" class="text-body fw-semibold px-1"></div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3 shadow-none" data-bs-toggle="modal" data-bs-target="#removeItemModal">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card header -->
                <div class="card-body">

                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="productnav-all" role="tabpanel">
                            <div id="table-product-list-all" class="table-card gridjs-border-none"></div>
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane" id="productnav-published" role="tabpanel">
                            <div id="table-product-list-published" class="table-card gridjs-border-none"></div>
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane" id="productnav-draft" role="tabpanel">
                            <div class="py-4 text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px">
                                </lord-icon>
                                <h5 class="mt-4">Sorry! No Result Found</h5>
                            </div>
                        </div>
                        <!-- end tab pane -->
                    </div>
                    <!-- end tab content -->

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->