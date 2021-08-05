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
    <title>Raque - Education & Online Courses HTML Template</title>
    <link rel="icon" type="image/png" href="<?php echo URL; ?>assets/img/favicon.png">
</head>

<body>

    <?php include './views/header.php'; ?>


    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Courses</a></li>
                    <!-- <li>Photography Crash Course for Photographer</li> -->
                </ul>
                <h2>Courses</h2>
            </div>
        </div>
    </div>


    <section class="courses-area ptb-100">
        <div class="container">

            <div class="row">


                <?php
                $COURSE = new Course(NULL);
                $courses = [];



                if ($this->query) {
                    $attr = explode('%', base64_decode($this->query));
                    if ($attr[0] == 'q=fromcenter') {
                        $center = explode('=', $attr[1])[1];
                        $courses = $COURSE->getByCenter($center);
                        $CENTER = new Center($center);
                    }
                } else {
                    // $courses = $COURSE->all();
                }
                // echo base64_decode($this->query);
                if (!empty($courses)) {
                    foreach ($courses as $course) {
                ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-courses-box mb-30">
                                <div class="courses-image">
                                    <a href="<?php echo URL; ?>courses/view/<?php echo base64_encode('q=fromcenter%center='.$center.'%course='.$course['id']); ?>" class="d-block"><img src="<?php echo URL; ?>upload/courses/<?php echo $course['image_name'] ?>" alt="image"></a>
                                    <div class="courses-tag">
                                        <a href="#" class="d-block"><?php echo $course['level'] ?></a>
                                    </div>
                                </div>
                                <div class="courses-content">
                                   
                                    <h3><a href="<?php echo URL; ?>courses/view/<?php echo base64_encode('q=fromcenter%center='.$center.'%course='.$course['id']); ?>" class="d-inline-block"><?php echo $course['name'] ?> (<?php echo $CENTER->name ?>)</a></h3>
                                    <!-- <div class="courses-rating">
                                        <div class="review-stars-rated">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <div class="rating-total">
                                            5.0 (1 rating)
                                        </div>
                                    </div> -->
                                </div>
                                <div class="courses-box-footer">
                                    <ul>
                                        <li class="students-number">
                                            <i class='bx bx-user'></i> <?php echo $course['max_student'] ?> students
                                        </li>
                                        <li class="courses-lesson">
                                            <i class='bx bx-book-open'></i> 6 Subjects
                                        </li>
                                        <li class="courses-price">
                                        <?php echo $course['languages'] ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else { ?>
                    <div>No Data Available</div>
                <?php
                } ?>


                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pagination-area text-center">
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="page-numbers">5</a>
                        <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include './views/footer.php'; ?>

    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

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