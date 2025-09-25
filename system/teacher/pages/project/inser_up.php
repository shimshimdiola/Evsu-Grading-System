<?php
$name = $_POST['student_name'];
$subject = $_POST['subject'];
$semester = $_POST['semester'];
$activityToAdd = $_POST['score']; // Assuming 'activity' is from your form

// Check if a record with the same name, subject, and semester exists
$sql_check = "SELECT project FROM partial_score 
              WHERE name = '$name' 
              AND subject = '$subject'
              AND semester = '$semester'";

$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    // A record with the same name, subject, and semester exists
    $row = $result->fetch_assoc();
    $existingActivity = $row['project'];

    // Calculate the new activity value by adding the input activity to the existing one
    $newActivity = $existingActivity + $activityToAdd;

    // SQL query to update the 'activity' field
    $sql = "UPDATE partial_score 
            SET 
            project = $newActivity
            WHERE 
                name = '$name' 
                AND subject = '$subject'
                AND semester = '$semester'";

    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully. New activity value: " . $newActivity;
        session_start();
        $_SESSION['success'] = 'Successfully added.';
        header("location:./project.php");
    } else {
        echo "Error updating data: " . $conn->error;
    }
} else {
    // No existing record found, so insert a new one with the input activity
    $sql = "INSERT INTO partial_score (name, subject, project, semester) 
            VALUES ('$name', '$subject', $activityToAdd, '$semester')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully. New activity value: " . $activityToAdd;
        session_start();
        $_SESSION['success'] = 'Successfully added.';
        header("location:./project.php");
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}
