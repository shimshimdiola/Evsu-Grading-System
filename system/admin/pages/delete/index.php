<?php
// delete data
if (isset($_GET['id']) & isset($_GET['link'])) {
    include "../base/db_connection.php";
    # code...
    echo    $id = $_GET['id'];
    echo    $link = $_GET['link'];
    // // SQL DELETE statement
    $sql = "DELETE FROM admission WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['success'] = "Deleted successfully.";
        header("location:../$link/");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}
