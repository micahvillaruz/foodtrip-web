<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="d-flex align-items-center">
                    <h5 class="card-title mb-0 fw-semibold flex-grow-1">Explore Product</h5>
                    <div>
                        <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample"><i class="ri-filter-2-line align-bottom"></i> Filters</a>
                    </div>
                </div>
                <div class="collaps show" id="collapseExample">
                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1 mt-3 g-3">
                        <div class="col">
                            <h6 class="text-uppercase fs-12 mb-2">Search</h6>
                            <input type="text" class="form-control" placeholder="Search product name" autocomplete="off" id="searchProductList">
                        </div>
                        <div class="col">
                            <h6 class="text-uppercase fs-12 mb-2">Select Category</h6>
                            <select class="form-control" data-choices name="select-category" data-choices-search-false id="select-category">
                                <option value="">Select Category</option>
                                <option value="Artwork">Artwork</option>
                                <option value="3d Style">3d Style</option>
                                <option value="Photography">Photography</option>
                                <option value="Collectibles">Collectibles</option>
                                <option value="Crypto Card">Crypto Card</option>
                                <option value="Games">Games</option>
                                <option value="Music">Music</option>
                            </select>
                        </div>
                        <div class="col">
                            <h6 class="text-uppercase fs-12 mb-2">File Type</h6>
                            <select class="form-control" data-choices name="file-type" data-choices-search-false id="file-type">
                                <option value="">File Type</option>
                                <option value="jpg">Images</option>
                                <option value="mp4">Video</option>
                                <option value="mp3">Audio</option>
                                <option value="gif">Gif</option>
                            </select>
                        </div>
                        <div class="col">
                            <h6 class="text-uppercase fs-12 mb-2">Sales Type</h6>
                            <select class="form-control" data-choices name="all-sales-type" data-choices-search-false id="all-sales-type">
                                <option value="">All Sales Type</option>
                                <option value="On Auction">On Auction</option>
                                <option value="Has Offers">Has Offers</option>
                            </select>
                        </div>
                        <div class="col">
                            <h6 class="text-uppercase fs-12 mb-4">Price</h6>
                            <div class="slider" id="range-product-price"></div>
                            <input class="form-control" type="hidden" id="minCost" value="0" />
                            <input class="form-control" type="hidden" id="maxCost" value="1000" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="d-flex align-items-center mb-4">
            <div class="flex-grow-1">
                <p class="text-muted fs-14 mb-0">Result: 8745</p>
            </div>
            <div class="flex-shrink-0">
                <div class="dropdown">
                    <a class="text-muted fs-14 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        All View
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1" id="explorecard-list">
</div>
<!-- end row -->
<div class="py-4 text-center" id="noresult" style="display: none;">
    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px"></lord-icon>
    <h5 class="mt-4">Sorry! No Result Found</h5>
</div>
<div class="text-center mb-3">
    <button class="btn btn-link shadow-none text-success mt-2" id="loadmore"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load More </button>
</div>