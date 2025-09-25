<?php
include "../../include/db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $status = $_POST["status"];

    // Perform an SQL insert query to add new data to the students table
    $sql = "INSERT INTO students (name) VALUES ('$status')";

    if ($conn->query($sql) === true) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}

// Close the connection when done
$conn->close();
