<!doctype html>
<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$id = '';
$id = $_GET['id'];
$CENTER = new Center($id);
?>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Create Centers </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- plugin css -->
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/libs/@chenfengyuan/datepicker/datepicker.min.css">
    <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/preloader.css" rel="stylesheet" type="text/css" />
</head>


<body class="someBlock">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Manage Courses</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Add Course by Center - " <?php echo $CENTER->name ?> "</h4>
                                    <form method="POST" id="form-data">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Select course name:- </label>
                                            <div class="col-md-10">
                                                <select class="form-control select2" id="course_id" name="course_id">
                                                    <option value="">-- Select Your Course Id --</option>
                                                    <?php
                                                    $COURSE = new Course(NULL);
                                                    foreach ($COURSE->all() as $courses_by_centers) {
                                                    ?>
                                                        <option value="<?php echo $courses_by_centers['id'] ?>"><?php echo $courses_by_centers['name'];
                                                                                                                if ($courses_by_centers['nvq'] == 1) {
                                                                                                                    echo '<b> ( NVQ -  ';
                                                                                                                } else {
                                                                                                                    echo '<b>  ( NON NVQ -';
                                                                                                                }
                                                                                                                if ($courses_by_centers['duration_type'] == 1) {
                                                                                                                    echo 'Full Time ) </b> ';
                                                                                                                } else {
                                                                                                                    echo 'Part Time )  </b>';
                                                                                                                }
                                                                                                                ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                                <input type="hidden" name="center_id" value="<?php echo $id ?>">
                                                <button class="btn btn-primary " id="create" name="create" type="submit">Add Course</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="card">
                        <div class="row">
                            <div class="card-body">
                                <h4 class="card-title">Manage Course in Centers.</h4>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>#No</th>
                                            <th>Course Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $COURSES_BY_CENTERS = new CourseByCenters(NULL);
                                        foreach ($COURSES_BY_CENTERS->getCoursesByCenterId($id) as $key => $courses_by_centerss) {
                                            $key++;
                                            $COURSE = new Course($courses_by_centerss['course_id']);
                                        ?>
                                            <tr id="div<?php echo $courses_by_centerss['id']; ?>">
                                                <td><?php echo $key; ?></td>
                                                <td><?php echo $COURSE->name; ?></td>
                                                <td>
                                                    <div class="badge bg-pill bg-soft-success font-size-14" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg-<?php echo $courses_by_centerss['id']; ?>"><i class="fas fa-pencil-alt p-1"></i></div> |
                                                    <a href="#">
                                                        <div class="badge bg-pill bg-soft-danger font-size-14 delete-data" data-id="<?php echo $courses_by_centerss['id']; ?>"><i class="fas fa-trash-alt p-1"></i></div>
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
        </div>
    </div>
    <!-- END layout-wrapper -->
    <?php
    foreach ($COURSES_BY_CENTERS->getCoursesByCenterId($id) as $key => $courses_by_centers) {
        $COURSES = new Course($courses_by_centers['course_id']);
        $key++;
    ?>
        <!--  Large modal example -->
        <div class="modal fade bs-example-modal-lg-<?php echo $courses_by_centers['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myLargeModalLabel">Edit Details : <?php echo $COURSES->name ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="form-data-<?php echo $courses_by_centers['id']; ?>" class="from">
                            <div class="card-body">


                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control name" type="text" name="name" placeholder="Enter News Title" value="<?php echo $COURSES->name ?>">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                        <button class="btn btn-primary edit-data" dataId="<?php echo $courses_by_centers['id']; ?>" type="submit">Update</button>
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

    <!-- plugins -->
    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <!-- Buttons examples -->

    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <!-- init js -->
    <script src="assets/js/pages/form-advanced.init.js"></script>
    <!-- App js -->
    <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>


    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>


    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>
    <script src="ajax/js/courses-by-centers.js" type="text/javascript"></script>


</body>

</html>