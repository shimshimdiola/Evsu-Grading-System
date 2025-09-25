<?php
session_start();
echo $_SESSION['id_number'];
unset($_SESSION['id_number']);
header("location:../../index.php");
