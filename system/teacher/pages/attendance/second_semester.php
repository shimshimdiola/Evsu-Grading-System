<button class="my-3 btn-sm btn btn-primary" data-toggle="modal" data-target="#modal-lg">
    Set School Days <i class="fas fa-plus"></i>
</button>
<!-- modal -->
<?php include "./modal_student_first.php" ?>

<table id="example2" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Name</th>

            <th>Date</th>
            <th> <input type="checkbox" id="present"> Present </th>
            <th><input type="checkbox" id="absent"> Absent </th>
            <th>Action </th>
        </tr>
    </thead>
    <tbody>

        <?php
        include "../../include/db_connection.php";
        // SQL query to fetch data from a table
        $subject = $_SESSION['subject'];
        $sql = "SELECT * FROM subject WHERE subject = ' $subject'"; // Replace with your table name

        // Execute the query
        $result = $conn->query($sql);

        // Check if the query was successful
        if ($result === false) {
            die("Error: " . $conn->error);
        }

        // Fetch data and display it.
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                $id = $row['id'];
                $string = $row['middlename'];
                $middlename = $string[0]; // Gets the first character 'H'
                $name = $row['lastname'] . " " . $row['firstname'] . " " . $middlename . ".";
                // $subject = $row['subject'];
                // Replace "id" and "name" with your column names
        ?>
        <tr>

            <td class=" text-capitalize"><?php echo $name; ?></td>
            <td id="dateCell_<?php echo $id; ?>"></td>
            <script>
            // Get the current date
            const currentDate__<?php echo $id; ?> = new Date();

            // Format the date as 'YYYY-MM-DD'
            const formattedDate__<?php echo $id; ?> = currentDate__<?php echo $id; ?>
                .toISOString().slice(0, 10);

            // Set the text content of the table cell to the current date
            document.getElementById('dateCell_<?php echo $id; ?>').textContent =
                formattedDate__<?php echo $id; ?>;
            </script>
            <form action="./proccess.php" method="post">

                <td>

                    <div class="icheck-success">
                        <input type="checkbox" name="present" value="present" id="checkboxSuccess<?php echo $id; ?>">
                        <label for="checkboxSuccess<?php echo $id; ?>"></label>
                    </div>

                </td>
                <td>

                    <div class="icheck-danger">
                        <input type="checkbox" name="absent" value="present" id="checkboxdanger<?php echo $id; ?>">
                        <label for="checkboxdanger<?php echo $id; ?>">
                        </label>
                    </div>
                    <input type="text" value="<?php echo $name; ?>" name="name" class="d-none">
                    <input type="text" id="dateInput<?php echo $id; ?>" class="d-none" name="date_attendance">
                    <script>
                    // Get the current date
                    const currentDate<?php echo $id; ?> = new Date();

                    // Format the date as 'YYYY-MM-DD'
                    const formattedDate<?php echo $id; ?> =
                        currentDate<?php echo $id; ?>
                        .toISOString().slice(0, 10);

                    // Set the value of the input field to the current date
                    document.getElementById('dateInput<?php echo $id; ?>').value =
                        formattedDate<?php echo $id; ?>;
                    </script>
                </td>
                <td>
                    <button class="btn btn-sm btn-success swalDefaultSuccess save-button" type="submit"
                        name="submit_attendance">
                        <i class="fas fa-save"></i> Save
                    </button>
                </td>
            </form>
        </tr>

        <?php
            }
        } else {
            echo "No results found.";
        }
        // Close the connection when done
        $conn->close();
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Present</th>
            <th>Absent</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <script>

    </script>
</table>