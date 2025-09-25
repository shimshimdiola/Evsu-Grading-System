<?php
if (isset($_POST['save_response'])) {
    echo 'clicked';
    echo $email = $_POST['email'];
    echo $id = $_POST['id'];
    include "../base/db_connection.php";
    if (
        !isset($_POST['firstname']) || empty($_POST['firstname']) ||
        !isset($_POST['lastname']) || empty($_POST['lastname']) ||
        !isset($_POST['middlename']) || empty($_POST['middlename']) ||
        !isset($_POST['id_number']) || empty($_POST['id_number']) ||
        !isset($_POST['password']) || empty($_POST['password'])
    ) {
        echo "Select student data";
    } else {
        // All fields are set and not empty, so you can use them as needed.
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $middlename = $_POST['middlename'];
        $section = $_POST['section'];
        $id_number = $_POST['id_number'];
        $password = $_POST['password'];
        $subject1 = $_POST['subject1'];
        $subject2 = $_POST['subject2'];
        $subject3 = $_POST['subject3'];
        // Create a prepared statement
        $stmt = $conn->prepare("INSERT INTO students_user (firstname, lastname, middlename, subject1, subject2, subject3, id_number, password, email, section) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Bind parameters and execute the statement
        $stmt->bind_param("ssssssssss", $firstname, $lastname, $middlename, $subject1, $subject2, $subject3, $id_number, $password, $email, $section);

        if ($stmt->execute()) {
            echo "Data inserted successfully.";
        } else {

            echo "Error: " . $stmt->error;
        }

        // Close the prepared statement and database connection
        $stmt->close();
    }


    //subject 1
    if (!isset($_POST['subject1']) || empty($_POST['subject1'])) {
        echo "provide subject 1";
    } else {
        echo  $id_number = $_POST['id_number'];
        echo  $section = $_POST['section'];
        echo  $subject1 = $_POST['subject1'];
        echo  $firstname = $_POST['firstname'];
        echo  $lastname = $_POST['lastname'];
        echo  $middlename = $_POST['middlename'];
        $name = $lastname . " " . $firstname . " " . $middlename[0] . ".";
        // Create a prepared statement 
        $stmt = $conn->prepare("INSERT INTO subject (name, firstname, lastname, middlename, id_number, section, subject) VALUES (?, ?, ?, ?, ?, ?, ?)");

        // Bind parameters and execute the statement
        $stmt->bind_param("sssssss", $name, $firstname, $lastname, $middlename, $id_number, $section, $subject1);

        if ($stmt->execute()) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the prepared statement and database connection
        $stmt->close();
    }    //subject 2
    if (!isset($_POST['subject2']) || empty($_POST['subject2'])) {
        echo "provide subject 2";
    } else {
        echo    $id_number = $_POST['id_number'];
        echo  $section = $_POST['section'];
        echo  $subject2 = $_POST['subject2'];
        echo  $firstname = $_POST['firstname'];
        echo  $lastname = $_POST['lastname'];
        echo  $middlename = $_POST['middlename'];
        // Create a prepared statement 
        $name = $lastname . " " . $firstname . " " . $middlename[0] . ".";
        // Create a prepared statement 
        $stmt = $conn->prepare("INSERT INTO subject (name, firstname, lastname, middlename, id_number, section, subject) VALUES (?, ?, ?, ?, ?, ?, ?)");

        // Bind parameters and execute the statement
        $stmt->bind_param("sssssss", $name, $firstname, $lastname, $middlename, $id_number, $section, $subject2);

        if ($stmt->execute()) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the prepared statement and database connection
        $stmt->close();
    }    //subject 3
    if (!isset($_POST['subject3']) || empty($_POST['subject3'])) {
        echo "provide subject 3";
    } else {
        echo  $id_number = $_POST['id_number'];
        echo  $section = $_POST['section'];
        echo  $subject3 = $_POST['subject3'];
        echo  $firstname = $_POST['firstname'];
        echo  $lastname = $_POST['lastname'];
        echo  $middlename = $_POST['middlename'];
        // Create a prepared statement 
        $name = $lastname . " " . $firstname . " " . $middlename[0] . ".";
        // Create a prepared statement 
        $stmt = $conn->prepare("INSERT INTO subject (name, firstname, lastname, middlename, id_number, section, subject) VALUES (?, ?, ?, ?, ?, ?, ?)");

        // Bind parameters and execute the statement
        $stmt->bind_param("sssssss", $name, $firstname, $lastname, $middlename, $id_number, $section, $subject3);

        if ($stmt->execute()) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the prepared statement and database connection
        $stmt->close();
    }

    // mail 
    echo "<br>";
    if (!isset($_POST['id_number']) || empty($_POST['id_number'])) {
        echo "provide id_number adn password";
    } else {
        echo  $id_number = $_POST['id_number'];
        echo  $password = $_POST['password'];
        echo  $email = $_POST['email'];

        // Close the prepared statement and database connection
        include "./mailer.php";
    }


    echo "<br>";
    if (!isset($_POST['id']) || empty($_POST['id'])) {
        echo "provide id .";
        session_start();
        $_SESSION['error'] = "Select Student Data first";
        header("location:./index.php");
    } else {
        $sql = "DELETE FROM admission WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            session_start();
            $_SESSION['success'] = "Successfuly verified";
            header("location:./index.php");
            echo "Record with ID $id has been deleted successfully.";
        } else {

            echo "Error: " . $conn->error;
        }
    }



    $conn->close();
}
