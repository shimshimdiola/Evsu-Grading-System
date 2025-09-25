<?php
session_start();
echo $_SESSION['id_number'];
echo $access = $_SESSION['access'];
if (!isset($access)) {
    # code...
    echo "not started";
    header("location:../");
}
if ($access == "student") {
    header("location:./student");
} elseif ($access == "teacher") {
    header("location:./teacher");
} elseif ($access == "admin") {
    header("location:./");
}
