<!doctype html>
<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$id = '';
$id = $_GET['id'];
$PAGES = new Pages($id);
?>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Create Page Page Newss | <?php echo $PAGES->title ?> | Youth Service LTD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="plugin/MCDatepicker-master/dist/mc-calendar.min.css" rel="stylesheet" type="text/css" />
    <script src="plugin/MCDatepicker-master/dist/mc-calendar.min.js" type="text/javascript"></script>
    <link href="assets/css/preloader.css" rel="stylesheet" type="text/css" />
    <style>
        .mc-calendar {
            z-index: 1600 !important;
        }

        .mc-display__day,
        .mc-display__date,
        .mc-display__month,
        .mc-display__year {
            color: hsla(0, 0%, 100%, .8) !important;
        }
    </style>
</head>


<body class="someBlock">
    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include './top-header.php'; ?>
        <!-- ========== Left Sidebar Start ========== -->
        <?php include './navigation.php'; ?>


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Create Page News for <?php echo $PAGES->title ?></h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active">Create New Page News</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Create Page News</h4>
                                    <form id="form-data">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="title" name="title" placeholder="Enter News Title">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" id="image_name" name="image_name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Date</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="date" name="date" placeholder="Enter News Date">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Short Description</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="short_description" name="short_description" placeholder="Short Description">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Description</label>
                                            <div class="col-md-10">
                                                <textarea id="description" name="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                                <button class="btn btn-primary " type="submit" id="create">Create</button>
                                                <input type="hidden" name="page_id" value="<?php echo $id ?>">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Manage Page News</h4>
                                    <div class="row mt-3">
                                        <?php
                                        $PAGE_NEWS = new PageNews(NULL);
                                        foreach ($PAGE_NEWS->getPageNewsById($id) as $page_news) {
                                        ?>
                                            <div class="col-md-6 col-xl-3" id="div<?php echo $page_news['id'] ?>">
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="../upload/page/news/<?php echo $page_news['image_name'] ?>" alt="<?php echo $page_news['title'] ?>">
                                                    <div class="card-body">
                                                        <h4 class="card-title mb-3"><?php echo $page_news['title'] ?></h4>
                                                        <p><?php echo $page_news['short_description'] ?></p>
                                                        <div class="badge bg-pill bg-soft-success font-size-14" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg-<?php echo $page_news['id']; ?>"><i class="fas fa-pencil-alt p-1"></i></div> |
                                                        <a href="create-page-news-photo.php?id=<?php echo $page_news['id'] ?>" class="badge bg-pill bg-soft-warning font-size-14"><i class="fas fa-image   p-1"></i></a> |

                                                        <!-- <a href="arrange-page-character.php?id=<?php echo $PAGE_NEWS->id ?>" class="badge bg-pill bg-soft-primary font-size-14"><i class="fas fa-exchange-alt  p-1"></i></a> | -->
                                                        <div class="badge bg-pill bg-soft-danger font-size-14 delete-data" data-id="<?php echo $page_news['id']; ?>"><i class="fas fa-trash-alt p-1"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include './footer.php'; ?>
        </div>
    </div>
    <!-- END layout-wrapper -->



    <?php
    foreach ($PAGE_NEWS->getPageNewsById($id) as $page_news) {
    ?>
        <!--  Large modal example -->
        <div class="modal fade bs-example-modal-lg-<?php echo $page_news['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myLargeModalLabel">Edit Details : <?php echo $page_news['title']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="form-data-<?php echo $page_news['id']; ?>" class="from">
                            <div class="card-body">

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                    <div class="col-md-10">
                                        <input class="form-control title" type="text" name="title" placeholder="Name" value="<?php echo $page_news['title'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Short Description</label>
                                    <div class="col-md-10">
                                        <input class="form-control short_description" type="text" name="short_description" placeholder="Short Description" value="<?php echo $page_news['short_description'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Description</label>
                                    <div class="col-md-10">
                                        <textarea class="description" name="description"><?php echo $page_news['description'] ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                    <div class="col-md-10">
                                        <input class="form-control image_name" type="file" name="image_name" value="<?php echo $page_news['image_name']; ?>">
                                        <img width="200" class="img-responsive" src="../upload/page/news/<?php echo $page_news['image_name']; ?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Date</label>
                                    <div class="col-md-10">
                                        <input class="form-control date" id="date_edit_<?php echo $page_news['id']; ?>" type="text" name="date" value="<?php echo $page_news['date'] ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                        <button class="btn btn-primary edit-data" dataId="<?php echo $page_news['id']; ?>" type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <script>
            MCDatepicker.create({
                    el: '#date_edit_<?php echo $page_news['id']; ?>',
                    selectedDate: new Date('<?php echo $page_news['date'] ?>'),
                    customClearBTN: '',
                    // autoClose: true,
                    // closeOnBlur: false,
                    dateFormat: 'yyyy-mm-dd',
                }

            )
        </script>
    <?php } ?>
    <script>
        MCDatepicker.create({
            el: '#date',
            selectedDate: new Date(),
            customClearBTN: '',
            // autoClose: true,
            // closeOnBlur: false,
            dateFormat: 'yyyy-mm-dd',
        })
    </script>
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
    <script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>

    <!-- js -->
    <script src="ajax/js/page-news.js" type="text/javascript"></script>


    <script>
        tinymce.init({
            selector: "#description",
            // ===========================================
            // INCLUDE THE PLUGIN
            // ===========================================

            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            // ===========================================
            // PUT PLUGIN'S BUTTON on the toolbar
            // ===========================================

            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
            // ===========================================
            // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
            // ===========================================

            relative_urls: false

        });

        tinymce.init({
            selector: ".description",
            // ===========================================
            // INCLUDE THE PLUGIN
            // ===========================================

            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            // ===========================================
            // PUT PLUGIN'S BUTTON on the toolbar
            // ===========================================

            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
            // ===========================================
            // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
            // ===========================================

            relative_urls: false

        });
    </script>
</body>

</html>