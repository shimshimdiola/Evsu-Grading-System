<button class="my-3 btn-sm btn btn-primary" data-toggle="modal" data-target="#modal-lg-second">
    Add Records <i class="fas fa-plus"></i>
</button>
<?php include "./modal_sudent_second.php" ?>

<table id="example2" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Subject</th>
            <th>Date Submitted</th>
            <th>Items</th>
            <th>Score</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "../base/db_connection.php";

        // SQL query to fetch data from the database
        $sql = "SELECT * FROM project WHERE semester = 2 AND subject = '$subject'";

        // Execute the query
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data from each row
            while ($row = $result->fetch_assoc()) {
                $name = $row["name"];
                $subject = $row["subject"];
                $date = $row["date"];
                $items = $row["items"];
                $score = $row["score"];

                // // Display the data (you can customize the display as needed)
                // echo "Name: $name<br>";
                // echo "Subject: $subject<br>";
                // echo "Date: $date<br>";
                // echo "Items: $items<br>";
                // echo "Score: $score<br>";
                // echo "<hr>"; // Add a horizontal line between records

        ?>
        <tr>
            <td><?php echo  $name ?></td>
            <td><?php echo  $subject ?></td>
            <td><?php echo  $date ?></td>
            <td><?php echo  $items ?></td>
            <td><b><?php echo  $score . "/" . $items ?></b></td>
            <td>
                <a href="?id=<?php echo $row['id'] ?>&name=<?php echo $name ?>&subject=<?php echo $subject ?>&date=<?php echo $date ?>&items=<?php echo $items ?>&score=<?php echo $score ?>"
                    class="mr-1 btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</a>
                <a href="./delete.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger "><i
                        class="fas fa-trash-alt"></i> Delete</a>
            </td>
        </tr>
        <?php
            }
        } else {
            echo "No records found";
        }

        // Close the database connection
        $conn->close();
        ?>


    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Subject</th>
            <th>Date Submitted</th>
            <th>Items</th>
            <th>Score</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>