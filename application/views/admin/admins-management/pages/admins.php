<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex align-items-center flex-wrap gap-2">
          <div class="flex-grow-1">
            <div>
              <h5 class="card-title mb-0">Admin List</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end col-->
  <div id="adminList" class="col-xxl-12">
    <div class="card">
      <div class="card-body border-bottom-dashed border-bottom">
        <table id="admins-datatables" class="table dt-responsive nowrap align-middle" style="width:100%">
          <thead class="bg-light">
            <tr>
              <th>No.</th>
              <th>Full Name</th>
              <th>Email Address</th>
              <th>Joining Date</th>
              <th>Created By</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
    <!--end card-->
  </div>
  <!--end col-->
</div>
<!--end row-->

<script src="<?php echo base_url('public/assets') ?>/js/ajax/admin/admins.ajax.js"></script>