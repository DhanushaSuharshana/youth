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
    <script src="<?php echo URL ?>assets/js/lottie.js"></script>
    <title>Youth Council || Sri Lanka</title>
    <link rel="icon" type="image/png" href="<?php echo URL; ?>assets/img/pre-logo.png">
</head>


<body class="background snowflake">

    <span class="hidden" id="snowflake">&#10052;</span>

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


    <div class="jason-banner" id="lottie">
        <div class="container">
            <div class="page-title-content jason-banner-text">
                <ul>
                    <li><a href="<?php echo URL ?>">Home</a></li>
                    <li>Events </li>
                </ul>
                <h2> Event Details </h2>
            </div>
        </div>
    </div>

    <?php
    $EVENT_PHOTO = new EventPhoto(NULL);
    $EVENT = new Event(base64_decode($this->query));
    ?>
    <section class="events-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="events-details-header">
                        <a href="<?php echo URL; ?>youth_event" class="back-all-events"><i class='bx bx-chevrons-left'></i> Back To All Event</a>
                        <h3><?php echo $EVENT->title; ?></h3>
                        <ul class="events-info-meta d-none">
                            <li><i class="flaticon-timetable"></i> <?php echo date("F j, Y", strtotime($EVENT->date)) ?></li>
                            <li><i class="far fa-clock"></i> 10.00AM - 10.00PM</li>
                        </ul>
                        <div class="events-meta">
                            <!-- <ul>
                                        <li>
                                            <i class='bx bx-folder-open'></i>
                                            <span>Venue</span>
                                            <a href="#">Design</a>
                                        </li>
                                        <li>
                                            <i class='bx bx-group'></i>
                                            <span>Date</span>
                                            10 November, 2021
                                        </li>
                                        <li>
                                            <i class='bx bx-calendar'></i>
                                            <span>Time</span>
                                            10.00AM - 10.00PM
                                        </li>
                                    </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="events-details">



                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <?php
                                foreach ($EVENT_PHOTO->geteventPhotosById($EVENT->id) as $key => $event) {
                                ?>
                                    <div class="item <?= ($key == 0) ? 'active' : '' ?>">
                                        <img src="<?php echo URL ?>upload/event/gallery/<?php echo $event['image_name'] ?>" alt="Los Angeles" style="width:100%;">
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


                        <?php echo $EVENT->description; ?>
                        <div class=" mt-5">
                            <iframe src="https://maps.google.com/maps?q=<?php echo $EVENT->location; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen width="100%" height="400"></iframe>

                            <!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1EYihIduCXuOWDaX9jKqhSSSjx9Mp5TcT" width="100%" height="400"></iframe> -->
                        </div>
                    </div>


                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <div class="courses-review-comments" style="margin-top: -20px;">

                            <?php
                            foreach ($EVENT->all() as $key => $event) {
                                if ($key < 10) {
                            ?>
                                    <div class="user-review">
                                        <a href="<?php echo URL ?>events/view/<?php echo base64_encode($event['id']); ?>">
                                            <img src="<?php echo URL ?>upload/event/<?php echo $event['image_name'] ?>" alt="image">
                                            <div class="review-rating">

                                                <span class="d-inline-block"><?php echo $event['title'] ?></span>
                                            </div>

                                            <p><?php echo substr($event['short_description'], 0, 60) ?>...</p>
                                        </a>
                                    </div>
                            <?php }
                            }
                            ?>
                        </div>


                    </aside>
                </div>
            </div>
        </div>
        </div>
    </section>


    <?php include './views/footer.php'; ?>


    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

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
    <script>
        var animationData = {
            "v": "5.6.2",
            "fr": 29.9700012207031,
            "ip": 0,
            "op": 121.000004928431,
            "w": 1600,
            "h": 420,
            "nm": "events",
            "ddd": 0,
            "assets": [{
                "id": "image_0",
                "w": 25,
                "h": 25,
                "u": "",
                "p": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAMAAADzN3VRAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAZlBMVEVHcEzQKzX/roDdNUH/RVX/roD/r4D/bGL/roDmO0f/RFT/T1r/RVT/Rlb0P03zQk/VLzrSLDj/roD/roDPKjX/RVX/VFv/XV//aWT/rYD/RVX/RVX/roDOJzHfMT33QE/vO0n/cGZI+StQAAAAG3RSTlMA4/Bx7aA4EGUYcC+gUEGvt9LYuO6I836SgNAYMI0HAAAAo0lEQVQoz3XS6RKCMAwE4FrowS0gXgkC7/+SJug4gyz9+02220yNMT4YfGIfD6TreuMRRmvZOwckMLPlB0qzQgyviioeVnDMyw1KcAtRjotfiaiEUohQA1dxV3pCaiahtEDUzkoVkOz00sQ8IBrXxLJApImCu0GhNVEfV9VbPf+IaNiOJeM3kei/ZiZj0yr1rkjdfiwDT0suanj3YunBfzLJYN5g0g57Rrnr5AAAAABJRU5ErkJggg==",
                "e": 1
            }, {
                "id": "image_1",
                "w": 37,
                "h": 92,
                "u": "",
                "p": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAABcCAMAAADebYw4AAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAA2FBMVEVHcEyuOUafLjq8OEX8RFTBOEPQOEjW7uuhMT/SPEqnM0CuMkCeLz2hLz3lr7T/RVW6j5T5Q1P7RFSfLjv/RlWzdHv/RVT8RFOdLTr/RVXhPk7AoqX/RVXW7uv/RVWST8JgwdL///+eLjsLEBfX4+P1+/r9T17hwcN/zdntQFCd2N/5Xmu1oNfa2dj1b3qjdszrmaDK4eJASk7Az9bwhI0mLjSjtrbezs/AxMTyeYMXHSOFlZapTVfopKlaZmlwf4Hm9fPtj5ZqxdS65OWXWsXCqq2tjdKWqKjOmGfpAAAAHXRSTlMA/sDr+yEQwPf4meiCR/vB/knm4oD4oGRlzM/JkOoPqqwAAANlSURBVEjHpZdpe6IwFIXdi2tdWmc6Mwk2UHBFEXfr0v3//6O5WVCDSeGZyTceX3IO517DJZVKpUqZaip+9QySycdSGBcNUirEUG2Mc1li/IzBah7GvTJh9hoPbc2uN6jmMFmwV+7h3J2GQvYEZIGrEFJsPugohEZrkM0SQtL4Vk8h5A6ASxPS01I+43bUHiHZvIbqdhlnv1B7xKhoqM5rn2038pi9VlVNdTqvb2d75euiCarT6XJu4qiKdqKAY5g9UxTtgup0uL0lL9qlPYmS7F32lEyJ3aBo1F6r9D0FqYC9ciWOorLPv+MpeIybJBT6X2o5wJ4bS0FDYry2YyjM1uCKusT6yOHYyxWF3roRRVijCDUBs/3XkHIFNYtQHl6PQq5PL9lyIhR0gDOxkd/l1FI4u/IFHTCoMXs0VYFFqOmWdQDNss/6C4K99jW15gvkgp2ZfarzpBZNIpha1jRANWoPaes4Qou5Ze19eqoMXB3lzUZou7E2W3aqeEs1taZB+HuL2QPjL7aKsnkQK2HPwc5OQS14EEv0BfYOPj1VhD0pCaEEQRw21nzLThUvWu39SWmCqL0pv2kXqdCCK/EgFmBvH0DRPJnaSUHAxdzarJBdi+QllE5B+IfN4so9nKigtOJKOxZEEFz3vYgcgthIQUT6SwThn4Og3StTn3R7HnlAg1ixm6B7JWpsjn1+kIdB+LR7vShlmp82CiOnqRzgeFVQ5vtQ2IP2OEAqX8hWUKY5Dvh7xjl1r4oyub0Z/fPQok01lGkOqT2e1VZPmUPtv0Omjomox8djIurx6ZiEAi4RJWRjKcYloJ7+hQrek1DIHiahYPAYf0tljDqPRsiqKRgynj84N3zXUmwGel7xl/WnnmJDRp0fbMFYT7EZSNizlVT+lnFnWfSkSiL1I8e4Yprc814+aveS7R1lqvCHyZWLnIMZ6OMsG1JMDOYjYpQU9kIq22Q6pARTT6MZtRdSGUIZMZUX7nI8FcOoh68F9w6GtWqLXE5j+TZP71w0Fzcb8ENFnuwaEXtuUTlxntIzyD3IrghRUmBPpEeLtiIV3eh/UbS69jOi0A6L0Uvf6yCWR6/I8i6X1AzLFhqJkF/4ci6UVrXJn4/OoGBPR5E0jLPhPNvQfNvkM6ClDlLerRX7caRcfwE86R2Dkm9+agAAAABJRU5ErkJggg==",
                "e": 1
            }, {
                "id": "image_2",
                "w": 31,
                "h": 64,
                "u": "",
                "p": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAABACAMAAADVqFwpAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAABMlBMVEVHcEzvgYL/RVXc4cv/RVX6TVzb4cvb3sn3a3PV1cjtmZX/RlbGeIbZY3PwPU3c1sPgQE3c4cv/RFT+R1f9SFf/RVTT18bc4czg0L7c4szjbnn/RFT/RVXClY7b38u/houeLjvQ0L+fLzzmuazHlpzVg4meLjqeLjrhybnc4cq0bm7Rw7L/RVXTxbnb4szyT1/7S1ydLjydLjvd4cvtlZHz8/P/RVVgwdKeLjvc4cv4+Phtusr+mqNqxNT9/f3+V2X76eqMnK38r7X80tbl7u+y3eX2Tl3OuKzjjozSPUvqQlGEy9jnVmashpfR6On79PS7f37/dICAqrr8ZXD/gIunRU6uW1+d1eD9vcN0qLmsMT7Yv7CVucGsn6uSSVeWaXjNbHz/i5XCv7SJcYDepJyCjZ1Skz58AAAANXRSTlMA+Fe5wOGA9P4Q5oD9/RD1IOBA87GgMJDrU85wMOxAQusgReJ7pJjI5KD26JCE0MSIgHBwushljgYAAAKoSURBVDjLfZVnQxpBEIYPATmRIkFBUFHRaExvN3dLb9KUElus6fn/fyGz5cruHZmvz+7Ud3Y1TbFc8b222FaeZwHWFuLDKKCtL6C7ReD2LIjuF7MMNmsQCQoc5Xc7M6MG28GBAa5ahmF0YUMNzF1fdg1mSglvdOG6wrFxBatevrzJeUtg4xaiUm6xEL9vc2PwtCQ5SDP+RfjvfTXN9SAHM4ZP66ZpJlIBDm6RTik1zfZSgIOfld6Zya0qD4GVoKdPTceSUoB9osNoXnWxmZACaOEDGFsuvzhXelwgfbj/awf/gdGy8gwyIRh9Z7Q+6bNq5CHmNzEAq+yc9arT3JJ1SZpwf2deJJlGbitGTVFJJo4BEsxzjTayA5oawKMRqpJtXwBqXTGlFmz5KvCqoKWq7OSA33dEkJB5IcaTE3hanSgSJ7rL6SDbyp68jdsqogrCISgJ5l9Qrle4gtBeKwkQxMPY1NaI+U7ZQHIJ81+PHo1o/hb/djWQhJSmimT0zdZAwr/oqMKx4FwDssa0Eibo0QDIa8g7hBqoJjltglKghmswak/sMc98D0k4LjSATwG2UV5jp4PoudOgQ6gpErL3sDbjGvFxWgBOqCFG3FGfyhx2GL3bfPqoNKjMJcB571RRwNqRlR46nA656m3ghz3LGthcDNltYBkp8j+IQw2uHw9fO7aYzR+gPyC2fmyeOrIsh4+vnWegPmH8457lcCK2mNpjn34F5WPLtRuXn9EpRrTdnWuZcwXU+SZHtDAhO16uM/7EnxDOSeylc4DyO1s+lGulDJ54deNycCjwFf4UwxMiDaK7EKKivSt5GoSlQYYuXnXln6NppDGNB4evy7MvsDSuB4JH/X/gMk0jxhSa3Qr8fE/wAOUbqQU/bCmMPLL9nw+88FneuX92eu4FQ16OcQAAAABJRU5ErkJggg==",
                "e": 1
            }, {
                "id": "image_3",
                "w": 27,
                "h": 19,
                "u": "",
                "p": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAATCAMAAABWWYYKAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAWlBMVEVHcEz/roD/roD/RVX/RFT2QVD3RlT/RVX/RVT/r4D/a2T95Nv/j3P/ooL/RFT/QFD/rYD/roD/r4D/roD/RVX/ZG2ZHyT/RVX/roD/////zLD/c3//W2mlNTeNhFLMAAAAF3RSTlMAvPCFRGHywKcQMPkgPnAQeJBY2NDKwC8HRD0AAAB/SURBVCjPdc/XDoAgDEDRMhQR3ANc//+bikZF096Ep5MCBdAA50EquAVW49b6Ttcdbpp7znyBY+OPGDHIAlqgJw1xK7R8ntYhxzE30+KckihuxoVUgtiYuqtUXZWvJbc9ZdFk+df4a5X4mvg8ajPq0pBUtB36zGLrVFL0xKZRO9gKDKB5N2ICAAAAAElFTkSuQmCC",
                "e": 1
            }, {
                "id": "image_4",
                "w": 25,
                "h": 34,
                "u": "",
                "p": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAiCAMAAACdioI/AAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAflBMVEVHcEzaOUn/RVT/roCfIED/RVX/RVXKKTXUWVOnLTv/r4D/r4DAKzb/roD/RVX/RFSfMDz/roD/r4CdLjv/RVW2MD3TLjrFKjawLzr/Rlb/6Nz/roCzKzj/RFT/jIrtyMH/RVX/roDvO0rYLjv8Q1PgM0D4UF3/cHv/rbT///8VS+LoAAAAIHRSTlMAEKCWCNhd6yFxYEPB8MBAQOAQbfBi5NRRgP7ApHDY/IJnV5QAAADVSURBVCjPfZHXFoIwEESjtEiRotLR3QCW//9BgcABycZ5nJvZbGGMkMd0Qs/VkcpIVDdxGcc4MIg/kLuISJUL4nggRIYZiJqMN4KA7KzSFGOH+xBJKHJ8lUguwYbnpyRrWQDvB1kLBj1zFYQjgJarxBqB8FVQyMhNAXwCXXZQyHkivRIJJRD+LmJLH7o0+vUtmJWetnOvfpeezLWh43XxQWyBvfognA1glg7IFVKANcvfffYL5u2CaP3c3I0ufaeO1MV3fev4F05d0akvEXXfpqDe/9MXWjYagBJitrMAAAAASUVORK5CYII=",
                "e": 1
            }, {
                "id": "image_5",
                "w": 1162,
                "h": 311,
                "u": "",
                "p": "data:image/png;base64,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",
                "e": 1
            }, {
                "id": "image_6",
                "w": 43,
                "h": 98,
                "u": "",
                "p": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAABiCAMAAAD+1NpWAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAq1BMVEVHcEza7uzg7+wyL1ouKFYtKFYwK1QtKFYsKFjC1tktKFbZ8OwsKVfp8fDV7evW7ustKFYrK1Xo8fDh8e4tKFbm8fC8z9SQm63w8vLW7uvR5+bW7uvy8vLx8fGpusR7g5t3dZLy8vJxeJORna6KlKgtKFbW7uvM4+I3NF+svMZXWXtCQGiBi6Bwd5Gap7ZhZYS2yc/d09Pv8vKMl6pMTHH0c33smJ/hw8T+S1uGUcmtAAAAJXRSTlMA7xhQgNgWvkD/ZjuQ84DAoDDIZvBJ6eGd4J2w4IDi536woNiSSZh6ogAAA8VJREFUWMOVlml/2jAMxkM4wtVxlfXa1l22kxAgGSXw/T/Z5DOSc0D1oj8ITyz570dyg8DG83oT3Bu892+9vU8acg7q5/Ae7YzLeHj4fod6o7Sw9LfbhXzh3KrXsxvaN+7ED7fKXnBeVOqH713aHufnslq7s2wQnM95htTrsAuZSNjucLts0BbXC89iluao7E0LXtAecrFnbC9QIdtmvIVIQZekLMZl/wobkJUll7oTP+xo2f6xg/Z85QelS4Qse4L4bXxk/CKcbkLL7v30tNdCZEzqjsyUfbLi3dTDey0Tq/tQZceQRmvZ2NMWl4xlSnfQOp0GfpmwUc2RudV9KN2eQ5oUnn9lTe49Wd0RypGUE/nnx9BDpkOeG+hSBuW4A3mKsHYNR3HRP2hdspPlmNjPa44UBn+izk2Vox+kA6/hizKJbV7QpYmykXp916fIRCkmlQ+0DsqJa3i3cMDXUij7mry5tBuUrZD5eMtinxL7KhvxGt5XWLfgEr/IkX0z7QiKTLr3yo3NkX2FaMR7OXOrE6TrOD8OfPcCGmvfnNq3hldmRDbH9o3HtXkqzxfZ3GGgeGXDm2GGbA5pjoq078jL1U4+ZPOJWjep4T0XRwvK2NduL4vq83TnfCV1qpuSuvZFOtLYvCobukl9SyMPb3nO96QdKvsSrcabaF+5dlBpFLJhHa9rB2tLSFPTbrjzFWkHeF05kjVdV6YdtM3tM9Cumq4r2w54qj4N8RkvOA6tq7rpPWIDcl2RULZ03ZQu2dx3Lwqtg3Lkyh9TFtUdicJ000Q58vGxU8td1wk2ilgDMlpIFse64ecViG2vWcwnJz1PB6y6AvoH3h7Q8GMErc9+L1q178tghUAMWD/YvLRoZcMjrao9bNminKfDCkSk52D41qSV60TVoHSvzdZ1FlI2qKAhM78LT6vm6dRBG6HSl/Er1arrqoKG8QGScOHhxav1CWr4PEP89HXlqkSVQ46lskiPzlPnniXuEZMtfEV4pXZl8aI+HVqvzhZonrrUQ6xF2Lcv7gpyW2J4BiGvBuEfYbRmGwRvQLwaRLu/K7Iexut9exx625jilWiW6rPZ/4BcHdgcK1NltY0lHlcIGqnHbIPghcX6Tfs0r6FJ4QWqzmyDICOBzkVvY9WlRdtgNbxBCxKdg+Kl2sir3cNLjhDNXbVkRP7xCdqOW73o4SXI+t7ZT+dt2jmpjtxynXi78tf6xbdNB16vej9ov5Ap0o0XXl2O2rWdC7U78mbMP6HtBtqFtzvae+AW3s4YfwLZaHg/hob4D147DUoND7RiAAAAAElFTkSuQmCC",
                "e": 1
            }, {
                "id": "image_7",
                "w": 1601,
                "h": 421,
                "u": "",
                "p": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABkEAAAGlAgMAAAAwjrm1AAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAACVBMVEUgz68a1aka1KjsJBdDAAAAAnRSTlMQkbtZfLsAAAI1SURBVHja7dExAQAwDAOgmJyJSqvKmeiRAyyQR5VkliZGjGDECEaMYMQIRjBiBCNGMGIEI0YwghEjGDGCESMYMYIRjBjBiBGMGMGIEYxgxAhGjGDECEYwYgQjRjBiBCNGMIIRIxgxghEjGDGCEYwYwYgRjBjBiBGMYMQIRoxgxAhGjGAEI0YwYgQjRjCCESMYMYIRIxgxghGMGMGIEYwYwYgRjGDECEaMYMQIRoxgBCNGMGIEI0YwYgQjGDGCESMYMYIRjBjBiBGMGMGIEYxgxAhGjGDECEaMYAQjRjBiBCNGMGIEIxgxghEjGDGCESMYwYgRjBjBiBGMYMQIRoxgxAhGjGAEI0YwYgQjRjBiBCMYMYIRIxgxghEjGMGIEYwYwYgRjBjBCEaMYMQIRoxgBCNGMGIEI0YwYgQjGDGCESMYMYIRIxjBiBGMGMGIEYwYwQhGjGDECEaMYMQIRjBiBCNGMGIEIxgxghEjGDGCESMYwYgRjBjBiBGMGMEIRoxgxAhGjGDECEYwYgQjRjBiBCNGMIIRIxgxghEjGMGIEYwYwYgRjBjBCEaMYMQIRoxgxAhGMGIEI0YwYgQjRjCCESMYMYIRIxgxghGMGMGIEYwYwQhGjGDECEaMYMQIRjBiBCNGMGIEI0YwghEjGDGCESMYMYIRjBjBiBGMGMGIEYxgxAhGjGDECEYwYgQjRjBiBCNGMIIRIxgxghEjGDGCEYwYwYgRjBjBiBGMYMQIRoxwPUKZD/Kg9l+f15a2AAAAAElFTkSuQmCC",
                "e": 1
            }],
            "layers": [{
                "ddd": 0,
                "ind": 1,
                "ty": 2,
                "nm": "Layer 8",
                "refId": "image_0",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 0,
                            "s": [5]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 60,
                            "s": [-12]
                        }, {
                            "t": 120.0000048877,
                            "s": [5]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 0,
                        "k": [934.072, 307.311, 0],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [23.814, 21.974, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [100, 100, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "ip": 0,
                "op": 899.000036617021,
                "st": 0,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 2,
                "ty": 2,
                "nm": "Layer 3",
                "refId": "image_1",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 0,
                        "k": 0,
                        "ix": 10
                    },
                    "p": {
                        "a": 0,
                        "k": [1151.712, 377.348, 0],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [19.322, 94.547, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833, 0.833, 0.833],
                                "y": [0.833, 0.833, 0.833]
                            },
                            "o": {
                                "x": [0.167, 0.167, 0.167],
                                "y": [0.167, 0.167, 0.167]
                            },
                            "t": 0,
                            "s": [0, 0, 100]
                        }, {
                            "t": 120.0000048877,
                            "s": [100, 100, 100]
                        }],
                        "ix": 6
                    }
                },
                "ao": 0,
                "ip": 0,
                "op": 899.000036617021,
                "st": 0,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 3,
                "ty": 2,
                "nm": "Layer 4",
                "refId": "image_2",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 0,
                        "k": 0,
                        "ix": 10
                    },
                    "p": {
                        "a": 0,
                        "k": [819.205, 267.977, 0],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [16.455, 63.49, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833, 0.833, 0.833],
                                "y": [0.833, 0.833, 0.833]
                            },
                            "o": {
                                "x": [0.167, 0.167, 0.167],
                                "y": [0.167, 0.167, 0.167]
                            },
                            "t": 0,
                            "s": [0, 0, 100]
                        }, {
                            "t": 120.0000048877,
                            "s": [100, 100, 100]
                        }],
                        "ix": 6
                    }
                },
                "ao": 0,
                "ip": 0,
                "op": 899.000036617021,
                "st": 0,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 4,
                "ty": 2,
                "nm": "Layer 6",
                "refId": "image_3",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 0,
                            "s": [-8]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 60,
                            "s": [28]
                        }, {
                            "t": 120.0000048877,
                            "s": [-8]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 0,
                        "k": [538.115, 300.422, 0],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [25.141, 14.308, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [100, 100, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "ip": 0,
                "op": 899.000036617021,
                "st": 0,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 5,
                "ty": 2,
                "nm": "Layer 7",
                "refId": "image_4",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 0,
                            "s": [0]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 60,
                            "s": [-25]
                        }, {
                            "t": 120.0000048877,
                            "s": [0]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 0,
                        "k": [551.718, 293.689, 0],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [2.8, 29.015, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [100, 100, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "ip": 0,
                "op": 899.000036617021,
                "st": 0,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 6,
                "ty": 2,
                "nm": "Layer 1",
                "refId": "image_5",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 0,
                        "k": 0,
                        "ix": 10
                    },
                    "p": {
                        "a": 0,
                        "k": [1016.172, 263.176, 0],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [580.656, 155.009, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [100, 100, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "ip": 0,
                "op": 899.000036617021,
                "st": 0,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 7,
                "ty": 2,
                "nm": "Layer 5",
                "refId": "image_6",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 0,
                        "k": 0,
                        "ix": 10
                    },
                    "p": {
                        "a": 0,
                        "k": [790.245, 407.203, 0],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [21.341, 99.059, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833, 0.833, 0.833],
                                "y": [0.833, 0.833, 0.833]
                            },
                            "o": {
                                "x": [0.167, 0.167, 0.167],
                                "y": [0.167, 0.167, 0.167]
                            },
                            "t": 0,
                            "s": [0, 0, 100]
                        }, {
                            "t": 120.0000048877,
                            "s": [100, 100, 100]
                        }],
                        "ix": 6
                    }
                },
                "ao": 0,
                "ip": 0,
                "op": 899.000036617021,
                "st": 0,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 8,
                "ty": 2,
                "nm": "Layer 2",
                "refId": "image_7",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 0,
                        "k": 0,
                        "ix": 10
                    },
                    "p": {
                        "a": 0,
                        "k": [800, 210, 0],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [800.25, 210.25, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [100, 100, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "ip": 0,
                "op": 899.000036617021,
                "st": 0,
                "bm": 0
            }],
            "markers": []
        }
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