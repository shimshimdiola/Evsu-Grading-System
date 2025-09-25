<?php
include "../../kick_out.php";
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
                            <a href="../admission/" class="nav-link ">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>
                                    Admission

                                </p>
                            </a>
                        </li>

                        <!-- menu-open -->
                        <li class="nav-item menu-open ">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Management
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Teacher</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../student/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Student</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../subject/index.php" class="nav-link">
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
                        <div class="col-md-4">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fas fa-eye"></i> Detail</h3>

                                    <!-- <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                            <i class="fas fa-expand"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div> -->
                                </div>
                                <div class="card-body text-capitalize">
                                    <form action="./action.php" method="post">
                                        <div class="form-group">
                                            <label for="">Teacher Name</label>
                                            <input type="text" name="teacher_name" id="" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Subject </label>
                                            <select class="form-control" name="subject" required>

                                                <?php
                                                include "../base/db_connection.php";

                                                // Query to fetch data where id_number is empty (NULL or empty string)
                                                $sql = "SELECT * FROM admin_subject";
                                                $stmt = $conn->prepare($sql);
                                                // Execute the query
                                                $stmt->execute();
                                                // Fetch the result
                                                $result = $stmt->get_result();
                                                // Check if there are rows returned
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                ?>
                                                        <option value="<?php echo $row['subject'] ?>">
                                                            <?php echo $row['subject'] ?></option>
                                                <?php
                                                    }
                                                } else {
                                                    echo "No data found where id_number is empty.";
                                                }

                                                // Close the prepared statement and database connection
                                                $stmt->close();
                                                $conn->close();
                                                ?>
                                            </select>
                                        </div>
                                        <hr>
                                        <strong>Teacher Credential <span class="text-danger">*</span></strong><br><br>
                                        <div class="form-group">
                                            <label for="">User name</label>
                                            <input type="text" name="username" id="" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">password</label>
                                            <input type="password" name="password" id="" class="form-control" required>
                                        </div>
                                        <button class="btn btn-success" type="submit" name="save_teacher"><i class="fas fa-plus"></i>
                                            Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fas fa-folder"></i> Admission</h3>

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

                                    <table id="admission" class="table table-bordered text-capitalize">
                                        <thead>
                                            <tr>
                                                <th>Teacher name</th>
                                                <th>Subject</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th style="width: 60px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include "../base/db_connection.php";

                                            // Query to fetch data where id_number is empty (NULL or empty string)
                                            $sql = "SELECT * FROM admin_teacher_subject";
                                            $stmt = $conn->prepare($sql);

                                            // Execute the query
                                            $stmt->execute();

                                            // Fetch the result
                                            $result = $stmt->get_result();

                                            // Check if there are rows returned
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    // Process and display data here
                                                    // echo "ID: " . $row["id"] . "<br>";
                                                    // echo "First Name: " . $row["firstname"] . "<br>";
                                                    // echo "Last Name: " . $row["lastname"] . "<br>";
                                                    // ... (continue with other fields)

                                            ?>
                                                    <tr>

                                                        <td><?php echo $row["name"] ?></td>
                                                        <td><?php echo $row["subject"] ?></td>
                                                        <td><?php echo $row["username"] ?></td>
                                                        <td style="width: 200px;">
                                                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                                                <span id="myText<?php echo $row['id'] ?>">
                                                                    <?php echo str_repeat('*', strlen($row['password'])) ?>
                                                                </span>
                                                                <div>
                                                                    <button class="btn" onclick="toggleText<?php echo $row['id'] ?>('<?php echo $row['id'] ?>')">
                                                                        <i id="eyeIcon<?php echo $row['id'] ?>" class="fas fa-eye-slash text-danger"></i>
                                                                    </button>
                                                                    <button class="btn" onclick="copyText<?php echo $row['id'] ?>('<?php echo $row['id'] ?>')">
                                                                        <i class="fas fa-copy text-success"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </td>



                                                        <script>
                                                            function toggleText<?php echo $row['id'] ?>(rowId) {
                                                                var spanElement = document.getElementById("myText" + rowId);
                                                                var eyeIcon = document.getElementById("eyeIcon" + rowId);

                                                                if (spanElement.dataset.censored === "true") {
                                                                    // Text is censored, uncensor it
                                                                    spanElement.innerText = spanElement.dataset.originalText;
                                                                    spanElement.dataset.censored = "false";
                                                                    eyeIcon.classList.remove("fa-eye-slash", "text-danger");
                                                                    eyeIcon.classList.add("fa-eye-slash", "text-danger");
                                                                } else {
                                                                    // Text is not censored, censor it
                                                                    spanElement.dataset.originalText = spanElement.innerText;
                                                                    spanElement.innerText = '<?php echo $row['password'] ?>';
                                                                    spanElement.dataset.censored = "true";
                                                                    eyeIcon.classList.remove("fa-eye-slash", "text-danger");
                                                                    eyeIcon.classList.add("fa-eye", "text-success");
                                                                }
                                                            }

                                                            function copyText<?php echo $row['id'] ?>(rowId) {
                                                                var spanElement = document.getElementById("myText" + rowId);
                                                                var textToCopy = spanElement.innerText;

                                                                // Create a temporary input element to copy the text
                                                                var tempInput = document.createElement("input");
                                                                document.body.appendChild(tempInput);
                                                                tempInput.setAttribute("value", textToCopy);
                                                                tempInput.select();
                                                                document.execCommand("copy");
                                                                document.body.removeChild(tempInput);

                                                                // You can also provide some user feedback that the text is copied, like an alert or a tooltip
                                                                alert("Password copied to clipboard!");
                                                            }
                                                        </script>


                                                        <td>
                                                            <!-- <a href="?middlename=<?php echo urlencode($row["middlename"]); ?>&firstname=<?php echo urlencode($row["firstname"]); ?>&lastname=<?php echo urlencode($row["lastname"]); ?>&email=<?php echo urlencode($row["email"]); ?>"
                                                        class="btn btn-sm btn-success"> <i class="fas fa-eye"></i>
                                                        View</a> -->
                                                            <a href="./action.php?id=<?php echo $row['id'] ?>" class="btn-sm btn btn-danger">
                                                                <i class="fas fa-trash"></i> Delete
                                                            </a>
                                                        </td>
                                                    </tr>

                                            <?php
                                                }
                                            } else {
                                                echo "No data found where id_number is empty.";
                                            }

                                            // Close the prepared statement and database connection
                                            $stmt->close();
                                            $conn->close();
                                            ?>










                                        </tbody>
                                        <tfoot>
                                            <tr>

                                                <th>Teacher name</th>
                                                <th>Subject</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
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
        <aside class="control-sidebar control-sidebar-dark" style="height: 120px;">
            <!-- Control sidebar content goes here -->
            <div class=" p-2 container text-center">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-sm  btn-success" data-widget="control-sidebar" data-slide="true"> <i class="fas fa-minus-circle"></i> Cancel</button>
                        <a href="../../logut.php" class="btn btn-sm  btn-danger"> <i class="fas fa-power-off"></i>
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
                               <label for="profilePicture" class="camera-icon" data-toggle="tooltip"
                                   data-placement="right" title="Change Profile Picture">
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
    <!-- ChartJS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <script>
        $(function() {
            $("#admission").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#admission_wrapper .col-md-6:eq(0)');
            $("#attendance").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#attendance_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script src="../../dist/js/profile_picker.js"></script>
</body>


</html>