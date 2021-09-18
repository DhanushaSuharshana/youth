<!doctype html>
<?php
include '../class/include.php';
include './auth.php';
?>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Manage Advertisement | Youth Service LTD</title>
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
    <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/preloader.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="plugin/MCDatepicker-master/dist/mc-calendar.min.css" rel="stylesheet" type="text/css" />
    <script src="plugin/MCDatepicker-master/dist/mc-calendar.min.js" type="text/javascript"></script>
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
                            <h4 class="mb-0">Dashboard </h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Manage Advertisement</li>>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Manage Advertisement</h4>
                                <div class="row mt-3">
                                    <?php
                                    $ADVERTISEMENT = new Advertisement(NULL);
                                    foreach ($ADVERTISEMENT->all() as $key => $advertisement) {
                                    ?>
                                        <div class="col-md-6 col-xl-3" id="div<?php echo $advertisement['id'] ?>">
                                            <!-- Simple card -->
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="../upload/advertisement/<?php echo $advertisement['image_name'] ?>" alt="<?php echo $advertisement['title'] ?>">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-3"><?php echo $advertisement['title'] ?></h4>
                                                    <div class="badge bg-pill bg-soft-success font-size-14" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg-<?php echo $advertisement['id']; ?>"><i class="fas fa-pencil-alt p-1"></i></div> |
                                                    <a href="create-advertisement-photo.php?id=<?php echo $advertisement['id'] ?>" class="badge bg-pill bg-soft-warning font-size-14"><i class="fas fa-image   p-1"></i></a> |

                                                    <a href="arrange-advertisement.php" class="badge bg-pill bg-soft-primary font-size-14"><i class="fas fa-exchange-alt  p-1"></i></a> |

                                                    <a href="#">
                                                        <div class="badge bg-pill bg-soft-danger font-size-14 delete-data" data-id="<?php echo $advertisement['id']; ?>"><i class="fas fa-trash-alt p-1"></i></div>
                                                    </a>
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
    foreach ($ADVERTISEMENT->all() as $key => $advertisement) {
        $key++;
    ?>
        <!--  Large modal example -->
        <div class="modal fade bs-example-modal-lg-<?php echo $advertisement['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myLargeModalLabel">Edit Details : <?php echo $advertisement['title']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="form-data-<?php echo $advertisement['id']; ?>">
                            <div class="card-body">
                               
                                
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">URL</label>
                                    <div class="col-md-10">
                                        <input class="form-control url" type="text" name="url" placeholder="Enter Advertisement URL" value="<?php echo $advertisement['url'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                    <div class="col-md-10">
                                        <input class="form-control title" type="text" name="title" placeholder="Enter Advertisement Title" value="<?php echo $advertisement['title'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                    <div class="col-md-10">
                                        <input class="form-control image_name" type="file" name="image_name" value="">
                                        <img width="200" class="img-responsive" src="../upload/advertisement/<?php echo $advertisement['image_name']; ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Date</label>
                                    <div class="col-md-10">
                                        <input class="form-control date" id="date_edit_<?php echo $advertisement['id']; ?>" type="text" name="date" placeholder="Enter Advertisement Date" value="<?php echo $advertisement['date']; ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Short Description</label>
                                    <div class="col-md-10">
                                        <input class="form-control short_description" type="text"  name="short_description" placeholder="Short Description" value="<?php echo $advertisement['short_description']; ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Description</label>
                                    <div class="col-md-10">
                                        <textarea class="description" name="description"><?php echo $advertisement['description']; ?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                        <input class="form-control id" type="hidden" value="<?php echo $advertisement['id']; ?>">
                                        <button class="btn btn-primary edit-data" dataId="<?php echo $advertisement['id']; ?>" type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <script>
            MCDatepicker.create({
                    el: '#date_edit_<?php echo $advertisement['id']; ?>',
                    selectedDate: new Date('<?php echo $advertisement['date'] ?>'),
                    customClearBTN: '',
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
    <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
    <!-- App js -->
    <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js"></script>
    <script src="ajax/js/advertisement.js" type="text/javascript"></script>
    <script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        // $(function() {
        //     $(".date").datepicker({
        //         dateFormat: 'yy-mm-dd',
        //         minDate: 'today'
        //     });
        // });
    </script>
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
</body>

</html>