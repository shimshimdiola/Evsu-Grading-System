<?php
include "../base/db_connection.php";
if (isset($_POST['save_teacher'])) {
    # code...
    echo "clicked";

    echo $name =  $_POST['teacher_name'];
    echo $subject =  $_POST['subject'];
    echo $username =  $_POST['username'];
    echo $password =  $_POST['password'];

    // Assume $conn is your database connection

    // Check if the subject already exists in the database
    $subjectToCheck = $_POST['subject'];
    $checkQuery = "SELECT COUNT(*) FROM admin_teacher_subject WHERE subject = ?";
    $stmtCheck = $conn->prepare($checkQuery);
    $stmtCheck->bind_param("s", $subjectToCheck);
    $stmtCheck->execute();
    $stmtCheck->bind_result($count);
    $stmtCheck->fetch();
    $stmtCheck->close();

    if ($count > 0) {
        // Subject already exists, do not insert data
        echo "Subject already exists in the database.";
        session_start();
        $_SESSION['error'] = "Subject is already exist.";
        header("location:./index.php");
    } else {
        // Subject doesn't exist, proceed with insertion
        $stmt = $conn->prepare("INSERT INTO admin_teacher_subject (name, subject, username, password) VALUES (?, ?, ?, ?)");

        $stmt->bind_param("ssss", $name, $subject, $username, $password);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Data inserted successfully.";
            session_start();
            $_SESSION['success'] = "Successfully added.";
            header("location:./index.php");
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}


if (isset($_GET['id'])) {
    # code...
    echo $teacher_id = $_GET['id'];


    // SQL query to delete data
    $sql = "DELETE FROM admin_teacher_subject WHERE id = ?";

    // Prepare the statement
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        // Bind the ID to the placeholder in the query
        $stmt->bind_param("i", $teacher_id);

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
}
