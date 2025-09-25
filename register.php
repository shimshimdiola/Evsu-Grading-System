<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
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
                <p class="login-box-msg">REQUEST ACCOUNT.</p>
                <!-- action="./system" -->
                <form action="./action.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="Text" class="form-control" name="middle_name" placeholder="Middle Name" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <label for=""> <i class="fas fa-exclamation-triangle text-success"></i><span class="text-success">
                        </span> provide a valid
                        email</label>

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
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
    <script>
        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    alert("Form successful submitted!");
                    // window.location.href = "./system/";
                }
            });
            $('#loginForm').validate({
                rules: {
                    ID: {
                        required: true,
                        ID: true,
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    terms: {
                        required: true
                    },
                },
                messages: {
                    ID: {
                        required: "Please enter a ID address",
                        ID: "Please enter a valid ID address"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 8 characters long"
                    },
                    terms: "Please accept our terms"
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.validations').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>

    <script src="../../dist/js/profile_picker.js"></script>
</body>

</html>