<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/bootstrap..min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/boxicons.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/odometer.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/nice-select.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/viewer.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/slick.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/responsive.css">
    <title>Centers National Youth Council Sri Lanka</title>
    <link rel="icon" type="image/png" href="<?php echo URL; ?>assets/img/pre-logo.png">
</head>

<body>
    <?php include './views/header.php'; ?>

    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="<?php echo URL ?>">Home</a></li>
                    <li>Center</li>
                </ul>
                <h2>All Centers</h2>
            </div>
        </div>
    </div>

    <section class="courses-area ptb-100">
        <div class="container">
             
            <div class="row">
                <h3 style="margin-bottom: 30px;font-size: 22px;font-weight: 600;">Select Center</h3>
                <?php



                $CENTER = new Center(NULL);

                if ($this->query) {
                    $attr = explode('%', base64_decode($this->query));
                    if ($attr[0] == 'q=fromcourse') {
                        $course_id = explode('=', $attr[2])[1];
                        $centers = $CENTER->getByCourse($course_id);
                    }
                }
                if (!empty($centers)) {
                    foreach ($centers as $center) {
                ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 
                    <?php echo $key = array_rand($this->colors);
                        unset($this->colors[$key]); ?>
                    ">
                            <div class="single-categories-courses-box mb-30">
                                <div class="icon">
                                    <i class='bx bx-map'></i>
                                </div>
                                <h3><?php echo $center['name'] ?></h3>
                                <!-- <span><?php

                                        // echo $CENTER->getCeterCoursesCount($center['id'])['count'];

                                        ?> Courses</span> -->
                                <a href="<?php echo URL; ?>courses/apply/<?php echo base64_encode('q=toapply%center=' . $center['id'] . '%course=' . $course_id); ?>" class="link-btn"></a>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <div>No Data Available</div>
                <?php } ?>

                <!-- <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pagination-area text-center">
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="page-numbers">5</a>
                        <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a>
                    </div>
                </div> -->
            </div>
            <div id="particles-js-circle-bubble-2"></div>
        </div>
    </section>

    <?php include './views/footer.php'; ?>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/popper.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/mixitup.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/parallax.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/jquery.appear.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/odometer.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/particles.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/meanmenu.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/viewer.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/slick.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/form-validator.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/contact-form-script.js"></script>
    <script src="<?php echo URL; ?>assets/js/main.js"></script>
</body>

</html>