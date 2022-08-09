        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="<?php echo base_url() ?>restoadmin/dashboard" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo base_url('public/assets') ?>/images/logo-sm.png" alt="" height="35">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url('public/assets') ?>/images/logo-dark.png" alt="" height="45">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="<?php echo base_url() ?>restoadmin/dashboard" class="logo logo-light">
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
                        <li class="menu-title"><span menu>Restaurant Details</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarResto" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarResto">
                                <i class="mdi mdi-speedometer"></i> <span id="restoName"></span>
                            </a>
                            <div class="menu-dropdown collapse show" id="sidebarResto">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url() ?>restoadmin/restaurant" class="nav-link"> View Restaurant </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url() ?>restoadmin/restaurant/edit-restaurant" class="nav-link"> Edit Restaurant </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url() ?>restoadmin/products" class="nav-link"> View Products </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url() ?>restoadmin/products/add-product" class="nav-link"> Add Products </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-title"><i class="ri-more-fill"></i> <span>Orders & Payments</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo base_url() ?>restoadmin/orders" role="button" aria-expanded="false">
                                <i class="mdi mdi-cube-outline"></i> <span>Orders</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo base_url() ?>restoadmin/invoices" role="button" aria-expanded="false">
                                <i class="mdi mdi-layers-triple-outline"></i> <span>Payments</span>
                            </a>
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

        <script src="<?php echo base_url('public/assets') ?>/js/ajax/restoadmin/sidebar.ajax.js"></script>