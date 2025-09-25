<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Link to your favicon -->
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

                <p><strong>Notification: Please Wait for Your Credentials</strong></p>

                <p>Dear <?php echo $_GET['name'] ?>,</p>

                <p>We kindly request your patience while our administrator processes your request. Your credentials will
                    be sent to your registered email address as soon as they are ready. Please keep an eye on your inbox
                    for an update.</p>

                <p>Thank you for your understanding.</p>

                <p>Sincerely,<br>
                    Evsu Dulag Campus
                </p>
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