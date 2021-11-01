<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo URL ?>assets/css/bootstrap..min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/boxicons.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/custom.css">
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
    <title>Courses National Youth Council Sri Lanka</title>
    <link rel="icon" type="image/png" href="<?php echo URL ?>assets/img/pre-logo.png">
    <?php
    $attr = explode('%', base64_decode($this->query));
    // if ($attr[0] == 'q=fromcourse') {
    ?>
        <link rel="stylesheet" href="<?php echo URL ?>public/map/map.css">
        <!-- <link rel="stylesheet" href="<?php echo URL ?>public/map/card.css"> -->
    <?php //} ?>
</head>

<body>
    <?php include './views/header.php';

    $COURSE = new Course(NULL);


    if ($attr[0] == 'q=fromcenter') {
        $center_id = explode('=', $attr[1])[1];
        $CENTER = new Center($center_id);
    }
    $course_id = explode('=', $attr[2])[1];
    $course = $COURSE->getOne($course_id);
    // var_dump($attr);
    ?>
    <style>
        .nvq-label {
            top: 280px !important;
        }
    </style>
    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="<?php echo URL ?>">Home</a></li>
                    <li>Course</li>
                </ul>
                <h2>All Courses</h2>
            </div>
        </div>
    </div>
    <section class="courses-details-area pt-100 pb-70">
        <div class="container">
            <div class="courses-details-header">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="courses-title">
                            <h2><?php echo $course['name']; ?></h2>
                            <span style="color: #800000;font-size: 14px;">
                                <span><?= (isset($CENTER->name)) ? "<i class='bx bx-map'></i> " . $CENTER->name . "" : '' ?></span></span>
                        </div>
                        <div class="courses-meta">
                            <ul>
                                <li>
                                    <i class='bx bx-folder-open'></i>
                                    <span>Language</span>
                                    <a href="#"><?php echo $course['languages'] ?></a>
                                </li>
                                <li>
                                    <i class='bx bx-group'></i>
                                    <span>Max Students</span>
                                    <a href="#"><?php echo $course['max_student'] ?></a>
                                </li>
                                <!-- <li>
                                    <i class='bx bx-calendar'></i>
                                    <span>Started Date</span>
                                    <a href="#"><?php echo $course['start_date'] ?></a>
                                </li> -->
                                <li class="">
                                    <?php if ($attr[0] == 'q=fromcenter') { ?>
                                        <a href="<?php echo URL; ?>courses/apply/<?php echo base64_encode('q=toapply%center=' . $center_id . '%course=' . $course['id']); ?>" class="default-btn"><i class="bx bx-move-horizontal icon-arrow before"></i><span class="label text-white">Apply Now</span></a>
                                    <?php } else { ?>
                                        <a href="<?php echo URL; ?>centers/list/<?php echo base64_encode('q=fromcourse%center=false' . '%course=' . $course['id']); ?>" class="default-btn"><i class="bx bx-move-horizontal icon-arrow before"></i><span class="label text-white">Apply Now</span></a>
                                    <?php } ?>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="courses-price">
                            <!-- <div class="courses-review">
                                    <div class="review-stars">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <span class="reviews-total d-inline-block">(2 reviews)</span>
                                </div> -->
                            <!--                                <div class="price">$250</div>
                                                                <a href="#" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Buy Course</span><i class="bx bx-paper-plane icon-arrow after"></i></a>
                                -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="events-details">

                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <!-- <div class="item active">
                                    <img src="<?php echo URL ?>upload/courses/<?php echo $course['image_name']; ?>" alt="Los Angeles" style="width:100%;">
                                </div> -->
                                <?php
                                $COURSE_PHOTO = new CoursePhoto(NULL);
                                foreach ($COURSE_PHOTO->getByCourse($course_id) as $key => $course_photo) {
                                ?>
                                    <div class="item  <?= ($key == 0) ? "active" : "" ?>">
                                        <img src="<?php echo URL ?>upload/courses/gallery/<?php echo $course_photo['image_name']; ?>" alt="Chicago" style="width:100%;">
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
                    </div>
                    <p class="mt-5"><?php echo $course['description'] ?>.</p>
                    <div class="related-courses">
                        <!-- <h3>This Course Related Centers</h3> -->
                        <div id="map" style="margin-bottom: 15px;"></div>
                    </div>
                    <?php if (isset($CENTER)) {
                        // $CENTER = $_center;
                    ?>
                        <!--Google map-->
                        <!-- <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 310px">
                            <iframe src="https://maps.google.com/maps?q=<?= $CENTER->latitude . ", " . $CENTER->longitude ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div> -->
                    <?php } ?>

                </div>

                <div class="col-lg-4">
                    <!-- <div class="courses-sidebar-information">
                        <ul>
                            <li>
                                <span><i class='bx bx-group'></i> Students:</span>
                                10
                            </li>
                            <li>
                                <span><i class='bx bx-time'></i> Length:</span>
                                1 Weeks
                            </li>
                            <li>
                                <span><i class='bx bx-tachometer'></i> Effort:</span>
                                2–5 hours per week
                            </li>
                            <li>
                                <span><i class='bx bxs-institution'></i> Institution:</span>
                                <a href="#" class="d-inline-block">ABC</a>
                            </li>
                            <li>
                                <span><i class='bx bxs-graduation'></i> Subject:</span>
                                Design
                            </li>
                            <li>
                                <span><i class='bx bx-atom'></i> Quizzes:</span>
                                Yes
                            </li>
                            <li>
                                <span><i class='bx bxs-badge-check'></i> Level:</span>
                                Introductory
                            </li>
                            <li>
                                <span><i class='bx bx-support'></i> Language:</span>
                                English
                            </li>
                            <li>
                                <span><i class='bx bx-text'></i> Video Subtitle:</span>
                                English
                            </li>
                            <li>
                                <span><i class='bx bx-certification'></i> Certificate:</span>
                                Yes
                            </li>
                        </ul>
                    </div> -->
                    <div class="courses-sidebar-syllabus">
                        <h3>Course Syllabus</h3>

                        <div class="courses-list">
                            <ul>
                                <li>

                                </li>
                                <!-- <li>
                                    <a href="#">
                                        <span class="number">1.</span> Secret 1: Sell The Problem, Not The Solution (14:37) <span class="free-lesson">Free</span>
                                    </a>
                                </li> -->
                                <?php
                                $COURSE_SUBJECTS = new CourseSubjects(NULL);
                                foreach ($COURSE_SUBJECTS->getCourseSubjectByCourseId($course['id']) as $key => $course_subjects) {
                                ?>
                                    <li>
                                        <span class="number"><?php echo $key + 1; ?>.</span> <?php echo $course_subjects['title'] ?>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>


                    </div>
                    <?php if ($attr[0] == 'q=fromcenter') { ?>
                        <div class="courses-purchase-info">
                            <h4>How I know some information?</h4>
                            <span class="text-white">Contact Number : </span><a href="#" class="d-inline-block"><?php echo $CENTER->contact1 ?></a><br>
                            <span class="text-white">Email: </span><a href="#" class="d-inline-block"><?php echo $CENTER->email ?></a>
                        </div>
                    <?php } ?>
                </div>

            </div>




            <?php
            if ($attr[0] == 'q=fromcenter') {
            ?>
                <div class="related-courses">
                    <h3>This Centers' Related Courses</h3>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="blog-slides owl-carousel owl-theme">
                                <?php
                                foreach ($COURSE->getByCenter($center_id) as $key => $course2) {
                                    if ($course_id != $course2['id']) {
                                ?>

                                        <a href="<?php echo URL; ?>courses/view/<?php echo base64_encode('q=fromcenter%center=' . $center_id . '%course=' . $course2['id']); ?>">
                                            <div class="single-courses-box mb-30">
                                                <div class="courses-image">
                                                    <img src="<?php echo URL ?>upload/courses/<?php echo $course2['image_name'] ?>" alt="image">
                                                    <!-- <div class="courses-tag">
                                                <a href="#" class="d-block"><?php echo $course2['level'] ?></a>
                                            </div> -->
                                                    <div class="duration-label <?= ($course2["duration_type"]) ? "full" : "part"; ?>">
                                                        <?= ($course2["duration_type"]) ? "Full Time" : "Part Time"; ?>
                                                    </div>
                                                </div>
                                                <div class="courses-content" style="min-height: 120px !important;">
                                                    <?php if ($course2["nvq"]) { ?>
                                                        <div class="nvq-label">
                                                            <span>NVQ</span>
                                                        </div>
                                                    <?php } ?>
                                                    <h3 style="font-size: 16px !important;">
                                                        <?php echo $course2['name'] ?> (<?php echo $CENTER->name ?>)
                                                    </h3>
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
                                                        <li class="students-number" style="font-size: 13px !important;">
                                                            <i class='bx bx-user'></i> <?php echo $course2['max_student'] ?> students
                                                        </li>
                                                        <li class="courses-lesson" style="font-size: 13px !important;">
                                                            <i class='bx bx-book-open'></i> <?php echo CourseSubjects::getCount($course2['id'])['count']; ?> Subjects
                                                        </li>
                                                        <li class="courses-price" style="font-size: 15px !important;">
                                                            View
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>

                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } elseif ($attr[0] == 'q=fromcourse') {
                $CENTER = new Center(NULL);
                foreach ($CENTER->getByCourse($course_id) as $key => $center2) {
                    // if ($center_id != $center2['id']) {
                ?>

                    <!-- <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 <?php echo $key = array_rand($this->colors);
                                                                    unset($this->colors[$key]); ?>">
                                <div class="single-categories-courses-box mb-30">
                                    <div class="icon">
                                        <i class='bx bx-code-alt'></i>
                                    </div>
                                    <h3><?php echo $center2['name']
                                        ?></h3>
                                  
                                    <a href="<?php echo URL; ?>courses/apply/<?php echo base64_encode('q=toapply%center=' . $center2['id'] . '%course=' . $course_id); ?>" class="link-btn"></a>
                                </div>
                            </div>
                        </div> -->


            <?php
                    // }
                }
            } ?>
        </div>
    </section>

    <?php include './views/footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
    <script src="<?php echo URL ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo URL ?>assets/js/viewer.min.js"></script>
    <script src="<?php echo URL ?>assets/js/slick.min.js"></script>
    <script src="<?php echo URL ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo URL ?>assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo URL ?>assets/js/form-validator.min.js"></script>
    <script src="<?php echo URL ?>assets/js/contact-form-script.js"></script>
    <script src="<?php echo URL ?>assets/js/main.js"></script>

    <?php
    // if ($attr[0] == 'q=fromcourse') {
    ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFzGKfzDOLBpIU1ElAxVrBr-Ed2QRwzgQ&callback=initMap&libraries=&v=weekly" defer></script>

    <!-- <script src="<?php echo URL ?>public/map/map2.js"></script> -->
    <!-- <script src="<?php echo URL ?>public/map/card.js"></script> -->



    <script>
        let mapType = "roadmap";
        let centerOfLanka = {
            lat: 7.8731,
            lng: 80.7718
        };
        //HYBRID, ROADMAP,SATELLITE, TERRAIN
        let map;
        // The markers are stored in an array.
        let markers = []; // MARKED MARKERS ON MAP

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 6,
                center: centerOfLanka,
                /*
                gestureHandling: "none", /cooperative
                zoomControl: false,
                */
                //  gestureHandling: "greedy",

            });
            if (mapType) {
                map.setMapTypeId(mapType);
            }

            var markers = [
                <?php
                $c = array();
                if ($attr[0] == 'q=fromcourse') {
                    $c = $CENTER->getByCourse($course_id);
                } else {
                    $c[0] = (array) $CENTER;
                }
                foreach ($c as $key => $_center) {
                ?> {
                        coords: {
                            lat: <?php echo $_center['latitude']; ?>,
                            lng: <?php echo $_center['longitude']; ?>
                        },
                        content: {
                            name: '<?php echo $_center['name']; ?>',
                            email: '<?php echo $_center['email']; ?>',
                            phone: '<?php echo $_center['contact1']; ?>',
                            url: '<?php echo base64_encode('q=toapply%center=' . $_center['id'] . '%course=' . $course_id); ?>'
                        }
                    },
                <?php

                }
                ?>
            ];
            console.log(markers);
            map.setZoom(6);
            // deleteMarkers();
            setTimeout(function() {
                map.setZoom(7);
                map.setCenter(centerOfLanka);
                for (var i = 0; i < markers.length; i++) {
                    addMarker(markers[i]);
                    // console.log(markers[i])
                }
            }, 1000);
            //==========================================================================================================

            // MAPS FUNCTIONS
            // Adds a marker to the map and push to the array.
            function addMarker(props) {
                console.log(props);
                const marker = new google.maps.Marker({
                    title: 'ssss',
                    position: props.coords,
                    animation: google.maps.Animation.DROP,
                    map: map,
                });
                // SET ICON
                if (props.iconImage) {
                    marker.setIcon(props.iconImage);
                }
                const contentString =
                    ` 
                            <div class="" style="width: 100%; height: 100%;">
                                <div class="single-categories-courses-box" style="border-radius: 0px; max-height: 135px;padding: 30px 20px !important;"> 
                                    <h3 style="margin-bottom: 15px !important;">${props.content.name}</h3>
                                    <span style="font-size:12px; font-weight: 400;text-transform: lowercase;">${props.content.email}<br>${props.content.phone}</span>
                                </div>
                                <a href="<?php echo URL; ?>courses/apply/${props.content.url}" class="btn btn-primary text-center" style="width: 100%; padding-bottom: 13px;font-size:14px;">Select Center</a>
                            </div>       
                        `;
                const infoWindow = new google.maps.InfoWindow({
                    minWidth: 320,
                    minHeight: 165,
                    maxHeight: 165,
                    content: contentString,
                });
                google.maps.event.addListener(marker, 'click', function() {

                    if (!marker.open) {
                        infoWindow.open(map, marker);
                        marker.open = true;
                    } else {
                        infoWindow.close();
                        marker.open = false;
                    }
                });
                google.maps.event.addListener(map, 'click', function() {
                    infoWindow.close();
                    marker.open = false;
                });


                markers.push(marker);
            }

        }
    </script>


    <?php //} 
    ?>
</body>

</html>