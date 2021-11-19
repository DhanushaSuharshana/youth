<!doctype html>
<?php
$id = '';
$id = base64_decode($this->id);

$PHOTO_ALBUM = new PhotoAlbum($id);
?>
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
        <title>NYSC Gallery Page</title>
        <link rel="icon" type="image/png" href="<?php echo URL ?>assets/img/pre-logo.png">
    </head>
    <body>


        <?php include './views/header.php'; ?>

        <div class="page-title-area item-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Album Photo</li>
                    </ul>
                    <h2><?php echo $PHOTO_ALBUM->title ?></h2>
                </div>
            </div>
        </div>


        <section class="gallery-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <?php
                    $ALBUM_PHOTO = new AlbumPhoto(NULL);
                    foreach ($ALBUM_PHOTO->getAlbumPhotosById($id) as $album_photo) {
                        ?> 
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-gallery-item mb-30">
                                <img src="<?php echo URL ?>upload/photo-album/gallery/thumb/<?php echo $album_photo['image_name'] ?>" alt="<?php echo $album_photo['title'] ?>" data-original="<?php echo URL ?>upload/photo-album/gallery/<?php echo $album_photo['image_name'] ?>">
                            </div>
                        </div>
                    <?php } ?>  
                </div>
            </div>
        </section>

        <?php include './views/footer.php'; ?>

        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

        <!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo URL ?>assets/js/jquery.min.js"></script> -->
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