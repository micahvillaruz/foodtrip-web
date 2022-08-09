<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Restaurant List</h5>
            </div>
            <div class="card-body">
                <table id="restaurants-datatables" class="table dt-responsive nowrap align-middle" style="width:100%">
                    <thead class="bg-light">
                        <tr>
                            <th>Category</th>
                            <th>Restaurant Name</th>
                            <th>Email Address</th>
                            <th>Landline No.</th>
                            <th>Website</th>
                            <th>Restaurant Admin</th>
                            <th>Date Listed</th>
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

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row g-4">
                    <div class="col-sm-auto align-self-center">
                        <h5 class="card-title mb-0">Restaurant Categories</h5>
                    </div>
                    <div class="col-sm">
                        <div class="d-flex justify-content-sm-end">
                            <div>
                                <a href="#!" class="btn btn-success" id="addproduct-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Category</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="restocategories-datatables" class="table nowrap align-middle" style="width:100%">
                    <thead class="bg-light">
                        <tr>
                            <th>Category</th>
                            <th>Restaurants</th>
                            <th>Created By</th>
                            <th>Create Date</th>
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

<script src="<?php echo base_url('public/assets') ?>/js/ajax/admin/restaurants.ajax.js"></script>