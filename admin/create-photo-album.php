<!doctype html>
<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Create Photo Album | </title>
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
                                    <h4 class="mb-0">Create Photo Album</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item active">Create Photo Album</li>
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

                                        <h4 class="card-title">Create Phot Album</h4> 
                                        <form id="form-data">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="title" name="title" placeholder="Enter title">
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
                                            <?php
                                            $PHOTO_ALBUM = new PhotoAlbum(NULL);
                                            foreach ($PHOTO_ALBUM->all() as $photo_album) {
                                                ?>
                                                <div class="col-md-6 col-xl-3"> 
                                                    <!-- Simple card -->
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="../upload/photo-album/<?php echo $photo_album['image_name'] ?>" alt="<?php echo $photo_album['title'] ?>">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-3"><?php echo $photo_album['title'] ?></h4> 
                                                            <a href="" ><div class="badge bg-pill bg-soft-success font-size-14"><i class="fas fa-pencil-alt p-1"></i></div> </a>| 
                                                            <a href="create-album-photo" class="badge bg-pill bg-soft-primary font-size-14"><i class="fas fa-exchange-alt  p-1"></i></a> |
                                                            <a href="create-album-photo.php?id=<?php echo $photo_album['id'] ?>" class="badge bg-pill bg-soft-warning font-size-14"><i class="fas fa-image   p-1"></i></a> |

                                                            <div class="badge bg-pill bg-soft-danger font-size-14"><i class="fas fa-trash-alt p-1"></i></div>
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
                <!-- End Page-content -->


                <?php include './footer.php'; ?>
            </div>  
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
        <script src="ajax/js/photo-album.js" type="text/javascript"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>



    </body>
</html>
