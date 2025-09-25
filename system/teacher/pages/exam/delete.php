<?php
include "../base/db_connection.php";
echo $id = $_GET['id'];

// SQL query to delete a record based on ID
$sql = "DELETE FROM exam WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    echo "Record with ID $id has been deleted successfully.";
    session_start();
    $_SESSION['success'] = 'Successfully deleted.';
    header("location:./exam.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close the database connection
$conn->close();