<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" width="70%">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" width="70%">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" width="70%">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" width="70%">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!--                <li class="menu-title">Essentials</li>
                                <li>
                                    <a href="create-users.php">
                                        <i class="bx bx-user"></i>
                                        <span>Manage CMS Users</span>
                                    </a>
                                </li>-->

                <!--                <li>
                                    <a href="manage-district.php">
                                        <i class="bx bx-map"></i>
                                        <span>Manage District</span>
                                    </a>
                                </li>-->
                <li>
                    <a href="index.php">
                        <i class="bx bx-home "></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <?php
                if ($_SESSION['type'] == 1) {
                    ?>

                    <li class="menu-title">Essentials</li>
                    <li>

                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-user"></i>
                            <span>Manage CMS Users</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="manage-user-type.php">Manage User Type </a></li>
                            <li><a href="create-users.php">Manage Users</a></li>
                        </ul>

                    </li>
                    <?php
                }
                ?>
                <li class="menu-title">Website Content</li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-chart "></i>
                        <span>Centeres</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="manage-center-type.php">Manage Centers Type </a></li>
                        <li><a href="manage-district.php">Districts</a></li>
                        <li><a href="manage-center.php">Manage Center</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-chart "></i>
                        <span>Courses</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="manage-course-type.php">Manage Courses Type </a></li>
                        <li><a href="manage-courses.php">Manage Courses </a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-chart "></i>
                        <span>Applications</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="manage-applications.php">Manage Applications</a></li>
                    </ul>
                </li>
                <?php
                if ($_SESSION['type'] == 1) {
                    ?>

                    <li>
                        <a href="manage-leaders.php" class="waves-effect">
                            <i class="bx bx-user"></i>
                            <span>Manage Leaders</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-news"></i>
                            <span>Advertisement</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="create-advertisement.php">Add Advertisement</a></li>
                            <li><a href="manage-advertisement.php">Manage Advertisement</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-chart "></i>
                            <span>Pages</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="manage-page-type.php">Manage Page Type </a></li>
                            <li><a href="manage-pages.php">Manage Pages</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-book"></i>
                            <span>About Us</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="#">About NYSC</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-chart "></i>
                            <span>Centeres</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="manage-center-type.php">Manage Centers Type </a></li>
                            <li><a href="manage-district.php">Districts</a></li>
                            <li><a href="manage-center.php">Manage Center</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-chart "></i>
                            <span>Courses</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="manage-course-type.php">Manage Courses Type </a></li>
                            <li><a href="manage-courses.php">Manage Courses </a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-news"></i>
                            <span>News</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="manage-news-type.php">Manage News Type </a></li>
                            <li><a href="create-news.php">Add News</a></li>
                            <li><a href="manage-news.php">Manage News</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-calendar "></i>
                            <span>Event</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="manage-event.php">Manage Event</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class=" bx bx-sitemap "></i>
                            <span>Devision</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="create-devision.php">Add Devision</a></li>
                            <li><a href="manage-devision.php">Manage Devision</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="create-photo-album.php">
                            <i class="bx bx-images"></i>
                            <span>Photo Album</span>
                        </a>

                    </li>
                    <li>
                        <a href="create-video-album.php">
                            <i class="bx bx-images"></i>
                            <span>Video Album</span>
                        </a>

                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-crosshair "></i>
                            <span>Youth Club</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="#">Discover</a></li>
                            <li><a href="#">Youth Office</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="manage-testimonial.php">
                            <i class="bx bx-images"></i>
                            <span>Testimonial</span>
                        </a>
                    </li>
                    <?php
                }
                ?>
                <!--                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bx-crosshair "></i>
                                        <span>Youth Club</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="create-news.php">Discover</a></li>
                                        <li><a href="manage-news.php">Nearest Youth Office</a></li>
                                        <li><a href="manage-news.php">Benefit</a></li>
                                        <li><a href="manage-news.php">Youth Club News</a></li>
                                    </ul>
                                </li> -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>