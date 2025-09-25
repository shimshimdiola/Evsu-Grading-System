<?php
include "../base/db_connection.php";
echo $student_id = $_GET['id'];


// SQL query to delete data
$sql = "DELETE FROM students_user WHERE id = ?";

// Prepare the statement
$stmt = $conn->prepare($sql);
if ($stmt) {
    // Bind the ID to the placeholder in the query
    $stmt->bind_param("i", $student_id);

    // Execute the delete statement
    if ($stmt->execute()) {
        echo "Record deleted successfully.";
        session_start();
        $_SESSION['success'] = "Successfully deleted.";
        header("location:./index.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Error preparing the delete statement: " . $conn->error;
}

// Close the database connection
$conn->close();
