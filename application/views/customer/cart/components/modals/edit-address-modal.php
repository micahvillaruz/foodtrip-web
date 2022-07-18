    <!-- editItemModal -->
    <div id="addAddressModal" class="modal fade zoomIn" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAddressModalLabel">Address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="mb-3" id="modal-id" style="display: none;">
                            <label for="id-field" class="form-label">ID</label>
                            <input type="text" id="id-field" class="form-control" placeholder="ID" readonly />
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="text" id="full_name" class="form-control" placeholder="Enter Full Name" required />
                            <label for="full_name" class="form-label">Full Name </label>
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="number" id="phone_number" class="form-control" placeholder="Enter Phone Number" required />
                            <label for="phone_number" class="form-label">Phone Number</label>
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="text" id="region" class="form-control" placeholder="Enter Region" required />
                            <label for="region" class="form-label">Region</label>
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="text" id="province" class="form-control" placeholder="Enter Province" required />
                            <label for="province" class="form-label">Province</label>
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="text" id="city" class="form-control" placeholder="Enter City" required />
                            <label for="city" class="form-label">City</label>
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="text" id="barangay" class="form-control" placeholder="Enter Barangay" required />
                            <label for="barangay" class="form-label">Barangay</label>
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="number" class="form-control" id="zip_code" placeholder="Enter ZIP Code">
                            <label for="zip_code">Zipcode</label>
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="text" id="address_1" class="form-control" placeholder="Enter Lot & Block No, House No, Street Name" required />
                            <label for="address_1" class="form-label">Lot & Block No, House No, Street Name</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" id="address_2" class="form-control" placeholder="Enter Bulding Name, Subdivision, Avenue" />
                            <label for="address_2" class="form-label">Bulding Name, Subdivision, Avenue</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->