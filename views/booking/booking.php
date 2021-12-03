<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo URL ?>assets/css/bootstrap..min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/boxicons.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/odometer.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/nice-select.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/viewer.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/slick.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/responsive.css">
    <title>Contact National Youth Council Sri Lanka</title>
    <link rel="icon" type="image/png" href="<?php echo URL ?>assets/img/pre-logo.png">
</head>


<body class="background snowflake">

<span class="hidden" id="snowflake">&#10052;</span>
    <?php include './views/header.php'; ?>

    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}' style="background-image: url('<?= URL ?>assets/banner/zz.png') !important;">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="<?php echo URL ?>">Home</a></li>
                    <li>Booking</li>
                </ul>
                <h2>Booking</h2>
            </div>
        </div>
    </div>
    <<section class="events-area pt-100 pb-70">
        <div class="container">
            <?php
            $data = [
                [
                    "title" => "Main Hall",
                    "id" => "main-hall",
                    "description" => "Education encompasses both the teaching and learning of knowledge. Education encompasses both the teaching and learning of knowledge.Education encompasses both the teaching and learning of knowledge.",
                    "image" => "image07.jpg",
                ],
                [
                    "title" => "Exhibition Hall",
                    "id" => "exhibition-hall",
                    "description" => "Education encompasses both the teaching and learning of knowledge. Education encompasses both the teaching and learning of knowledge.Education encompasses both the teaching and learning of knowledge.",
                    "image" => "image08.jpg",
                ],
                [
                    "title" => "Athletics Field",
                    "id" => "athletics-field",
                    "description" => "Education encompasses both the teaching and learning of knowledge. Education encompasses both the teaching and learning of knowledge.Education encompasses both the teaching and learning of knowledge.",
                    "image" => "image01.jpg",
                ],
                [
                    "title" => "Auditorium",
                    "id" => "auditorium",
                    "description" => "Education encompasses both the teaching and learning of knowledge. Education encompasses both the teaching and learning of knowledge.Education encompasses both the teaching and learning of knowledge.",
                    "image" => "image03.jpg",
                ],
                [
                    "title" => "Hostal Facility",
                    "id" => "hostals",
                    "description" => "Education encompasses both the teaching and learning of knowledge. Education encompasses both the teaching and learning of knowledge.Education encompasses both the teaching and learning of knowledge.",
                    "image" => "image02.jpg",
                ],
                [
                    "title" => "Film Location",
                    "id" => "film-location",
                    "description" => "Education encompasses both the teaching and learning of knowledge. Education encompasses both the teaching and learning of knowledge.Education encompasses both the teaching and learning of knowledge.",
                    "image" => "image06.jpg",
                ],
            ];
            foreach ($data as $key => $item) {

            ?>

                <div class="single-events-box mb-30">
                    <div class="events-box">
                        <div class="events-image">
                            <!-- <div class="image bg1 img-responsive" style="background: url('<?php echo URL ?>assets/booking/<?= $item["image"]; ?>')"> -->
                                <img class="img-responsive" src="<?= URL ?>assets/booking/<?= $item["image"]; ?>" style="border-radius: 5px 0px 0px 5px" alt="image">
                            <!-- </div> -->
                        </div>
                        <div class="events-content">
                        <!-- background: #feecf0; -->
                            <div class="content">
                                <h3><a href="<?= URL ?>booking/new/<?= $item["id"] ?>"><?= $item["title"]; ?></a></h3>
                                <p><?= $item["description"]; ?></p>
                                <span class="location"><i class='bx bx-map'></i> Maharagama</span>
                                <!-- <a href="<?= URL ?>booking/new<?= $item["id"] ?>" class="join-now-btn">Book Now</a> -->
                            </div>
                        </div>
                        <div class="events-date">
                            <div class="date">
                            <a href="<?= URL ?>booking/new/<?= $item["id"] ?>">

                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <h4 class="text-white">Hurry Up</h4>
                                        <h3>Book Now</h3>
                                        <!-- <p>7:30 PM</p> -->
                                        <i class='bx bx-calendar'></i>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                      
                    </div>
                </div>

                <!-- <div class="col-lg-6 col-md-6">
                    <div class="single-courses-list-box mb-30">
                        <div class="box-item">
                            <div class="courses-image" style="min-width: 150px;">
                                <div class="image" style="background: url('<?php echo URL ?>assets/booking/<?= $item["image"]; ?>');width: 100%;height: 100%;">
                                    <img src="<?= URL ?>assets/booking/<?= $item["image"]; ?>" alt="image">
                                    <a href="single-courses.html" class="link-btn"></a>
                                    <div class="courses-tag">
                                        <a href="#" class="d-block">Photography</a>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-desc">
                                <div class="courses-content" style="background: #feecf0;">

                                    <h3><a href="single-courses.html" class="d-inline-block"><?= $item["title"]; ?></a></h3>

                                    <p><?= $item["description"]; ?></p>
                                </div>
                                <div class="courses-box-footer" style="padding: 7px 25px;">
                                    <ul>

                                        <li class="courses-lesson">
                                            <i class='bx bx-book-open'></i> 6 lessons
                                        </li>
                                        <li class="courses-price">
                                            $500
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            <?php } ?>



        </div>
        </section>

        <!-- 
    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class='bx bx-envelope'></i>
                        </div>
                        <h3>Email Here</h3>
                        <p><a href="mailto:info@nysc.lk"><span class="__cf_email__" data-cfemail="">info@nysc.lk</span></a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <h3>Location Here</h3>
                        <p><a href="https://goo.gl/maps/YgcaUg6BEeaPUgr77" target="_blank">No 65, High Level Road,
                                Maharagama</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <h3>Call Here</h3>
                        <p><a href="tel:+940112850986">+94 0112 850 986</a></p>

                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js-circle-bubble-2"></div>
    </section> -->







        <?php include './views/footer.php'; ?>

        <!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
        <script src="<?php echo URL ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo URL ?>assets/js/popper.min.js"></script>
        <script src="<?php echo URL ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo URL ?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo URL ?>assets/js/mixitup.min.js"></script>
        <script src="<?php echo URL ?>assets/js/parallax.min.js"></script>
        <script src="<?php echo URL ?>assets/js/jquery.appear.min.js"></script>
        <script src="<?php echo URL ?>assets/js/odometer.min.js"></script>
        <script src="<?php echo URL ?>assets/js/particles.min.js"></script>
        <script src="<?php echo URL ?>assets/js/meanmenu.min.js"></script>
        <script src="<?php echo URL ?>assets/js/jquery.nice-select.min.js"></script>
        <script src="<?php echo URL ?>assets/js/viewer.min.js"></script>
        <script src="<?php echo URL ?>assets/js/slick.min.js"></script>
        <script src="<?php echo URL ?>assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo URL ?>assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- <script src="<?php echo URL ?>assets/js/form-validator.min.js"></script> -->
        <!-- <script src="<?php echo URL ?>assets/js/contact-form-script.js"></script> -->
        <script src="<?php echo URL ?>assets/js/main.js"></script>
        <script src="<?php echo URL ?>assets/js/error_validation.js"></script>
        <!-- <script src="<?php echo URL ?>assets/js/contact.js"></script> -->
</body>

</html>