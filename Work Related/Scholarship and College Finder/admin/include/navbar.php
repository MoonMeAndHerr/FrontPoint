        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="../../siteidentity/logo/<?php echo WEB_LOGO; ?>" alt="" height="80">
                    </span>
                    <span class="logo-lg">
                        <img src="../../siteidentity/logo/<?php echo WEB_LOGO; ?>" alt="" height="80">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="../../siteidentity/logo/<?php echo WEB_LOGO; ?>" alt="" height="80">
                    </span>
                    <span class="logo-lg">
                        <img src="../../siteidentity/logo/<?php echo WEB_LOGO; ?>" alt="" height="80">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Main Menu</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="index">
                                <i class=" ri-home-7-line"></i> <span data-key="t-widgets">Dashboard</span>
                            </a>
                        </li>

                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Management</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarAdmin" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarAdmin">
                                <i class=" ri-shield-user-fill"></i> <span data-key="t-advance-ui">Admins</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarAdmin">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="list-admin" class="nav-link" data-key="t-sweet-alerts">List Admins</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="manage-admin?add" class="nav-link" data-key="t-sweet-alerts">Manage Admins</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarUser" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarUser">
                                <i class=" ri-user-fill"></i> <span data-key="t-advance-ui">Users</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarUser">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="list-user" class="nav-link" data-key="t-sweet-alerts">List Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="manage-user?add" class="nav-link" data-key="t-sweet-alerts">Add Users</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarCategory" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarCategory">
                                <i class="ri-file-list-fill"></i> <span data-key="t-advance-ui">Categories</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarCategory">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="list-category" class="nav-link" data-key="t-sweet-alerts">List Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="manage-category?add" class="nav-link" data-key="t-sweet-alerts">Add Categories</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLocation" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarLocation">
                                <i class="ri-user-location-fill"></i> <span data-key="t-advance-ui">Locations</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLocation">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="list-location" class="nav-link" data-key="t-sweet-alerts">List Locations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="manage-location?add" class="nav-link" data-key="t-sweet-alerts">Add Locations</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarScholarship" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarScholarship">
                                <i class=" ri-money-dollar-box-fill"></i> <span data-key="t-advance-ui">Scholarship</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarScholarship">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="list-scholarship" class="nav-link" data-key="t-sweet-alerts">List Scholarship</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="manage-scholarship?add" class="nav-link" data-key="t-sweet-alerts">Add Scholarship</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="application-scholarship" class="nav-link" data-key="t-sweet-alerts">Application Scholarship</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#SidebarCollege" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="SidebarCollege">
                                <i class=" ri-building-2-fill"></i> <span data-key="t-advance-ui">College</span>
                            </a>
                            <div class="collapse menu-dropdown" id="SidebarCollege">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="list-college" class="nav-link" data-key="t-sweet-alerts">List College</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="manage-college?add" class="nav-link" data-key="t-sweet-alerts">Add College</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Miscellenous</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="siteidentity">
                                <i class=" ri-link-m"></i> <span data-key="t-widgets">Site Identity</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->