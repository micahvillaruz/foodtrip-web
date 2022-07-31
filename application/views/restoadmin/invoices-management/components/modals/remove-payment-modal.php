<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-light p-3">
        <h5 class="modal-title" id="exampleModalLabel">Edit Payment Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
      </div>
      <form>
        <div class="modal-body">
          <div class="mb-3" id="modal-id">
            <label for="payment_no" class="form-label">Payment No.</label>
            <input type="text" id="payment_no" name="payment_no" class="form-control" placeholder="#18308722558" readonly />
          </div>
          <div>
            <label for="payment_status" class="form-label">Status</label>
            <select class="form-select" data-trigger name="payment_status" id="payment_status" data-choices data-choices-search>
              <option value="">Status</option>
              <option value="1">Paid</option>
              <option value="2">Refunded</option>
            </select>
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