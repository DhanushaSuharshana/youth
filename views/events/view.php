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
    <link rel="icon" type="image/png" href="<?php echo URL; ?>assets/img/pre-logo.png">
</head>

<body>

    <?php include './views/header.php'; ?>

    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Event</li>
                </ul>
                <h2>Event Details</h2>
            </div>
        </div>
    </div>

    <?php
    $EVENT_PHOTO = new EventPhoto(NULL);
    $EVENT = new Event(base64_decode($this->query));

    ?>
    <section class="events-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="events-details-header">
                        <a href="<?php echo URL; ?>youth_event" class="back-all-events"><i class='bx bx-chevrons-left'></i> Back To All Event</a>
                        <h3><?php echo $EVENT->title; ?></h3>
                        <ul class="events-info-meta d-none">
                            <li><i class="flaticon-timetable"></i> <?php echo date("F j, Y", strtotime($EVENT->date)) ?></li>
                            <li><i class="far fa-clock"></i> 10.00AM - 10.00PM</li>
                        </ul>
                        <div class="events-meta">
                            <!-- <ul>
                                    <li>
                                        <i class='bx bx-folder-open'></i>
                                        <span>Venue</span>
                                        <a href="#">Design</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-group'></i>
                                        <span>Date</span>
                                        10 November, 2021
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar'></i>
                                        <span>Time</span>
                                        10.00AM - 10.00PM
                                    </li>
                                </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="events-details">



                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <?php
                                foreach ($EVENT_PHOTO->geteventPhotosById($EVENT->id) as $key => $event) {
                                ?>
                                    <div class="item <?= ($key == 0) ? 'active' : '' ?>">
                                        <img src="<?php echo URL ?>upload/event/gallery/<?php echo $event['image_name'] ?>" alt="Los Angeles" style="width:100%;">
                                    </div>
                                <?php } ?>
                            </div>


                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>


                        <?php echo $EVENT->description; ?>
                        <div class=" mt-5">
                        <iframe src="https://maps.google.com/maps?q=<?php echo $EVENT->location; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen  width="100%" height="400"></iframe>

                            <!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1EYihIduCXuOWDaX9jKqhSSSjx9Mp5TcT" width="100%" height="400"></iframe> -->
                        </div>
                    </div>


                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <div class="courses-review-comments" style="margin-top: -20px;">

                            <?php
                            foreach ($EVENT->all() as $key => $event) {
                                if($key <10){
                            ?>
                                <div class="user-review">
                                <a href="<?php echo URL ?>events/view/<?php echo base64_encode($event['id']); ?>">
                                    <img src="<?php echo URL ?>upload/event/<?php echo $event['image_name'] ?>" alt="image">
                                    <div class="review-rating">

                                        <span class="d-inline-block"><?php echo $event['title'] ?></span>
                                    </div>

                                    <p><?php echo substr($event['short_description'],0,60) ?>...</p>
                                </a>
                                </div>
                            <?php } } ?>
                        </div>

                        
                    </aside>
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