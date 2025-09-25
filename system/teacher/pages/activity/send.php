<?php
include "../base/db_connection.php";
if (isset($_POST['save_first_sem'])) {
    echo "first sem clicked";
    echo $name = $_POST['student_name'];
    echo $subject = $_POST['subject'];
    echo $date = $_POST['date'];
    echo $number_of_items = $_POST['number_of_items'];
    echo $score = $_POST['score'];
    echo $semester = $_POST['semester'];

    // Use prepared statements to insert data securely
    $stmt = $conn->prepare("INSERT INTO activities (name, subject, date, items, score, semester) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $subject, $date, $number_of_items, $score, $semester);

    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . $stmt->error;
    }
    $stmt->close();
    ################################ DATA SCORE CALCULATION #############################################
    // Ensure you have your database connection code before this point
    // Retrieve data from the form submission
    include "./inser_up.php";

    // Close the database connection
    $conn->close();
}
################################################################################################
if (isset($_POST['save_second_sem'])) {
    echo "second sem clicked";
    echo "first sem clicked";
    echo $name = $_POST['student_name'];
    echo $subject = $_POST['subject'];
    echo $date = $_POST['date'];
    echo $number_of_items = $_POST['number_of_items'];
    echo $score = $_POST['score'];
    echo $semester = $_POST['semester'];
    // Use prepared statements to insert data securely
    $stmt = $conn->prepare("INSERT INTO activities (name, subject, date, items, score, semester) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $subject, $date, $number_of_items, $score, $semester);

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
