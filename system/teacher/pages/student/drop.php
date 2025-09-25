<?php
echo 'hello';

// Retrieve the id_number from the query parameters
$id_number = $_GET['id_number'];

// Now you can use $id_number in your PHP code
echo "id_number: " . $id_number;

// SQL query to update data for a specific student and subject
$sql = "UPDATE students_user
        SET subje = '$equivalence'
        WHERE name = '$name' AND subject = '$subject'";
