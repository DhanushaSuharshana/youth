<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap..min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/viewer.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Centers National Youth Council Sri Lanka</title>
    <link rel="icon" type="image/png" href="assets/img/pre-logo.png">
</head>

<body>
    <?php include './views/header.php'; ?>

    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Center</li>
                </ul>
                <h2>All Centers</h2>
            </div>
        </div>
    </div>

    <section class="courses-area ptb-100">
        <div class="container">
            <div class="courses-topbar">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="topbar-result-count">
                            <p>Showing 1 – 6 of 54</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="topbar-ordering-and-search">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-5 offset-lg-4 offset-md-1">
                                    <div class="topbar-ordering">
                                        <select>
                                            <option>Sort by popularity</option>
                                            <option>Sort by latest</option>
                                            <option>Default sorting</option>
                                            <option>Sort by rating</option>
                                            <option>Sort by new</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="topbar-search">
                                        <form>
                                            <label><i class="bx bx-search"></i></label>
                                            <input type="text" class="input-search" placeholder="Search here...">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php
                $CENTER = new Center(NULL);
                foreach ($CENTER->allForApply() as $center) {
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 
                    <?php echo $key = array_rand($this->colors);unset($this->colors[$key]); ?>
                    ">
                        <div class="single-categories-courses-box mb-30">
                            <div class="icon">
                                <i class='bx bx-map'></i>
                            </div>
                            <h3><?php echo $center['name'] ?></h3>
                            <span><?php 
                            
                            echo $CENTER->getCeterCoursesCount($center['id'])['count']; 
                            
                            ?> Courses</span>
                            <a href="<?php echo URL; ?>courses/list/<?php echo base64_encode('q=fromcenter%center='.$center['id']); ?>" class="link-btn"></a>
                        </div>
                    </div>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/meanmenu.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/viewer.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>