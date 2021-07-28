<!doctype html>
<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$id = '';
$id = $_GET['id'];
$EVENT = new Event($id);
?>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Create Event Photo | <?php echo $EVENT->title ?> | Youth Service LTD</title>
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
    <link href="assets/css/preloader.css" rel="stylesheet" type="text/css" />
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
                                <h4 class="mb-0">Create Event Photo</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active">Create Event Photo</li>
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
                                    <h4 class="card-title">Create Event Photo - " <?php echo $EVENT->title ?> "</h4>
                                    <form id="form-data">
                                        <div class="mb-3 row">
                                            <label for="caption" class="col-md-2 col-form-label">Caption</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="caption" name="caption" placeholder="Enter caption">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="image_name" class="col-md-2 col-form-label">Image</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" id="image_name" name="image_name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                                <button class="btn btn-primary " type="submit" id="create">Create</button>
                                                <input type="hidden" name="event" value="<?php echo $id ?>">
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
                                    <h4 class="card-title">Manage Photo Event</h4>
                                    <div class="row mt-3">
                                        <?php
                                        $EVENT_PHOTO = new EventPhoto(NULL);
                                        foreach ($EVENT_PHOTO->getEventPhotosById($id) as $event_photo) {
                                        ?>
                                            <div class="col-md-6 col-xl-3" id="div<?php echo $event_photo['id'] ?>">
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="../upload/event/gallery/thumb/<?php echo $event_photo['image_name'] ?>" alt="<?php echo $event_photo['caption'] ?>">
                                                    <div class="card-body">
                                                        <h4 class="card-title mb-3"><?php echo $event_photo['caption'] ?></h4>
                                                        <div class="badge bg-pill bg-soft-success font-size-14" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg-<?php echo $event_photo['id']; ?>"><i class="fas fa-pencil-alt p-1"></i></div> |

                                                        <a href="create-Event-photo" class="badge bg-pill bg-soft-primary font-size-14"><i class="fas fa-exchange-alt  p-1"></i></a> |
                                                        <div class="badge bg-pill bg-soft-danger font-size-14 delete-data" data-id="<?php echo $event_photo['id']; ?>"><i class="fas fa-trash-alt p-1"></i></div>
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
    foreach ($EVENT_PHOTO->all()  as $event_photo) {

    ?>
        <!--  Large modal example -->
        <div class="modal fade bs-example-modal-lg-<?php echo $event_photo['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myLargeModalLabel">Edit Details : <?php echo $event_photo['caption']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="form-data-<?php echo $event_photo['id']; ?>" class="from">
                            <div class="card-body">

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Caption</label>
                                    <div class="col-md-10">
                                        <input class="form-control caption" type="text" name="caption" placeholder="Enter Caption" value="<?php echo $event_photo['caption'] ?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                    <div class="col-md-10">
                                        <input class="form-control image_name" type="file" name="image_name" value="<?php echo $event_photo['image_name']; ?>">
                                        <img width="200" class="img-responsive" src="../upload/event/gallery/thumb/<?php echo $event_photo['image_name']; ?>">
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                        <button class="btn btn-primary edit-data" dataId="<?php echo $event_photo['id']; ?>" type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    <?php } ?>
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

    <!-- js -->
    <script src="ajax/js/event-photo.js" type="text/javascript"></script>



</body>

</html>