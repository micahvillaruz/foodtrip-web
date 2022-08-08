<div class="row">
    <div class="col-lg-12">
        <div class="card" id="orderList">
            <div class="card-header border-bottom-dashed">
                <div class="row g-4 align-items-center">
                    <div class="col-sm">
                        <div>
                            <h5 class="card-title mb-0">Order History</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body border border-dashed border-end-0 border-start-0">
                <table id="orders-datatables" class="table dt-responsive nowrap align-middle" style="width:100%">
                    <thead class="bg-light">
                        <tr>
                            <th>No.</th>
                            <th>Customer</th>
                            <th>Restaurant</th>
                            <th>Order Total</th>
                            <th>Date Ordered</th>
                            <th>Order Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<script src="<?php echo base_url('public/assets') ?>/js/ajax/admin/orders.ajax.js"></script>