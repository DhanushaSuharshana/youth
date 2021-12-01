<!doctype html>
<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
$id = '';
if (isset($_GET["id"])) {
    $id = $_GET['id'];
}
?>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Create Courses | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/preloader.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <link href="plugin/MCDatepicker-master/dist/mc-calendar.min.css" rel="stylesheet" type="text/css" />
    <script src="plugin/MCDatepicker-master/dist/mc-calendar.min.js" type="text/javascript"></script>

    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
    <style>
        .mc-calendar {
            z-index: 1600 !important;
        }

        .mc-display__day,
        .mc-display__date,
        .mc-display__month,
        .mc-display__year {
            color: hsla(0, 0%, 100%, .8) !important;
        }
    </style>


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
                                <h4 class="mb-0"> Dashboard</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Create Courses</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Create Courses.</h4>
                                    <form id="form-data">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Select Course Type</label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="course_type" name="course_type">
                                                    <option value=""> -- Please Select Course Type --</option>
                                                    <?php
                                                    $COURSE_TYPE = new CourseType(NULL);
                                                    foreach ($COURSE_TYPE->all() as $course_type) {
                                                        if ($id == $course_type['id']) {
                                                    ?>
                                                            <option value="<?php echo $course_type['id'] ?>" selected=""> <?php echo $course_type['title'] ?></option>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <option value="<?php echo $course_type['id'] ?>"> <?php echo $course_type['title'] ?></option>

                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="name" name="name" placeholder="Please enter course name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Max Students</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="max_student" name="max_student" placeholder="Please enter max students in one course">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">NVQ</label>
                                            <div class="col-md-10">
                                                <div class="form-check form-switch mt-2" dir="ltr">
                                                    <input type="checkbox" class="form-check-input" id="nvq" name="nvq">
                                                    <label class="form-check-label" for="nvq"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Duration Type</label>
                                            <div class="col-md-10">
                                                <div class="form-check form-switch mt-2" dir="ltr">
                                                    <input type="checkbox" class="form-check-input" id="duration_type" name="duration_type">
                                                    <label class="form-check-label" for="duration_type">Full Time</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" id="image_name" name="image_name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Level</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="level" name="level" placeholder="Please enter certificate level">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Languages</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="languages" name="languages" placeholder="Please enter course teaching languages">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Duration</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="duration" name="duration" placeholder="Ex : 01 Year">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Start Date</label>
                                            <div class="col-md-10">
                                                <input class="form-control start_dates " type="text" id="start_date" name="start_date" placeholder="Please enter course start date">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Short Description</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="short_description" name="short_description" placeholder="Please enter short description">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label"> Description</label>
                                            <div class="col-md-10">
                                                <textarea class="description" name="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                                <button class="btn btn-primary " type="submit" id="create">Create</button>
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
                                <h4 class="card-title">Manage Courses.</h4>


                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>#No</th>
                                            <th>Name</th>
                                            <th>NVQ Level</th>
                                            <th>Duration</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $COURSES = new Course(NULL);
                                        foreach ($COURSES->all() as $key => $course) {
                                        ?>
                                            <tr id="div<?php echo $course['id']; ?>">
                                                <td><?php echo $key; ?></td>
                                                <td><?php echo $course['name']; ?></td>
                                                <td>
                                                    <?php
                                                    if ($course['nvq'] == 1) {
                                                        echo 'NVQ';
                                                    } else {
                                                        echo 'NON NVQ';
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($course['duration_type'] == 1) {
                                                        echo 'Full Time';
                                                    } else {
                                                        echo 'Part Time';
                                                    }


                                                    ?></td>

                                                <td>

                                                    <div class="badge bg-pill bg-soft-success font-size-14" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg-<?php echo $course['id']; ?>"><i class="fas fa-pencil-alt p-1"></i></div> |
                                                    <a href="create-course-photo.php?id=<?php echo $course['id'] ?>" class="badge bg-pill bg-soft-warning font-size-14"><i class="fas fa-image   p-1"></i></a> |
                                                    <a href="create-course-subjects.php?id=<?php echo $course['id'] ?>" class="badge bg-pill bg-soft-warning font-size-14"><i class="fas fa-exchange-alt  p-1"></i></a> |
                                                    <a href="arrange-course.php" class="badge bg-pill bg-soft-primary font-size-14"><i class="fas fa-exchange-alt  p-1"></i></a> |
                                                    <a href="#">

                                                        <div class="badge bg-pill bg-soft-danger font-size-14 delete-data" data-id="<?php echo $course['id']; ?>"><i class="fas fa-trash-alt p-1"></i></div>
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
            <?php include './footer.php'; ?>
        </div>
    </div>
    <!-- END layout-wrapper -->

    <?php
    foreach ($COURSES->all() as $key => $course) {
        $key++;
    ?>
        <!--  Large modal example -->
        <div class="modal fade bs-example-modal-lg-<?php echo $course['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myLargeModalLabel">Edit Details : <?php echo $course['name']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="form-data-<?php echo $course['id']; ?>" class="from">
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Course Type</label>
                                    <div class="col-md-10">
                                        <select class="form-control course_type" name="course_type">
                                            <option value=""> -- Please Select Course Type --</option>
                                            <?php
                                            $COURSE_TYPE = new CourseType(NULL);
                                            foreach ($COURSE_TYPE->all() as $course_type) {
                                                if ($course_type['id'] == $course['course_type']) {
                                            ?>
                                                    <option value="<?php echo $course_type['id'] ?>" selected=""> <?php echo $course_type['title'] ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $course_type['id'] ?>"> <?php echo $course_type['title'] ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control name" type="text" name="name" placeholder="Enter News Title" value="<?php echo $course['name'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-search-input" class="col-md-2 col-form-label">Max Students</label>
                                    <div class="col-md-10">
                                        <input class="form-control max_student" type="text" name="max_student" placeholder="Please enter max students in one course" value="<?php echo $course['max_student'] ?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-search-input" class="col-md-2 col-form-label">NVQ</label>
                                    <div class="col-md-10">
                                        <div class="form-check form-switch mt-2" dir="ltr">
                                            <input type="checkbox" class="form-check-input" name="nvq" <?= ($course['nvq']) ? "checked='checked'" : ""; ?>>
                                            <label class="form-check-label" for="nvq"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-search-input" class="col-md-2 col-form-label">Duration Type</label>
                                    <div class="col-md-10">
                                        <div class="form-check form-switch mt-2" dir="ltr">
                                            <input type="checkbox" class="form-check-input" name="duration_type" <?= ($course['duration_type']) ? "checked='checked'" : ""; ?>>
                                            <label class="form-check-label" for="duration_type">Full Time</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                    <div class="col-md-10">
                                        <input class="form-control image_name" type="file" name="image_name" value="">
                                        <img width="200" class="img-responsive" src="../upload/courses/<?php echo $course['image_name']; ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Level</label>
                                    <div class="col-md-10">
                                        <input class="form-control level" type="text" name="level" value="<?php echo $course['level'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Languages</label>
                                    <div class="col-md-10">
                                        <input class="form-control languages" type="text" name="languages" value="<?php echo $course['languages'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Duration</label>
                                    <div class="col-md-10">
                                        <input class="form-control duration" type="text" name="duration" value="<?php echo $course['duration'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Start Date</label>
                                    <div class="col-md-10">
                                        <input class="form-control start_dates" id="start_date_edit_<?php echo $course['id']; ?>" type="text" name="start_date" value="<?php echo $course['start_date'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Short Description</label>
                                    <div class="col-md-10">
                                        <input class="form-control short_description" type="text" name="short_description" value="<?php echo $course['short_description'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Description</label>
                                    <div class="col-md-10">
                                        <textarea class="descriptions" name="description"><?php echo $course['description']; ?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                        <button class="btn btn-primary edit-data" dataId="<?php echo $course['id']; ?>" type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            MCDatepicker.create({
                    el: '#start_date_edit_<?php echo $course['id']; ?>',
                    selectedDate: new Date('<?php echo $course['start_date'] ?>'),
                    minDate: new Date(),
                    // autoClose: true,
                    // closeOnBlur: false,
                    dateFormat: 'yyyy-mm-dd',
                }

            )
        </script>
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
    <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <!-- send data -->
    <script src="ajax/js/course.js" type="text/javascript"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

    <script>
        // $('.datepicker2').click(function() {
        //     $('.datepicker2').datepicker({
        //         dateFormat: 'yy-mm-dd',
        //         minDate: 'today'
        //     });
        // });

        const start_date = MCDatepicker.create({
            el: '#start_date',
            selectedDate: new Date(),
            // autoClose: true,
            dateFormat: 'yyyy-mm-dd',
            minDate: new Date(),
            // bodyType: 'inline',
        });

        // MCDatepicker.onClose(() => {myDatePicker.reset();});
    </script>
    <script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
    <script>
        tinymce.init({
            selector: ".description",
            // ===========================================
            // INCLUDE THE PLUGIN
            // ===========================================

            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            // ===========================================
            // PUT PLUGIN'S BUTTON on the toolbar
            // ===========================================

            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
            // ===========================================
            // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
            // ===========================================

            relative_urls: false

        });
    </script>
    <script>
        tinymce.init({
            selector: ".descriptions",
            // ===========================================
            // INCLUDE THE PLUGIN
            // ===========================================

            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            // ===========================================
            // PUT PLUGIN'S BUTTON on the toolbar
            // ===========================================

            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
            // ===========================================
            // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
            // ===========================================

            relative_urls: false

        });
    </script>

</body>

</html>