        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="<?php echo base_url() ?>customer/explore" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo base_url('public/assets') ?>/images/logo-sm.png" alt="" height="35">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url('public/assets') ?>/images/logo-dark.png" alt="" height="45">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="<?php echo base_url() ?>customer/explore" class="logo logo-light">
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
                        <li class="menu-title"><span>Dashboard</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="mdi mdi-speedometer"></i> <span>Explore</span>
                            </a>
                            <div class="menu-dropdown collapse show" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url() ?>customer/explore#home" class="nav-link"> Home </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url() ?>customer/explore#dishes" class="nav-link"> Popular Dishes </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url() ?>customer/explore#resto" class="nav-link"> Popular Restaurants </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="menu-title"><i class="ri-more-fill"></i> <span>Restaurants & Dishes</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo base_url() ?>customer/restaurants" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                                <i class="mdi mdi-account-circle-outline"></i> <span>Restaurants</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo base_url() ?>customer/products" role="button" aria-expanded="false" aria-controls="sidebarPages">
                                <i class="mdi mdi-sticker-text-outline"></i> <span>Dishes</span>
                            </a>
                        </li>

                        <li class="menu-title"><i class="ri-more-fill"></i> <span>Orders & Payments</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo base_url() ?>customer/orders" role="button" aria-expanded="false" aria-controls="sidebarUI">
                                <i class="mdi mdi-cube-outline"></i> <span i">Orders</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo base_url() ?>customer/invoices" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                                <i class="mdi mdi-layers-triple-outline"></i> <span i">Payments</span>
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