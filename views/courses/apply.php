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
    <link href="<?php echo URL ?>public/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />

    <title>Youth Council || Sri Lanka</title>
    <link rel="icon" type="image/png" href="<?php echo URL ?>assets/img/pre-logo.png">
    <style>
       
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


    <div class="page-title-area item-bg4 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Apply Online</li>
                </ul>
                <h2>Apply Online</h2>
            </div>
        </div>
    </div>


    <section class="my-account-area ptb-40">
        <div class="container">

            <div class="myAccount-content">
                <form class="edit-account" id="apply_form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="center_id">Selected Training Center </label>
                                <select class="form-control " id="center_id" name="center_id">

                                    <option selected="selected" value="<?php
                                                                        if ($this->query) {
                                                                            $attr = explode('%', base64_decode($this->query));
                                                                            $CENTER = new Center(explode('=', $attr[1])[1]);
                                                                            echo $CENTER->id;
                                                                        ?>"><?php echo $CENTER->name;
                                                                        } ?></option>


                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="course_id">Selected Course <span class="required">*</span></label>
                                <select class="form-control " id="course_id" name="course_id">
                                    <option selected="selected" value="<?php
                                                                        if ($this->query) {
                                                                            $attr = explode('%', base64_decode($this->query));
                                                                            $COURSE = new Course(explode('=', $attr[2])[1]);
                                                                            echo $COURSE->id;
                                                                        ?>"><?php echo $COURSE->name;
                                                                        } ?></option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>First name <span class="required">*</span></label>
                                <input type="text" class="form-control validation_field" placeholder="Enter First name" name="first_name" id="first_name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Last name <span class="required">*</span></label>
                                <input type="text" class="form-control validation_field" placeholder="Enter Last name" name="last_name" id="last_name">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Full Name<span class="required">*</span></label>
                                <input type="text" class="form-control validation_field" placeholder="Enter Full Name" name="full_name" id="full_name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>National ID Number<span class="required">*</span></label>
                                <input type="text" class="form-control validation_field" placeholder="Enter National ID Number" name="nic" id="nic">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="gender">Gender<span class="required">*</span></label>
                                <select class="form-control " id="gender" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
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
                                <label>Date of Birth <span class="required">*</span></label>
                                <input type="date" class="form-control validation_field" placeholder="Enter Date of Birth" name="dob" id="dob">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Address Line 1<span class="required">*</span></label>
                                <input type="text" class="form-control validation_field" placeholder="Enter Address Line 1" name="address_line_1" id="address_line_1">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Address Line 2<span class="required"></span></label>
                                <input type="text" class="form-control " placeholder="Enter Address Line 2" name="address_line_2" id="address_line_2">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Address Line 3<span class="required"></span></label>
                                <input type="text" class="form-control " placeholder="Enter Address Line 3" name="address_line_3" id="address_line_3">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="district">District<span class="required">*</span></label>
                                <select class="form-control " id="district" name="district">
                                    <?php $DISTRICT = new Districts(NULL);
                                    foreach ($DISTRICT->all() as $district) { ?>
                                        <option value="<?= $district['id'] ?>"><?= $district['name'] ?></option>
                                    <?php } ?>

                                </select>
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
                                <label>Telephone Number 2 <span class="required"></span></label>
                                <input type="text" class="form-control " placeholder="Enter Telephone Number 2" name="telephone_2" id="telephone_2">
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>O/L Status <span class="required">*</span></label>&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="ol_pass" name="ol" checked value="pass">
                                <label for="ol_pass">Pass</label>&nbsp;&nbsp;
                                <input type="radio" id="ol_fail" name="ol" value="fail">
                                <label for="ol_fail">Fail</label>&nbsp;&nbsp;
                                <input type="radio" id="ol_not_sit" name="ol" value="not_sit">
                                <label for="ol_not_sit">Not Sit</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>A/L Status <span class="required">*</span></label>&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="al_pass" name="al" checked value="pass">
                                <label for="al_pass">Pass</label>&nbsp;&nbsp;
                                <input type="radio" id="al_fail" name="al" value="fail">
                                <label for="al_fail">Fail</label>&nbsp;&nbsp;
                                <input type="radio" id="al_not_sit" name="al" value="not_sit">
                                <label for="al_not_sit">Not Sit</label>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <input type="hidden" name="token" value="9he02kbf9093hkvsle9045kb">
                            <button id="apply_btn" type="submit" class="default-btn"><i class='bx bx-send icon-arrow before'></i><span class="label" id="apply_btn_text">Apply Now</span><i class="bx bx-send icon-arrow after"></i></button>
                        </div>
                    </div>
                </form>
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
    <script src="<?php echo URL ?>public/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="<?php echo URL ?>assets/js/error_validation.js"></script>
    <script src="<?php echo URL ?>assets/js/apply.js"></script>
</body>

</html>