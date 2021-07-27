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
        <title>Create Album Photo | <?php echo $PHOTO_ALBUM->title ?> | Youth Service LTD</title>
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
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
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
                                        <h4 class="card-title">Create Album Photo  - " <?php echo $PHOTO_ALBUM->title ?> "</h4> 
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
                                                    <input type="hidden" name="album" value="<?php echo $id ?>">
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
                                        <h4 class="card-title">Manage Photo Album</h4>  
                                        <div class="row mt-3"> 
                                            <?php
                                            $ALBUM_PHOTO = new AlbumPhoto(NULL);
                                            foreach ($ALBUM_PHOTO->getAlbumPhotosById($id) as $album_photo) {
                                                ?>
                                                <div class="col-md-6 col-xl-3" id="div<?php echo $album_photo['id'] ?>">  
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="../upload/photo-album/gallery/thumb/<?php echo $album_photo['image_name'] ?>" alt="<?php echo $album_photo['caption'] ?>">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-3"><?php echo $album_photo['caption'] ?></h4> 
                                                            <a href=""><div class="badge bg-pill bg-soft-success font-size-14"><i class="fas fa-pencil-alt p-1"></i></div> </a>| 
                                                            <a href="create-album-photo" class="badge bg-pill bg-soft-primary font-size-14"><i class="fas fa-exchange-alt  p-1"></i></a> |
                                                            <div class="badge bg-pill bg-soft-danger font-size-14 delete-data" data-id="<?php echo $album_photo['id']; ?>"><i class="fas fa-trash-alt p-1"></i></div>
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
        <script src="ajax/js/album-photo.js" type="text/javascript"></script>



    </body>
</html>
