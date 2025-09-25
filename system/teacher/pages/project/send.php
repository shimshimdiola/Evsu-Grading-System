<?php
include "../base/db_connection.php";
if (isset($_POST['save_project_firstsem'])) {
    # code...
    echo "clicked first semester";
    echo $student_name = $_POST['student_name'];
    echo $subject = $_POST['subject'];
    echo $date = $_POST['date'];
    echo $items = $_POST['items'];
    echo $score = $_POST['score'];
    echo $semester = $_POST['semester'];
    // Use prepared statements to insert data securely
    $stmt = $conn->prepare("INSERT INTO project (name, subject, date, items, score, semester) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $student_name, $subject, $date, $items, $score, $semester);

    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    // Close the prepared statement and the database connection
    $stmt->close();
    include "./inser_up.php";
    $conn->close();
}
if (isset($_POST['save_project_secondsem'])) {
    # code...
    echo "clicked second semester";
    echo $student_name = $_POST['student_name'];
    echo $subject = $_POST['subject'];
    echo $date = $_POST['date'];
    echo $items = $_POST['items'];
    echo $score = $_POST['score'];
    echo $semester = $_POST['semester'];
    // Use prepared statements to insert data securely
    $stmt = $conn->prepare("INSERT INTO project (name, subject, date, items, score, semester) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $student_name, $subject, $date, $items, $score, $semester);

    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    // Close the prepared statement and the database connection
    $stmt->close();
    include "./inser_up.php";
    $conn->close();
}
