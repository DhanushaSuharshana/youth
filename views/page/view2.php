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
    <link rel="icon" type="image/png" href="<?php echo URL ?>assets/img/pre-logo.png">
</head>

<body>

    <?php include './views/header.php'; ?>




    <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}' style="background-image: url(<?= (empty($this->PAGE->banner_image_name)) ? URL . 'assets/img/page-title/1.jpg' : URL . 'upload/page/banner/' . $this->PAGE->banner_image_name ?>) !important;">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="<?php echo URL ?>">Home</a></li>
                    <li><?php $PAGE_TYPE = new PageType($this->PAGE->page_type);
                        echo ucwords($PAGE_TYPE->title); ?></li>
                </ul>
                <h2><?= $this->PAGE->title; ?></h2>
            </div>
        </div>
    </div>


    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img src="<?php echo URL ?>upload/page/<?= $this->PAGE->image_name; ?>" alt="image">
                        </div>
                        <div class="article-content">
                            <!-- <div class="entry-meta">
                                <ul>
                                    <li>
                                        <i class='bx bx-folder-open'></i>
                                        <span>Category</span>
                                        <a href="#">Design</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-group'></i>
                                        <span>Students Enrolled</span>
                                        <a href="#">813,454</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar'></i>
                                        <span>Last Updated</span>
                                        <a href="#">01/14/2021</a>
                                    </li>
                                </ul>
                            </div> -->
                            <h3><?= $this->PAGE->sub_title; ?></h3>
                            <?= $this->PAGE->description; ?>
                            <?php
                            $PAGE_CHARACTERS = new PageCharacter(NULL);
                            $page_characters = $PAGE_CHARACTERS->getPageCharactersById($this->PAGE->id);
                            if ($page_characters) {

                            ?>
                                <h3>Characters</h3>
                                <div class="character mt-3">
                                    <div class="blog-slides owl-carousel owl-theme mt-2">
                                        <?php

                                        foreach ($page_characters as $key => $character) {
                                        ?>
                                            <div class=" single-blog-post mb-3">
                                                <div class="post-image">
                                                    <a href="#" class="d-block">
                                                        <img src="<?php echo URL ?>upload/page/character/<?php echo $character['image_name'] ?>" alt="<?php echo $character['name'] ?>">
                                                    </a>
                                                    <!-- <div class="tag">
                                                <a href="#">News</a>
                                            </div> -->
                                                </div>
                                                <div class="post-content text-center">
                                                    <ul class="post-meta">

                                                        <li><a href="#">
                                                                <?php
                                                                echo $character['designation'];
                                                                ?>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5><a href="#" class="d-inline-block"><?php echo ucfirst($character['name']) ?></a></h5>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- <h3>Setting the mood with incense</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in sed quia non numquam eius modi tempora incidunt ut labore et
                                dolore magnam aliquam quaerat voluptatem.</p>
                            <h3>The Rise Of Smarketing And Why You Need It</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p> -->
                        </div>
                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class='bx bx-purchase-tag'></i></span>
                                <a href="<?php $PAGE_TYPE = new PageType($this->PAGE->page_type);
                                            echo URL; ?>page/list/<?php echo $PAGE_TYPE->title ?>"><?php

                                                                                                    echo $PAGE_TYPE->title;
                                                                                                    ?></a>
                            </div>
                            <div class="article-share">
                                <ul class="social">
                                    <li><span>Share:</span></li>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a>
                                    </li>
                                    <li><a href="http://twitter.com/share?text=<?php echo $this->PAGE->title ?>&url=<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>&hashtags=nysc,youth,srilanka" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a>
                                    </li>
                                    <!-- <li><a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a> -->
                                    </li>
                                    <!-- <li><a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="article-author">
                            <div class="author-profile-header"></div>
                            <div class="author-profile">
                                <div class="author-profile-title">
                                    <img src="<?php echo URL ?>assets/img/user1.jpg" class="shadow-sm rounded-circle" alt="image">
                                    <div class="author-profile-title-details d-flex justify-content-between">
                                        <div class="author-profile-details">
                                            <h4>Chris Orwig</h4>
                                            <span class="d-block">Photographer, Author, Teacher</span>
                                        </div>
                                        <div class="author-profile-raque-profile">
                                            <a href="single-instructor.html" class="d-inline-block">View Profile on
                                                Raque</a>
                                        </div>
                                    </div>
                                </div>
                                <p>Chris Orwig is a celebrated photographer, author, and teacher who brings passion to
                                    everything he does.</p>
                            </div>
                        </div>
                        <div class="raque-post-navigation">
                            <div class="prev-link-wrapper">
                                <div class="info-prev-link-wrapper">
                                    <a href="single-blog.html">
                                        <span class="image-prev">
                                            <img src="<?php echo URL ?>assets/img/blog/2.jpg" alt="image">
                                            <span class="post-nav-title">Prev</span>
                                        </span>
                                        <span class="prev-link-info-wrapper">
                                            <span class="prev-title">Don't buy a tech gift until you read these
                                                rules</span>
                                            <span class="meta-wrapper">
                                                <span class="date-post">January 21, 2021</span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="next-link-wrapper">
                                <div class="info-next-link-wrapper">
                                    <a href="single-blog.html">
                                        <span class="next-link-info-wrapper">
                                            <span class="next-title">The golden rule of buying a phone as a gift</span>
                                            <span class="meta-wrapper">
                                                <span class="date-post">January 21, 2021</span>
                                            </span>
                                        </span>
                                        <span class="image-next">
                                            <img src="<?php echo URL ?>assets/img/blog/3.jpg" alt="image">
                                            <span class="post-nav-title">Next</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="comments-area">
                            <h3 class="comments-title">2 Comments:</h3>
                            <ol class="comment-list">
                                <li class="comment">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="<?php echo URL ?>assets/img/user1.jpg" class="avatar" alt="image">
                                                <b class="fn">John Jones</b>
                                                <span class="says">says:</span>
                                            </div>
                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <time>April 24, 2021 at 10:59 am</time>
                                                </a>
                                            </div>
                                        </footer>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen.</p>
                                        </div>
                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </article>
                                    <ol class="children">
                                        <li class="comment">
                                            <article class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img src="<?php echo URL ?>assets/img/user2.jpg" class="avatar" alt="image">
                                                        <b class="fn">Steven Smith</b>
                                                        <span class="says">says:</span>
                                                    </div>
                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time>April 24, 2021 at 10:59 am</time>
                                                        </a>
                                                    </div>
                                                </footer>
                                                <div class="comment-content">
                                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever
                                                        since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled it to make a type specimen.</p>
                                                </div>
                                                <div class="reply">
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </article>
                                        </li>
                                        <ol class="children">
                                            <li class="comment">
                                                <article class="comment-body">
                                                    <footer class="comment-meta">
                                                        <div class="comment-author vcard">
                                                            <img src="<?php echo URL ?>assets/img/user3.jpg" class="avatar" alt="image">
                                                            <b class="fn">Sarah Taylor</b>
                                                            <span class="says">says:</span>
                                                        </div>
                                                        <div class="comment-metadata">
                                                            <a href="#">
                                                                <time>April 24, 2021 at 10:59 am</time>
                                                            </a>
                                                        </div>
                                                    </footer>
                                                    <div class="comment-content">
                                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever
                                                            since the 1500s, when an unknown printer took a galley of
                                                            type and scrambled it to make a type specimen.</p>
                                                    </div>
                                                    <div class="reply">
                                                        <a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </article>
                                            </li>
                                        </ol>
                                    </ol>
                                </li>
                                <li class="comment">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="<?php echo URL ?>assets/img/user4.jpg" class="avatar" alt="image">
                                                <b class="fn">John Doe</b>
                                                <span class="says">says:</span>
                                            </div>
                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <time>April 24, 2021 at 10:59 am</time>
                                                </a>
                                            </div>
                                        </footer>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen.</p>
                                        </div>
                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </article>
                                    <ol class="children">
                                        <li class="comment">
                                            <article class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img src="<?php echo URL ?>assets/img/user5.jpg" class="avatar" alt="image">
                                                        <b class="fn">James Anderson</b>
                                                        <span class="says">says:</span>
                                                    </div>
                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time>April 24, 2021 at 10:59 am</time>
                                                        </a>
                                                    </div>
                                                </footer>
                                                <div class="comment-content">
                                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever
                                                        since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled it to make a type specimen.</p>
                                                </div>
                                                <div class="reply">
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </article>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Reply</h3>
                                <form class="comment-form">
                                    <p class="comment-notes">
                                        <span id="email-notes">Your email address will not be published.</span>
                                        Required fields are marked
                                        <span class="required">*</span>
                                    </p>
                                    <p class="comment-form-author">
                                        <label>Name <span class="required">*</span></label>
                                        <input type="text" id="author" placeholder="Your Name*" name="author" required="required">
                                    </p>
                                    <p class="comment-form-email">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" id="email" placeholder="Your Email*" name="email" required="required">
                                    </p>
                                    <p class="comment-form-url">
                                        <label>Website</label>
                                        <input type="url" id="url" placeholder="Website" name="url">
                                    </p>
                                    <p class="comment-form-comment">
                                        <label>Comment</label>
                                        <textarea name="comment" id="comment" cols="45" placeholder="Your Comment..." rows="5" maxlength="65525" required="required"></textarea>
                                    </p>
                                    <p class="comment-form-cookies-consent">
                                        <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                                        <label for="wp-comment-cookies-consent">Save my name, email, and website in this
                                            browser for the next time I comment.</label>
                                    </p>
                                    <p class="form-submit">
                                        <input type="submit" name="submit" id="submit" class="submit" value="Post Comment">
                                    </p>
                                </form>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <!-- <section class="widget widget_search">
                            <form class="search-form">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search...">
                                </label>
                                <button type="submit"><i class="bx bx-search-alt"></i></button>
                            </form>
                        </section> -->
                        <?php
                            //Object ^^^^ of page
                        ;
                        if ($other_pages = $this->PAGE->getByType($this->PAGE->page_type)) {
                        ?>
                            <section class="widget widget_raque_posts_thumb">
                                <div style="display: block">
                                    <h3 class="widget-title" style="display: inline-block">Other <?= ucwords($PAGE_TYPE->title); ?></h3>
                                    <a href="<?php echo URL; ?>page/list/<?php echo $PAGE_TYPE->title; ?>" class="btn btn-sm btn-primary float-end" style="display: inline-block; background-color: #ff1949; border: 1px solid #ff1949;">View All</a>
                                </div>
                                <?php

                                foreach ($other_pages as $key => $page) {
                                    if ($key < 5) {
                                ?>
                                        <article class="item">
                                            <a href="<?php echo URL ?>page/view/<?php echo $page['url']; ?>" class="thumb" style="width: 110px !important">
                                                <!-- <span class="fullimage cover bg1" role="img"> -->
                                                <img src="<?php echo URL ?>upload/page/<?php echo $page['image_name'] ?>" alt="">

                                            </a>
                                            <div class="info">
                                                <h4 class="title usmall"><a href="<?php echo URL ?>page/view/<?php echo $page['url']; ?>"><?php echo $page['title'] ?></a></h4>
                                                <span style="color: #727695"><?php echo substr($page['description'], 0, 60) ?>...</span>

                                            </div>
                                            <div class="clear"></div>
                                        </article>
                                <?php }
                                } ?>
                            </section>
                        <?php } ?>
                        <?php
                        //Object ^^^^ of page
                        $PAGE_NEWS = new PageNews(NULL);
                        $page_news = $PAGE_NEWS->getPageNewsById($this->PAGE->id, true);
                        if ($page_news) {
                        ?>
                            <section class="widget widget_raque_posts_thumb">
                                <div style="display: block">
                                    <h3 class="widget-title" style="display: inline-block">Latest News</h3>
                                    <a href="<?php echo URL; ?>page/news/<?php echo $this->PAGE->url; ?>" class="btn btn-sm btn-primary float-end" style="display: inline-block; background-color: #ff1949; border: 1px solid #ff1949;">View All</a>
                                </div>
                                <?php

                                foreach ($page_news as $key => $news) {
                                    if ($key < 5) {
                                ?>
                                        <article class="item">
                                            <a href="<?php echo URL ?>page/news/view/<?php echo base64_encode($news['id']); ?>" class="thumb">
                                                <!-- <span class="fullimage cover bg1" role="img"> -->
                                                <img src="<?php echo URL ?>upload/page/news/<?php echo $news['image_name'] ?>" alt="">

                                            </a>
                                            <div class="info">
                                                <time datetime="2021-06-30"><?php echo date("F j, Y", strtotime($news['date'])); ?></time>
                                                <h4 class="title usmall"><a href="<?php echo URL ?>page/news/view/<?php echo base64_encode($news['id']); ?>"><?php echo substr($news['title'], 0, 60) ?>...</a></h4>
                                            </div>
                                            <div class="clear"></div>
                                        </article>
                                <?php }
                                } ?>
                            </section>
                        <?php } ?>
                        <!-- <section class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li><a href="#">Design <span class="post-count">(03)</span></a></li>
                                <li><a href="#">Lifestyle <span class="post-count">(05)</span></a></li>
                                <li><a href="#">Script <span class="post-count">(10)</span></a></li>
                                <li><a href="#">Device <span class="post-count">(08)</span></a></li>
                                <li><a href="#">Tips <span class="post-count">(01)</span></a></li>
                            </ul>
                        </section>
                        <section class="widget widget_tag_cloud">
                            <h3 class="widget-title">Raque Tags</h3>
                            <div class="tagcloud">
                                <a href="#">IT <span class="tag-link-count"> (3)</span></a>
                                <a href="#">Raque <span class="tag-link-count"> (3)</span></a>
                                <a href="#">Games <span class="tag-link-count"> (2)</span></a>
                                <a href="#">Fashion <span class="tag-link-count"> (2)</span></a>
                                <a href="#">Travel <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Smart <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Marketing <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
                            </div>
                        </section>
                        <section class="widget widget_instagram">
                            <h3 class="widget-title">Instagram</h3>
                            <ul>
                                <li>
                                    <a href="#" class="d-block">
                                        <img src="<?php echo URL ?>assets/img/blog/1.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-block">
                                        <img src="<?php echo URL ?>assets/img/blog/2.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-block">
                                        <img src="<?php echo URL ?>assets/img/blog/3.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-block">
                                        <img src="<?php echo URL ?>assets/img/blog/4.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-block">
                                        <img src="<?php echo URL ?>assets/img/blog/5.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-block">
                                        <img src="<?php echo URL ?>assets/img/blog/6.jpg" alt="image">
                                    </a>
                                </li>
                            </ul>
                        </section>
                        <section class="widget widget_contact">
                            <div class="text">
                                <div class="icon">
                                    <i class='bx bx-phone-call'></i>
                                </div>
                                <span>Emergency</span>
                                <a href="#">+0987-9876-8753</a>
                            </div>
                        </section> -->
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