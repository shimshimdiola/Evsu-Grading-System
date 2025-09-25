<?php
include "../base/db_connection.php";

if (isset($_POST['save_subject'])) {
    echo "clicked";

    // Get the subject from the form
    echo $subject = $_POST['subject'];

    // Check if the subject already exists in the database
    $checkQuery = "SELECT COUNT(*) FROM admin_subject WHERE subject = ?";
    $stmtCheck = $conn->prepare($checkQuery);
    $stmtCheck->bind_param("s", $subject);
    $stmtCheck->execute();
    $stmtCheck->bind_result($count);
    $stmtCheck->fetch();
    $stmtCheck->close();

    if ($count > 0) {
        // Subject already exists, do not insert it
        echo "Subject already exists in the database.";
        session_start();
        $_SESSION['error'] = "Subject already exist";
        header("location:./index.php");
    } else {
        // Subject doesn't exist, proceed with insertion
        $stmt = $conn->prepare("INSERT INTO admin_subject (subject) VALUES (?)");
        $stmt->bind_param("s", $subject);

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
    echo $subject_id = $_GET['id'];


    // SQL query to delete data
    $sql = "DELETE FROM admin_subject WHERE id = ?";

    // Prepare the statement
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        // Bind the ID to the placeholder in the query
        $stmt->bind_param("i", $subject_id);

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
