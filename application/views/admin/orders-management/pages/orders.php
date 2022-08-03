<div class="row">
    <div class="col-lg-12">
        <div class="card" id="orderList">
            <div class="card-header border-bottom-dashed">
                <div class="row g-4 align-items-center">
                    <div class="col-sm">
                        <div>
                            <h5 class="card-title mb-0">Order History</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div id="export-buttons">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body border border-dashed border-end-0 border-start-0">
                <table id="buttons-datatables" class="table dt-responsive nowrap align-middle" style="width:100%">
                    <thead class="bg-light">
                        <tr>
                            <th>No.</th>
                            <th>Customer</th>
                            <th>Restaurant</th>
                            <th>Order Total</th>
                            <th>Date Ordered</th>
                            <th>Order Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="text-primary fw-medium">ODR-97464507680</span></td>
                            <td>
                                <div class="d-flex">
                                    <i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
                                    <div>
                                        <span class="d-block fw-medium">Avrielle Haven Fernandez Juarez</span>
                                        <i class="mdi mdi-gender-female text-danger"></i>
                                        <small>Female</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jollibee.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    Jollibee
                                </div>
                            </td>
                            <td>
                                <h5 class="text-info fw-medium">₱ 1,750.00</h5>
                            </td>
                            <td>18 Jul,2022 <small class="text-muted ms-1">11:30 AM</small></td>
                            <td>
                                <div class="d-block badge badge-soft-success align-items-center">
                                    <i class="me-2 mdi mdi-package-variant fs-13"></i>
                                    <span class="text-uppercase">Delivered</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">ODR-61097516414</span></td>
                            <td>
                                <div class="d-flex">
                                    <i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
                                    <div>
                                        <span class="d-block fw-medium">Louisse Natasha Valeria</span>
                                        <i class="mdi mdi-gender-female text-danger"></i>
                                        <small>Female</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/mcdonalds.png" alt="" class="avatar-xs rounded-circle me-2">
                                    McDonald's
                                </div>
                            </td>
                            <td>
                                <h5 class="text-info fw-medium">₱ 249.00</h5>
                            </td>
                            <td>15 Aug,2022 <small class="text-muted ms-1">11:57 AM</small></td>
                            <td>
                                <div class="d-block badge badge-soft-primary align-items-center">
                                    <i class="me-2 mdi mdi-cart-heart fs-13"></i>
                                    <span class="text-uppercase">Pending</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">ODR-12408506525</span></td>
                            <td>
                                <div class="d-flex">
                                    <i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
                                    <div>
                                        <span class="d-block fw-medium">Akihiro Leonel Juarez</span>
                                        <i class="mdi mdi-gender-male text-primary"></i>
                                        <small>Male</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/kfc.png" alt="" class="avatar-xs rounded-circle me-2">
                                    KFC
                                </div>
                            </td>
                            <td>
                                <h5 class="text-info fw-medium">₱ 1,458.00</h5>
                            </td>
                            <td>09 Jul,2022 <small class="text-muted ms-1">02:05 PM</small></td>
                            <td>
                                <div class="d-block badge badge-soft-success align-items-center">
                                    <i class="me-2 mdi mdi-package-variant fs-13"></i>
                                    <span class="text-uppercase">Delivered</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">ODR-49922144244</span></td>
                            <td>
                                <div class="d-flex">
                                    <i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
                                    <div>
                                        <span class="d-block fw-medium">Ashianna Kim Fernandez</span>
                                        <i class="mdi mdi-gender-female text-danger"></i>
                                        <small>Female</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/chowking.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    Chowking
                                </div>
                            </td>
                            <td>
                                <h5 class="text-info fw-medium">₱ 2,756.00</h5>
                            </td>
                            <td>15 Dec,2022 <small class="text-muted ms-1">08:27 AM</small></td>
                            <td>
                                <div class="d-block badge badge-soft-dark align-items-center">
                                    <i class="me-2 mdi mdi-basket-remove-outline fs-13"></i>
                                    <span class="text-uppercase">Cancelled</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">ODR-91103905867</span></td>
                            <td>
                                <div class="d-flex">
                                    <i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
                                    <div>
                                        <span class="d-block fw-medium">Sebastian Vincent Camero</span>
                                        <i class="mdi mdi-gender-male text-primary"></i>
                                        <small>Male</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/mang-inasal.png" alt="" class="avatar-xs rounded-circle me-2">
                                    Mang Inasal
                                </div>
                            </td>
                            <td>
                                <h5 class="text-info fw-medium">₱ 934.00</h5>
                            </td>
                            <td>18 Sept,2022 <small class="text-muted ms-1">04:17 PM</small></td>
                            <td>
                                <div class="d-block badge badge-soft-dark align-items-center">
                                    <i class="me-2 mdi mdi-basket-remove-outline fs-13"></i>
                                    <span class="text-uppercase">Cancelled</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">ODR-95121078447</span></td>
                            <td>
                                <div class="d-flex">
                                    <i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
                                    <div>
                                        <span class="d-block fw-medium">Amora Elyse Ledezma</span>
                                        <i class="mdi mdi-gender-female text-danger"></i>
                                        <small>Female</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/max-restaurant.png" alt="" class="avatar-xs rounded-circle me-2">
                                    Max's Restaurant
                                </div>
                            </td>
                            <td>
                                <h5 class="text-info fw-medium">₱ 689.00</h5>
                            </td>
                            <td>08 May,2022 <small class="text-muted ms-1">04:18 PM</small></td>
                            <td>
                                <div class="d-block badge badge-soft-secondary align-items-center">
                                    <i class="me-2 ri-truck-line fs-13"></i>
                                    <span class="text-uppercase">On the Way</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">ODR-51036233833</span></td>
                            <td>
                                <div class="d-flex">
                                    <i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
                                    <div>
                                        <span class="d-block fw-medium">Clyden Jaile Ramirez</span>
                                        <i class="mdi mdi-gender-male text-primary"></i>
                                        <small>Male</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/tropical-hut.png" alt="" class="avatar-xs rounded-circle me-2">
                                    Tropical Hut
                                </div>
                            </td>
                            <td>
                                <h5 class="text-info fw-medium">₱ 171.00</h5>
                            </td>
                            <td>26 Apr,2022 <small class="text-muted ms-1">12:27 PM</small></td>
                            <td>
                                <div class="d-block badge badge-soft-primary align-items-center">
                                    <i class="me-2 mdi mdi-cart-heart fs-13"></i>
                                    <span class="text-uppercase">Pending</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">ODR-31013186484</span></td>
                            <td>
                                <div class="d-flex">
                                    <i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
                                    <div>
                                        <span class="d-block fw-medium">Samantha Maureen Vera</span>
                                        <i class="mdi mdi-gender-female text-danger"></i>
                                        <small>Female</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/bonchon.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    BonChon Chicken
                                </div>
                            </td>
                            <td>
                                <h5 class="text-info fw-medium">₱ 215.00</h5>
                            </td>
                            <td>17 Sept,2022 <small class="text-muted ms-1">09:11 AM</small></td>
                            <td>
                                <div class="d-block badge badge-soft-warning align-items-center">
                                    <i class="me-2 bx bx-dish fs-13"></i>
                                    <span class="text-uppercase">In Process</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">ODR-47604977923</span></td>
                            <td>
                                <div class="d-flex">
                                    <i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
                                    <div>
                                        <span class="d-block fw-medium">Larkin Olivier Sanchez</span>
                                        <i class="mdi mdi-gender-male text-primary"></i>
                                        <small>Male</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/kenny-rogers-roasters.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    Kenny Rogers Roasters
                                </div>
                            </td>
                            <td>
                                <h5 class="text-info fw-medium">₱ 1,130.00</h5>
                            </td>
                            <td>23 Nov,2022 <small class="text-muted ms-1">06:27 PM</small></td>
                            <td>
                                <div class="d-block badge badge-soft-success align-items-center">
                                    <i class="me-2 mdi mdi-package-variant fs-13"></i>
                                    <span class="text-uppercase">Delivered</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">ODR-38149334166</span></td>
                            <td>
                                <div class="d-flex">
                                    <i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
                                    <div>
                                        <span class="d-block fw-medium">Avianna Rye Diaz</span>
                                        <i class="mdi mdi-gender-female text-danger"></i>
                                        <small>Female</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/mister-donut.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    Mister Donut
                                </div>
                            </td>
                            <td>
                                <h5 class="text-info fw-medium">₱ 350.00</h5>
                            </td>
                            <td>29 Aug,2022 <small class="text-muted ms-1">03:14 PM</small></td>
                            <td>
                                <div class="d-block badge badge-soft-danger align-items-center">
                                    <i class="me-2 ri-close-circle-line fs-13"></i>
                                    <span class="text-uppercase">Rejected</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">ODR-17324343906</span></td>
                            <td>
                                <div class="d-flex">
                                    <i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
                                    <div>
                                        <span class="d-block fw-medium">Ciandrei Kyle Lopez</span>
                                        <i class="mdi mdi-gender-male text-primary"></i>
                                        <small>Male</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/jco.png" alt="" class="avatar-xs rounded-circle me-2">
                                    J.CO Donuts & Coffee
                                </div>
                            </td>
                            <td>
                                <h5 class="text-info fw-medium">₱ 1,107.00</h5>
                            </td>
                            <td>29 Oct,2022 <small class="text-muted ms-1">08:37 PM</small></td>
                            <td>
                                <div class="d-block badge badge-soft-warning align-items-center">
                                    <i class="me-2 bx bx-dish fs-13"></i>
                                    <span class="text-uppercase">In Process</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">ODR-16795163186</span></td>
                            <td>
                                <div class="d-flex">
                                    <i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
                                    <div>
                                        <span class="d-block fw-medium">Kierra Zylene Ynares</span>
                                        <i class="mdi mdi-gender-female text-danger"></i>
                                        <small>Female</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/shakeys.png" alt="" class="avatar-xs rounded-circle me-2">
                                    Shakey's Pizza
                                </div>
                            </td>
                            <td>
                                <h5 class="text-info fw-medium">₱ 305.00</h5>
                            </td>
                            <td>11 Jan,2022 <small class="text-muted ms-1">08:45 PM</small></td>
                            <td>
                                <div class="d-block badge badge-soft-secondary align-items-center">
                                    <i class="me-2 ri-truck-line fs-13"></i>
                                    <span class="text-uppercase">On the Way</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">ODR-22836983523</span></td>
                            <td>
                                <div class="d-flex">
                                    <i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
                                    <div>
                                        <span class="d-block fw-medium">Kalix Jace Martinez</span>
                                        <i class="mdi mdi-gender-male text-primary"></i>
                                        <small>Male</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/david's-tea-house.png" alt="" class="avatar-xs rounded-circle me-2">
                                    David's Tea House
                                </div>
                            </td>
                            <td>
                                <h5 class="text-info fw-medium">₱ 145.00</h5>
                            </td>
                            <td>12 Dec,2022 <small class="text-muted ms-1">08:14 PM</small></td>
                            <td>
                                <div class="d-block badge badge-soft-danger align-items-center">
                                    <i class="me-2 ri-close-circle-line fs-13"></i>
                                    <span class="text-uppercase">Rejected</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="text-primary fw-medium">ODR-78787993808</span></td>
                            <td>
                                <div class="d-flex">
                                    <i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
                                    <div>
                                        <span class="d-block fw-medium">Estella Nataleigh Valeria Martinez</span>
                                        <i class="mdi mdi-gender-female text-danger"></i>
                                        <small>Female</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center fw-medium">
                                    <img src="<?php echo base_url('public/assets') ?>/images/restaurants/classic-savory.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    Classic Savory
                                </div>
                            </td>
                            <td>
                                <h5 class="text-info fw-medium">₱ 305.00</h5>
                            </td>
                            <td>26 Nov,2022 <small class="text-muted ms-1">07:33 PM</small></td>
                            <td>
                                <div class="d-block badge badge-soft-success align-items-center">
                                    <i class="me-2 mdi mdi-package-variant fs-13"></i>
                                    <span class="text-uppercase">Delivered</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
<div class="modal fade zoomIn" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header p-3 bg-soft-primary">
                <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row g-3 py-2">
                        <h2 class="text-center"><span class="badge badge-outline-primary text-center fw-bold">ODR-12408506525</span></h2>
                        <!--end col-->
                        <div class="col-lg-12">
                            <h6>Customer</h6>
                            <div class="d-flex mb-3">
                                <img src="<?php echo base_url('public/assets') ?>/images/users/user-dummy-img.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                <div>
                                    <span class="d-block fw-medium">Akihiro Leonel Juarez</span>
                                    <div class="hstack gap-4">
                                        <small><i class="mdi mdi-gender-male text-primary me-2"></i> Male</small>
                                        <small><i class="ri-mail-fill text-warning me-2"></i>hirojuarez@gmail.com</small>
                                        <small><i class="ri-phone-fill text-success me-2"></i>09171839204</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <h6>Restaurant</h6>
                            <div class="d-flex align-items-center fw-medium mb-3">
                                <img src="<?php echo base_url('public/assets') ?>/images/restaurants/kfc.png" alt="" class="avatar-sm rounded-circle me-2">
                                <div>
                                    <span class="d-block fw-medium">KFC</span>
                                    <span class="badge badge-soft-danger my-1">Fast Food</span>
                                    <div class="hstack gap-4">
                                        <small><i class="ri-mail-fill text-warning me-2"></i>customercare@kfc.ph</small>
                                        <small><i class="ri-phone-fill text-success me-2"></i>(02) 8887-8888</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <h6>Dishes</h6>
                            <div class="d-block text-wrap px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo base_url('public/assets') ?>/images/food/kfc/img-1.png" class="me-3 avatar-sm bg-light">
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1 fs-14">
                                            2 - pc. Spicy Gangnam Chicken Combo Meal
                                        </h6>
                                        <p class="mb-0 fs-12 text-muted">
                                            Quantity: <span>₱ 239.00 x 2</span>
                                        </p>
                                    </div>
                                    <div class="px-2">
                                        <h6 class="m-0 fw-normal"><span>₱ 478.00</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block text-wrap px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo base_url('public/assets') ?>/images/food/kfc/img-2.png" class="me-3 avatar-sm bg-light">
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1 fs-14">
                                            Ala King Zinger Steak Meal With Buttered Corn
                                        </h6>
                                        <p class="mb-0 fs-12 text-muted">
                                            Quantity: <span>₱ 149.00 x 3</span>
                                        </p>
                                    </div>
                                    <div class="px-2">
                                        <h6 class="m-0 fw-normal"><span>₱ 447.00</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block text-wrap px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo base_url('public/assets') ?>/images/food/kfc/img-3.png" class="me-3 avatar-sm bg-light">
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1 fs-14">
                                            Large Shots
                                        </h6>
                                        <p class="mb-0 fs-12 text-muted">
                                            Quantity: <span>₱ 120.00 x 1</span>
                                        </p>
                                    </div>
                                    <div class="px-2">
                                        <h6 class="m-0 fw-normal"><span>₱ 120.00</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block text-wrap px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo base_url('public/assets') ?>/images/food/kfc/img-4.png" class="me-3 avatar-sm bg-light">
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1 fs-14">
                                            Ala King Rice Bowl Meal
                                        </h6>
                                        <p class="mb-0 fs-12 text-muted">
                                            Quantity: <span>₱ 149.00 x 1</span>
                                        </p>
                                    </div>
                                    <div class="px-2">
                                        <h6 class="m-0 fw-normal"><span>₱ 149.00</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block text-wrap px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo base_url('public/assets') ?>/images/food/kfc/img-5.png" class="me-3 avatar-sm bg-light">
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1 fs-14">
                                            Junior Bucket of Fries
                                        </h6>
                                        <p class="mb-0 fs-12 text-muted">
                                            Quantity: <span>₱ 85.00 x 1</span>
                                        </p>
                                    </div>
                                    <div class="px-2">
                                        <h6 class="m-0 fw-normal"><span>₱ 85.00</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block text-wrap px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo base_url('public/assets') ?>/images/food/kfc/img-6.png" class="me-3 avatar-sm bg-light">
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1 fs-14">
                                            Chicken Chops Fully Loaded Meal
                                        </h6>
                                        <p class="mb-0 fs-12 text-muted">
                                            Quantity: <span>₱ 179.00 x 1</span>
                                        </p>
                                    </div>
                                    <div class="px-2">
                                        <h6 class="m-0 fw-normal"><span>₱ 179.00</span></h6>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center px-3 pt-3">
                                <h6 class="text-muted">Total:</h6>
                                <div class="px-2">
                                    <h6 class="fw-bolder fs-15">₱ 1,458.00</h6>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <span class="badge rounded-pill bg-primary fs-12">Order Comment</span>
                            <div class="bg-light ms-1 text-wrap">
                                <p class="p-2">Please provide extra rice and extra gravy and if pwede po thigh and leg part po thank u</p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <h6>Order Status</h6>
                            <div class="profile-timeline">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item border-0">
                                        <div class="accordion-header" id="headingOne">
                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title bg-success rounded-circle shadow">
                                                            <i class="mdi mdi-cart-heart"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0 fw-semibold">PENDING - <span class="fw-normal">Sat, 09 Jul 2022</span></h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body ms-2 ps-5 py-0">
                                                <h6 class="mb-1">An order has been placed.</h6>
                                                <p class="text-muted">Sat, 09 Jul 2022 - 02:05PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-0">
                                        <div class="accordion-header" id="headingTwo">
                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title bg-success rounded-circle shadow">
                                                            <i class="bx bx-dish"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0 fw-semibold">IN PROCESS - <span class="fw-normal">Sat, 09 Jul 2022</span></h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body ms-2 ps-5 py-0">
                                                <h6 class="mb-1">Seller has proccessed your order.</h6>
                                                <p class="text-muted">Sat, 09 Jul 2022 - 02:10PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-0">
                                        <div class="accordion-header" id="headingThree">
                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title bg-success rounded-circle shadow">
                                                            <i class="ri-truck-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 fw-semibold">ON THE WAY - <span class="fw-normal">Sat, 09 Jul 2022</span></h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body ms-2 ps-5 pt-0">
                                                <h6>Grab Express - COR-90083756538</h6>
                                                <h6 class="mb-1">The order has been picked up by the courier partner.</h6>
                                                <p class="text-muted mb-0">Sat, 09 Jul 2022 - 02:48PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-0">
                                        <div class="accordion-header" id="headingFour">
                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title bg-success rounded-circle shadow">
                                                            <i class="mdi mdi-package-variant"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 fw-semibold">DELIVERED - <span class="fw-normal">Sat, 09 Jul 2022</span></h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body ms-2 ps-5 pt-0">
                                                <h6 class="mb-1">The order has been delivered.</h6>
                                                <p class="text-muted mb-0">Sat, 09 Jul 2022 - 03:29PM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end accordion-->
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <h6>Shipping Address</h6>
                            <blockquote class="mx-3 blockquote custom-blockquote blockquote-outline blockquote-dark rounded shadow mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-1">Full Name</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="fs-13 fw-medium">Akihiro Leonel Juarez</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-1">Phone Number</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="fs-13 fw-medium">09171839204</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-1">Address</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2 text-end">
                                        <div class="fs-13 fw-medium text-wrap" style="width: 15rem;">1186 Zone 6 Puelay, Villasis, Pangasinan, North Luzon, 2427</div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <h6>Delivery Details</h6>
                            <blockquote class="mx-3 blockquote custom-blockquote blockquote-outline blockquote-dark rounded shadow mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-1">Courier</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="fs-13 fw-medium">Grab Express</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-1">Tracking No</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="fs-13 fw-medium">COR-90083756538</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-1">Driver Name</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="fs-13 fw-medium">Ashro Theodore Lavin</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-1">Driver Phone</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="fs-13 fw-medium">09284738590</div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <h6>Payment Details</h6>
                            <blockquote class="mx-3 blockquote custom-blockquote blockquote-outline blockquote-dark rounded shadow mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-1">Payment No</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="fs-13 fw-medium">PYT-29863618971</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-1">Payment Status</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="fs-13 fw-medium text-uppercase">Paid</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-1">Date Paid</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="fs-13 fw-medium">09 Jul,2022 2:05 PM</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-1">Total Amount</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="fs-13 fw-medium">₱ 1,458.00</div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-primary" id="close-modal" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end modal-->
</div>
<!--end modal-->