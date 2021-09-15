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
    <link rel="stylesheet" href="<?php echo URL ?>assets/pagination.css">
    <!-- <script src="<?php echo URL ?>assets/plugin/paginationjs/dist/pagination.css"></script> -->

    <title>Youth Council || Sri Lanka</title>
    <link rel="icon" type="image/png" href="assets/img/pre-logo.png">
</head>

<body>

    <?php include './views/header.php'; ?>

    <div class="page-title-area item-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Page</li>
                </ul>
                <h2><?php echo ucwords($this->query) ?></h2>
            </div>
        </div>
    </div>
    <section class="blog-area ptb-100">
        <div class="container">
            <div class="row">
                <?php
                $PAGES = new Pages(NULL);
                if($this->query == "all"){
                    $page_data = $PAGES->all();
                }else{
                    $page_data = $PAGES->getByType(PageType::getByTitle($this->query)["id"]);
                }
                $items = 6;
                $visible_pages = 3;
                $page_count = count($page_data) / $items;
                if (count($page_data) % $items > 0) {
                    $page_count++;
                }
                $chuncked = array_chunk($page_data, $items);
                foreach ($chuncked as $key => $pagination) {

                    foreach ($pagination as $key2 => $page) {
                ?>
                        <div class="col-lg-4 col-md-6 pg-<?= $key + 1 ?> pag-item" style="display: none">
                            <div class="single-blog-post mb-30">
                                <div class="post-image">
                                    <a href="<?php echo URL; ?>page/view/<?php echo $page['url']; ?>" class="d-block">
                                        <img src="<?php echo URL ?>upload/page/<?php echo $page['image_name']; ?>" alt="image">
                                    </a>
                                    <!-- <div class="tag">
                                    <a href="#"><?php echo $page['title']; ?></a>
                                </div> -->
                                </div>
                                <div class="post-content">
                                    <ul class="post-meta">

                                    </ul>
                                    <h3><a href="<?php echo URL; ?>page/view/<?php echo $page['url']; ?>" class="d-inline-block"><?php echo $page['title']; ?></a></h3>
                                    <a href="<?php echo URL; ?>page/view/<?php echo $page['url']; ?>" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } ?>








                <!-- <div id="data-container"></div>
                <div id="pagination-container"></div> -->

                <!-- <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pagination-area text-center pagination" id="pagination">
                        <a href="#" class="next page-numbers"><i class='bx bx-chevron-left'></i></a>
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="page-numbers">5</a>
                        <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-12" style="display: flex; justify-content: center;">
                    <nav aria-label="Page navigation">
                        <ul class="pagination" id="pagination"></ul>
                    </nav>
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
    <!-- <script src="<?php echo URL ?>assets/plugin/paginationjs/dist/pagination.min.js"></script> -->
    <script src="<?php echo URL ?>assets/plugin/twbs-pagination/jquery.twbsPagination.min.js"></script>
    <!-- <script src="<?php echo URL ?>assets/plugin/twbs-pagination/jquery.twbsPagination.js"></script> -->
    <script>
        // function simpleTemplating(data) {
        //     var html = '<ul>';
        //     $.each(data, function(index, item) {
        //         html += '<li>' + item + '</li>';
        //     });
        //     html += '</ul>';
        //     return html;
        // }

        // $('#pagination-container').pagination({
        //     dataSource: [1, 2, 3, 4, 5, 6, 7, 195],
        //     callback: function(data, pagination) {
        //         var html = simpleTemplating(data);
        //         $('#data-container').html(html);
        //     }
        // })
    </script>
    <script type="text/javascript">
        $(function() {
            window.pagObj = $('#pagination').twbsPagination({
                totalPages: <?= $page_count ?>,
                visiblePages: <?= $visible_pages ?>,
                onPageClick: function(event, page) {
                    // console.info(page + ' (from options)');
                    $('.pag-item').hide();
                    $('.pg-' + 1).show();
                }
            }).on('page', function(event, page) {
                console.info(page + ' (from event listening)');
                $('.pag-item').hide();
                $('.pg-' + page).show();
            });
        });
    </script>
</body>

</html>