<form id="createproduct-form" autocomplete="off" class="needs-validation" novalidate>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">

          <div>
            <label for="formFile" class="form-label">Dish Image</label>
            <p> Add dish Image </p>
            <input class="form-control" type="file" id="formFile">
          </div>
          <br>

          <div class="mb-3">
            <label class="form-label" for="product-title-input">Dish Name</label>

            <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
            <input type="text" class="form-control d-none" id="product-id-input">
            <input type="text" class="form-control" id="product-title-input" value="" placeholder="Enter product name" required>
            <div class="invalid-feedback"> Please Enter a product name.</div>
          </div>
          <div>
            <label>Product Description</label>

            <div id="ckeditor-classic">
              <p> </p>

            </div>
          </div>
          <br>

          <div class="row">

            <p>
              <label class="form-label" for="product-title-input">Dish Category</label>
              <a href="#" class="float-end text-decoration-underline">Add New</a>
              <select class="form-select" id="choices-category-input" name="choices-category-input" data-choices data-choices-search-false>
                <option value="Appliances">Appliances</option>
                <option value="Automotive Accessories">Automotive Accessories</option>
                <option value="Electronics">Electronics</option>
                <option value="Fashion">Fashion</option>
                <option value="Furniture">Furniture</option>
                <option value="Grocery">Grocery</option>
                <option value="Kids">Kids</option>
                <option value="Watches">Watches</option>
              </select>
          </div>


          <div class="row">
            <div class="col-lg-12 col-sm-9">
              <div class="mb-3">
                <label class="form-label" for="product-price-input">Dish Price</label>
                <div class="input-group has-validation mb-3">
                  <span class="input-group-text" id="product-price-addon">₱</span>
                  <input type="text" class="form-control" id="product-price-input" placeholder="Enter Dish Price" aria-label="Price" aria-describedby="product-price-addon" required>
                  <div class="invalid-feedback">Please Enter a Dish price.</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Select -->


          <div class="row">
            <div class="mb-3">
              <label for="choices-publish-status-input" class="form-label">Dish Status</label>
              <select class="form-select" id="choices-dish-status-input" data-choices data-choices-search-false>
                <option value="Scheduled">Available</option>
                <option value="Draft">Unavailable</option>
              </select>
            </div>
          </div>

      <div class="row justify-content-center">
        <div class="col-sm-1">
          <button type="submit" class="btn btn-success w-sm">Submit</button>
        </div>
      </div>

</form>