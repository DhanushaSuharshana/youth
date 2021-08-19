<style>
    .courses-content {
        min-height: 156px !important;
    }
</style>
<style>
    <?php
    foreach ($this->colors as $key => $color) {

    ?>

    /* <?php echo $key ?> */
    .<?php echo $key ?> .single-categories-courses-box {
        background-color: <?php echo $color['color']; ?> !important;
    }

    .<?php echo $key ?> .single-categories-courses-box:hover .icon, .<?php echo $key ?> 
    .single-categories-courses-box:focus .icon {
        background-color: #fff !important;
        border-color: <?php echo $color['color']; ?> !important;
        color: <?php echo $color['color']; ?> !important;
    }

    <?php  } ?>
</style>

<header class="header-area">
    <div class="top-header top-header-style-four">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="top-header-contact-info">
                        <li>
                            <a href="tel:+94 0112 850 986"> Call:
                                +94 0112 850 986</a>
                        </li>
                        <div class="top-header-social">
                            <li>
                                <a href="mailto:info@nysc.lk"> Email:
                                    info@nysc.lk</a>
                            </li>
                        </div>
                    </ul>

                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="top-header-login-register">
                        <li>
                            <a href="#" target="_blank"><i class="bx bxl-facebook font-18"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-twitter font-18"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-linkedin font-18"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-instagram font-18"></i></a>
                        </li>
                        <li>
                            <div class="top-header-social">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent;
                                        border: none; color: white">

                                    <span style="color: white" class="font-18">සිං</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item d-flex align-items-center">

                                        <span>En</span>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex align-items-center">

                                        <span>සිං </span>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex align-items-center">
                                        <span> தம</span>
                                    </a>

                                </div>
                            </div>

                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </div>

    <div class="navbar-area">
        <div class="raque-responsive-nav">
            <div class="container">
                <div class="raque-responsive-menu">
                    <div class="logo">
                        <a href="./">
                            <img src="<?php echo URL ?>assets/img/black-logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="raque-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="./">
                        <img src="<?php echo URL ?>assets/img/black-logo.png" alt="logo" style="width: 60%">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" style="display: block;">
                        <ul class="navbar-nav">


                            <li class="nav-item"><a href="<?php echo URL ?>" class="nav-link active">Home  </a></li>
                            <li class="nav-item"><a href="<?php echo URL ?>youth_news/" class="nav-link">News  </a></li>
                            <li class="nav-item"><a href="<?php echo URL ?>events/" class="nav-link ">Events  </a></li>
                           

                            <li class="nav-item"><a href="#" class="nav-link">Divisions <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="<?php echo URL ?>division">Administrative Division</a></li>
                                    <li class="nav-item"><a href="<?php echo URL ?>division/view">Finance Division</a></li>
                                    <li class="nav-item"><a href="view-division.php">Legal Investigation </a> </li>
                                    <li class="nav-item"><a href="view-division.php">National Youth Awards</a></li>
                                </ul>
                            </li>
                            <!--                            <li class="nav-item"><a href="#" class="nav-link">Youth Club <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="#">Discover</a></li>
                                    <li class="nav-item"><a href="#">Nearest Youth Office</a></li>
                                    <li class="nav-item"><a href="#">Benefits  </a> </li>
                                    <li class="nav-item"><a href="#">Youth Club News</a></li>
                                </ul>
                            </li>-->
                            <li class="nav-item"><a href="#" class="nav-link">Student <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="<?php echo URL ?>centers" class="nav-link">Find Courses From Center</a></li>
                                    <li class="nav-item"><a href="<?php echo URL ?>courses" class="nav-link">Find Courses</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Gallery <i class="bx bx-chevron-down"></i> </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="<?php echo URL ?>gallery" class="nav-link">Photo Gallery</a></li>
                                    <li class="nav-item"><a href="<?php echo URL ?>gallery" class="nav-link">Video Gallery</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Services <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="<?php echo URL ?>">Youth Club</a> </li>
                                    <li class="nav-item"><a href="#">Youth Services Limited</a></li>
                                    <li class="nav-item"><a href="#">NYSCO</a></li>
                                    <li class="nav-item"><a href="#">Youth Band</a></li>
                                    <li class="nav-item"><a href="#">Youth Music Club</a></li>
                                    <li class="nav-item"><a href="#">Photography and Video Unit</a></li>
                                    <!--                                    <li class="nav-item"><a href="#">Video Wall</a></li>-->
                                </ul>
                            </li>

                            <li class="nav-item"><a href="<?php echo URL ?>contact_us" class="nav-link">Contact Us</a></li>
                            <li class="nav-item"><a href="<?php echo URL ?>centers/location" class="nav-link">Our Centers</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <div class="navbar-area header-sticky">
        <div class="raque-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="<?php echo URL ?>assets/img/black-logo.png" alt="logo" style="width: 55%;">
                    </a>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">

                            <li class="nav-item"><a href="<?php echo URL ?>" class="nav-link active">Home </a></li>
                            <li class="nav-item"><a href="<?php echo URL ?>youth_news/" class="nav-link">News  </a></li>
                            <li class="nav-item"><a href="<?php echo URL ?>events/" class="nav-link ">Events  </a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Divisions <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="<?php echo URL ?>division">Administrative Division</a></li>
                                    <li class="nav-item"><a href="<?php echo URL ?>division/view">Finance Division</a></li>
                                    <li class="nav-item"><a href="view-division.php">Legal Investigation </a> </li>
                                    <li class="nav-item"><a href="view-division.php">National Youth Awards</a></li>
                                </ul>
                            </li>
                            <!--                            <li class="nav-item"><a href="#" class="nav-link">Youth Club <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="#">Discover</a></li>
                                    <li class="nav-item"><a href="#">Nearest Youth Office</a></li>
                                    <li class="nav-item"><a href="#">Benefits  </a> </li>
                                    <li class="nav-item"><a href="#">Youth Club News</a></li>
                                </ul>
                            </li>-->
                            <li class="nav-item"><a href="#" class="nav-link">Student <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="<?php echo URL ?>centers" class="nav-link">Find Courses From Center</a></li>
                                    <li class="nav-item"><a href="<?php echo URL ?>courses" class="nav-link">Find Courses</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Gallery <i class="bx bx-chevron-down"></i> </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="<?php echo URL ?>gallery" class="nav-link">Photo Gallery</a></li>
                                    <li class="nav-item"><a href="<?php echo URL ?>video-gallery" class="nav-link">Video Gallery</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Services <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="<?php echo URL ?>">Youth Club</a> </li>
                                    <li class="nav-item"><a href="#">Youth Services Limited</a></li>
                                    <li class="nav-item"><a href="#">NYSCO</a></li>
                                    <li class="nav-item"><a href="#">Youth Band</a></li>
                                    <li class="nav-item"><a href="#">Youth Music Club</a></li>
                                    <li class="nav-item"><a href="#">Photography and Video Unit</a></li>
                                    <!--                                    <li class="nav-item"><a href="#">Video Wall</a></li>-->
                                </ul>
                            </li>

                            <li class="nav-item"><a href="<?php echo URL ?>contact_us" class="nav-link">Contact Us</a></li>
                            <li class="nav-item"><a href="<?php echo URL ?>centers/location" class="nav-link">Our Centers</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>