<?php
session_start();
echo $_SESSION['subject'];
echo $_SESSION['access'];
echo $_SESSION['username'];
// unset sessions
unset($_SESSION['subject']);
unset($_SESSION['access']);
unset($_SESSION['username']);
sleep(1);
header("location:../../teacher.php");
