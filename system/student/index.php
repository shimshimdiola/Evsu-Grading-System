<?php include "./kick_out.php" ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evsu Grading System | Dashboard</title>
    <!-- <?php echo  $_SESSION['success'] ?> -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
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
                    <a href="../../index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Feedback</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <!-- <i class="far fa-bell"></i>
                        <span class="badge badge-primary navbar-badge">15</span> -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-ellipsis-v"></i>
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
                    <img class="" src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                        class="logo brand-image-xxl img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Evsu Grading System</span>
                </div>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="./pages/uploads/<?php
                                                    include "../../base/db_connection.php";
                                                    // session_start();
                                                    $nameToSearch = $_SESSION['id_number'];
                                                    $sql = "SELECT * FROM profile WHERE name = ?";

                                                    // Prepare the statement
                                                    $stmt = $conn->prepare($sql);
                                                    if ($stmt) {
                                                        // Bind parameter
                                                        $stmt->bind_param("s", $nameToSearch);

                                                        // Execute the SELECT statement
                                                        $stmt->execute();

                                                        // Get the result set
                                                        $result = $stmt->get_result();

                                                        // Fetch and display the data
                                                        while ($row = $result->fetch_assoc()) {

                                                            echo $row["avatar"];
                                                        }

                                                        // Close the statement
                                                        $stmt->close();
                                                    } else {
                                                        echo "Error preparing the SELECT statement: " . $conn->error;
                                                    }

                                                    // Close the database connection
                                                    $conn->close();
                                                    ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-capitalize"><?php echo  $_SESSION['full_name'] ?></a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> <span class="text-primary text-uppercase font-weight-bold"> <i
                                        class="fas fa-tachometer-alt"></i> DASHBOARD |
                                    <span class="text-sucess"> <?php echo  $_SESSION['full_name'] ?></span></span>
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
                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3> <?php
                                            // Include the database connection file
                                            include "../../base/db_connection.php";
                                            $id_number = $_SESSION['id_number'];

                                            // Query to fetch data from the table
                                            $sql = "SELECT * FROM subject WHERE id_number = '$id_number'";
                                            $result = $conn->query($sql);

                                            $sumFirstSemesterGrades = 0; // Initialize a variable to store the sum of first-semester grades

                                            if ($result->num_rows > 0) {
                                                // Output data for each row
                                                while ($row = $result->fetch_assoc()) {
                                                    $firstSemesterGrade = $row["grade_first_semester"];
                                                    $sumFirstSemesterGrades += $firstSemesterGrade / 3; // Add the grade to the sum
                                                }

                                                echo  $sumFirstSemesterGrades;
                                            } else {
                                                echo "No records found.";
                                            }

                                            // Close the database connection
                                            $conn->close();
                                            ?></h3>

                                    <p>FIRST SEMESTER</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?php
                                        // Include the database connection file
                                        include "../../base/db_connection.php";
                                        $id_number = $_SESSION['id_number'];

                                        // Query to fetch data from the table
                                        $sql = "SELECT * FROM subject WHERE id_number = '$id_number'";
                                        $result = $conn->query($sql);

                                        $sumFirstSemesterGrades = 0; // Initialize a variable to store the sum of first-semester grades

                                        if ($result->num_rows > 0) {
                                            // Output data for each row
                                            while ($row = $result->fetch_assoc()) {
                                                $firstSemesterGrade = $row["grade_second_semester"];
                                                $sumFirstSemesterGrades += $firstSemesterGrade / 3; // Add the grade to the sum
                                            }

                                            echo number_format($sumFirstSemesterGrades, 2);
                                        } else {
                                            echo "No records found.";
                                        }

                                        // Close the database connection
                                        $conn->close();
                                        ?><sup style="font-size: 20px"></sup></h3>

                                    <p>SECOND SEMESTER</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?php
                                        // Include the database connection file
                                        include "../../base/db_connection.php";
                                        $id_number = $_SESSION['id_number'];

                                        // Query to fetch data from the table
                                        $sql = "SELECT * FROM subject WHERE id_number = '$id_number'";
                                        $result = $conn->query($sql);

                                        $sumFirstSemesterGrades = 0; // Initialize a variable to store the sum of first-semester grades
                                        $sumSecondSemesterGrades = 0;
                                        if ($result->num_rows > 0) {
                                            // Output data for each row
                                            while ($row = $result->fetch_assoc()) {
                                                $firstSemesterGrade = $row["grade_first_semester"];
                                                $sumFirstSemesterGrades += $firstSemesterGrade; // Add the grade to the sum

                                                $SecondSemesterGrade = $row["grade_second_semester"];
                                                $sumSecondSemesterGrades += $SecondSemesterGrade; // Add the grade to the sum
                                            }
                                             $total_grade = $sumFirstSemesterGrades + $sumSecondSemesterGrades / 6;

                                            echo number_format($total_grade, 2);
                                        } else {
                                            echo "No records found.";
                                        }

                                        // Close the database connection
                                        $conn->close();
                                        ?></h3>

                                    <p>GWA</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <?php
                                    include "../../base/db_connection.php";
                                    $student_name = $_SESSION['full_name'];
                                    // SQL query to count rows in the table
                                    $sql = "SELECT COUNT(*) AS row_count FROM activities WHERE name =  '$student_name'  ";

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
                                <a href="./pages/activity/activity.php" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <?php
                                    include "../../base/db_connection.php";
                                    $student_name = $_SESSION['full_name'];
                                    // SQL query to count rows in the table
                                    $sql = "SELECT COUNT(*) AS row_count FROM project WHERE name =  '$student_name'  ";

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
                                <a href="./pages/project/project.php" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <?php
                                    include "../../base/db_connection.php";
                                    $student_name = $_SESSION['full_name'];
                                    // SQL query to count rows in the table
                                    $sql = "SELECT COUNT(*) AS row_count FROM quiz WHERE name =  '$student_name'  ";

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

                                    <p>Quiz</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <a href="./pages/quize/quize.php" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <?php
                                    include "../../base/db_connection.php";
                                    $student_name = $_SESSION['full_name'];
                                    // SQL query to count rows in the table
                                    $sql = "SELECT COUNT(*) AS row_count FROM exam WHERE name =  '$student_name'  ";

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
                                <a href="./pages/exam/exam.php" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
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
                                <canvas id="areaChart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                 
                    </div> -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <?php include "./profile/update.php" ?>
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
    <!-- SweetAlert2 -->
    <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- sweeet alert functions -->
    <?php include "./dist/js/alert.php" ?>
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
    <script>
    $(document).ready(function() {
        $('#profilePicture').change(function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const selectedImage = $('#selectedImage');
                    selectedImage.attr('src', e.target.result);
                    selectedImage.removeClass('d-none');
                };
                reader.readAsDataURL(file);
            }
        });
    });
    </script>
    <script src="../../dist/js/profile_picker.js"></script>
</body>


</html>