<?php
if (isset($_POST['save'])) {
    session_start();
    echo $name = $_SESSION['id_number'];
    $targetDirectory = "../pages/uploads/"; // Define the directory where you want to store uploaded images.

    $targetFile = $targetDirectory . basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the uploaded file is an image
    $check = getimagesize($_FILES['image']['tmp_name']);
    if ($check === false) {
        echo "File is not an image.";
        exit;
    }

    // Check file size (you can set your own maximum file size)
    if ($_FILES['image']['size'] > 50000000000) { // 5 MB
        echo "Sorry, your file is too large.";
        exit;
    }

    // Allow certain file formats (you can add more as needed)
    $allowedFormats = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        exit;
    }

    // Generate a unique filename to prevent overwriting existing files
    $newFileName = uniqid() . '.' . $imageFileType;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetDirectory . $newFileName)) {
        echo "The file " . $newFileName . " has been uploaded.";
        // Update the user's profile in your database with the new image file name.
        // Example database update code goes here.

        include "../../../base/db_connection.php";
        // SQL query to update the user's profile based on user_id
        $sql = "INSERT INTO profile (name, avatar) VALUES (?, ?) ";

        // Prepare the statement
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            // Bind parameters
            $stmt->bind_param("ss", $name, $newFileName);

            // Execute the update statement
            if ($stmt->execute()) {
                echo "Profile updated successfully.";
                session_start();
                $_SESSION['success'] = "Successfuly save";
                header("location:../");
            } else {
                echo "Error updating profile: " . $conn->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error preparing the update statement: " . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



if (isset($_POST['update'])) {
    session_start();
    echo $name = $_SESSION['id_number'];
    $targetDirectory = "../pages/uploads/"; // Define the directory where you want to store uploaded images.

    $targetFile = $targetDirectory . basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the uploaded file is an image
    $check = getimagesize($_FILES['image']['tmp_name']);
    if ($check === false) {
        echo "File is not an image.";
        exit;
    }

    // Check file size (you can set your own maximum file size)
    if ($_FILES['image']['size'] > 50000000000) { // 5 MB
        echo "Sorry, your file is too large.";
        exit;
    }

    // Allow certain file formats (you can add more as needed)
    $allowedFormats = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        exit;
    }

    // Generate a unique filename to prevent overwriting existing files
    $newFileName = uniqid() . '.' . $imageFileType;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetDirectory . $newFileName)) {
        echo "The file " . $newFileName . " has been uploaded.";
        // Update the user's profile in your database with the new image file name.
        // Example database update code goes here.

        include "../../../base/db_connection.php";
        // SQL query to update the user's profile based on user_id
        $sql = "UPDATE profile SET name = ?, avatar = ? WHERE name = ?";
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            // Bind parameters
            $stmt->bind_param("sss", $name, $newFileName, $name);

            // Execute the update statement
            if ($stmt->execute()) {
                echo "Profile updated successfully.";
                session_start();
                $_SESSION['success'] = "Successfuly Updated";
                header("location:../");
            } else {
                echo "Error updating profile: " . $conn->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error preparing the update statement: " . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
