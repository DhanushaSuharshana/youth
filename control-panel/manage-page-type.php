<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Page Type | Youth Service LTD </title>
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
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Dashboard</h4> 
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Page Type</li>
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
                                        <h4 class="card-title">Create Page Type.</h4>  
                                        <form id="form-data">
                                            <div class="mb-3 row">
                                                <label  class="col-md-2 col-form-label">Page Type Title</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="title" name="title" placeholder="Enter Page Type Title">
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
                            </div>  
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body"> 
                                        <h4 class="card-title">Manage Page Type</h4> 

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#id</th> 
                                                    <th>Page Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <?php
                                                $NEWS_TYPE = new PageType(NULL);
                                                foreach ($NEWS_TYPE->all() as $key => $news_type) {
                                                    $key++;
                                                    ?>
                                                    <tr id="div<?php echo $news_type['id'] ?>">
                                                        <td><?php echo $key ?></td>
                                                        <td> <?php echo $news_type['title'] ?></td> 
                                                        <td> 
                                                            <div class="badge bg-pill bg-soft-success font-size-14" type="button"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg-<?php echo $news_type['id']; ?>"><i class="fas fa-pencil-alt p-1"></i></div> | 
                                                            <!-- <a href="manage-courses.php?id=<?php echo $news_type['id'] ?>"><div class="badge bg-pill bg-soft-warning font-size-14"><i class="fas fa-address-card p-1"></i></div></a>   -->
                                                            <a href="#">
                                                                <div class="badge bg-pill bg-soft-danger font-size-14 delete-data" data-id="<?php echo $news_type['id']; ?>"><i class="fas fa-trash-alt p-1"></i></div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </div>  
                        </div> 
                    </div>  
                </div>  
                <?php include './footer.php'; ?>
            </div>  
        </div> 

        <?php
        foreach ($NEWS_TYPE->all() as $key => $news_type) {
            $key++;
            ?>
            <!--  Large modal example -->
            <div class="modal fade bs-example-modal-lg-<?php echo $news_type['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">Edit Details : <?php echo $news_type['title']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">    </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" id="form-data-<?php echo $news_type['id']; ?>">
                                <div class="card-body">   
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Page Type</label>
                                        <div class="col-md-10">
                                            <input class="form-control title" type="text"    name="title" placeholder="Enter Page Title" value="<?php echo $news_type['title'] ?>">
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                            <input class="form-control id" type="hidden" value="<?php echo $news_type['id']; ?>">
                                            <button class="btn btn-primary edit-data" dataId="<?php echo $news_type['id']; ?>"  type="submit">Update</button>
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

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>
        <script src="ajax/js/page-type.js" type="text/javascript"></script>
        <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
