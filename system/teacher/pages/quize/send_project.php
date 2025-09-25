<?php
if (isset($_POST['save_project'])) {
    # code...
    include "../base/db_connection.php";
    echo "clicked";
    // Retrieve data from the form
    $studentName = $_POST["student_name"];
    $subject = $_POST["subject"];
    $date = $_POST["date"];
    $numberOfItems = $_POST["number_of_items"];
    $score = $_POST["score"];

    // 60%
    echo $weight = $score  * 0.4;
    $quiz = 'quiz';
    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO gwa (name, subject, record ,weight_score) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $studentName, $subject, $quiz, $weight);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement and the database connection
    $stmt->close();

    // Now you can use the retrieved data as needed
    echo "Student Name: " . $studentName . "<br>";
    echo "Subject: " . $subject . "<br>";
    echo "Date: " . $date . "<br>";
    echo "Number of Items: " . $numberOfItems . "<br>";
    echo "Score: " . $score . "<br>";
    // Insert data into the database
    $sql = "INSERT INTO Quiz (name, subject, date, item, score) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $studentName, $subject, $date, $numberOfItems, $score);

    if ($stmt->execute()) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}


// // Scores for each activity
// $activity1Score = 10;
// $activity2Score = 10;
// $activity3Score = 10;

// // Maximum possible score for each activity
// $maxScorePerActivity = 20;

// // Calculate the total score for all activities
// $totalScore = $activity1Score + $activity2Score + $activity3Score;

// // Calculate the maximum possible total score for all activities
// $maxTotalScore = 3 * $maxScorePerActivity;

// // Calculate the weighted score for each activity
// $weightedScore1 = ($activity1Score / $maxScorePerActivity) * 0.2;
// $weightedScore2 = ($activity2Score / $maxScorePerActivity) * 0.2;
// $weightedScore3 = ($activity3Score / $maxScorePerActivity) * 0.2;

// // Calculate the overall score
// $overallScore = $weightedScore1 + $weightedScore2 + $weightedScore3;

// // Convert the overall score to a percentage
// $overallPercentage = $overallScore * 100;

// // Display the results
// echo "Activity 1 Weighted Score: $weightedScore1<br>";
// echo "Activity 2 Weighted Score: $weightedScore2<br>";
// echo "Activity 3 Weighted Score: $weightedScore3<br>";
// echo "Overall Score: $overallScore<br>";
// echo "Overall Percentage: $overallPercentage%<br>";