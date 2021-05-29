<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dark Sidebar | Minible - Admin & Dashboard Template</title>
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

    </head>

    <body  >

        <!-- Begin page -->
        <div  >

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
                                    <h4 class="mb-0">Dark Sidebar</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Vertical</a></li>
                                            <li class="breadcrumb-item active">Dark Sidebar</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end mt-2">
                                            <div id="total-revenue-chart"></div>
                                        </div>
                                        <div>
                                            <h4 class="mb-1 mt-1">$<span data-plugin="counterup">34,152</span></h4>
                                            <p class="text-muted mb-0">Total Revenue</p>
                                        </div>
                                        <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end mt-2">
                                            <div id="orders-chart"> </div>
                                        </div>
                                        <div>
                                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">5,643</span></h4>
                                            <p class="text-muted mb-0">Orders</p>
                                        </div>
                                        <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end mt-2">
                                            <div id="customers-chart"> </div>
                                        </div>
                                        <div>
                                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">45,254</span></h4>
                                            <p class="text-muted mb-0">Customers</p>
                                        </div>
                                        <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end mt-2">
                                            <div id="growth-chart"></div>
                                        </div>
                                        <div>
                                            <h4 class="mb-1 mt-1">+ <span data-plugin="counterup">12.58</span>%</h4>
                                            <p class="text-muted mb-0">Growth</p>
                                        </div>
                                        <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div> <!-- end row-->

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton5"
                                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton5">
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title mb-4">Sales Analytics</h4>

                                        <div class="mt-1">
                                            <ul class="list-inline main-chart mb-0">
                                                <li class="list-inline-item chart-border-left me-0 border-0">
                                                    <h3 class="text-primary">$<span data-plugin="counterup">2,371</span><span class="text-muted d-inline-block font-size-15 ms-3">Income</span></h3>
                                                </li>
                                                <li class="list-inline-item chart-border-left me-0">
                                                    <h3><span data-plugin="counterup">258</span><span class="text-muted d-inline-block font-size-15 ms-3">Sales</span>
                                                    </h3>
                                                </li>
                                                <li class="list-inline-item chart-border-left me-0">
                                                    <h3><span data-plugin="counterup">3.6</span>%<span class="text-muted d-inline-block font-size-15 ms-3">Conversation Ratio</span></h3>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="mt-3">
                                            <div id="sales-analytics-chart" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-4">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <p class="text-white font-size-18">Enhance your <b>Campaign</b> for better outreach <i class="mdi mdi-arrow-right"></i></p>
                                                <div class="mt-4">
                                                    <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Upgrade Account!</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mt-4 mt-sm-0">
                                                    <img src="assets/images/setup-analytics-amico.svg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1"
                                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 class="card-title mb-4">Top Selling Products</h4>


                                        <div class="row align-items-center g-0 mt-3">
                                            <div class="col-sm-3">
                                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> Desktops </p>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="progress mt-1" style="height: 6px;">
                                                    <div class="progress-bar progress-bar bg-primary" role="progressbar"
                                                         style="width: 52%" aria-valuenow="52" aria-valuemin="0"
                                                         aria-valuemax="52">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->

                                        <div class="row align-items-center g-0 mt-3">
                                            <div class="col-sm-3">
                                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-info me-2"></i> iPhones </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="progress mt-1" style="height: 6px;">
                                                    <div class="progress-bar progress-bar bg-info" role="progressbar"
                                                         style="width: 45%" aria-valuenow="45" aria-valuemin="0"
                                                         aria-valuemax="45">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->

                                        <div class="row align-items-center g-0 mt-3">
                                            <div class="col-sm-3">
                                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-success me-2"></i> Android </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="progress mt-1" style="height: 6px;">
                                                    <div class="progress-bar progress-bar bg-success" role="progressbar"
                                                         style="width: 48%" aria-valuenow="48" aria-valuemin="0"
                                                         aria-valuemax="48">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->

                                        <div class="row align-items-center g-0 mt-3">
                                            <div class="col-sm-3">
                                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-warning me-2"></i> Tablets </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="progress mt-1" style="height: 6px;">
                                                    <div class="progress-bar progress-bar bg-warning" role="progressbar"
                                                         style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                                         aria-valuemax="78">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->

                                        <div class="row align-items-center g-0 mt-3">
                                            <div class="col-sm-3">
                                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-purple me-2"></i> Cables </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="progress mt-1" style="height: 6px;">
                                                    <div class="progress-bar progress-bar bg-purple" role="progressbar"
                                                         style="width: 63%" aria-valuenow="63" aria-valuemin="0"
                                                         aria-valuemax="63">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end Col -->
                        </div> 
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


               <?php include './footer.php'; ?>
            </div>
            <!-- end main content-->

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

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>