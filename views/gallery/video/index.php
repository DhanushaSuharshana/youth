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
        <title>Youth Council || Sri Lanka</title>
        <link rel="icon" type="image/png" href="assets/img/pre-logo.png">
    </head>
    <body>

        <?php include './views/header.php'; ?>



        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="<?php echo URL ?>">Home</a></li>
                        <li>Video Album</li>
                    </ul>
                    <h2>Video Album</h2>
                </div>
            </div>
        </div>


        <section class="shop-area ptb-100">
            <div class="container"> 
                <div class="row"> 
                    <?php
                    $PHOTO_ALBUM = new VideoAlbum(NULL);
                    foreach ($PHOTO_ALBUM->all() as $key => $video_album) {
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-product-box mb-30">
                                <div class="product-image">
                                    <a href="<?php echo URL ?>video-gallery/album/<?php echo base64_encode($video_album['id']) ?>">
                                        <img src="<?php echo URL ?>upload/video-album/<?php echo $video_album['image_name'] ?>" alt="<?php echo $video_album['title'] ?>">
                                        <img src="<?php echo URL ?>upload/video-album/<?php echo $video_album['image_name'] ?>" alt="<?php echo $video_album['title'] ?>">
                                    </a>
                                    <a href="#" class="add-to-cart-btn"><?php echo $video_album['title'] ?>  </a>
                                </div> 
                            </div>
                        </div> 
                    <?php } ?>
                </div>
            </div>
        </section>


        <?php include './views/footer.php'; ?>

        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

        <!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
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