<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-light p-3">
        <h5 class="modal-title" id="exampleModalLabel">Edit Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
      </div>
      <form action="#">
        <div class="modal-body">
          <input type="hidden" id="id-field" />

          <div class="mb-3" id="modal-id">
            <label for="order_no" class="form-label">Order No.</label>
            <input type="text" id="order_no" class="form-control" placeholder="#10093436457" readonly />
          </div>

          <div class="mb-3">
            <label for="order_status" class="form-label">Status</label>
            <select class="form-select" id="order_status" name="order_status" data-choices data-choices-sorting-false data-choices-search-false>
              <option value="">Select Status</option>
              <option value="1">Pending</option>
              <option value="2">Cancelled</option>
              <option value="3">In Process</option>
              <option value="4">On the Way</option>
              <option value="5">Delivered</option>
              <option value="6">Rejected</option>
            </select>
          </div>

          <div class="mb-3 process-date">
            <label for="date_processed" class="form-label">Date Processed</label>
            <input type="date" id="date_processed" name="date_processed" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-enable-time required placeholder="Select Date" />
          </div>

          <div class="mb-3 cancel-date">
            <label for="date_cancelled" class="form-label">Date Cancelled</label>
            <input type="date" id="date_cancelled" name="date_cancelled" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-enable-time required placeholder="Select Date" />
          </div>

          <div class="mb-3 release-date">
            <label for="date_released" class="form-label">Date Released</label>
            <input type="date" id="date_released" name="date_released" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-enable-time required placeholder="Select Date" />
          </div>

          <div class="reject-date">
            <label for="date_rejected" class="form-label">Date Rejected</label>
            <input type="date" id="date_rejected" name="date_rejected" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-enable-time required placeholder="Select Date" />
          </div>

          <div class="mt-3 courier-name">
            <label for="courier_name" class="form-label d-flex justify-content-between">Courier <a href="#" class="text-decoration-underline">Add
                Courier</a></label>
            <select class="form-select" id="courier_name" name="courier_name" data-choices data-choices-search>
              <option value="">Select Courier</option>
              <option value="1">Grab Express</option>
              <option value="2">Lalamove</option>
              <option value="3">Angkas</option>
              <option value="4">Borzo</option>
              <option value="5">Toktok</option>
            </select>
          </div>

          <div class="mt-3 driver-name">
            <label class="form-label" for="driver_name">Driver Name</label>
            <input type="text" class="form-control" id="driver_name" name="driver_name" placeholder="Enter Driver Name" required>
          </div>

          <div class="my-3 driver-phone">
            <label class="form-label" for="driver_phone">Driver Phone</label>
            <input type="number" class="form-control" id="driver_phone" name="driver_phone" placeholder="Enter Driver Phone" required>
          </div>

          <div class="date-received">
            <label for="date_received" class="form-label">Date Received</label>
            <input type="date" id="date_received" name="date_received" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-enable-time required placeholder="Select date" />
          </div>

        </div>
        <div class="modal-footer">
          <div class="hstack gap-2 justify-content-end">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" id="edit-btn">Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>