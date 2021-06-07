<!doctype html>
<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$id = '';
$id = $_GET['id'];
$PHOTO_ALBUM = new PhotoAlbum($id);
?>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Create Album Photo | <?php echo $PHOTO_ALBUM->title ?> </title>
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
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>


    <body> 
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

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Create Album Photo</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item active">Create Album Photo</li>
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

                                        <h4 class="card-title">Create Album Photo  - " <?php echo $PHOTO_ALBUM->title?> "</h4> 
                                        <form id="form-data">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Caption</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="caption" name="caption" placeholder="Enter caption">
                                                </div>
                                            </div> 
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="file" id="image_name" name="image_name">
                                                </div>
                                            </div>     
                                            <div class="row">
                                                <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                                    <button class="btn btn-primary " type="submit" id="create">Create</button>
                                                    <input type="hidden" name="create">
                                                    <input type="hidden" name="album" value="<?php echo $id ?>">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>  

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body"> 
                                        <h4 class="card-title">Manage Photo Album</h4>  
                                        <div class="row mt-3"> 
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>   
                    </div>  
                </div>
                <!-- End Page-content -->


                <?php include './footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



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
        <script src="ajax/js/album-photo.js" type="text/javascript"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>



    </body>
</html>