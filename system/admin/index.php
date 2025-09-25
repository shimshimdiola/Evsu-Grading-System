<?php
include "./kick_out.php";
$admin = $_SESSION['admin_username']  ?>
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
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="./plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
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
            <?php
            // session_start();
            // $_SESSION['error'] = "error";
            // 
            ?>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li> -->
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
                        <a href="#" class="d-block">SUPER ADMINISTRATOR </a>
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
                            <a href="./pages/admission/" class="nav-link ">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>
                                    Admission

                                </p>
                            </a>
                        </li>

                        <!-- menu-open -->
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Management
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./pages/teacher/index.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Teacher</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./pages/student/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Student</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./pages/project/project.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Subjects</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="./pages/grade/grades.php" class="nav-link ">
                                <i class="nav-icon fas  fa-graduation-cap"></i>
                                <p>
                                    Apply

                                </p>
                            </a>
                        </li> -->

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
                            <h1 class="m-0">Dashboard</h1>
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
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <?php
                                    include "../../base/db_connection.php";

                                    // SQL query to count rows in the table
                                    $sql = "SELECT COUNT(*) AS row_count FROM admission";

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

                                    <p>ADMISSION</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-folder"></i>
                                </div>
                                <a href="./pages/admission/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                                    $sql = "SELECT COUNT(*) AS row_count FROM admin_teacher_subject";

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

                                    <p>TEACHER</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <a href="./pages/teacher/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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

                                    <p>STUDENTS</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <a href="./pages/student/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                                    $sql = "SELECT COUNT(*) AS row_count FROM admin_subject";

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

                                    <p>SUBJECT</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                <a href="./pages/subject/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <!-- <div class="col-lg-3 col-6">
                            small box
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>10</h3>

                                    <p>APPLY</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div> -->
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark" style="height: 120px;">
            <!-- Control sidebar content goes here -->
            <div class=" p-2 container text-center">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-sm  btn-success" data-widget="control-sidebar" data-slide="true"> <i class="fas fa-minus-circle"></i> Cancel</button>
                        <a href="./logut.php" class="btn btn-sm  btn-danger"> <i class="fas fa-power-off"></i>
                            Logout</a>
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
                        <!-- <div class="position-relative">
                            <img id="selectedImage" class="img-thumbnail img-circle"
                                src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="Selected Image">
                            <label for="profilePicture" class="camera-icon" data-toggle="tooltip" data-placement="right"
                                title="Change Profile Picture">
                                <i class="fas fa-camera"></i>
                            </label>
                            <input type="file" class="form-control-file d-none" id="profilePicture" accept="image/*">

                        </div> -->

                        <p> <strong>SUPER ADMINISTRATOR</strong></p>
                    </div>
                </form>





            </div>


        </aside>
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
    <!-- SweetAlert2 -->
    <script src="./plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- sweeet alert functions -->
    <?php include "./dist/js/alert.php" ?>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- profile-picker.js -->
    <script src="./dist/js/profile_picker.js"></script>
    <script src="../../dist/js/profile_picker.js"></script>
</body>


</html>