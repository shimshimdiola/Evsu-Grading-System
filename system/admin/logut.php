<?php
session_start();
echo $_SESSION['admin_username'];
unset($_SESSION['admin_username']);
header("location:../../admin.php");