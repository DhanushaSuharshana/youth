<!doctype html>
<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Manage Leaders | Youth Service LTD</title>
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
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
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
                                    <h4 class="mb-0">Dashboard</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Leaders</a></li>
                                            <li class="breadcrumb-item active">Manage Leaders</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <form method="POST" id="form-data">
                                        <div class="card-body">
                                            <h4 class="card-title">Add Leaders Detail</h4> 
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="name" name="name" placeholder="Enter Leader Name">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Position</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text"  id="position" name="position" placeholder="Enter Leader Position">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text"  id="email" name="email" placeholder="Enter Leader Email">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="file"  id="image_name" name="image">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-url-input" class="col-md-2 col-form-label">Facebook URL</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="url"   id="facebook" name="facebook" placeholder="Enter Facebook URL">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-url-input" class="col-md-2 col-form-label">Instagram URL</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="url"  id="instagram" name="instagram" placeholder="Enter Instragram URL">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-url-input" class="col-md-2 col-form-label">Linkind URL</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="url" id="linkdin" name="linkdin" placeholder="Enter Linkind URL">
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                                    <button class="btn btn-primary " id="create" name="create" type="submit" >Create</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>  
                        </div> 

                        <div class="card">
                            <div class="row">
                                <div class="card-body">
                                    <h4 class="card-title">Manage Leaders.</h4>                                  
                                    <div class="mt-3 row">
                                        <?php
                                        $LEADERS = new Leaders(NULL);
                                        $ALL_LEADERS = $LEADERS->all();
                                        foreach ($ALL_LEADERS as $all_leaders) {
                                            ?>
                                            <div class="col-md-4 col-xl-3" id="div<?php echo $all_leaders['id'] ?>">  
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="../upload/leader/<?php echo $all_leaders['image_name']; ?>" alt="Leaders">
                                                    <div class="card-body">
                                                        <h4 class="card-title mb-3">  <?php echo $all_leaders['name']; ?>  </h4>
                                                        <div class="badge bg-pill bg-soft-success font-size-14" type="button"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg-<?php echo $all_leaders['id']; ?>"><i class="fas fa-pencil-alt p-1"></i></div> | 
                                                        <a href="arrange-leaders.php" class="badge bg-pill bg-soft-primary font-size-14"><i class="fas fa-exchange-alt  p-1"></i></a> |
                                                        <a href="#"><div class="badge bg-pill bg-soft-danger font-size-14 delete-data" data-id="<?php echo $all_leaders['id']; ?>"><i class="fas fa-trash-alt p-1"></i></div></a>
                                                    </div>
                                                </div> 
                                            </div>
                                            <?php
                                        }
                                        ?>
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
        foreach ($ALL_LEADERS as $key => $all_leaders) {
            $key++;
            ?>
            <!--  Large modal example -->
            <div class="modal fade bs-example-modal-lg-<?php echo $all_leaders['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">Edit Details : <?php echo $all_leaders['name']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" id="form-data-<?php echo $all_leaders['id']; ?>">
                                <div class="card-body">
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control name" name="name" type="text" value="<?php echo $all_leaders['name']; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-2 col-form-label">Position</label>
                                        <div class="col-md-10">
                                            <input class="form-control position" name="position" type="text" value="<?php echo $all_leaders['position']; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-2 col-form-label">Email</label>
                                        <div class="col-md-10">
                                            <input class="form-control email" name="email" type="text" value="<?php echo $all_leaders['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="file" id="image_name" name="image_name">
                                            <img width="200" class="img-responsive" src="../upload/leader/<?php echo $all_leaders['image_name']; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-url-input" class="col-md-2 col-form-label">Facebook URL</label>
                                        <div class="col-md-10">
                                            <input class="form-control facebook"  name="facebook" type="text" value="<?php echo $all_leaders['facebook']; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-url-input" class="col-md-2 col-form-label">Instagram URL</label>
                                        <div class="col-md-10">
                                            <input class="form-control instagram" name="instagram" type="text" value="<?php echo $all_leaders['instagram']; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-url-input" class="col-md-2 col-form-label">Linkind URL</label>
                                        <div class="col-md-10">
                                            <input class="form-control linkdin" name="linkdin" type="text" value="<?php echo $all_leaders['linkdin']; ?>">
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                            <input class="form-control id" type="hidden" value="<?php echo $all_leaders['id']; ?>">
                                            <button class="btn btn-primary edit-data" data-id="<?php echo $all_leaders['id']; ?>" id="update" name="update" type="submit">Save Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
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
        <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="assets/js/app.js"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/leaders.js" type="text/javascript"></script>
    </body>
</html>
