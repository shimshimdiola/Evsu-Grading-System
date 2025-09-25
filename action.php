<?php

if (isset($_POST['submit'])) {
    # code...
    echo 'clicked';

    echo $first_name = $_POST['first_name'];
    echo $last_name = $_POST['last_name'];
    echo $middle_name = $_POST['middle_name'];
    echo $email = $_POST['email'];

    include "./base/db_connection.php";

    // Prepare the SQL query with placeholders
    $sql = "INSERT INTO admission (firstname, lastname, middlename, email) VALUES (?, ?, ?, ?)";

    // Create a prepared statement
    $stmt = $conn->prepare($sql);

    // Bind parameters to the prepared statement
    $stmt->bind_param("ssss", $first_name, $last_name, $middle_name, $email);

    // Execute the query
    if ($stmt->execute()) {
        echo "Data inserted successfully.";
        sleep(1);
        header("Location: ./data_pass.php?name=" . $last_name . " " . $first_name);
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $conn->close();
}
