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
</div>

</div>
<!--end col-->
</div>
<!--end row-->

<script src="<?php echo base_url('public/assets') ?>/js/ajax/admin/customers.ajax.js"></script>