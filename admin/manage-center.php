<!doctype html>
<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Manage Centers - Youth Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="NYSC" name="author" />
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
                                        <h4 class="card-title">Add Centers Details</h4>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="name" name="name" placeholder="Enter Centre Name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Center Type</label>
                                            <div class="col-md-10">
                                                <select id="type" class="form-control " name="type">
                                                    <option value=""> -- Please Select Center Type --</option>
                                                    <?php
                                                    $CENTER_TYPE = new CenterType(NULL);
                                                    foreach ($CENTER_TYPE->all() as $type) {
                                                        // if ($type['id'] == $center['type']) {
                                                    ?>
                                                            <!-- <option value="<?php echo $type['id'] ?>" selected=""> <?php echo $type['title'] ?></option> -->
                                                        <?php 
                                                    // } else {
                                                         ?>
                                                            <option value="<?php echo $type['id'] ?>"> <?php echo $type['title'] ?></option>
                                                    <?php
                                                        // }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">District</label>
                                            <div class="col-md-10">
                                                <select class="form-select" name="district" id="district">
                                                    <option value="">---- Select District ---</option>
                                                    <?php
                                                    $DISTRICT_OBJ = new Districts(NULL);
                                                    $DISTRICT = $DISTRICT_OBJ->all();
                                                    foreach ($DISTRICT as $district) {
                                                    ?>
                                                        <option value="<?php echo $district['id']; ?>"><?php echo $district['name']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" id="image_name" name="image">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="email" name="email" placeholder="Enter Leader Email">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Contact Number 1</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="contact1" name="contact1" placeholder="Enter Contact Number">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Contact Number 2</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="contact2" name="contact2" placeholder="Enter Contact Number">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Map URL</label>
                                            <div class="col-md-10">
                                                <input class="form-control" value="-" type="url" id="map" name="map" placeholder="Enter Map URL">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Longitude</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="longitude" name="longitude" placeholder="Enter Location Longitude">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Latitude</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="latitude" name="latitude" placeholder="Enter Location Latitude">
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
                    </div>

                    <div class="card">
                        <div class="row">
                            <div class="card-body">
                                <h4 class="card-title">Manage Centers.</h4>


                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>#No</th>
                                            <th>Name</th>
                                            <th>District</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $CENTER_OBJ = new Center(NULL);
                                        $CENTRES = $CENTER_OBJ->all();
                                        foreach ($CENTRES as $key => $center) {
                                            $key++;
                                            $DISTRICT = new Districts($center['district']);
                                        ?>
                                            <tr id="div<?php echo $center['id']; ?>">
                                                <td><?php echo $key; ?></td>
                                                <td><?php echo $center['name']; ?></td>
                                                <td><?php
                                                    echo $DISTRICT->name;;
                                                    ?></td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-14" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg-<?php echo $center['id']; ?>"><i class="fas fa-pencil-alt p-1"></i></div> |
                                                    <a href="manage-courses-by-centers.php?id=<?php echo $center['id'] ?>">
                                                        <div class="badge bg-pill bg-soft-warning font-size-14" title="add centers"><i class=" bx bx-store p-1"></i></div>
                                                    </a> |
                                                    <a href="#">
                                                        <div class="badge bg-pill bg-soft-danger font-size-14 delete-data" data-id="<?php echo $center['id']; ?>"><i class="fas fa-trash-alt p-1"></i></div>
                                                    </a>

                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
    foreach ($CENTRES as $key => $center) {
        $key++;
    ?>
        <!--  Large modal example -->
        <div class="modal fade bs-example-modal-lg-<?php echo $center['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myLargeModalLabel">Edit Details : <?php echo $center['name']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="form-data-<?php echo $center['id']; ?>">
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control name" name="name" type="text" value="<?php echo $center['name']; ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Center Type</label>
                                            <div class="col-md-10">
                                                <select class="form-control type" name="type">
                                                    <option value=""> -- Please Select Center Type --</option>
                                                    <?php
                                                    $CENTER_TYPE = new CenterType(NULL);
                                                    foreach ($CENTER_TYPE->all() as $type) {
                                                        if ($type['id'] == $center['type']) {
                                                    ?>
                                                            <option value="<?php echo $type['id'] ?>" selected=""> <?php echo $type['title'] ?></option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $type['id'] ?>"> <?php echo $type['title'] ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">District</label>
                                    <div class="col-md-10">
                                        <select class="form-select type district" name="district">
                                            <?php
                                            $DISTRICT_OBJ = new Districts(NULL);
                                            $DISTRICT = $DISTRICT_OBJ->all();
                                            foreach ($DISTRICT as $district) {
                                                if ($district['id'] === $center['district']) {
                                            ?>
                                                    <option value="<?php echo $district['id']; ?>" selected="TRUE"><?php echo $district['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>

                                                    <option value="<?php echo $district['id']; ?>"><?php echo $district['name']; ?></option>

                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                    <div class="col-md-10">
                                        <input class="form-control image_name" type="file" id="image_name" name="image_name">
                                        <img width="200" class="img-responsive" src="../upload/center/<?php echo $center['image_name']; ?>">
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="example-search-input" class="col-md-2 col-form-label">Email</label>
                                    <div class="col-md-10">
                                        <input class="form-control email" type="text" name="email" value="<?php echo $center['email']; ?>" placeholder="Enter Leader Email">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Contact Number 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control contact1" type="text" name="contact1" value="<?php echo $center['contact1']; ?>" placeholder="Enter Contact Number">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Contact Number 2</label>
                                    <div class="col-md-10">
                                        <input class="form-control contact2" type="text" name="contact2" value="<?php echo $center['contact2']; ?>" placeholder="Enter Contact Number">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Map URL</label>
                                    <div class="col-md-10">
                                        <input class="form-control map" value="<?php echo $center['map']; ?>" type="url" name="map" placeholder="Enter Map URL">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Longitude</label>
                                    <div class="col-md-10">
                                        <input class="form-control longitude" type="text" value="<?php echo $center['longitude']; ?>" name="longitude" placeholder="Enter Location Longitude">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Latitude</label>
                                    <div class="col-md-10">
                                        <input class="form-control latitude" type="text" value="<?php echo $center['latitude']; ?>" name="latitude" placeholder="Enter Location Latitude">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                        <input class="form-control id" type="hidden" value="<?php echo $center['id']; ?>">
                                        <button class="btn btn-primary edit-data" data-id="<?php echo $center['id']; ?>" id="update" name="update" type="submit">Save Now</button>
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

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>

    <!-- App js -->
    <!-- App js -->
    <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js"></script>
    <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="ajax/js/center.js" type="text/javascript"></script>
</body>

</html>