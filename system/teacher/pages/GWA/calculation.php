<?php
// Include the database connection file
include "../base/db_connection.php";

// Query to fetch data from the students table
$sqlStudents = "SELECT firstname, lastname, middlename, year, section, subject, firstsem, secondsem FROM students";
$resultStudents = $conn->query($sqlStudents);

if ($resultStudents->num_rows > 0) {
    // Iterate through each student record
    while ($rowStudent = $resultStudents->fetch_assoc()) {
        echo "First Name: " . $rowStudent["firstname"] . "<br>";
        echo "Last Name: " . $rowStudent["lastname"] . "<br>";
        echo "Middle Name: " . $rowStudent["middlename"] . "<br>";
        echo "Year: " . $rowStudent["year"] . "<br>";
        echo "Section: " . $rowStudent["section"] . "<br>";
        echo "Subject: " . $rowStudent["subject"] . "<br>";
        echo "First Semester: " . $rowStudent["firstsem"] . "<br>";
        echo "Second Semester: " . $rowStudent["secondsem"] . "<br>";

        $string = $rowStudent['middlename'];
        $middlename = $string[0]; // Gets the first character 'H'
        $name = $rowStudent['lastname'] . " " . $rowStudent['firstname'] . " " . $middlename . ".";

        // Initialize variables to store the sum of weighted scores for each type of record
        $totalWeightedScoreProject = 0;
        $totalWeightedScoreActivity = 0;
        $totalWeightedScoreQuiz = 0;

        // Query to fetch and sum the weight_score values for 'project' records
        $sqlProject = "SELECT SUM(weight_score) AS total_weight_score FROM gwa WHERE name = '$name' AND record = 'project'";
        $resultProject = $conn->query($sqlProject);

        if ($resultProject->num_rows > 0) {
            $row = $resultProject->fetch_assoc();
            $totalWeightedScoreProject = $row["total_weight_score"];
        }

        // Query to fetch and sum the weight_score values for 'activity' records
        $sqlActivity = "SELECT SUM(weight_score) AS total_weight_score FROM gwa WHERE name = '$name' AND record = 'activity'";
        $resultActivity = $conn->query($sqlActivity);

        if ($resultActivity->num_rows > 0) {
            $row = $resultActivity->fetch_assoc();
            $totalWeightedScoreActivity = $row["total_weight_score"];
        }

        // Query to fetch and sum the weight_score values for 'quiz' records
        $sqlQuiz = "SELECT SUM(weight_score) AS total_weight_score FROM gwa WHERE name = '$name' AND record = 'quiz'";
        $resultQuiz = $conn->query($sqlQuiz);

        if ($resultQuiz->num_rows > 0) {
            $row = $resultQuiz->fetch_assoc();
            $totalWeightedScoreQuiz = $row["total_weight_score"];
        }

        // Calculate the GWA based on the sum of weighted scores for each type of record
        $totalWeightedScores = $totalWeightedScoreProject + $totalWeightedScoreActivity + $totalWeightedScoreQuiz;
        $totalWeight = 0.4 + 0.3 + 0.2; // Adjust weights as needed

        if ($totalWeight > 0) {
            $gwa = $totalWeightedScores / $totalWeight;
            echo "Total GWA for '$name': " . $gwa . "<br>";
        } else {
            echo "No records found for '$name'.<br>";
        }
    }
} else {
    echo "No student records found.";
}

// Close the database connection
$conn->close();
?>