<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in | Teacher portal</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <link rel="icon" href="./dist/img/AdminLTELogo.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <style>
    body {
        position: relative;
        /* Set a relative position for the body */
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    body::before {
        content: "";
        background-color: black;
        /* Add an empty content to the ::before pseudo-element */
        background-image: url('./dist/img/background.png');
        /* Your background image URL */
        opacity: 0.9;
        /* Adjust the opacity value (0.5 for 50% opacity) */
        position: absolute;
        /* Position it absolutely within the body */
        top: 0;
        left: 0;
        width: 100%;
        /* Cover the entire body */
        height: 100%;
        z-index: -1;
        /* Place it below other content */
    }
    </style>
</head>

<body class="login-page" style="min-height: 464px;">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-danger">
            <div class="card-header text-center">
                <img src="./system/teacher/dist/img/AdminLTELogo.png" alt=""><br>
                <a href="./index2.html" class="h3"><b>EVSU GRADING SYSTEM</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <?php if (isset($_SESSION['error'])) {
                    # code...
                ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close  " data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="fas fa-exclamation-triangle"></i> Incorrect username or password.
                </div>
                <?php
                }
                unset($_SESSION['error']);
                ?>
                <!-- action="./system" -->
                <form action="./login.php" method="post">
                    <input type="text" name="access" value="teacher" id="" hidden>
                    <div class="validations  input-group mb-3">
                        <input type="text" name="username" role="" class="form-control" placeholder="User name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="validations  input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="login_teacher" class="btn btn-primary btn-block"><i
                                    class="fas fa-sign-in-alt"> </i>
                                Sign
                                In</button>
                        </div>
                        <!-- <br><br>
                        <div class="col-12">
                            <a href="./register.php" class="btn btn-primary btn-block"> <i class="fas fa-edit"> </i>
                                Create
                                Account</a>
                        </div> -->
                        <!-- /.col -->
                    </div>
                </form>


                <!-- /.social-auth-links -->

                <!-- <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p> -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jquery-validation -->
    <script src="./plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="./plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>


    <script src="../../dist/js/profile_picker.js"></script>
</body>

</html>