<style>
    .nvq-label {
        position: absolute !important;
        top: -24px !important;
        right: 10px !important;
        z-index: 9999 !important;
        height: 50px !important;
        width: 50px !important;
        border-radius: 50% !important;
        color: white !important;
        padding: 14px 7px !important;
        background-color: #d89516 !important;
        text-align: center;
        font-size: 14px !important;
    }

    .nvq-label span {
        margin: 10px 2px !important;
        position: absolute !important;
    }

    /* ------------------------------------------- */

    /*  */
    .duration-label {
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 9999;
        border-radius: 5px;
        color: white;
        padding: 3px 7px;
        background-color: #ff1949;
        text-align: center;
    }

    .type-label {
        position: absolute;
        top: 10px;
        left: 100px;
        z-index: 9999;
        border-radius: 5px;
        color: white;
        padding: 3px 7px;
        background-color: #ff1949;
    }


    .full {
        background-color: #168b69;
    }

    .nvq {
        background-color: #4931f0;
        /* 09b91c */
    }

    .non-nvq {
        background-color: #4931f0;
        ;
    }

    /* LIGHT FOOTER */
    .courses-box-footer {
        /* background: #ff194917; */
        background-color: #ff1949;
    }

    /*  */

    /* SOLID FOOTER */
    .courses-box-footer ul li {
        color: white !important
    }

    .courses-box-footer ul li i {
        color: white !important
    }

    /*  */
</style>

<style>
    .ads {
        background-color: red;
        width: 35px;
        height: 140px;
        position: fixed;
        top: 170px;
        right: 0px;
        z-index: 9999;
        border-radius: 5px 0px 0px 5px;
        cursor: pointer;
    }

    .ads div {
        margin-top: 20px;
        color: white;
        transform: rotate(90deg);
    }


    .ads:hover {
        /* color: red; */
        background-color: #ff1949;
    }
</style>

<style>
    .courses-content {
        min-height: 156px !important;
    }
</style>
<style>
    <?php
    if (isset($this->colors)) {
        foreach ($this->colors as $key => $color) {
    ?>

    /* <?php echo $key ?> */
    .<?php echo $key ?>.single-categories-courses-box {
        background-color: <?php echo $color['color']; ?> !important;
    }

    .<?php echo $key ?>.single-categories-courses-box:hover .icon,
    .<?php echo $key ?>.single-categories-courses-box:focus .icon {
        background-color: #fff !important;
        border-color: <?php echo $color['color']; ?> !important;
        color: <?php echo $color['color']; ?> !important;
    }

    <?php }
    }
    ?>.table-fit {
        width: 100% !important;
        table-layout: fixed !important;
    }

    .table-fit th,
    .table-fit th {
        word-wrap: break-word !important;
    }

    .table-fit td,
    .table-fit td {
        word-wrap: break-word !important;
    }
</style>

<div id="loader" class="loader preloader">
    <div class="loader-container">
        <div class="loader-icon">
            <img src="<?php echo URL ?>assets/img/pre-logo.png" alt="">
        </div>
    </div>
</div>

<div class="ads" onclick="window.open('<?php echo URL; ?>advertisements', '_self')">
    <div><span>Advertiesment</span></div>
</div>



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
                            <a href="https://www.facebook.com/srilankayouthinfo" target="_blank"><i class="bx bxl-facebook font-18"></i></a>
                            <a href="https://twitter.com/NationalYouthS4" target="_blank"><i class="bx bxl-twitter font-18"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-linkedin font-18"></i></a>
                            <a href="https://www.youtube.com/channel/UC1JlU3Hkeg3GK_wTetdMouA" target="_blank"><i class="bx bxl-youtube font-18"></i></a>
                        </li>
                        <li>
                            <div class="top-header-social">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent;
                                        border: none; color: white">

                                    <span style="color: white" class="font-18">?????????</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item d-flex align-items-center">

                                        <span>En</span>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex align-items-center">

                                        <span>????????? </span>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex align-items-center">
                                        <span> ??????</span>
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
                        <a href="<?php echo URL ?>">
                            <img src="<?php echo URL ?>assets/img/black-logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="raque-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="<?php echo URL ?>">
                        <img src="<?php echo URL ?>assets/img/black-logo.png" alt="logo" style="width: 60%">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" style="display: block;">
                        <ul class="navbar-nav">


                            <li class="nav-item"><a href="<?php echo URL ?>" class="nav-link active">Home </a></li>
                            <li class="nav-item"><a href="<?php echo URL ?>youth-news/" class="nav-link">News </a></li>
                            <li class="nav-item"><a href="<?php echo URL ?>events/" class="nav-link ">Events </a></li>
                            <li class="nav-item"><a href="<?php echo URL ?>page/view/youth-club" class="nav-link ">Youth Club </a></li>


                            <li class="nav-item"><a href="#" class="nav-link">Divisions <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <?php
                                    foreach (Pages::getAll(PageType::getByTitle("divisions")["id"]) as $key => $page) {
                                        // var_dump($key);
                                        if ($key < 6) {
                                    ?>
                                            <li class="nav-item"><a href="<?php echo URL ?>page/view/<?php echo $page['url'] ?>"><?php echo $page['title'] ?></a> </li>
                                    <?php }
                                    }
                                    ?>
                                    <li class="nav-item"><a href="<?php echo URL ?>page/list/divisions">Show All Divisions</a> </li>
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
                                    <?php
                                    foreach (Pages::getAll(PageType::getByTitle("services")["id"]) as $key => $page) {
                                        if ($key < 6) {
                                    ?>
                                            <li class="nav-item"><a href="<?php echo URL ?>page/view/<?php echo $page['url'] ?>"><?php echo $page['title'] ?></a> </li>
                                    <?php }
                                    }
                                    ?>
                                    <li class="nav-item"><a href="<?php echo URL ?>page/list/services">Show All Services</a> </li>
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
                    <a class="navbar-brand" href="<?php echo URL ?>">
                        <img src="<?php echo URL ?>assets/img/black-logo.png" alt="logo" style="width: 55%;">
                    </a>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">

                            <li class="nav-item"><a href="<?php echo URL ?>" class="nav-link active">Home </a></li>
                            <li class="nav-item"><a href="<?php echo URL ?>youth-news/" class="nav-link">News </a></li>
                            <li class="nav-item"><a href="<?php echo URL ?>events/" class="nav-link ">Events </a></li>
                            <li class="nav-item"><a href="<?php echo URL ?>page/view/youth-club" class="nav-link ">Youth Club </a></li>

                            <li class="nav-item"><a href="#" class="nav-link">Divisions <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <?php
                                    foreach (Pages::getAll(PageType::getByTitle("divisions")["id"]) as $key => $page) {
                                        if ($key < 6) {
                                    ?>
                                            <li class="nav-item"><a href="<?php echo URL ?>page/view/<?php echo $page['url'] ?>"><?php echo $page['title'] ?></a> </li>
                                    <?php }
                                    }
                                    ?>
                                    <li class="nav-item"><a href="<?php echo URL ?>page/list/divisions">Show All Divisions</a> </li>
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
                                    <?php
                                    foreach (Pages::getAll(PageType::getByTitle("services")["id"]) as $key => $page) {
                                        if ($key < 6) {
                                    ?>
                                            <li class="nav-item"><a href="<?php echo URL ?>page/view/<?php echo $page['url'] ?>"><?php echo $page['title'] ?></a> </li>
                                    <?php }
                                    }
                                    ?>
                                    <li class="nav-item"><a href="<?php echo URL ?>page/list/services">Show All Services</a> </li>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.js"></script>
<link rel="stylesheet" href="<?php echo URL ?>public/snow/css/snow.css" />