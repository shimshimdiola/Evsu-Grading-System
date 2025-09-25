<?php
include "../base/db_connection.php";
// echo $_GET['eval2'];

if (isset($_GET['eval'])) {
    // Assuming you have established a database connection
    session_start();
    echo $subject = $_SESSION['subject'];
    $semester = 1; // Specify the semester you want to fetch (1 for the first semester)

    // Fetch data from the database for the specified semester
    $sql = "SELECT * FROM partial_score WHERE subject = '$subject' AND semester = $semester";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Fetch the data for each student
            $name = $row['name'];
            $subject = $row['subject'];

            // Define the component scores from the database
            $attendanceScore = $row['attendance'];
            $activityScore = $row['activity'];
            $projectScore = $row['project'];
            $examScore = $row['exam'];
            $quizScore = $row['quiz'];

            // Define weights for each component
            $activityWeight = 0.1; // 10% for activities
            $attendanceWeight = 0.1; // 10% for attendance
            $projectWeight = 0.2; // 20% for projects
            $examWeight = 0.3; // 30% for exams
            $quizWeight = 0.3; // 30% for quizzes

            // Calculate the weighted scores for each component
            $weightedActivity = $activityWeight * $activityScore;
            $weightedAttendance = $attendanceWeight * $attendanceScore;
            $weightedProject = $projectWeight * $projectScore;
            $weightedExam = $examWeight * $examScore;
            $weightedQuiz = $quizWeight * $quizScore;

            // Calculate the GWA
            $totalWeightedScore = $weightedActivity + $weightedAttendance + $weightedProject + $weightedExam + $weightedQuiz;
            $totalWeight = $activityWeight + $attendanceWeight + $projectWeight + $examWeight + $quizWeight;
            $gwa = $totalWeightedScore / $totalWeight;

            // Define the scale mapping
            $gradeScale = array(
                "1.00" => array(96, 200),
                "1.25" => array(94, 95),
                "1.50" => array(91, 93),
                "1.75" => array(88, 90),
                "2.00" => array(85, 87),
                "2.25" => array(83, 84),
                "2.50" => array(80, 82),
                "2.75" => array(78, 79),
                "3.00" => array(75, 77),
                "5.00" => array(0, 74)  // Below 75
            );

            // Find the corresponding equivalence
            $equivalence = "5.00";  // Default to below 75

            foreach ($gradeScale as $key => $range) {
                if ($gwa >= $range[0] && $gwa <= $range[1]) {
                    $equivalence = $key;
                    break;
                }
            }

            // Display the GWA and its equivalence for each student
            echo "Student Name: $name<br>";
            echo "Subject: $subject<br>";
            echo "Grade Weighted Average (GWA): " . number_format($gwa, 2) . "<br>";
            echo "Equivalence: $equivalence<br><br>";
            ###########################
            // SQL query to update data for Math subject
            $sql = "UPDATE subject
         SET grade_first_semester = '$equivalence'
         WHERE name = '$name' AND subject = ' $subject'";

            if ($conn->query($sql) === TRUE) {
                echo "Data updated successfully for $name in subject $subject (Semester $semester).<br>";
                sleep(1);
                session_start();
                $_SESSION['success'] = 'Successfully Evaluated.';
                header("location:./grades.php");
            } else {
                echo "Error updating data: " . $conn->error . "<br>";
            }
        }
    } else {
        echo "No data found for students in semester $semester.";
    }

    // Close the database connection
    $conn->close();
}



if (isset($_GET['eval2'])) {
    // Assuming you have established a database connection
    session_start();
    echo $subject = $_SESSION['subject'];
    $semester = 2; // Specify the semester you want to fetch (1 for the first semester)

    // Fetch data from the database for the specified semester
    $sql = "SELECT * FROM partial_score WHERE subject = '$subject' AND semester = $semester";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Fetch the data for each student
            $name = $row['name'];
            $subject = $row['subject'];

            // Define the component scores from the database
            $attendanceScore = $row['attendance'];
            $activityScore = $row['activity'];
            $projectScore = $row['project'];
            $examScore = $row['exam'];
            $quizScore = $row['quiz'];

            // Define weights for each component
            $activityWeight = 0.1; // 10% for activities
            $attendanceWeight = 0.1; // 10% for attendance
            $projectWeight = 0.2; // 20% for projects
            $examWeight = 0.3; // 30% for exams
            $quizWeight = 0.3; // 30% for quizzes

            // Calculate the weighted scores for each component
            $weightedActivity = $activityWeight * $activityScore;
            $weightedAttendance = $attendanceWeight * $attendanceScore;
            $weightedProject = $projectWeight * $projectScore;
            $weightedExam = $examWeight * $examScore;
            $weightedQuiz = $quizWeight * $quizScore;

            // Calculate the GWA
            $totalWeightedScore = $weightedActivity + $weightedAttendance + $weightedProject + $weightedExam + $weightedQuiz;
            $totalWeight = $activityWeight + $attendanceWeight + $projectWeight + $examWeight + $quizWeight;
            $gwa = $totalWeightedScore / $totalWeight;

            // Define the scale mapping
            $gradeScale = array(
                "1.00" => array(96, 200),
                "1.25" => array(94, 95),
                "1.50" => array(91, 93),
                "1.75" => array(88, 90),
                "2.00" => array(85, 87),
                "2.25" => array(83, 84),
                "2.50" => array(80, 82),
                "2.75" => array(78, 79),
                "3.00" => array(75, 77),
                "5.00" => array(0, 74)  // Below 75
            );

            // Find the corresponding equivalence
            $equivalence = "5.00";  // Default to below 75

            foreach ($gradeScale as $key => $range) {
                if ($gwa >= $range[0] && $gwa <= $range[1]) {
                    $equivalence = $key;
                    break;
                }
            }

            // Display the GWA and its equivalence for each student
            echo "Student Name: $name<br>";
            echo "Subject: $subject<br>";
            echo "Grade Weighted Average (GWA): " . number_format($gwa, 2) . "<br>";
            echo "Equivalence: $equivalence<br><br>";
            ###########################
            // SQL query to update data for Math subject
            $sql = "UPDATE subject
         SET grade_second_semester = '$equivalence'
         WHERE name = '$name' AND subject = ' $subject'";

            if ($conn->query($sql) === TRUE) {
                echo "Data updated successfully for $name in subject $subject (Semester $semester).<br>";
                sleep(1);
                session_start();
                $_SESSION['success'] = 'Successfully Evaluated.';
                header("location:./grades.php");
            } else {
                echo "Error updating data: " . $conn->error . "<br>";
            }
        }
    } else {
        echo "No data found for students in semester $semester.";
    }

    // Close the database connection
    $conn->close();
}
