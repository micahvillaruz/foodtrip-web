<form id="createproduct-form" autocomplete="off" class="needs-validation" novalidate>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="my-3">
              <label class="form-label mb-1" for="dish_img">Dish Image</label>
              <p class="text-muted">Add Dish Image.</p>
              <input type="file" class="filepond filepond-input-multiple" id="dish_img" name="dish_img" data-allow-reorder="true" data-max-file-size="3MB">
            </div>
          </div>
          <div class="row">
            <div class="my-3">
              <label class="form-label" for="dish_name">Dish Name</label>
              <input type="text" class="form-control" id="dish_name" name="dish_name" placeholder="Enter Dish Name" required>
              <div class="invalid-feedback">Please Enter a Dish Name.</div>
            </div>
          </div>
          <div class="row">
            <div class="my-3">
              <label class="form-label" for="dish_desc">Dish Description</label>
              <div id="dish_desc" class="snow-editor" style="height: 300px;">
              </div> <!-- end Snow-editor-->
            </div>
          </div>
        </div>
      </div>
      <!-- end card -->
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info" role="tab">
                General Info
              </a>
            </li>
          </ul>
        </div>
        <!-- end card header -->
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
              <div class="row">
                <div class="my-3">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="dishcatg_name">Dish Category</label>
                    <a href="#" class="float-end text-decoration-underline">Add New</a>
                  </div>
                  <select class="form-select" id="dishcatg_name" name="dishcatg_name" data-choices>
                    <option value="1">Family Meals</option>
                    <option value="2">Breakfast</option>
                    <option value="3">Burgers</option>
                    <option value="4">Jolly Spaghetti</option>
                    <option value="5">Burger Steak</option>
                    <option value="6">Super Meals</option>
                    <option value="7">Jolly Hotdog & Pies</option>
                    <option value="8">Desserts & Beverages</option>
                    <option value="9">Fries and Sides</option>
                    <option value="10">Palabok</option>
                    <option value="11">Chickenjoy</option>
                    <option value="12">Chicken Sandwich</option>
                    <option value="13">Jolly Kiddie Meal</option>
                  </select>
                </div>
              </div>
              <!-- end row -->

              <div class="row">
                <div class="my-3">
                  <label class="form-label" for="dish_price">Price</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="product-price-addon">₱</span>
                    <input type="text" class="form-control cleave-numeral" id="dish_price" name="dish_price" placeholder="Enter Dish Price" aria-label="Price" aria-describedby="product-price-addon" required>
                    <div class="invalid-feedback">Please Enter the Price of the Dish.</div>
                  </div>
                </div>
              </div>
              <!-- end row -->

              <div class="row">
                <div class="my-3">
                  <label for="status" class="form-label">Status</label>
                  <select class="form-select" id="status" name="status" data-choices data-choices-search-false>
                    <option value="">Select Status</option>
                    <option value="1" selected>Available</option>
                    <option value="2">Unavailable</option>
                  </select>
                </div>
              </div>
              <!-- end row -->

            </div>
            <!-- end tab-pane -->
          </div>
          <!-- end tab content -->
        </div>
        <!-- end card body -->
      </div>
      <!-- end card -->

      <div class="text-end mb-3">
        <button type="submit" class="btn btn-success w-sm">Submit</button>
      </div>
    </div>
    <!-- end col -->
  </div>
  <!-- end row -->

</form>