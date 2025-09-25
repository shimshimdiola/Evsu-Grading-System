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
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
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

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
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
                    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="logo brand-image-xxl img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Evsu Grading System</span>
                </div>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../../../dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
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
                            <a href="../../index.php" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard

                                </p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="./pages/grade/grades.php" class="nav-link active">
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
                                    <a href="./pages/attendance/attendance.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Teacher</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./pages/activity/activity.php" class="nav-link">
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


            </aside> <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Admission</h1>
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
                            <div class="col-md-12">
                                <div class="card card-primary ">
                                    <div class="card-header">
                                        <h3 class="card-title"><i class="fas fa-calendar-alt"></i> Attence Record</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                <i class="fas fa-expand"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                        <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <table id="attendance" class="table table-bordered text-capitalize">
                                            <thead>
                                                <tr>

                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Present</th>
                                                    <th>Absent</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // data base
                                                include "../base/db_connection.php";
                                                // SQL query to retrieve data from the database
                                                $sql = "SELECT id, name, date, present, absent FROM attendance";

                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    // Output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        // echo "ID: " . $row["id"] . "<br>";
                                                        // echo "Name: " . $row["name"] . "<br>";

                                                        // echo "Date: " . $row["date"] . "<br>";
                                                        // echo "Present: " . $row["present"] . "<br>";
                                                        // echo "Absent: " . $row["absent"] . "<br>";
                                                        // echo "<hr>";
                                                ?>
                                                        <tr>

                                                            <td><?php echo $row["name"] ?></td>
                                                            <td>2023-10-05</td>
                                                            <td>

                                                                <?php
                                                                if ($row['present'] === "PRESENT") {
                                                                    # code...
                                                                    echo ' <div class="icheck-success text-center">
                                                    <input type="radio" checked id="radioSuccess2">
                                                    <label for="radioSuccess2">
                                                    </label>
                                                </div>';
                                                                } else {
                                                                    # code...
                                                                }

                                                                ?>

                                                            </td>
                                                            <td>
                                                                <?php
                                                                if ($row['absent'] === "ABSENT") {
                                                                    # code...
                                                                    echo '<div class="icheck-danger text-center">
                                                                <input type="radio" checked id="radiodanger2">
                                                                <label for="radiodanger2">
                                                                </label>
                                                            </div>';
                                                                } else {
                                                                    # code...
                                                                }

                                                                ?>

                                                            </td>
                                                        </tr>

                                                <?php
                                                    }
                                                } else {
                                                    echo "No results found.";
                                                }

                                                // Close the database connection
                                                $conn->close();
                                                ?>


                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div><!-- cards records -->

                        </div>

                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
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


                </aside> <!-- /.control-sidebar -->

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
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- ChartJS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>

    <script src="../../dist/js/profile_picker.js"></script>
</body>


</html>