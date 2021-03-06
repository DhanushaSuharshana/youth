<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
$id = '';
$id = $_GET['id'];
$COURSE = new Course($id);
?>
<!doctype html>


<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Course Subjects | Youth Service LTD </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>


    <body class="someBlock"> 
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php include './top-header.php'; ?>
            <!-- ========== Left Sidebar Start ========== -->
            <?php include './navigation.php'; ?>
            <!-- Left Sidebar End --> 
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
                                            <li class="breadcrumb-item active">Create subjects</li>
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
                                        <h4 class="card-title">Create "<?php echo $COURSE->name ?>" Subjects.</h4>  
                                        <form id="form-data">
                                            <div class="mb-3 row">
                                                <label  class="col-md-2 col-form-label">Add your course subjects</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="title"  name="title" placeholder="Please enter course subjects">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                                    <button class="btn btn-primary " type="submit" id="create">Create</button> 
                                                    <input type="hidden" name="id" value="<?php echo $id ?>">
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
                                        <h4 class="card-title">Manage Courses Subject</h4> 
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#id</th> 
                                                    <th>Subject Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <?php
                                                $COURSE_SUBJECTS = new CourseSubjects(NULL);
                                                foreach ($COURSE_SUBJECTS->getCourseSubjectByCourseId($id) as $key => $course_subject) {
                                                    $key++;
                                                    ?>
                                                    <tr id="div<?php echo $course_subject['id'] ?>">
                                                        <td><?php echo $key ?></td>
                                                        <td> <?php echo $course_subject['title'] ?></td> 
                                                        <td> 
                                                            <a href="" ><div class="badge bg-pill bg-soft-success font-size-14"><i class="fas fa-pencil-alt p-1"></i></div> </a>| 
                                                            <div class="badge bg-pill bg-soft-primary font-size-14"><i class="fas fa-exchange-alt  p-1"></i></div> | 
                                                            <a href="#"><div class="badge bg-pill bg-soft-danger font-size-14 delete-data" data-id="<?php echo $course_subject['id']; ?>"><i class="fas fa-trash-alt p-1"></i></div></a>
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
        <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
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
        <script src="assets/libs/select2/js/select2.min.js"></script>
        <script src="assets/js/pages/form-advanced.init.js"></script>

        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>
        <script src="ajax/js/course-subjects.js" type="text/javascript"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
