    <!-- editItemModal -->
    <div id="addAddressModal" class="modal fade zoomIn" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAddressModalLabel">Address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="mb-3">
                            <label for="addaddress-Name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="addaddress-Name" placeholder="Enter name">
                        </div>

                        <div class="mb-3">
                            <label for="addaddress-textarea" class="form-label">Address</label>
                            <textarea class="form-control" id="addaddress-textarea" placeholder="Enter address" rows="2"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="addaddress-Name" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="addaddress-Name" placeholder="Enter phone no.">
                        </div>

                        <div class="mb-3">
                            <label for="state" class="form-label">Address Type</label>
                            <select class="form-select" id="state" data-choices data-choices-search-false>
                                <option value="homeAddress">Home (7am to 10pm)</option>
                                <option value="officeAddress">Office (11am to 7pm)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->