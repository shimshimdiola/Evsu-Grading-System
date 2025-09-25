<?php
session_start();
// echo $_SESSION['username'];
// echo $_SESSION['subject'];
// unset($_SESSION['username']);
// unset($_SESSION['subject']);

// Define the name to search for
$primaryPath = "../base/db_connection.php";
$alternativePath = "../../base/db_connection.php";

// Check if the primary file exists
if (file_exists($primaryPath)) {
    include $primaryPath; // Include the primary file
} else if (file_exists($alternativePath)) {
    include $alternativePath; // Include the alternative file
} else {
    die("Database connection file not found"); // Handle the case where neither file is found
}
##########################################################
$nameToSearch = $_SESSION['username'];

// SQL query to fetch data for the specified username
$sql = "SELECT id, name, subject FROM admin_teacher_subject WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nameToSearch);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();

    // Set the data in session variables
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['subject'] = $row['subject'];

    // Close the database connection
    $conn->close();
} else {
    echo "No records found for the username in the session.";
}
// $conn->close();
##########################################################


if (!isset($_SESSION['username']) & !isset($_SESSION['subject'])) {
    # code...
    header("location:../../teacher.php");
}
// echo $_SESSION['access'];
?>

<head>
    <link rel="icon" href="./dist/img/AdminLTELogo.png" type="image/x-icon">
    <link rel="icon" href="../../dist/img/AdminLTELogo.png" type="image/x-icon">

</head>