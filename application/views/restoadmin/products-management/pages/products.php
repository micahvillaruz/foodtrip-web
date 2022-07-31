<div class="row">
  <div class="col-12">
    <div>
      <div class="card">
        <div class="card-header">
          <div class="row g-4">
            <div class="col-sm-auto align-self-center">
              <h5 class="card-title mb-0">Product List</h5>
            </div>
            <div class="col-sm">
              <div class="d-flex justify-content-sm-end">
                <div>
                  <a href="apps-ecommerce-add-product.html" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Product</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body">
          <table id="example" class="table dt-responsive nowrap align-middle" style="width:100%">
            <thead class="table-light">
              <tr>
                <th scope="col" style="width: 10px;">
                  <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                  </div>
                </th>
                <th>Dish</th>
                <th>Price</th>
                <th>Status</th>
                <th>Published</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                  </div>
                </th>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-sm bg-light rounded p-1"><img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-1.png" alt="" class="img-fluid d-block">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="fs-14 mb-1"><a href="#!" class="text-dark">1 - pc. Chickenjoy w/ Half Jolly Spaghetti & Shanghai Super Meal</a></h5>
                      <p class="text-muted mb-0">Category : <span class="fw-medium">Super Meals</span></p>
                    </div>
                  </div>
                </td>
                <td>₱185.00</td>
                <td><span class="badge badge-soft-success text-uppercase">Available</span></td>
                <td>12 Oct, 2021<small class="text-muted ms-1">10:05 AM</small></td>
                <td>
                  <ul class="list-inline hstack gap-2 mb-0">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                      <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                        <i class="ri-eye-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                      <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                        <i class="ri-pencil-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                      <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                        <i class="ri-delete-bin-5-fill fs-16"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                  </div>
                </th>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-sm bg-light rounded p-1"><img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-2.png" alt="" class="img-fluid d-block">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="fs-14 mb-1"><a href="#!" class="text-dark">Jolly Spaghetti Family Pan</a></h5>
                      <p class="text-muted mb-0">Category : <span class="fw-medium">Jolly Spaghetti</span></p>
                    </div>
                  </div>
                </td>
                <td>₱210.00</td>
                <td><span class="badge badge-soft-success text-uppercase">Available</span></td>
                <td>06 Jan, 2021<small class="text-muted ms-1">01:31 PM</small></td>
                <td>
                  <ul class="list-inline hstack gap-2 mb-0">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                      <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                        <i class="ri-eye-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                      <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                        <i class="ri-pencil-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                      <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                        <i class="ri-delete-bin-5-fill fs-16"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                  </div>
                </th>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-sm bg-light rounded p-1"><img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-3.png" alt="" class="img-fluid d-block">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="fs-14 mb-1"><a href="#!" class="text-dark">Chicken Sandwich</a></h5>
                      <p class="text-muted mb-0">Category : <span class="fw-medium">Chicken Sandwich</span></p>
                    </div>
                  </div>
                </td>
                <td>₱158.00</td>
                <td><span class="badge badge-soft-danger text-uppercase">Unavailable</span></td>
                <td>26 Mar, 2021<small class="text-muted ms-1">11:40 AM</small></td>
                <td>
                  <ul class="list-inline hstack gap-2 mb-0">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                      <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                        <i class="ri-eye-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                      <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                        <i class="ri-pencil-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                      <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                        <i class="ri-delete-bin-5-fill fs-16"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                  </div>
                </th>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-sm bg-light rounded p-1"><img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-4.png" alt="" class="img-fluid d-block">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="fs-14 mb-1"><a href="#!" class="text-dark">Cheesy Classic Jolly Hotdog</a></h5>
                      <p class="text-muted mb-0">Category : <span class="fw-medium">Jolly Hotdog and Pies</span></p>
                    </div>
                  </div>
                </td>
                <td>₱64.00</td>
                <td><span class="badge badge-soft-danger text-uppercase">Unavailable</span></td>
                <td>19 Apr, 2021<small class="text-muted ms-1">02:51 PM</small></td>
                <td>
                  <ul class="list-inline hstack gap-2 mb-0">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                      <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                        <i class="ri-eye-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                      <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                        <i class="ri-pencil-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                      <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                        <i class="ri-delete-bin-5-fill fs-16"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                  </div>
                </th>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-sm bg-light rounded p-1"><img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-5.png" alt="" class="img-fluid d-block">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="fs-14 mb-1"><a href="#!" class="text-dark">6 - pc. Chickenjoy Solo</a></h5>
                      <p class="text-muted mb-0">Category : <span class="fw-medium">Family Meals</span></p>
                    </div>
                  </div>
                </td>
                <td>₱399.00</td>
                <td><span class="badge badge-soft-danger text-uppercase">Unavailable</span></td>
                <td>30 Mar, 2021<small class="text-muted ms-1">09:42 AM</small></td>
                <td>
                  <ul class="list-inline hstack gap-2 mb-0">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                      <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                        <i class="ri-eye-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                      <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                        <i class="ri-pencil-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                      <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                        <i class="ri-delete-bin-5-fill fs-16"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                  </div>
                </th>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-sm bg-light rounded p-1"><img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-6.png" alt="" class="img-fluid d-block">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="fs-14 mb-1"><a href="#!" class="text-dark">Palabok</a></h5>
                      <p class="text-muted mb-0">Category : <span class="fw-medium">Palabok</span></p>
                    </div>
                  </div>
                </td>
                <td>₱117.00</td>
                <td><span class="badge badge-soft-success text-uppercase">Available</span></td>
                <td>12 Oct, 2021<small class="text-muted ms-1">04:55 PM</small></td>
                <td>
                  <ul class="list-inline hstack gap-2 mb-0">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                      <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                        <i class="ri-eye-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                      <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                        <i class="ri-pencil-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                      <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                        <i class="ri-delete-bin-5-fill fs-16"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                  </div>
                </th>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-sm bg-light rounded p-1"><img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-7.png" alt="" class="img-fluid d-block">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="fs-14 mb-1"><a href="#!" class="text-dark">Ultimate Burger Steak w/ Egg</a></h5>
                      <p class="text-muted mb-0">Category : <span class="fw-medium">Burger Steak</span></p>
                    </div>
                  </div>
                </td>
                <td>₱207.00</td>
                <td><span class="badge badge-soft-success text-uppercase">Available</span></td>
                <td>15 May, 2021<small class="text-muted ms-1">03:40 PM</small></td>
                <td>
                  <ul class="list-inline hstack gap-2 mb-0">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                      <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                        <i class="ri-eye-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                      <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                        <i class="ri-pencil-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                      <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                        <i class="ri-delete-bin-5-fill fs-16"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                  </div>
                </th>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-sm bg-light rounded p-1"><img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-8.png" alt="" class="img-fluid d-block">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="fs-14 mb-1"><a href="#!" class="text-dark">Double Bacon Champ Jr.</a></h5>
                      <p class="text-muted mb-0">Category : <span class="fw-medium">Burgers</span></p>
                    </div>
                  </div>
                </td>
                <td>₱181.00</td>
                <td><span class="badge badge-soft-success text-uppercase">Available</span></td>
                <td>21 Jun, 2021<small class="text-muted ms-1">12:18 PM</small></td>
                <td>
                  <ul class="list-inline hstack gap-2 mb-0">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                      <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                        <i class="ri-eye-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                      <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                        <i class="ri-pencil-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                      <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                        <i class="ri-delete-bin-5-fill fs-16"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                  </div>
                </th>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-sm bg-light rounded p-1"><img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-9.png" alt="" class="img-fluid d-block">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="fs-14 mb-1"><a href="#!" class="text-dark">3 Pies To-Go</a></h5>
                      <p class="text-muted mb-0">Category : <span class="fw-medium">Desserts</span></p>
                    </div>
                  </div>
                </td>
                <td>₱106.00</td>
                <td><span class="badge badge-soft-danger text-uppercase">Unavailable</span></td>
                <td>15 Jan, 2021<small class="text-muted ms-1">10:29 AM</small></td>
                <td>
                  <ul class="list-inline hstack gap-2 mb-0">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                      <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                        <i class="ri-eye-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                      <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                        <i class="ri-pencil-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                      <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                        <i class="ri-delete-bin-5-fill fs-16"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                  </div>
                </th>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-sm bg-light rounded p-1"><img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-10.png" alt="" class="img-fluid d-block">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="fs-14 mb-1"><a href="#!" class="text-dark">1 - pc. Chickenjoy</a></h5>
                      <p class="text-muted mb-0">Category : <span class="fw-medium">Chickenjoy</span></p>
                    </div>
                  </div>
                </td>
                <td>₱79.00</td>
                <td><span class="badge badge-soft-success text-uppercase">Available</span></td>
                <td>15 Jun, 2021<small class="text-muted ms-1">03:51 PM</small></td>
                <td>
                  <ul class="list-inline hstack gap-2 mb-0">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                      <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                        <i class="ri-eye-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                      <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                        <i class="ri-pencil-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                      <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                        <i class="ri-delete-bin-5-fill fs-16"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                  </div>
                </th>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-sm bg-light rounded p-1"><img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-11.png" alt="" class="img-fluid d-block">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="fs-14 mb-1"><a href="#!" class="text-dark">Jolly Crispy Fries</a></h5>
                      <p class="text-muted mb-0">Category : <span class="fw-medium">Fries and Sides</span></p>
                    </div>
                  </div>
                </td>
                <td>₱48.00</td>
                <td><span class="badge badge-soft-success text-uppercase">Available</span></td>
                <td>12 Oct, 2021<small class="text-muted ms-1">10:05 AM</small></td>
                <td>
                  <ul class="list-inline hstack gap-2 mb-0">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                      <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                        <i class="ri-eye-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                      <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                        <i class="ri-pencil-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                      <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                        <i class="ri-delete-bin-5-fill fs-16"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                  </div>
                </th>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-sm bg-light rounded p-1"><img src="<?php echo base_url('public/assets') ?>/images/food/jollibee/img-12.png" alt="" class="img-fluid d-block">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="fs-14 mb-1"><a href="#!" class="text-dark">Chocolate Sundae Twirl</a></h5>
                      <p class="text-muted mb-0">Category : <span class="fw-medium">Desserts</span></p>
                    </div>
                  </div>
                </td>
                <td>₱48.00</td>
                <td><span class="badge badge-soft-success text-uppercase">Available</span></td>
                <td>06 Jan, 2021<small class="text-muted ms-1">01:31 PM</small></td>
                <td>
                  <ul class="list-inline hstack gap-2 mb-0">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                      <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                        <i class="ri-eye-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                      <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                        <i class="ri-pencil-fill fs-16"></i>
                      </a>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                      <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                        <i class="ri-delete-bin-5-fill fs-16"></i>
                      </a>
                    </li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>
  <!-- end col -->
</div>
<!-- end row -->