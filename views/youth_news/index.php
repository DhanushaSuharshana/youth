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
        <script src="<?php echo URL ?>assets/js/lottie.js"></script>
      <!-- <script src="<?php echo URL ?>assets/plugin/paginationjs/dist/pagination.css"></script> -->

        <title>Youth Council || Sri Lanka</title>
        <link rel="icon" type="image/png" href="<?php echo URL; ?>assets/img/pre-logo.png">
    </head>

    <body>

        <?php include './views/header.php'; ?>

        <div class="jason-banner" id="lottie">
            <div class="container">
                <div class="page-title-content jason-banner-text">
                    <ul>
                        <li><a href="<?php echo URL ?>">Home</a></li>
                        <li>Our News </li>
                    </ul>
                    <h2> Our News </h2>
                </div>
            </div>
        </div> 

        <section class="blog-area ptb-100">
            <div class="container">
                <div class="row">
                    <?php
                    $NEWS = new News(NULL);
                    $news_data = $NEWS->all();
                    $items = 12;
                    $visible_pages = 3;
                    $page_count = count($news_data) / $items;
                    if (count($news_data) % $items > 0) {
                        $page_count++;
                    }
                    $chuncked = array_chunk($news_data, $items);
                    foreach ($chuncked as $key => $page) {

                        foreach ($page as $key2 => $news) {
                            ?>
                            <div class="col-lg-4 col-md-6 pg-<?= $key + 1 ?> pag-item" style="display: none">
                                <div class="single-blog-post mb-30">
                                    <div class="post-image">
                                        <a href="<?php echo URL; ?>youth_news/view/<?php echo base64_encode($news['id']); ?>" class="d-block">
                                            <img src="<?php echo URL ?>upload/news/<?php echo $news['image_name']; ?>" alt="image">
                                        </a>
                                        <!-- <div class="tag">
                                        <a href="#"><?php echo $news['title']; ?></a>
                                    </div> -->
                                    </div>
                                    <div class="post-content">
                                        <ul class="post-meta">

                                            <li><a href="#"><?php echo date("F j, Y", strtotime($news['date'])); ?></a></li>
                                        </ul>
                                        <h3><a href="<?php echo URL; ?>youth_news/view/<?php echo base64_encode($news['id']); ?>" class="d-inline-block"><?php echo $news['title']; ?></a></h3>
                                        <a href="<?php echo URL; ?>youth_news/view/<?php echo base64_encode($news['id']); ?>" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>








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
            $(function () {
                window.pagObj = $('#pagination').twbsPagination({
                    totalPages: <?= $page_count ?>,
                    visiblePages: <?= $visible_pages ?>,
                    onPageClick: function (event, page) {
                        // console.info(page + ' (from options)');
                        $('.pag-item').hide();
                        $('.pg-' + 1).show();
                    }
                }).on('page', function (event, page) {
                    console.info(page + ' (from event listening)');
                    $('.pag-item').hide();
                    $('.pg-' + page).show();
                });
            });
        </script>

        <script>
            var animationData = {"v":"5.6.2","fr":29.9700012207031,"ip":0,"op":121.000004928431,"w":1600,"h":420,"nm":"news","ddd":0,"assets":[{"id":"image_0","w":60,"h":128,"u":"","p":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAACACAMAAABgKvpOAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAWlBMVEVHcEwck4IWhXMMcmEVgnHeiooTg3FOf3PJcHDVgIAMcmHHbWzKdHMdk4IMc2IZinock4PKcXBviH7fiYngi4rdiYjBaGjZg4LBZ2flkZEdk4IMcmHPd3cTgXCZ/msiAAAAF3RSTlMA6XvTVnI4GMFAm+xuxPGwnaP9reDAwD25UEkAAAL7SURBVFjD7ZfRlqowDEULiAVBxVGH3iL//5u3KkLTpm3SWfM2edS110l3UkQh/uqvfqHkfp+NDlrrYx67P+pn7cBnZSlJbPFi9WB/Npk6EHpeWND3+QlPVSpcHjUCTxOJPmsElguc6LzUGLz/wFMZk7WxtrANniLzP1pwicLhY1tNwzlvcPDY65ReJXE41PjZZgv7m8qCq6Qtrc/CW5KldilbwJeRYcMnxNkOsBocbW/D2LCBLXjkbcUC0U7wAL+t4tEwWDtWDtFoqFprty8Au8Khajgo79DTKRrszbKKRA8O7PksIWyvmdTxrt1JT5MMXCesa6/vQ3BOBbK8h1Dfrq4BgZ1hbcpcXeiVPQX6JnTt9X3C11rjj8hA38khx/ouUkOO9L1LDznc90DRFeq7oOgK7Imk6cL3u6Tpwu/lmaYLuZeH+FMz/jyp3EtRRn++nb4lPHIRf3Fwn4ND8jKGR10WxDlho64Am3ztg6M+keeEKJvJc0KUzbxgIW1ljDn5yugLgijjzMlVNjMWxFfGDraUzbSLjCubEz8T0Ys50zfTV8ZaEFfZzNhMLzoneH2WZQV/lGUFf6aVFfxZcM6V8JQx7qI/rczgd3Rm8HtayeDWVI3V11J9Gyxx/5eoES1l6ltcs+DHE76IOjtY9aLNDlatENnBSvwA7gx8yw1uDHxls+8TG9kipnuMwr2IHTrALl0rEYMTbPeCbzx2afrlK2RsTMGXF1xnsW9f2KHHMQ2LAExhuwW+kdFV9QbfyegWvPiyjY2pWtmPLyGJpM2q9SFIAkHT65HNmtBYO3iDa3bw6ss8u9ns6ssY4zZt+TJrwmU7C74ymwZwzWSXy0w05rCWr7Qxl1XgN5vJKvArfeexHYBrFgt8RY0ppHr4yseIdX0FjSm8nPeaOz3W9YUZe4RQ15dnLEJ6vixjj0ccXF5GYClGeW+CHZ3tPLihw40HX+hw78E9HW79198f+GIY6xC4yffFMNZjf8SoMPqf45If/LwcTbou9pz+A/hJiO00L8AzAAAAAElFTkSuQmCC","e":1},{"id":"image_1","w":45,"h":63,"u":"","p":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAA/CAMAAABD2rE4AAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAY1BMVEVHcEz84qnkPlPpgnb/36f84qnbN03gO1DFJkL+8tbiPFHmQFTjPFRSJivmQFP946j74qnmQFT846j94qr84qnBNkggICAfHx/mQFT84qn/9uPGJkH0Z3/+6b3vV23rTGIfHh7D1GLAAAAAGHRSTlMAvtUQIKA6+4D5Wbsg+5XdhH1AZPDuQMBWFl0qAAABhklEQVRIx83U2ZKCMBAFUBYThsV9aiatCPz/Vw4oaDq53fA490UKjreSlpgkftIx5Zzp+pQoudCY25zpmnaKTsfnD6aNjHcUaaX8BLRYnn9Pj0uuxfIr+ZtctFR+hFoovxDTJanlKbFNvjUs35GkUbkRNSh/jc8b4I2U8ivJOi4/Eh8J0waPT9BheUrBJrk2aHyi5uVmTfvl+ftuKWi//LSuTTw+fySB/pRfaYM24fjYJkO9lF9okzbB+HT9Ks+9G6WmDR8f1w9YfiQ4EqANG9+aHsv96seKxsf/ZxiG6fM32ZKtOq8OdeZeqet9lSvW1o5l79yhkXoD+9Sjx3haQd/1oXYZ0iPu2il9oFF7teAPvw8zt6i6XTLrYn8XyptPtb+W+WvKQtq2C4cTjvGsahvrXlwJ0k6shnpeS4wjXT3v9l3X9W5dW6cl+nUKBdeRrhV9Ru+JmAa+g5sXopVb9IJLK8eHp8FjyYSTDHnRiGc+5pkV/0xslRU8WSVqe0f5/7r5QvHFHzeIoRNHYVcYAAAAAElFTkSuQmCC","e":1},{"id":"image_2","w":1601,"h":300,"u":"","p":"data:image/png;base64,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","e":1},{"id":"image_3","w":71,"h":87,"u":"","p":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEcAAABXCAMAAABhuKi2AAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAeFBMVEVHcEwDDTmZaVJWYbsDDDp2d8Fzdr9eZrkEDjl/YWfNh1oRFTrLiFxtb7oBDDl0c7l1dbwWFzvNiFrMiFoADTmmgYgCDTkpJT+Ke6llSUlUP0bMh1qPZFB+ebdzUUxqdc9KWroBDDnMiFpcacZTYsC6f198V02Rb3dTJgDkAAAAH3RSTlMAyP72gvE00KUSYFw8t/GEZkOz7ij84f39/vyDRaDYVjiC/QAAAiRJREFUWMPd1n9vgjAQBmBAQCpDBEVRs/UHuO//EYcwGUXhrkeXJXv/MJmhT+6uddRx/iJZ7Ltb6S4QWOZHrvwOSThk/r2IQY7GRcTRUT7HN1T8rXyVyIyZUEyZSE4lssMYQXOMlDGWiWcZ9Maz7byDLSgCGOSEDhIM7uTAzgHjHGEnttMW6ifmW3JchIPZsC3Cce2MB+Nk0k5fsbQzZ/9/Om9nK3Nme5TzmQPORqEcT23mnav6xDk55HgY56b2UF8oR0EOUwrBnBTUl5OrE+xcFDTnZuMviG1XewYeRA8z5jfEWxBs7LTfYN4X4H+gD2blfYq+1zHXznXDORztXH/mKnKZYxJL18OJ66qbUa7g8UU7SqcLSWmOtmpy8zzvfG4+cIdv0nmErPySc6U716GT05186Ci6ozGKWRnPgkHrbZEbG5VDLSgsxw5pQizgxdgpQvNqAs75TWdKzk2hHW8zrKhov0mNi2kTFF1NRdl/gy0pTHulS1nqfwcpTLEx8joAFa45OsFuSsGVAkmhoTIx83dOSjJiEk5MwKwwOvTOF+SntV29xOH9tq2EqBY49aMccQ9VqoRI+nLuqUlS3axcdY54pKYUc097HFMhqFL9vaxtbC0ETar6RavBeIylerBGG4+RVGkrmgGF4kWgvatGz6f6mJFFVfX44WbQiZhMhVSEWI+367nBar6jfsPmnQ5rtC71xBOr520nxZYj7DnJ2kacL2HElJE61wdqAAAAAElFTkSuQmCC","e":1},{"id":"image_4","w":71,"h":78,"u":"","p":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEcAAABOCAMAAABFYfvlAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAn1BMVEVHcExFPY1jX7D0qLFLQ5RKQZMtKHR+RYVnYrJRSpv3vsVIP40zLHpKQZNiXK0nI2wsJ3JhWqzmSFZRRZKbcoLeTFrupojronHnT1jqo3HnTFjzpazro3BKQZPmQFQfHGNuarr///8kH2g2MHv+9vczJWtYUaNCOYorJnH54uXpUWPsa3vooXHwh5SYOmZYLWtnX5WpOWF2MmnSSGK4qcTCDWTXAAAAHXRSTlMAOuf9XNy8HP19/pVsusDw3Kp5+PjQr+uaWKjbQHq2uacAAAJ4SURBVFjD7dbZlqIwEAZgcQPBpe22p3uWSlgVFNHWef9nm4RxIWGrBG7mnPkvI35UqiA6GPwrGa+Xw+FwuR53Qcyl5d5iTWamLrN0n7EAwNGSTMuVHIBZV+bmwMLsxtwdmChCQ5Fxt6AFzSTGvTPwtlBx3FoHYNyhnG3Bmeh3p1iOQkFGUzls+Fhn7VYP/R5Tc1sSA4betLayM9OaVonBOusWBusMWxisY7Uw4Ki22YLKbD6+Y47kh7KtZuCcpr/w46pT2Dufpt+Qx7JVr7Ck6QdqXM0KvG1QTjOSNxqzL0AkbR+YgXE2iLFjHMSZ6GAcxJm4gH4KAlxmfbSZP0NmH+1pP+0nWKd5Zwaaad6Zg3fgpeHvigIT0Gkf5ex8SsfduwMxpXTVeVhsVzxT/Vf0tqucob7RrRzenDyrbuXcGUrnXcp5MhUFmTpMxewd1d78TempXsW4gYsM9WWH0hj93BQjMXNu79T2VDUxJ18MGpWY0lZnettuoKZQalQ6XNopKKU+TwufxSK1C2Kf1uWlwcnvEwd54pg2Zt7iIFN6DPUc/70Xx/8inxXPoQZDiPTzY2gyRN6Zr8pEV5JHKihSLCYjt/wQj7FMBYou5BnBebW9a3aKMLvzT1+E1Dmj0AuTA1vNLqeovjQ/OP8eCcooEf4EJ57nhYfHp9csO5/P7L2IGOpHPKfTJeNXebbg2N5P2REv2Ids6UjEm/O7iUsktItOWHIIXzqIS0e2lMhOUhzX8bAf7aUvlZfYwlEqkV1WHBfpkGrHHpUuPNilpX1S6XwW2huWvhTKfSIk8Z63K7wZ74+vsO5KUsIbLko2XwrvnXod/A8mfwBA1HVE/5KvzwAAAABJRU5ErkJggg==","e":1},{"id":"image_5","w":195,"h":125,"u":"","p":"data:image/png;base64,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","e":1},{"id":"image_6","w":1601,"h":421,"u":"","p":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABkEAAAGlAgMAAAAwjrm1AAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAACVBMVEXv77/27MP368QxPneXAAAAAnRSTlMQkbtZfLsAAAI1SURBVHja7dExAQAwDAOgmJyJSqvKmeiRAyyQR5VkliZGjGDECEaMYMQIRjBiBCNGMGIEI0YwghEjGDGCESMYMYIRjBjBiBGMGMGIEYxgxAhGjGDECEYwYgQjRjBiBCNGMIIRIxgxghEjGDGCEYwYwYgRjBjBiBGMYMQIRoxgxAhGjGAEI0YwYgQjRjCCESMYMYIRIxgxghGMGMGIEYwYwYgRjGDECEaMYMQIRoxgBCNGMGIEI0YwYgQjGDGCESMYMYIRjBjBiBGMGMGIEYxgxAhGjGDECEaMYAQjRjBiBCNGMGIEIxgxghEjGDGCESMYwYgRjBjBiBGMYMQIRoxgxAhGjGAEI0YwYgQjRjBiBCMYMYIRIxgxghEjGMGIEYwYwYgRjBjBCEaMYMQIRoxgBCNGMGIEI0YwYgQjGDGCESMYMYIRIxjBiBGMGMGIEYwYwQhGjGDECEaMYMQIRjBiBCNGMGIEIxgxghEjGDGCESMYwYgRjBjBiBGMGMEIRoxgxAhGjGDECEYwYgQjRjBiBCNGMIIRIxgxghEjGMGIEYwYwYgRjBjBCEaMYMQIRoxgxAhGMGIEI0YwYgQjRjCCESMYMYIRIxgxghGMGMGIEYwYwQhGjGDECEaMYMQIRjBiBCNGMGIEI0YwghEjGDGCESMYMYIRjBjBiBGMGMGIEYxgxAhGjGDECEYwYgQjRjBiBCNGMIIRIxgxghEjGDGCEYwYwYgRjBjBiBGMYMQIRoxwPUKZD/Kg9l+f15a2AAAAAElFTkSuQmCC","e":1}],"layers":[{"ddd":0,"ind":1,"ty":2,"nm":"Layer 5","refId":"image_0","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[593.729,392.106,0],"ix":2},"a":{"a":0,"k":[31.979,133.841,0],"ix":1},"s":{"a":1,"k":[{"i":{"x":[0.833,0.833,0.833],"y":[0.833,0.833,0.833]},"o":{"x":[0.167,0.167,0.167],"y":[0.167,0.167,0.167]},"t":0,"s":[0,0,100]},{"t":120.0000048877,"s":[100,100,100]}],"ix":6}},"ao":0,"ip":0,"op":899.000036617021,"st":0,"bm":0},{"ddd":0,"ind":2,"ty":2,"nm":"Layer 6","refId":"image_1","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[1115.13,317.563,0],"ix":2},"a":{"a":0,"k":[23.404,62.826,0],"ix":1},"s":{"a":1,"k":[{"i":{"x":[0.833,0.833,0.833],"y":[0.833,0.833,0.833]},"o":{"x":[0.167,0.167,0.167],"y":[0.167,0.167,0.167]},"t":0,"s":[0,0,100]},{"t":120.0000048877,"s":[100,100,100]}],"ix":6}},"ao":0,"ip":0,"op":899.000036617021,"st":0,"bm":0},{"ddd":0,"ind":3,"ty":2,"nm":"Layer 1","refId":"image_2","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[800,269.468,0],"ix":2},"a":{"a":0,"k":[800.25,149.774,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":899.000036617021,"st":0,"bm":0},{"ddd":0,"ind":4,"ty":2,"nm":"Layer 2","refId":"image_3","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":0,"s":[-6]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":59,"s":[10]},{"t":120.0000048877,"s":[-6]}],"ix":10},"p":{"a":0,"k":[809.136,285.802,0],"ix":2},"a":{"a":0,"k":[35.582,79.332,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":899.000036617021,"st":0,"bm":0},{"ddd":0,"ind":5,"ty":2,"nm":"Layer 3","refId":"image_4","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":0,"s":[11]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":59,"s":[-10]},{"t":120.0000048877,"s":[11]}],"ix":10},"p":{"a":0,"k":[879.111,286.516,0],"ix":2},"a":{"a":0,"k":[31.019,68.216,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":899.000036617021,"st":0,"bm":0},{"ddd":0,"ind":6,"ty":2,"nm":"Layer 4","refId":"image_5","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[850.116,174.237,0],"ix":2},"a":{"a":0,"k":[97.088,62.487,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":899.000036617021,"st":0,"bm":0},{"ddd":0,"ind":7,"ty":2,"nm":"Layer 7","refId":"image_6","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[800,210,0],"ix":2},"a":{"a":0,"k":[800.25,210.25,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":899.000036617021,"st":0,"bm":0}],"markers":[]}
            var params = {
                container: document.getElementById('lottie'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                animationData: animationData
            };

            var anim;

            anim = lottie.loadAnimation(params);

        </script>
    </body>

</html>