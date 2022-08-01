<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-light p-3">
        <h5 class="modal-title" id="exampleModalLabel">Add Restaurant Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
      </div>
      <form>
        <div class="modal-body">
          <div class="mb-3">
            <label for="restocatg_name" class="form-label">Category Name</label>
            <input type="text" id="restocatg_name" class="form-control" placeholder="Enter Restaurant Category Name" required />
          </div>
        </div>
        <div class="modal-footer">
          <div class="hstack gap-2 justify-content-end">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" id="add-btn">Add Category</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>