<div class="row">
    <div class="col-lg-12">
        <div class="card" id="orderList">
            <div class="card-header  border-0">
                <div class="d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Order History</h5>
                </div>
            </div>
            <div class="card-body border border-dashed border-end-0 border-start-0">
                <div>
                    <table id="orders-datatables" class="table dt-responsive nowrap align-middle" style="width:100%">
                        <thead class="bg-light">
                            <tr>
                                <th>Order No.</th>
                                <th>Customer</th>
                                <th>Order Date</th>
                                <th>Total</th>
                                <th>Status</th>
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
    <!--end col-->
</div>
<!--end row-->

<!-- orders ajax js -->
<script src="<?php echo base_url('public/assets') ?>/js/ajax/restoadmin/orders.ajax.js"></script>