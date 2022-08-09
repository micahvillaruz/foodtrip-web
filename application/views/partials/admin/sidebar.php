        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="<?php echo base_url() ?>admin/dashboard" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo base_url('public/assets') ?>/images/logo-sm.png" alt="" height="35">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url('public/assets') ?>/images/logo-dark.png" alt="" height="45">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="<?php echo base_url() ?>admin/dashboard" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?php echo base_url('public/assets') ?>/images/logo-sm.png" alt="" height="35">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url('public/assets') ?>/images/logo-light.png" alt="" height="45">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo base_url() ?>admin/dashboard" role="button">
                                <i class="mdi mdi-account-circle-outline"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="menu-title"><i class="ri-more-fill"></i> <span>Restaurants & Dishes</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo base_url() ?>admin/restaurants" role="button">
                                <i class="mdi mdi-account-circle-outline"></i> <span>Restaurants</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo base_url() ?>admin/products" role="button">
                                <i class="mdi mdi-sticker-text-outline"></i> <span>Dishes</span>
                            </a>
                        </li>

                        <li class="menu-title"><i class="ri-more-fill"></i> <span>Orders & Payments</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo base_url() ?>admin/orders" role="button">
                                <i class="mdi mdi-cube-outline"></i> <span>Orders</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo base_url() ?>admin/invoices" role="button">
                                <i class="mdi mdi-layers-triple-outline"></i> <span>Payments</span>
                            </a>
                        </li>

                        <li class="menu-title"><i class="ri-more-fill"></i> <span>Delivery Management</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo base_url() ?>admin/delivery-details" role="button">
                                <i class="mdi mdi-cube-outline"></i> <span>Delivery Details</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo base_url() ?>admin/couriers" role="button">
                                <i class="mdi mdi-layers-triple-outline"></i> <span>Couriers</span>
                            </a>
                        </li>

                        <li class="menu-title"><span menu>User Management</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarUser" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUser">
                                <i class="mdi mdi-speedometer"></i> <span>Users</span>
                            </a>
                            <div class="menu-dropdown collapse show" id="sidebarUser">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url() ?>admin/customers" class="nav-link"> View Customers </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url() ?>admin/restaurant-admins" class="nav-link"> View Restaurant Admin </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url() ?>admin/admins" class="nav-link"> View Admin </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>