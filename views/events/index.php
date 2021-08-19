<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


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
    <title>Youth Council || Sri Lanka</title>
    <link rel="icon" type="image/png" href="assets/img/pre-logo.png">
</head>

<body>

    <?php include './views/header.php'; ?>

    <div class="page-title-area item-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Events</li>
                </ul>
                <h2>Events</h2>
            </div>
        </div>
    </div>
    <section class="blog-area ptb-100">
        <div class="container">
            <div class="row">

                <?php
                $EVENT = new Event(NULL);
                foreach ($EVENT->all() as $key => $event) {
                    if ($key <= 2) {
                ?>
                        <div class="col-lg-4 col-md-12 col-sm-6">
                            <a href="<?php echo URL ?>events/view/<?php echo base64_encode($event['id']); ?>">
                                <div class="events-box">


                                    <div class="post-image">
                                        <a href="<?php echo URL ?>events/view/<?php echo base64_encode($event['id']); ?>" class="d-block">
                                            <img src="<?php echo URL ?>upload/event/<?php echo $event['image_name'] ?>" alt="<?php echo $event['title'] ?>">
                                        </a>

                                    </div>
                                    <div class="col-lg-12 col-md-7 p-0">
                                        <div class="content">
                                            <div class="date">
                                                <span>
                                                    <?php
                                                    $date = date_create($event['date']);
                                                    echo date_format($date, "D") . ', ' . date_format($date, "d") . ' ' . date_format($date, "M" . ', ' . date_format($date, "Y"));
                                                    ?>
                                                </span>
                                            </div>
                                            <h3><a href="<?php echo URL ?>events/view/<?php echo base64_encode($event['id']); ?>"><?php echo $event['title'] ?></a></h3>
                                            <p><?php echo $event['short_description'] ?></p>
                                            <span class="location"><i class="bx bx-map"></i><?php echo $event['location'] ?></span>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>

                    <?php
                    } else if ($key < 5) {
                    ?>
                        <div class="col-lg-6 col-md-12 col-sm-6">
                            <div class="events-box">
                                <div class="row m-0">
                                    <div class="col-lg-5 col-md-5 p-0">
                                        <div class="image">
                                            <a href="<?php echo URL ?>events/view/<?php echo base64_encode($event['id']); ?>">

                                                <img src="<?php echo URL ?>upload/event/<?php echo $event['image_name'] ?>" alt="<?php echo $event['title'] ?>">
                                                <div class="divider-shape"></div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 p-0">
                                        <a href="<?php echo URL ?>events/view/<?php echo base64_encode($event['id']); ?>">
                                            <div class="content">
                                                <div class="date">
                                                    <span><?php
                                                            $date = date_create($event['date']);
                                                            echo date_format($date, "D") . ', ' . date_format($date, "d") . ' ' . date_format($date, "M" . ', ' . date_format($date, "Y"));
                                                            ?></span>
                                                </div>
                                                <h3 href=""><?php echo $event['title'] ?></h3>
                                                <p><?php echo $event['short_description'] ?></p>
                                                <span class="location"><i class="bx bx-map"></i><?php echo $event['location'] ?></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
    <script src="<?php echo URL ?>assets/js/form-validator.min.js"></script>
    <script src="<?php echo URL ?>assets/js/contact-form-script.js"></script>
    <script src="<?php echo URL ?>assets/js/main.js"></script>

</body>

</html>