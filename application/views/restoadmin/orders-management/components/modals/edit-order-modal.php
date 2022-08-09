<div class="modal fade" id="editOrderModal" tabindex="-1" aria-labelledby="editOrderModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-soft-primary p-3">
        <h5 class="modal-title" id="editOrderModal">Edit Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
      </div>
      <form id="editOrderStatusForm">
        <div class="modal-body">
          <div class="mb-3">
            <label for="order_no" class="form-label">Order No.</label>
            <input type="text" id="order_no" class="form-control" readonly />
          </div>

          <div class="mb-3">
            <label for="order_status" class="form-label">Status</label>
            <select class="form-control select-no-search" id="order_status" name="order_status">
              <option value="" selected disabled>Select Status</option>
              <option value="In Process">In Process</option>
              <option value="On the Way">On the Way</option>
              <option value="Delivered">Delivered</option>
              <option value="Rejected">Rejected</option>
            </select>
          </div>

          <div id="courierName" class="mt-3 d-none">
            <label for="courier_name" class="form-label d-flex justify-content-between">Courier <a href="#" class="text-decoration-underline">Add
                Courier</a></label>
            <select class="form-select select-no-search" id="couriers" name="courier">
              <option value="" selected disabled>Select Courier</option>
            </select>
          </div>

          <div id="driverName" class="mt-3 d-none">
            <label class="form-label" for="driver_name">Driver Name</label>
            <input type="text" class="form-control" id="driver_name" name="driver_name" placeholder="Enter Driver Name">
          </div>

          <div id="driverPhone" class="my-3 d-none">
            <label class="form-label" for="driver_phone">Driver Phone</label>
            <input type="text" class="form-control" id="driver_phone" name="driver_phone" placeholder="Enter Driver Phone">
          </div>

        </div>
        <div class="modal-footer">
          <div class="hstack gap-2 justify-content-end">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="edit-btn">Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>