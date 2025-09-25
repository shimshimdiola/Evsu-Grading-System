<?php
include "../base/db_connection.php";

if (isset($_POST['submit_attendance'])) {
    # code...
    // Assuming $id contains a valid value


    // Use double curly braces to enclose $id within double-quoted string
    // echo $present = $_POST["input"];


    // Retrieve data from POST
    $date = $_POST['date_attendance'];
    $name = $_POST['name'];
    $present = isset($_POST["present"]) ? "PRESENT" : "";
    $absent = isset($_POST["absent"]) ? "ABSENT" : "";

    // Check if a record with the same name and date already exists in the database
    $checkStmt = $conn->prepare("SELECT COUNT(*) FROM attendance WHERE name = ? AND date = ?");
    $checkStmt->bind_param("ss", $name, $date);
    $checkStmt->execute();
    $checkStmt->bind_result($count);
    $checkStmt->fetch();
    $checkStmt->close();

    if ($count > 0) {
        echo "Record with the same name and date already exists.";
        sleep(1);
        session_start();
        $_SESSION['error'] = 'Recorded already exist.';
        header("location:./attendance.php");
    } else {
        session_start();
        $subject = $_SESSION['subject'];
        // Prepare and bind the SQL statement for insertion
        $stmt = $conn->prepare("INSERT INTO attendance (name, date, present, absent, subject) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $date, $present, $absent, $subject);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Data inserted successfully.";
            sleep(1);
            session_start();
            $_SESSION['success'] = 'Recorded.';
            header("location:./attendance.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    }

    // Close the database connection
    $conn->close();
}
