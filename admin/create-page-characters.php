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
        <title>Create Page Characters | <?php echo $PAGES->title ?> | Youth Service LTD</title>
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
                                    <h4 class="mb-0">Create Characters for  <?php echo $PAGES->title ?></h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item active">Create New Character</li>
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
                                        <h4 class="card-title">Create Character</h4>
                                        <form id="form-data">
                                            <div class="mb-3 row">
                                                <label for="name" class="col-md-2 col-form-label">Name</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="name" name="name" placeholder="Enter Name">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="designation" class="col-md-2 col-form-label">Designation</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="designation" name="designation" placeholder="Enter Designation">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="image_name" class="col-md-2 col-form-label">Image</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="file" id="image_name" name="image_name">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="Contact" class="col-md-2 col-form-label">Contact</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="contact_no" name="contact_no" placeholder="Enter contact">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="designation" class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="email" name="email" placeholder="Enter Email">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="facebook" class="col-md-2 col-form-label">Facebook</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="facebook" name="facebook" placeholder="Enter Facebook">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                                    <button class="btn btn-primary " type="submit" id="create">Create</button>
                                                    <input type="hidden" name="page" value="<?php echo $id ?>">
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
                                        <h4 class="card-title">Manage Characters</h4>
                                        <div class="row mt-3">
                                            <?php
                                            $PAGES_CHARACTERS = new PageCharacter(NULL);
                                            foreach ($PAGES_CHARACTERS->getPageCharactersById($id) as $pages_characters) {
                                                ?>
                                                <div class="col-md-6 col-xl-3" id="div<?php echo $pages_characters['id'] ?>">
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="../upload/page/character/<?php echo $pages_characters['image_name'] ?>" alt="<?php echo $pages_characters['name'] ?>">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-3"><?php echo $pages_characters['name'] ?></h4>
                                                            <p><?php echo $pages_characters['designation'] ?></p>
                                                            <div class="badge bg-pill bg-soft-success font-size-14" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg-<?php echo $pages_characters['id']; ?>"><i class="fas fa-pencil-alt p-1"></i></div> |

                                                            <a href="arrange-page-character.php?id=<?php echo $PAGES->id ?>" class="badge bg-pill bg-soft-primary font-size-14"><i class="fas fa-exchange-alt  p-1"></i></a> |
                                                            <div class="badge bg-pill bg-soft-danger font-size-14 delete-data" data-id="<?php echo $pages_characters['id']; ?>"><i class="fas fa-trash-alt p-1"></i></div>
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
        foreach ($PAGES_CHARACTERS->getPageCharactersById($id) as $pages_characters) {
            ?>
            <!--  Large modal example -->
            <div class="modal fade bs-example-modal-lg-<?php echo $pages_characters['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">Edit Details : <?php echo $pages_characters['designation']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" id="form-data-<?php echo $pages_characters['id']; ?>" class="from">
                                <div class="card-body">

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control name" type="text" name="name" placeholder="Name" value="<?php echo $pages_characters['name'] ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Designation</label>
                                        <div class="col-md-10">
                                            <input class="form-control designation" type="text" name="designation" placeholder="designation" value="<?php echo $pages_characters['designation'] ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                        <div class="col-md-10">
                                            <input class="form-control image_name" type="file" name="image_name" value="<?php echo $pages_characters['image_name']; ?>">
                                            <img width="200" class="img-responsive" src="../upload/page/character/<?php echo $pages_characters['image_name']; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Contact No</label>
                                        <div class="col-md-10">
                                            <input class="form-control contact_no" type="text" name="contact_no" placeholder="contact no" value="<?php echo $pages_characters['contact_no'] ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Email</label>
                                        <div class="col-md-10">
                                            <input class="form-control email" type="text" name="email" placeholder="Email" value="<?php echo $pages_characters['email'] ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Facebook</label>
                                        <div class="col-md-10">
                                            <input class="form-control facebook" type="text" name="facebook" placeholder="facebook" value="<?php echo $pages_characters['facebook'] ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                            <button class="btn btn-primary edit-data" dataId="<?php echo $pages_characters['id']; ?>" type="submit">Update</button>
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
        <script src="ajax/js/page-characters.js" type="text/javascript"></script>



    </body>

</html>