<!doctype html>
<?php
$id = '';
$id = base64_decode($this->id);

$VIDEO_ALBUM = new VideoAlbum($id);
?>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NYSC Gallery Page</title>

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
    <link rel="icon" type="image/png" href="<?php echo URL ?>assets/img/pre-logo.png">
    <script src="<?php echo URL ?>assets/js/jquery.min.js"></script>
    <script type='text/javascript' src='<?php echo URL ?>assets/plugin/unitegallery/dist/js/unitegallery.min.js'></script>

    <link rel='stylesheet' href='<?php echo URL ?>assets/plugin/unitegallery/dist/css/unite-gallery.css' type='text/css' />
    <script type='text/javascript' src='<?php echo URL ?>assets/plugin/unitegallery/dist/themes/video/ug-theme-video.js'></script>
    <link rel='stylesheet' href='<?php echo URL ?>assets/plugin/unitegallery/dist/themes/video/skin-right-thumb.css' type='text/css' />
    <link rel='stylesheet' 	href='<?php echo URL ?>assets/plugin/unitegallery/dist/themes/video/skin-right-no-thumb.css' type='text/css' />
    <link rel='stylesheet' 	href='<?php echo URL ?>assets/plugin/unitegallery/dist/themes/video/skin-right-title-only.css' type='text/css' />
</head>

<body>


    <?php include './views/header.php'; ?>

    <div class="page-title-area item-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Album Video</li>
                </ul>
                <h2><?php  echo $VIDEO_ALBUM->title 
                    ?></h2>
            </div>
        </div>
    </div>


    <section class="gallery-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="gallery">
                        <?php
                        $ALBUM_VIDEO = new AlbumVideo(NULL);
                        $videos = $ALBUM_VIDEO->getAlbumVideosById($id);
                        if(!empty($videos)){
                        foreach ($videos as $album_video) {
                        ?>
                            <div data-type="youtube"
                            data-videoid="<?php echo $album_video['url'] ?>"
                            data-title="<?php echo $album_video['caption'] ?>"
                            data-thumb="<?php echo URL ?>upload/video-album/gallery/thumb/<?php echo $album_video['image_name'] ?>"
                            data-image="<?php echo URL ?>upload/video-album/gallery/thumb/<?php echo $album_video['image_name'] ?>"
                            >
                            </div>

                            <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-gallery-item mb-30">
                                    <img src="<?php echo URL ?>upload/video-album/gallery/thumb/<?php echo $album_video['image_name'] ?>" alt="<?php echo $album_video['caption'] ?>" data-original="<?php echo URL ?>upload/video-album/gallery/<?php echo $album_video['image_name'] ?>">
                                </div>
                            </div> -->
                        <?php }
                        }else{
                        ?>
                        <div>No Data</div>
                        <?php } ?>
                    </div>
                </div>

            </div>









        </div>
    </section>

    <?php include './views/footer.php'; ?>

    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
<?php if(!empty($videos)){ ?>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery("#gallery").unitegallery({
                gallery_theme: "video",
                theme_skin: "right-thumb"
                // theme_skin: "right-title-only"
            });
        });
    </script>
    <?php } ?>
</body>

</html>