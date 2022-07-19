<div class="row justify-content-center">
  <div class="col-xxl-9">
    <div class="card" id="demo">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-header border-bottom-dashed p-4">
            <div class="d-flex">
              <div class="flex-grow-1">
                <img src="<?php echo base_url('public/assets') ?>/images/logo-dark.png" class="card-logo card-logo-dark" alt="logo dark" height="55">
                <img src="<?php echo base_url('public/assets') ?>/images/logo-light.png" class="card-logo card-logo-light" alt="logo light" height="55">
                <div class="mt-sm-5 mt-4">
                  <h6 class="text-muted text-uppercase fw-semibold">Address</h6>
                  <p class="text-muted mb-1" id="restaurant-address">10/F Jollibee Plaza Building Emerald Ave.Quezon, North Luzon</p>
                  <p class="text-muted mb-0" id="zip-code"><span>Zip-code:</span> 1008</p>
                </div>
              </div>
              <div class="flex-shrink-0 mt-sm-0 mt-3">
                <h6><span class="text-muted fw-normal">Restaurant Name:</span><span id="restaurant-name"> Jollibee</span></h6>
                <h6><span class="text-muted fw-normal">Category:</span><span id="restaurant-category"> Fast Food</span></h6>
                <h6><span class="text-muted fw-normal">Email:</span><span id="restaurant-email"> feedback@jollibee.com.ph</span></h6>
                <h6><span class="text-muted fw-normal">Website:</span><span id="restaurant-website"> www.jollibee.com.ph</span></h6>
                <h6><span class="text-muted fw-normal">Landline No:</span><span id="restaurant-landline"> (02) 8-7000</span></h6>
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
                <p class="text-muted mb-2 text-uppercase fw-semibold">Payment No:</p>
                <h5 class="fs-14 mb-0">#<span id="invoice-no">1400090321</span></h5>
              </div>
              <!--end col-->
              <div class="col-lg-3 col-6">
                <p class="text-muted mb-2 text-uppercase fw-semibold">Date</p>
                <h5 class="fs-14 mb-0"><span id="invoice-date">09 Jul, 2022 2:05 PM</span> <small class="text-muted" id="invoice-time">02:36PM</small></h5>
              </div>
              <!--end col-->
              <div class="col-lg-3 col-6">
                <p class="text-muted mb-2 text-uppercase fw-semibold">Payment Status</p>
                <span class="badge badge-soft-success fs-11" id="payment-status">PAID</span>
              </div>
              <!--end col-->
              <div class="col-lg-3 col-6">
                <p class="text-muted mb-2 text-uppercase fw-semibold">Payment Total</p>
                <h5 class="fs-14 mb-0">₱<span id="total-amount">840.00</span></h5>
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
                <h6 class="text-muted text-uppercase fw-semibold mb-3">Shipping Address</h6>
                <p class="fw-medium mb-2" id="shipping-name">Joseph Parker</p>
                <p class="text-muted mb-1" id="shipping-address-line-1">2186 Joyce Street Rocky Mount, Quezon, North Luzon</p>
                <p class="text-muted mb-1"><span>Phone: +</span><span id="shipping-phone-no">639264771621</span></p>
                <h6><span class="text-muted fw-normal">Email:</span><span id="email">josephparker@gmail.com</span></h6>
              </div>
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
                      <span class="fw-medium">Sweatshirt for Men (Pink)</span>
                      <p class="text-muted mb-0">Graphic Print Men & Women Sweatshirt</p>
                    </td>
                    <td>₱250.00</td>
                    <td>02</td>
                    <td class="text-end">₱500.00</td>
                  </tr>
                  <tr>
                    <th scope="row">02</th>
                    <td class="text-start">
                      <span class="fw-medium">Noise NoiseFit Endure Smart Watch</span>
                      <p class="text-muted mb-0">32.5mm (1.28 Inch) TFT Color Touch Display</p>
                    </td>
                    <td>₱200.00</td>
                    <td>01</td>
                    <td class="text-end">₱200.00</td>
                  </tr>
                  <tr>
                    <th scope="row">03</th>
                    <td class="text-start">
                      <span class="fw-medium">350 ml Glass Grocery Container</span>
                      <p class="text-muted mb-0">Glass Grocery Container (Pack of 3, White)</p>
                    </td>
                    <td>₱140.00</td>
                    <td>01</td>
                    <td class="text-end">₱140.00</td>
                  </tr>
                </tbody>
              </table>
              <!--end table-->
            </div>
            <div class="border-top border-top-dashed mt-2">
              <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                <tbody>
                  <tr class="border-top border-top-dashed fs-15">
                    <th scope="row">Total Amount:</th>
                    <th class="text-end">₱840.00</th>
                  </tr>
                </tbody>
              </table>
              <!--end table-->
            </div>
            <div class="mt-3">
              <h6 class="text-muted text-uppercase fw-semibold mb-3">Payment Details:</h6>
              <p class="text-muted mb-1">Payment Number: <span class="fw-medium" id="payment-number">1400090321</span></p>
              <p class="text-muted mb-1">Payment Status: <span class="fw-medium" id="payment-status">In Process</span></p>
              <p class="text-muted mb-1">Date Paid: <span class="fw-medium" id="date-paid">09 Jul, 2022 2:05 PM 02:36PM</span></p>
              <p class="text-muted">Total Amount: <span class="fw-medium" id="">₱ </span><span id="card-total-amount">₱840.00</span></p>
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