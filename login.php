<?php
if (isset($_POST['login'])) {
    # code...
    include "./base/db_connection.php";
    echo "clicked";
    $id_number = $_POST['id_number'];
    $password = $_POST['password'];
    echo   $access = $_POST['access'];

    $sql = "SELECT * FROM students_user  WHERE id_number = '$id_number' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // User is authenticated
        echo "successfully login";
        session_start();
        $_SESSION['access'] = $access;
        $_SESSION['id_number'] = $id_number;
        header("location:./system/");
        exit();
    } else {
        session_start();
        $_SESSION['error'] = true;
        echo   $error_message = "Invalid ID Number or Password";
        header("location:./index.php");
    }
}
// teacher
if (isset($_POST['login_teacher'])) {
    # code... 
    include "./base/db_connection.php";
    echo "clicked2";
    echo   $username = $_POST['username'];
    echo $password = $_POST['password'];
    echo   $access = $_POST['access'];

    $sql = "SELECT * FROM admin_teacher_subject WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        while ($row = $result->fetch_assoc()) {
            $subject = $row['subject'];
        }
        // User is authenticated
        echo "successfully login";
        session_start();
        $_SESSION['subject'] = $subject;
        $_SESSION['access'] = $access;
        $_SESSION['username'] = $username;

        header("location:./system/");
        exit();
    } else {
        session_start();
        $_SESSION['error'] = true;
        echo   $error_message = "Invalid ID Number or Password";
        header("location:./teacher.php");
    }
}


if (isset($_POST['login_admin'])) {
    # code... 
    include "./base/db_connection.php";
    echo "clicked2";
    echo   $username = $_POST['username'];
    echo $password = $_POST['password'];
    echo   $access = $_POST['access'];

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        while ($row = $result->fetch_assoc()) {
            $subject = $row['subject'];
        }
        // User is authenticated
        echo "successfully login";
        session_start();
        $_SESSION['admin_access'] = $access;
        $_SESSION['admin_username'] = $username;
        header("location:./system/admin");
        exit();
    } else {
        session_start();
        $_SESSION['error'] = true;
        echo   $error_message = "Invalid ID Number or Password";
        header("location:./admin.php");
    }
}
