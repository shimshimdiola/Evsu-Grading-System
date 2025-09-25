<?php
session_start();
$_SESSION['id_number'];
// Define the user's identifier, e.g., based on a user's ID or another unique value
// Define the primary and alternative paths
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



$userIdentifier = $_SESSION['id_number']; // Replace with your user identifier

// SQL query to fetch user data
$sql = "SELECT * FROM students_user WHERE id_number = '$userIdentifier'";
$result = $conn->query($sql);

// Check if there is a result
if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $fullname = $_SESSION['full_name'] = $name = $row['lastname'] . " " . $row['firstname'] . " " . $row['middlename'][0] . ".";
    // Assign the data to session variables


} else {
    // Handle the case where no data was found
}
// unset($_SESSION['id_number']);
if (!isset($_SESSION['id_number'])) {
    # code...
    header("location:../../");
}
// echo $_SESSION['access'];
?>

<head>
    <link rel="icon" href="./dist/img/AdminLTELogo.png" type="image/x-icon">
    <link rel="icon" href="../../dist/img/AdminLTELogo.png" type="image/x-icon">

</head>