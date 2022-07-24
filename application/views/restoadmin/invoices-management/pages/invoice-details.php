<div class="row justify-content-center">
  <div class="col-xxl-9">
    <div class="card" id="demo">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-header border-bottom-dashed p-4">
            <div class="d-flex">
              <div class="flex-grow-1">
                <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jollibee.jpg" alt="restaurant logo" height="120">
                <div class="mt-sm-5 mt-4">
                  <h6 class="text-muted text-uppercase fw-semibold">Address</h6>
                  <p class="text-muted mb-1">10/F Jollibee Plaza Building</p>
                  <p class="text-muted mb-1">Emerald Ave., Ortigas Center</p>
                  <p class="text-muted mb-0">Pasig City, Metro Manila, 1600</p>
                </div>
              </div>
              <div class="flex-shrink-0 mt-sm-0 mt-3">
                <h6><span class="text-muted fw-normal">Restaurant Name:</span><span id="resto_name"> Jollibee</span></h6>
                <h6><span class="text-muted fw-normal">Category:</span><span id="restocatg_name"> Fast Food</span></h6>
                <h6><span class="text-muted fw-normal">Email:</span><span id="resto_email"> feedback@jollibee.com.ph</span></h6>
                <h6><span class="text-muted fw-normal">Website:</span> <a href="https://www.jollibee.com.ph/" class="link-primary" target="_blank" id="resto_website"> www.jollibee.com.ph</a></h6>
                <h6 class="mb-0"><span class="text-muted fw-normal">Landline No: </span><span id="resto_landline"> (02) 8-7000</span></h6>
              </div>
            </div>
          </div>
          <!--end card-header-->
        </div>
        <!--end col-->
        <div class="col-lg-12">
          <div class="card-body p-4">
            <div class="row g-3">
              <div class="col-lg-3 col-6">
                <p class="text-muted mb-2 text-uppercase fw-semibold">Payment No</p>
                <h5 class="fs-14 mb-0">#<span id="payment_no">60524012573</span></h5>
              </div>
              <!--end col-->
              <div class="col-lg-3 col-6">
                <p class="text-muted mb-2 text-uppercase fw-semibold">Date</p>
                <h5 class="fs-14 mb-0" id="date_updated"><span>18 Jul, 2022</span> <small class="text-muted">11:30 AM</small></h5>
              </div>
              <!--end col-->
              <div class="col-lg-3 col-6">
                <p class="text-muted mb-2 text-uppercase fw-semibold">Payment Status</p>
                <span class="badge badge-soft-success fs-11" id="payment_status">Paid</span>
              </div>
              <!--end col-->
              <div class="col-lg-3 col-6">
                <p class="text-muted mb-2 text-uppercase fw-semibold">Total Amount</p>
                <h5 class="fs-14 mb-0">₱<span id="payment_total">1,750.00</span></h5>
              </div>
              <!--end col-->
            </div>
            <!--end row-->
          </div>
          <!--end card-body-->
        </div>
        <!--end col-->
        <div class="col-lg-12">
          <div class="card-body p-4 border-top border-top-dashed">
            <div class="row g-3">
              <div class="col-6">
                <h6 class="text-muted text-uppercase fw-semibold mb-3">Billing Address</h6>
                <p class="fw-medium mb-2" id="full-name">Avrielle Haven Fernandez Juarez</p>
                <p class="text-muted mb-1">1071 Del Monte Avenue</p>
                <p class="text-muted mb-1">Barangay Paltok, Quezon City</p>
                <p class="text-muted mb-1">Metro Manila, 1105</p>
                <p class="text-muted mb-1"><span>Phone: </span><span id="phone_number">09872537193</span></p>
                <p class="text-muted mb-0"><span>Email: </span><span id="email_address">avijuarez@gmail.com</span> </p>
              </div>
              <!--end col-->
              <div class="col-6">
                <h6 class="text-muted text-uppercase fw-semibold mb-3">Shipping Address</h6>
                <p class="fw-medium mb-2" id="full-name">Avrielle Haven Fernandez Juarez</p>
                <p class="text-muted mb-1">1071 Del Monte Avenue</p>
                <p class="text-muted mb-1">Barangay Paltok, Quezon City</p>
                <p class="text-muted mb-1">Metro Manila, 1105</p>
                <p class="text-muted mb-1"><span>Phone: </span><span id="phone_number">09872537193</span></p>
                <p class="text-muted mb-0"><span>Email: </span><span id="email_address">avijuarez@gmail.com</span> </p>
              </div>
              <!--end col-->
            </div>
            <!--end row-->
          </div>
          <!--end card-body-->
        </div>
        <!--end col-->
        <div class="col-lg-12">
          <div class="card-body p-4">
            <div class="table-responsive">
              <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                <thead>
                  <tr class="table-active">
                    <th scope="col" style="width: 50px;">#</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Dish Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col" class="text-end">Sub Total</th>
                  </tr>
                </thead>
                <tbody id="products-list">
                  <tr>
                    <th scope="row">01</th>
                    <td class="text-start">
                      <span class="fw-medium">8pc Chickenjoy w/ Jolly Spaghetti Pan</span>
                      <p class="text-muted mb-0">Category: <span class="fw-medium">Family Meals</span></p>
                    </td>
                    <td>₱776.00</td>
                    <td>1</td>
                    <td class="text-end">₱776.00</td>
                  </tr>
                  <tr>
                    <th scope="row">02</th>
                    <td class="text-start">
                      <span class="fw-medium">Amazing Aloha Champ Jr.</span>
                      <p class="text-muted mb-0">Category: <span class="fw-medium">Burgers</span></p>
                    </td>
                    <td>₱109.00</td>
                    <td>5</td>
                    <td class="text-end">₱545.00</td>
                  </tr>
                  <tr>
                    <th scope="row">03</th>
                    <td class="text-start">
                      <span class="fw-medium">1pc Burger Steak w/ Shanghai w/ Drink</span>
                      <p class="text-muted mb-0">Category: <span class="fw-medium">Burger Steak</span></p>
                    </td>
                    <td>₱143.00</td>
                    <td>3</td>
                    <td class="text-end">₱429.00</td>
                  </tr>
                </tbody>
              </table>
              <!--end table-->
            </div>
            <div class="border-top border-top-dashed mt-2">
              <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                <tbody>
                  <tr class="border-top border-top-dashed fs-15">
                    <th scope="row">Total Amount</th>
                    <th class="text-end">₱1,750.00</th>
                  </tr>
                </tbody>
              </table>
              <!--end table-->
            </div>
            <div class="mt-3">
              <h6 class="text-muted text-uppercase fw-semibold mb-3">Payment Details:</h6>
              <p class="text-muted mb-1">Payment Number: <span class="fw-medium" id="payment_no">60524012573</span></p>
              <p class="text-muted mb-1">Payment Status: <span class="fw-medium" id="payment_status">Paid</span></p>
              <p class="text-muted mb-1">Date Paid: <span class="fw-medium" id="date_created">18 Jul,2022 <small class="text-muted">11:30 AM</small></span></p>
              <p class="text-muted">Total Amount: <span class="fw-medium" id="">₱</span><span id="payment_total">1,750.00</span></p>
            </div>
            <div class="hstack gap-2 justify-content-end d-print-none mt-4">
              <a href="javascript:window.print()" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Print</a>
              <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download</a>
            </div>
          </div>
          <!--end card-body-->
        </div>
        <!--end col-->
      </div>
      <!--end row-->
    </div>
    <!--end card-->
  </div>
  <!--end col-->
</div>
<!--end row-->