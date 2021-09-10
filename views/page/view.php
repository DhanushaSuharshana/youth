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
    <title>Youth Council || Sri Lanka</title>
    <link rel="icon" type="image/png" href="assets/img/pre-logo.png">
</head>

<body>

    <?php include './views/header.php'; ?>




    <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ul>
                <h2><?= $this->PAGE->title; ?></h2>
            </div>
        </div>
    </div>


    <section class="events-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="events-details-header">
                        <a href="#" class="back-all-events"><i class='bx bx-chevrons-left'></i> Back To All Events</a>
                        <h3><?= $this->PAGE->title; ?></h3>
                        <ul class="events-info-meta d-none">
                            <li><i class="flaticon-timetable"></i> 10 November, 2021</li>
                            <li><i class="far fa-clock"></i> 10.00AM - 10.00PM</li>
                        </ul>
                        <!-- <div class="events-meta">
                                <ul>
                                    <li>
                                        <i class='bx bx-folder-open'></i>
                                        <span>Category</span>
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
                                </ul>
                            </div> -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="events-details">
                        <div class="events-details-image">
                            <img src="<?php echo URL ?>assets/img/events/1.jpg" alt="image">
                        </div>
                        <div class="events-details-desc">
                            <?= $this->PAGE->description; ?>
                        </div>
                        <div class="character mt-3">
                            <h3 class="widget-title">Characters</h3>
                            <div class="blog-slides owl-carousel owl-theme mt-2">
                                <?php
                                $PAGE_CHARACTERS = new PageCharacter(NULL);
                                foreach ($PAGE_CHARACTERS->getPageCharactersById($this->PAGE->id) as $key => $character) {
                                ?>
                                    <div class=" single-blog-post mb-30">
                                        <div class="post-image">
                                            <a href="<?php echo URL ?>page/character/<?php echo base64_encode($character['id']); ?>" class="d-block">
                                                <img src="<?php echo URL ?>upload/page/character/<?php echo $character['image_name'] ?>" alt="<?php echo $character['name'] ?>">
                                            </a>
                                            <!-- <div class="tag">
                                                <a href="#">News</a>
                                            </div> -->
                                        </div>
                                        <div class="post-content">
                                            <ul class="post-meta">

                                                <li><a href="<?php echo URL ?>page/character/view/<?php echo base64_encode($character['id']); ?>">
                                                        <?php
                                                        echo $character['designation'];
                                                        ?>
                                                    </a>
                                                </li>
                                            </ul>
                                            <h3><a href="<?php echo URL ?>page/character/view/<?php echo base64_encode($character['id']); ?>" class="d-inline-block"><?php echo ucfirst($character['name']) ?></a></h3>
                                            <a href="<?php echo URL ?>page/character/view/<?php echo base64_encode($character['id']); ?>" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="events-info-links">
                            <a href="#">+ Google Calendar</a>
                            <a href="#">+ iCal Export</a>
                        </div>
                        <div class="raque-post-navigation">
                            <div class="prev-link-wrapper">
                                <div class="info-prev-link-wrapper">
                                    <a href="single-events.html">
                                        <span class="image-prev">
                                            <img src="<?php echo URL ?>assets/img/events/2.jpg" alt="image">
                                            <span class="post-nav-title">Prev</span>
                                        </span>
                                        <span class="prev-link-info-wrapper">
                                            <span class="prev-title">Don't buy a tech gift until you read these rules</span>
                                            <span class="meta-wrapper">
                                                <span class="date-post">January 21, 2021</span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="next-link-wrapper">
                                <div class="info-next-link-wrapper">
                                    <a href="single-events.html">
                                        <span class="next-link-info-wrapper">
                                            <span class="next-title">The golden rule of buying a phone as a gift</span>
                                            <span class="meta-wrapper">
                                                <span class="date-post">January 21, 2021</span>
                                            </span>
                                        </span>
                                        <span class="image-next">
                                            <img src="<?php echo URL ?>assets/img/events/3.jpg" alt="image">
                                            <span class="post-nav-title">Next</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <section class="widget widget_events_details">
                            <h3 class="widget-title">Details</h3>
                            <ul>
                                <li><span>Start:</span> December 15, 2021 8:00AM</li>
                                <li><span>End:</span> December 19, 2021 8:00AM</li>
                                <li><span>Events Category:</span> <a href="#">Design</a></li>
                            </ul>
                        </section>
                        <section class="widget widget_events_details">
                            <h3 class="widget-title">Organizer</h3>
                            <ul>
                                <li><span>Organizer Name:</span> <a href="#">Aston King</a></li>
                                <li><span>Phone:</span> <a href="#">+1 518 285679</a></li>
                                <li><span>Email:</span> <a href="#"><span class="__cf_email__" data-cfemail="b5ddd0d9d9daf5c7d4c4c0d09bd6dad8">[email&#160;protected]</span></a></li>
                                <li><span>Website:</span> <a href="#">http://www.raque.com</a></li>
                            </ul>
                        </section>
                        <section class="widget widget_events_details">
                            <h3 class="widget-title">Venue</h3>
                            <ul>
                                <li><a href="#">27 Division St, New York, NY 10002, USA</a></li>
                                <li><a href="#">+ Google Map</a></li>
                            </ul>
                        </section>
                        <section class="widget widget_instagram">
                            <div style="display: block">
                                <h3 class="widget-title" style="display: inline-block">News</h3>
                                <a href="<?php echo URL; ?>page/news/<?php echo $this->PAGE->url; ?>" class="btn btn-sm btn-primary float-end" style="display: inline-block; background-color: #ff1949; border: 1px solid #ff1949;">View All</a>
                            </div>
                            <aside class="widget-area">
                                <div class="courses-review-comments" style="margin-top: -20px;">
                                    <?php
                                    $PAGE_NEWS = new PageNews(NULL);
                                    foreach ($PAGE_NEWS->getPageNewsById($this->PAGE->id) as $key => $news) {
                                        if ($key < 5) {
                                    ?>
                                            <div class="user-review">
                                                <a href="<?php echo URL ?>page/news/view/<?php echo base64_encode($news['id']); ?>">
                                                    <img src="<?php echo URL ?>upload/page/news/<?php echo $news['image_name'] ?>" alt="image">
                                                    <div class="review-rating">

                                                        <span class="d-inline-block"><?php echo $news['title'] ?></span>
                                                    </div>

                                                    <p><?php echo substr($news['short_description'], 0, 60) ?>...</p>
                                                </a>
                                            </div>
                                    <?php }
                                    } ?>
                                </div>
                            </aside>
                        </section>
                        <section class="widget widget_contact">
                            <div class="text">
                                <div class="icon">
                                    <i class='bx bx-phone-call'></i>
                                </div>
                                <span>Emergency</span>
                                <a href="#">+0987-9876-8753</a>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>


    <?php include './views/footer.php'; ?>


    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

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