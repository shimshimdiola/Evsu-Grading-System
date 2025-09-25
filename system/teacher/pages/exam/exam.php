<?php include "../../kick_out.php" ?>
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
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- navigation -->
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../index.php" class="nav-link">Home</a>
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
            <a href="../../index.php" class="brand-link">
                <div style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="logo brand-image-xxl img-circle elevation-3" style="opacity: .8">
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
                            <a href="../../index.php" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard

                                </p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="../student/students.php" class="nav-link ">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p>
                                    Students

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../grade/grades.php" class="nav-link ">
                                <i class="nav-icon fas  fa-graduation-cap"></i>
                                <p>
                                    Grades

                                </p>
                            </a>
                        </li>
                        <!-- menu-open -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Records
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../attendance/attendance.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Attendance</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../activity/activity.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Activities</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../project/project.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Projects</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../quize/quize.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Quize</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../exam/exam.php" class="nav-link active">
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
                            <a href="../../logout.php" class="btn btn-success">Yes,
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
                            <h1 class="m-0">
                                <h1 class="m-0"> <span class="text-primary font-weight-bold text-uppercase"> <i class="fas fa-graduation-cap"></i> EXAMINATIONS |
                                        <span class="text-sucess">
                                            <?php echo  $_SESSION['subject'] ?></span></span></span>
                                </h1>
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                                <li class="breadcrumb-item active">Exam</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">



                    <div class="row">
                        <div class="col-4">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <div class="card-title font-weight-bold">
                                        <i class="fas fa-edit"></i> Edit
                                    </div>
                                </div>
                                <div class="card-body">

                                    <?php

                                    if (isset($_GET['name'])) {
                                        # code...
                                        $id = $_GET['id'] . "<br>";
                                        $name = $_GET['name'];
                                        $subject = $_GET['subject'];
                                        $date = $_GET['date'];
                                        $_GET['items'] . "<br>";
                                        $score = $_GET['score'];
                                    ?>

                                        <form method="post">
                                            <div class="row ">
                                                <div class="col-12">

                                                    <input type="text" name="" value="<?php echo $name ?>" id="" class="form-control mt-3 text-capitalize" readonly>

                                                </div>
                                                <div class="col-6">
                                                    <input type="text" name="" value="<?php echo $subject ?>" id="" class="form-control mt-3 text-capitalize" readonly>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" name="" value="<?php echo $date ?>" id="" class="form-control mt-3 text-capitalize" readonly>
                                                </div>
                                                <div class="col-6 mt-3">
                                                    <label for="">item</label>
                                                    <input type="text" class="form-control" name="update_score" value="<?php echo $_GET['items'] ?>" id="" readonly>
                                                </div>
                                                <div class="col-6 mt-3">
                                                    <label for="">score</label>
                                                    <input type="text" class="form-control" name="update_score" value="<?php echo $score ?>" id="">
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end mt-2">
                                                <a href="./exam.php" class="btn btn-danger"> cancel</a> <button class="btn btn-success ml-3" type="submit" name="save"> <i class="fas fa-save"></i> save</button>

                                            </div>
                                        </form>



                                        <?php
                                        if (isset($_POST['save'])) {
                                            # code...
                                            $score_update = $_POST['update_score'];
                                            include "../base/db_connection.php";
                                            $sql = "UPDATE exam SET score = ? WHERE id = ?";
                                            $stmt = $conn->prepare($sql);
                                            $stmt->bind_param("ii", $score_update, $id);

                                            if ($stmt->execute()) {
                                                $_SESSION['success'] = 'Successfully Updated.';
                                            } else {
                                                echo "Error updating score: " . $conn->error;
                                            }

                                            $stmt->close();
                                            $conn->close();
                                        }
                                    } else {
                                        # code...
                                        ?>
                                        <p class="text-danger"> <i class=" fas fa-exclamation-triangle"></i> You need to
                                            select student to edit
                                            here.</p>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card card-outline card-primary">
                                <div class="card-header">
                                    <div class="card-title font-weight-bold">
                                        <i class="fas fa-book"></i> EXAM
                                    </div>
                                </div>
                                <div class="card-body">

                                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#first-semester" role="tab" aria-controls="custom-content-below-home" aria-selected="false"> <i class="fas fa-folder"></i> First Semester</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#second-semester" role="tab" aria-controls="custom-content-below-profile" aria-selected="false"> <i class="fas fa-folder"></i> Second Semester</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="custom-content-below-tabContent">
                                        <div class="tab-pane fade active show" id="first-semester" role="tabpanel">
                                            <?php include "./first_semester.php" ?>

                                        </div>
                                        <div class="tab-pane fade" id="second-semester" role="tabpanel">
                                            <?php include "./second_semester.php" ?>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


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
    <!-- sweeet alert functions -->
    <?php include "../../dist/js/alert.php" ?>
    <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $("#example2").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script src="../../dist/js/profile_picker.js"></script>
</body>

</html>