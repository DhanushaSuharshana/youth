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
    <!-- <link rel="stylesheet" href="<?php echo URL ?>assets/css/nice-select.min.css"> -->
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/viewer.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/slick.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/responsive.css">
    <link href="<?php echo URL ?>public/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <title>Youth Council || Sri Lanka</title>
    <link rel="icon" type="image/png" href="<?php echo URL ?>assets/img/pre-logo.png">
    <style>
        .selection {
            width: 100% !important;
        }
    </style>
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


    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}' style="background-image: url('<?= URL ?>assets/banner/zz.png') !important;">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="<?php echo URL ?>">Home</a></li>
                    <li><a href="<?php echo URL ?>booking">Booking</a></li>
                    <li>New</li>
                </ul>
                <h2>New Booking</h2>
            </div>
        </div>
    </div>


    <section class="my-account-area ptb-40">
        <div class="container">

            <div class="myAccount-content">
                <form class="edit-account" id="booking_form">
                    <div class="row">



                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Full Name<span class="required">*</span></label>
                                <input type="text" class="form-control validation_field" placeholder="Enter Full Name" name="full_name" id="full_name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Email address <span class="required">*</span></label>
                                <input type="email" class="form-control validation_field" placeholder="Enter Email address" name="email" id="email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Average Hours <span class="required">*</span></label>
                                <input type="number" class="form-control validation_field" placeholder="Enter Hours" min="0" step="0.5" name="hours" id="hours">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Date <span class="required">*</span></label>
                                <input type="date" class="form-control validation_field" placeholder="Enter Date" name="date" id="date">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Time <span class="required">*</span></label>
                                <input type="time" class="form-control validation_field" placeholder="Enter Time" name="time" id="time">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Telephone Number 1<span class="required">*</span></label>
                                <input type="text" class="form-control validation_field" placeholder="Enter Telephone Number 1" name="telephone_1" id="telephone_1">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Telephone Number 2 <span class="required"></span>*</label>
                                <input type="text" class="form-control validation_field" placeholder="Enter Telephone Number 2" name="telephone_2" id="telephone_2">
                            </div>
                        </div>



                        <div class="col-lg-12 col-md-12">
                            <input type="hidden" name="property" value="<?= $this->property; ?>">
                            <button id="booking_btn" type="submit" class="default-btn"><i class='bx bx-send icon-arrow before'></i><span class="label" id="booking_btn_text">Book Now</span><i class="bx bx-send icon-arrow after"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <?php include './views/footer.php'; ?>

    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

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
    <!-- <script src="<?php echo URL ?>assets/js/jquery.nice-select.min.js"></script> -->
    <script src="<?php echo URL ?>assets/js/viewer.min.js"></script>
    <script src="<?php echo URL ?>assets/js/slick.min.js"></script>
    <script src="<?php echo URL ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo URL ?>assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo URL ?>assets/js/form-validator.min.js"></script>
    <script src="<?php echo URL ?>assets/js/contact-form-script.js"></script>
    <script src="<?php echo URL ?>assets/js/main.js"></script>
    <script src="<?php echo URL ?>public/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="<?php echo URL ?>assets/js/error_validation.js"></script>
    <script src="<?php echo URL ?>assets/js/booking.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#district').select2({
                width: '100%'
            });

            $('.selection').css('width', '100%');
            $('.select2-selection').css('width', '100%');
            $('.select2-selection').css('height', '46px');
        });
    </script>
</body>

</html>