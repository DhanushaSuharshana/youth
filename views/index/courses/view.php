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
    <link rel="icon" type="image/png" href="<?php echo URL; ?>assets/img/pre-logo.png">
</head>

<body>
    <?php include './views/header.php';
    $COURSE = new Course(NULL);

    $attr = explode('%', base64_decode($this->query));
    $center_id = explode('=', $attr[1])[1];
    $course_id = explode('=', $attr[2])[1];
    $CENTER = new Center($center_id);
    $course = $COURSE->getOne($course_id);
    // var_dump($attr);
    ?>

    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
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
                            <h2><?php echo $course['name']; ?> (<?php echo $CENTER->name ?>)</h2>
                            <p><?php echo $course['short_description'] ?>.</p>
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
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    <span>Started Date</span>
                                    <a href="#"><?php echo $course['start_date'] ?></a>
                                </li>
                                <li class="">
                                    <a href="<?php echo URL; ?>courses/apply/<?php echo base64_encode('q=toapply%center='.$center_id.'%course='.$course['id']); ?>" class="default-btn"><i class="bx bx-move-horizontal icon-arrow before"></i><span class="label text-white">Apply Now</span>
                                        <!-- <i class="bx bx-move-horizontal icon-arrow after"></i> -->
                                    </a>
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
                                <div class="item active">
                                    <img src="<?php echo URL ?>upload/courses/<?php echo $course['image_name']; ?>" alt="Los Angeles" style="width:100%;">
                                </div>
                                <?php
                                $COURSE_PHOTO = new CoursePhoto(NULL);
                                foreach ($COURSE_PHOTO->all() as $course_photo) {
                                ?>
                                    <div class="item">
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
                    <div class="courses-details-desc">
                        <!-- <h3>What you'll learn</h3> -->
                        <!-- <div class="why-you-learn">
                            <ul>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Become an expert in Statistics
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Boost your resume with skills
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Gather, organize, data
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Use data for improved
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Present information KPIs
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Perform quantitative
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Analyze current data
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Discover how to find trends
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Understand the fundamentals
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Use SQL to create, design
                                    </span>
                                </li>
                            </ul>
                        </div> -->
                        <h3>Description</h3>
                        <?php echo $course['description'] ?>
                        <!-- <ul class="requirements-list">
                            <li>Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</li>
                            <li>The standard Lorem Ipsum passage, used since the 1500s.</li>
                        </ul>
                        <h3>Description</h3>
                        <p><strong>Hi! Welcome to Certified Graphic Design with Free Project Course, the only course you need to become a BI Analyst.</strong></p>
                        <p>We are proud to present you this one-of-a-kind opportunity. There are several online courses teaching some of the skills related to the BI Analyst profession. The truth of the matter is that none of them completely prepare you.</p>
                        <p><strong>Our program is different than the rest of the materials available online.</strong></p>
                        <p>It is truly comprehensive. The Business Intelligence Analyst Course comprises of several modules:</p>
                        <ul class="description-features-list">
                            <li>Introduction to Data and Data Science</li>
                            <li>Statistics and Excel</li>
                            <li>Database theory</li>
                            <li>SQL</li>
                            <li>Tableau</li>
                        </ul> -->
                        <!-- <p>These are the precise technical skills recruiters are looking for when hiring BI Analysts. And today, you have the chance of acquiring an invaluable advantage to get ahead of other candidates. This course will be the secret to your success. And your success is our success, so let’s make it happen!</p>
                        <p>Here are some more details of what you get with The Business Intelligence Analyst Course:</p> -->
                        <!-- <ul class="description-features-list">
                            <li><strong>Introduction to Data and Data Science</strong> – Make sense of terms like business intelligence, traditional and big data, traditional statistical methods, machine learning, predictive analytics, supervised learning, unsupervised learning, reinforcement learning, and many more;</li>
                            <li><strong>Statistics and Excel</strong> – Understand statistical testing and build a solid foundation. Modern software packages and programming languages are automating most of these activities, but this part of the course gives you something more valuable – critical thinking abilities;</li>
                            <li><strong>Database theory</strong> – Before you start using SQL, it is highly beneficial to learn about the underlying database theory and acquire an understanding of why databases are created and how they can help us manage data;</li>
                            <li><strong>SQL</strong> – when you can work with SQL, it means you don’t have to rely on others sending you data and executing queries for you. You can do that on your own. This allows you to be independent and dig deeper into the data to obtain the answers to questions that might improve the way your company does its business;</li>
                            <li><strong>Tableau</strong> – one of the most powerful and intuitive data visualization tools available out there. Almost all large companies use such tools to enhance their BI capabilities. Tableau is the #1 best-in-class solution that helps you create powerful charts and dashboards;</li>
                            <li>Learning a programming language is meaningless without putting it to use. That’s why we integrate SQL and Tableau, and perform several real-life Business Intelligence tasks;</li>
                        </ul>
                        <p><strong>Sounds amazing, right?</strong></p>
                        <p>Our courses are unique because our team works hard to:</p>
                        <ul class="description-features-list">
                            <li>Pre-script the entire content</li>
                            <li>Work with real-life examples</li>
                            <li>Provide easy to understand and complete explanation</li>
                            <li>Create beautiful and engaging animations</li>
                            <li>Prepare exercises, course notes, quizzes, and other materials that will enhance your course taking experience</li>
                            <li>Be there for you and provide support whenever necessary</li>
                        </ul> -->
                        <!-- <p>We love teaching and we are really excited about this journey. It will get your foot in the door of an exciting and rising profession. Don’t hesitate and subscribe today. The only regret you will have is that you didn’t find this course sooner!</p> -->
                        <!-- <h3>Who this course is for:</h3>
                        <ul class="audience-list">
                            <li>Beginners to programming and data science</li>
                            <li>Students eager to learn about job opportunities in the field of data science</li>
                            <li>Candidates willing to boost their resume by learning how to combine the knowledge of Statistics, SQL, and Tableau in a real-world working environment</li>
                            <li>SQL Programmers who want to develop business reasoning and apply their knowledge to the solution of various business tasks</li>
                            <li>People interested in a Business Intelligence Analyst career</li>
                        </ul> -->
                        <!--<h3>Meet your instructors</h3>-->

                    </div>
                    <!--Google map-->
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 310px">
                        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>


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
                                    Subjects
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
                    <div class="courses-purchase-info">
                        <h4>How I know some information?</h4>
                        <span class="text-white">Contact Number : </span><a href="#" class="d-inline-block"><?php echo $CENTER->contact1 ?></a>
                        <span class="text-white">Email : </span><a href="#" class="d-inline-block"><?php echo $CENTER->email ?></a>
                    </div>
                </div>

            </div>




            <?php
            if ($attr[0] == 'q=fromcenter') {
            ?>
                <div class="related-courses">
                    <h3>Related Courses</h3>
                    <div class="row">
                        <?php
                        foreach ($COURSE->getByCenter($center_id) as $key => $course2) {
                            if ($course_id != $course2['id']) {
                        ?>
                                <div class="col-lg-3 col-md-3">
                                    <div class="single-courses-box mb-30">
                                        <div class="courses-image">
                                            <a href="<?php echo URL; ?>courses/view/<?php echo base64_encode('q=fromcenter%center=' . $center_id . '%course=' . $course2['id']); ?>" class="d-block"><img src="<?php echo URL ?>upload/courses/<?php echo $course2['image_name'] ?>" alt="image"></a>
                                            <div class="courses-tag">
                                                <a href="#" class="d-block"><?php echo $course2['level'] ?></a>
                                            </div>
                                        </div>
                                        <div class="courses-content">

                                            <h3><a href="<?php echo URL; ?>courses/view/<?php echo base64_encode('q=fromcenter%center=' . $center_id . '%course=' . $course2['id']); ?>" class="d-inline-block"><?php echo $course2['name'] ?> (<?php echo $CENTER->name ?>)</a></h3>
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
                                                    <i class='bx bx-user'></i> <?php echo $course2['max_student'] ?> students
                                                </li>
                                                <li class="courses-lesson">
                                                    <i class='bx bx-book-open'></i> 6 Subjects
                                                </li>
                                                <li class="courses-price">
                                                    <?php echo $course2['languages'] ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>

            <?php } elseif ($attr[0] == 'q=fromcourse') { ?>

                <div class="related-courses">
                    <h3>Related Centers</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-categories-courses-box mb-30">
                                <div class="icon">
                                    <i class='bx bx-code-alt'></i>
                                </div>
                                <h3><?php //echo $center['name'] 
                                    ?></h3>
                                <span><?php

                                        //echo $CENTER->getCntersCourseCount($center['id'])['count'];

                                        ?> Courses</span>
                                <a href="<?php echo URL; ?>courses/list/<?php //echo base64_encode('q=fromcenter%center=' . $center['id']); 
                                                                        ?>" class="link-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </section>

    <?php include './views/footer.php'; ?>
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