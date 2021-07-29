<!doctype html>
<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Create Testimonial | Youth Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link href="plugin/MCDatepicker-master/dist/mc-calendar.min.css" rel="stylesheet" type="text/css" />
    <script src="plugin/MCDatepicker-master/dist/mc-calendar.min.js" type="text/javascript"></script>

    <style>
        .mc-calendar {
            z-index: 1600 !important;
        }
        .mc-display__day, .mc-display__date, .mc-display__month, .mc-display__year{
            color: hsla(0,0%,100%,.8) !important;
        }
    </style>
</head>


<body class="someBlock">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include './top-header.php'; ?>
        <!-- ========== Left Sidebar Start ========== -->
        <?php include './navigation.php'; ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Manage Testimonial</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active">Manage Testimonial</li>
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

                                    <h4 class="card-title">Testimonial your News Post.</h4>
                                    <form id="form-data">

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="name" name="name" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="title" name="title" placeholder="Enter Comment Title">
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
                                                <input class="form-control" type="text" id="date" name="date" placeholder="Select Date">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Comment</label>
                                            <div class="col-md-10">
                                                <textarea class="comment" name="comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Active / Inactive</label>
                                            <div class="col-md-10 mt-2">
                                                <input class="form-check-input" type="checkbox" id="is_active" name="active" value="1">
                                                <label class="form-check-label text-danger" for="is_active">
                                                    Active / Inactive
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                                <button class="btn btn-primary " type="submit" id="create">Create</button>
                                                <input type="hidden" name="create">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <section>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Manage Testimonial.</h4>
                                <div class="mt-3 row">
                                    <?php
                                    $COMMENT = new Comments(NULL);
                                    foreach ($COMMENT->all() as $comment) {
                                    ?>
                                        <div class="col-md-6 col-xl-3">
                                            <!-- Simple card -->
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="../upload/comments/<?php echo $comment['image_name'] ?>" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-3"><?php echo $comment['name'] ?></h4>


                                                    <div class="badge bg-pill bg-soft-success font-size-14" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg-<?php echo $comment['id']; ?>"><i class="fas fa-pencil-alt p-1"></i></div> |
                                                    <div class="badge bg-pill bg-soft-primary font-size-14"><i class="fas fa-exchange-alt  p-1"></i></div> |
                                                    <a href="#" class="delete-comment badge bg-pill bg-soft-danger font-size-14" data-id="<?php echo $comment['id'] ?>">
                                                        <i class="fas fa-trash-alt p-1"></i>
                                                    </a>
                                                    |
                                                    <?php
                                                    if ($comment['is_active'] == 1) {
                                                    ?>
                                                        <span class="text-success "> Active</span>
                                                    <?php } else { ?>
                                                        <span class="text-danger">In Active</span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <?php include './footer.php'; ?>
        </div>
    </div>
    <!-- END layout-wrapper -->



    <?php
    foreach ($COMMENT->all() as $key => $comment) {
        $key++;
    ?>
        <!--  Large modal example -->
        <div class="modal fade bs-example-modal-lg-<?php echo $comment['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myLargeModalLabel">Edit Details : <?php echo $comment['name']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="form-data-<?php echo $comment['id']; ?>" class="from">
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control name" type="text"  name="name" placeholder="Enter Name" value="<?php echo $comment['name'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                    <div class="col-md-10">
                                        <input class="form-control title" type="text" name="title" placeholder="Enter Comment Title" value="<?php echo $comment['name'] ?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                    <div class="col-md-10">
                                        <input class="form-control image_name" type="file" name="image_name" value="<?php echo $comment['image_name']; ?>">
                                        <img width="200" class="img-responsive" src="../upload/comments/<?php echo $comment['image_name']; ?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Date</label>
                                    <div class="col-md-10">
                                        <input class="form-control date" id="date_edit_<?php echo $comment['id']; ?>" type="text" name="date" value="<?php echo $comment['date'] ?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Comment</label>
                                    <div class="col-md-10">
                                        <textarea class="comment comment_edit_<?php echo $comment['id']; ?>" name="comment"><?php echo $comment['comment']; ?></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Active / Inactive</label>
                                    <div class="col-md-10 mt-2">
                                        <input class="form-check-input" type="checkbox" id="is_active" name="active" value="1" <?= ($comment['is_active']) ? "checked='checked'" : ''; ?>>
                                        <label class="form-check-label text-danger" for="is_active">
                                            Active / Inactive
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                        <button class="btn btn-primary edit-data" dataId="<?php echo $comment['id']; ?>" type="submit">Update</button>
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
                    el: '#date_edit_<?php echo $comment['id']; ?>',
                    selectedDate: new Date('<?php echo $comment['date'] ?>'),
                    customClearBTN: '',
                    minDate: new Date(),
                    // autoClose: true,
                    // closeOnBlur: false,
                    dateFormat: 'yyyy-mm-dd',
                    
                }

            )
        </script>
    <?php
    }
    ?>


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


    <!-- App js -->
    <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js"></script>
    <script src="ajax/js/comment.js" type="text/javascript"></script>
    <script src="delete/js/comment.js" type="text/javascript"></script>

    <script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
          const start_date = MCDatepicker.create({
            el: '#date',
            selectedDate: new Date(),
            customClearBTN: '',
            // autoClose: true,
            dateFormat: 'yyyy-mm-dd',
            minDate: new Date(),
            // bodyType: 'inline',
        });
    </script>
    <script>
        tinymce.init({
            selector: ".comment",
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