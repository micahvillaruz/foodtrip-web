<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="card-title mb-0 align-self-center">Couriers</h5>
          <div>
            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add</button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table id="couriers-datatables" class="table dt-responsive nowrap align-middle" style="width:100%">
          <thead class="bg-light">
            <tr>
              <th>Courier No.</th>
              <th>Courier Name</th>
              <th>Status</th>
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

<script src="<?php echo base_url('public/assets') ?>/js/ajax/admin/couriers.ajax.js"></script>