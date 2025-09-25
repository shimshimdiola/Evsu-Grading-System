<?php
session_start();
// unset($_SESSION['id_number']);
if (!isset($_SESSION['admin_username'])) {
    # code...
    header("location:../../admin.php");
}
// echo $_SESSION['access'];
?>

<head>
    <link rel="icon" href="./dist/img/AdminLTELogo.png" type="image/x-icon">
    <link rel="icon" href="../../dist/img/AdminLTELogo.png" type="image/x-icon">

</head>