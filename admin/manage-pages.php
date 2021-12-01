<!doctype html>
<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Manage Pages | Youth Service LTD </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="" />
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
                                        <li class="breadcrumb-item active">Pages</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="col-12">
                        <div class="card">
                            <form method="POST" id="form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Add Page</h4>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Select Page Type</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="page_type" name="page_type">
                                                <option value=""> -- Please Select Page Type --</option>
                                                <?php
                                                $PAGE_TYPE = new PageType(NULL);
                                                foreach ($PAGE_TYPE->all() as $page_type) {
                                                    // if ($id == $page_type['id']) {
                                                ?>
                                                    <!-- <option value="<?php echo $page_type['id'] ?>" selected=""> <?php echo $page_type['title'] ?></option> -->
                                                    <?php
                                                    // } else {
                                                    ?>
                                                    <option value="<?php echo $page_type['id'] ?>"> <?php echo $page_type['title'] ?></option>

                                                <?php
                                                }
                                                // }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Page Title</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="title" name="title" placeholder="Enter Leader Name">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Page Url</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="url" name="url" placeholder="Enter Url">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-2 col-form-label">Sub Title</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="sub_title" name="sub_title" placeholder="Enter Sub Title">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="file" id="image_name" name="image_name">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">Banner Image</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="file" id="banner_image_name" name="banner_image_name">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-url-input" class="col-md-2 col-form-label">Description</label>
                                        <div class="col-md-10">
                                            <textarea class="description" id="description" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                            <button class="btn btn-primary " id="create" name="create" type="submit">Create</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Manage Pages</h4>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#id</th>
                                                <th>Title</th>
                                                <th>Url</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $PAGES = new Pages(NULL);
                                            foreach ($PAGES->all() as $key => $page) {
                                                $key++;
                                            ?>
                                                <tr id="div<?php echo $page['id'] ?>">
                                                    <td><?php echo $key ?></td>
                                                    <td> <?php echo $page['title'] ?></td>
                                                    <td> <?php echo $page['url'] ?></td>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-success font-size-14" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg-<?php echo $page['id']; ?>"><i class="fas fa-pencil-alt p-1"></i></div> |
                                                        <a href="create-page-characters.php?id=<?php echo $page['id'] ?>" class="badge bg-pill bg-soft-warning font-size-14"><i class="fas fa-user   p-1"></i></a> |
                                                        <a href="create-page-news.php?id=<?php echo $page['id'] ?>">
                                                            <div class="badge bg-pill bg-soft-warning font-size-14"><i class="fas fa-address-card p-1"></i></div>
                                                        </a>

                                                        |<a href="#">
                                                            <div class="badge bg-pill bg-soft-danger font-size-14 delete-data" data-id="<?php echo $page['id']; ?>"><i class="fas fa-trash-alt p-1"></i></div>
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
    foreach ($PAGES->all() as $key => $page) {
        $key++;
    ?>
        <!--  Large modal example -->
        <div class="modal fade bs-example-modal-lg-<?php echo $page['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myLargeModalLabel">Edit Details : <?php echo $page['title']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="form-data-<?php echo $page['id']; ?>">
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Select Page Type</label>
                                    <div class="col-md-10">
                                        <select class="form-control page_type" name="page_type">
                                            <option value=""> -- Please Select Page Type --</option>
                                            <?php
                                            $PAGE_TYPE = new PageType(NULL);
                                            foreach ($PAGE_TYPE->all() as $page_type) {
                                                if ($page_type['id'] == $page['page_type']) {
                                            ?>
                                                    <option value="<?php echo $page_type['id'] ?>" selected=""> <?php echo $page_type['title'] ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $page_type['id'] ?>"> <?php echo $page_type['title'] ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Page Title</label>
                                    <div class="col-md-10">
                                        <input class="form-control title" type="text" name="title" placeholder="Enter Page Title" value="<?php echo $page['title'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Page Url</label>
                                    <div class="col-md-10">
                                        <input class="form-control url" type="text" name="url" placeholder="Enter Page Url" value="<?php echo $page['url'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Page Sub Title</label>
                                    <div class="col-md-10">
                                        <input class="form-control sub_title" type="text" name="sub_title" placeholder="Enter Page Sub Title" value="<?php echo $page['sub_title'] ?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                    <div class="col-md-10">
                                        <input class="form-control image_name" type="file" name="image_name" value="<?php echo $page['image_name']; ?>">
                                        <img width="200" class="img-responsive" src="../upload/page/<?php echo $page['image_name']; ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Banner Image</label>
                                    <div class="col-md-10">
                                        <input class="form-control banner_image_name" type="file" name="banner_image_name" value="<?php echo $page['banner_image_name']; ?>">
                                        <?php if ($page['banner_image_name']){?>
                                        <img width="200" class="img-responsive" src="../upload/page/banner/<?php echo $page['banner_image_name']; ?>">
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Description</label>
                                    <div class="col-md-10">
                                        <textarea class="description description_edit_<?php echo $page['id']; ?>" name="description"><?php echo $page['description']; ?></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                        <input class="form-control id" type="hidden" value="<?php echo $page['id']; ?>">
                                        <button class="btn btn-primary edit-data" dataId="<?php echo $page['id']; ?>" type="submit">Update</button>
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
    <script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>

    <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <script>
        tinymce.init({
            selector: ".description",
            // ===========================================
            // INCLUDE THE PLUGIN
            // ===========================================
paste_data_images: true,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            // ===========================================
            // PUT PLUGIN'S BUTTON on the toolbar
            // ===========================================

            toolbar: "insert file undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
            // ===========================================
            // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
            // ===========================================

            relative_urls: false

        });
        document.addEventListener('focusin', function (e) { 
  if (e.target.closest('.mce-container') !== null) { 
    e.stopImmediatePropagation();
  } 
});
    </script>

    <script src="ajax/js/pages.js" type="text/javascript"></script>

</body>

</html>