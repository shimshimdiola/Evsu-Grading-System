<?php include "./kick_out.php";
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evsu Grading System</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="./index.php" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#modal-default" role="button">
                        <i class="fas fa-power-off"></i>
                    </a>

                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="./index.php" class="brand-link">
                <div style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="logo brand-image-xxl img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Evsu Grading System</span>
                </div>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-capitalize"><?php echo $_SESSION['name'] ?></a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <!-- <span class="right badge badge-danger">New</span> -->
                        <li class="nav-item">
                            <a href="./index.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard

                                </p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="./pages/student/students.php" class="nav-link ">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p>
                                    Students

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./pages/grade/grades.php" class="nav-link ">
                                <i class="nav-icon fas  fa-graduation-cap"></i>
                                <p>
                                    Grades

                                </p>
                            </a>
                        </li>
                        <!-- menu-open -->
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Records
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./pages/attendance/attendance.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Attendance</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./pages/activity/activity.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Activities</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./pages/project/project.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Projects</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./pages/quize/quize.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Quize</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./pages/exam/exam.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Exam</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <span class=" text-danger"> <i class=" fas fa-exclamation-triangle"></i> Are you sure you
                                really want to
                                logout.</span>
                        </div>
                        <div class="modal-footer justify-content-end">
                            <a href="./logout.php" class="btn btn-success">Yes,
                                logout</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">No, Cancel
                                changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> <span class="text-primary text-uppercase font-weight-bold"> <i class="fas fa-tachometer-alt"></i> DASHBOARD |
                                    <span class="text-sucess"> <?php echo  $_SESSION['subject'] ?></span></span>
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol> -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <?php
                                    include "../../base/db_connection.php";

                                    // SQL query to count rows in the table
                                    $sql = "SELECT COUNT(*) AS row_count FROM students_user";

                                    $result = $conn->query($sql);

                                    if ($result) {
                                        $row = $result->fetch_assoc();
                                        $rowCount = $row['row_count'];
                                        echo "<h3>$rowCount<sup style='font-size: 20px'></sup></h3>"; // Use double quotes
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }

                                    // Close the database connection
                                    $conn->close();
                                    ?>

                                    <p>Student in this class</p>
                                </div>
                                <div class="icon">
                                    <i class=" fas fa-graduation-cap"></i>
                                </div>
                                <a href="./pages/student/students.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <?php
                                    include "../../base/db_connection.php";

                                    // SQL query to count rows in the table
                                    $sql = "SELECT COUNT(*) AS row_count FROM activities";

                                    $result = $conn->query($sql);

                                    if ($result) {
                                        $row = $result->fetch_assoc();
                                        $rowCount = $row['row_count'];
                                        echo "<h3>$rowCount<sup style='font-size: 20px'></sup></h3>"; // Use double quotes
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }

                                    // Close the database connection
                                    $conn->close();
                                    ?>

                                    <p>Activities</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <a href="./pages/activity/activity.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <?php
                                    include "../../base/db_connection.php";

                                    // SQL query to count rows in the table
                                    $sql = "SELECT COUNT(*) AS row_count FROM project";

                                    $result = $conn->query($sql);

                                    if ($result) {
                                        $row = $result->fetch_assoc();
                                        $rowCount = $row['row_count'];
                                        echo "<h3>$rowCount<sup style='font-size: 20px'></sup></h3>"; // Use double quotes
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }

                                    // Close the database connection
                                    $conn->close();
                                    ?>
                                    <p>Project</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <a href="./pages/project/project.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <?php
                                    include "../../base/db_connection.php";

                                    // SQL query to count rows in the table
                                    $sql = "SELECT COUNT(*) AS row_count FROM quiz";

                                    $result = $conn->query($sql);

                                    if ($result) {
                                        $row = $result->fetch_assoc();
                                        $rowCount = $row['row_count'];
                                        echo "<h3>$rowCount<sup style='font-size: 20px'></sup></h3>"; // Use double quotes
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }

                                    // Close the database connection
                                    $conn->close();
                                    ?>

                                    <p>Quize</p>
                                </div>
                                <div class="icon">
                                    <i class=" fas fa-book"></i>
                                </div>
                                <a href="./pages/quize/quize.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <?php
                                    include "../../base/db_connection.php";

                                    // SQL query to count rows in the table
                                    $sql = "SELECT COUNT(*) AS row_count FROM exam";

                                    $result = $conn->query($sql);

                                    if ($result) {
                                        $row = $result->fetch_assoc();
                                        $rowCount = $row['row_count'];
                                        echo "<h3>$rowCount<sup style='font-size: 20px'></sup></h3>"; // Use double quotes
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }

                                    // Close the database connection
                                    $conn->close();
                                    ?>

                                    <p>Exam</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <a href="./pages/exam/exam.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Student Growth Chart</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                    </div> -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark" style="height: 280px;">
            <!-- Control sidebar content goes here -->
            <div class=" p-2 container text-center">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-sm  btn-success" data-widget="control-sidebar" data-slide="true"> <i class="fas fa-minus-circle"></i> Cancel</button>
                        <button class="btn btn-sm  btn-danger"> <i class="fas fa-power-off"></i> Logout</button>
                    </div>
                </div>
                <hr>
                <style>
                    .position-relative {
                        display: inline-block;
                        position: relative;
                    }

                    .camera-icon {
                        position: absolute;
                        bottom: 5px;
                        right: 5px;
                        width: 30px;
                        /* Equal width and height for a circular background */
                        height: 30px;
                        background: grey;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        cursor: pointer;
                        box-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
                    }

                    #selectedImage {
                        width: 150px;
                        height: 150px;
                        max-width: 100%;
                    }
                </style>
                <form>
                    <div class="form-group text-center">
                        <div class="position-relative">
                            <img id="selectedImage" class="img-thumbnail img-circle" src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="Selected Image">
                            <label for="profilePicture" class="camera-icon" data-toggle="tooltip" data-placement="right" title="Change Profile Picture">
                                <i class="fas fa-camera"></i>
                            </label>
                            <input type="file" class="form-control-file d-none" id="profilePicture" accept="image/*">

                        </div>

                        <p> <strong>SUPER ADMINISTRATOR</strong></p>
                    </div>
                </form>





            </div>


        </aside>>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script>
        $(function() {
            /* ChartJS
             * -------
             * Here we will create a few charts using ChartJS
             */

            //--------------
            //- AREA CHART -
            //--------------

            // Get context with jQuery - using jQuery's .get() method.
            var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

            var areaChartData = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                        label: 'Digital Goods',
                        backgroundColor: 'rgba(60,141,188,0.9)',
                        borderColor: 'rgba(60,141,188,0.8)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [28, 48, 40, 19, 86, 27, 90]
                    },
                    {
                        label: 'Electronics',
                        backgroundColor: 'rgba(210, 214, 222, 1)',
                        borderColor: 'rgba(210, 214, 222, 1)',
                        pointRadius: false,
                        pointColor: 'rgba(210, 214, 222, 1)',
                        pointStrokeColor: '#c1c7d1',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                ]
            }

            var areaChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: false,
                        }
                    }]
                }
            }

            // This will get the first returned node in the jQuery collection.
            new Chart(areaChartCanvas, {
                type: 'line',
                data: areaChartData,
                options: areaChartOptions
            })

            //-------------
            //- LINE CHART -
            //--------------
            var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
            var lineChartOptions = $.extend(true, {}, areaChartOptions)
            var lineChartData = $.extend(true, {}, areaChartData)
            lineChartData.datasets[0].fill = false;
            lineChartData.datasets[1].fill = false;
            lineChartOptions.datasetFill = false

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: lineChartData,
                options: lineChartOptions
            })

            //-------------
            //- DONUT CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
            var donutData = {
                labels: [
                    'Chrome',
                    'IE',
                    'FireFox',
                    'Safari',
                    'Opera',
                    'Navigator',
                ],
                datasets: [{
                    data: [700, 500, 400, 600, 300, 100],
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                }]
            }
            var donutOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            new Chart(donutChartCanvas, {
                type: 'doughnut',
                data: donutData,
                options: donutOptions
            })

            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
            var pieData = donutData;
            var pieOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            new Chart(pieChartCanvas, {
                type: 'pie',
                data: pieData,
                options: pieOptions
            })

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChartData = $.extend(true, {}, areaChartData)
            var temp0 = areaChartData.datasets[0]
            var temp1 = areaChartData.datasets[1]
            barChartData.datasets[0] = temp1
            barChartData.datasets[1] = temp0

            var barChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                datasetFill: false
            }

            new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })

            //---------------------
            //- STACKED BAR CHART -
            //---------------------
            var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
            var stackedBarChartData = $.extend(true, {}, barChartData)

            var stackedBarChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    xAxes: [{
                        stacked: true,
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                }
            }

            new Chart(stackedBarChartCanvas, {
                type: 'bar',
                data: stackedBarChartData,
                options: stackedBarChartOptions
            })
        })
    </script>
    <script src="../../dist/js/profile_picker.js"></script>
</body>


</html>