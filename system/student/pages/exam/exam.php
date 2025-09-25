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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
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
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
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
            <a href="../../index.php" class="brand-link">
                <div style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                        class="logo brand-image-xxl img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Evsu Grading System</span>
                </div>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../uploads/<?php
                                                include "../base/db_connection.php";
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
                            <a href="../../index.php" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard

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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                <h1 class="m-0"> <span class="text-primary font-weight-bold"> <i
                                            class="fas fa-graduation-cap"></i> EXAMINATIONS</span>
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
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">List of students Submited the Exam</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Subject</th>

                                        <th>Date</th>
                                        <th>Items</th>
                                        <th>Score</th>
                                        <th>semester</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../base/db_connection.php";
                                    echo    $full_name = $_SESSION['full_name'];
                                    // SQL query to fetch data from the database
                                    $sql = "SELECT * FROM exam WHERE name = '$full_name'";
                                    // ANOTHER
                                    // Execute the query
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // Output data from each row
                                        while ($row = $result->fetch_assoc()) {
                                            $name = $row["name"];
                                            $subject = $row["subject"];
                                            $date = $row["date"];
                                            $items = $row["items"];
                                            $score = $row["score"];
                                            $semester = $row["semester"];

                                            // // Display the data (you can customize the display as needed)
                                            // echo "Name: $name<br>";
                                            // echo "Subject: $subject<br>";
                                            // echo "Date: $date<br>";
                                            // echo "Items: $items<br>";
                                            // echo "Score: $score<br>";
                                            // echo "<hr>"; // Add a horizontal line between records

                                    ?>
                                    <tr>
                                        <td><?php echo  $name ?></td>
                                        <td><?php echo  $subject ?></td>
                                        <td><?php echo  $date ?></td>
                                        <td><?php echo  $items ?></td>
                                        <td><b><?php echo  $score . "/" . $items ?></b></td>
                                        <td><?php echo  $semester ?></td>
                                    </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "No records found";
                                    }

                                    // Close the database connection
                                    $conn->close();
                                    ?>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Subject</th>

                                        <th>Date</th>
                                        <th>Items</th>
                                        <th>Score</th>
                                        <th>semester</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>




                </div><!-- /.container-fluid -->
            </div>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark" style="height: 320px;">
            <!-- Control sidebar content goes here -->
            <div class=" p-2 container text-center">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-sm  btn-success" data-widget="control-sidebar" data-slide="true"> <i
                                class="fas fa-minus-circle"></i> Cancel</button>
                        <a href="../../logout.php" class="btn btn-sm  btn-danger"> <i class="fas fa-power-off"></i>
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

                <form action="./update_profile.php" method="post" enctype="multipart/form-data">
                    <div class="form-group text-center">
                        <div class="position-relative">
                            <img id="selectedImage" class="img-thumbnail img-circle" src="../uploads/<?php
                                                                                                        include "../base/db_connection.php";
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
                                                                                                        ?>"
                                alt="Selected Image">
                            <label for="profilePicture" class="camera-icon" data-toggle="tooltip" data-placement="right"
                                title="Change Profile Picture">
                                <i class="fas fa-camera"></i>
                            </label>
                            <input type="file" class="form-control-file d-none" name="image" id="profilePicture"
                                accept="image/*">

                        </div>

                        <p> <strong class=" text-uppercase"><?php
                                                            echo  $_SESSION['full_name'] ?></strong></p>

                    </div>
                    <hr>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-sm btn-success mx-2" name="save" type="submit"> <i
                                class="fas fa-save"></i>
                            Save</button>
                        <button class="btn btn-sm btn-primary " name="update" type="submit"> <i
                                class="fas fa-upload"></i>
                            Update</button>

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
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    </script>
    <script src="../../dist/js/profile_picker.js"></script>
</body>

</html>