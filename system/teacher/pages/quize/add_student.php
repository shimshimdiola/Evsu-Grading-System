<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Add student</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="./send_project.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleSelectRounded0">Student Name</label>
                        <select class="custom-select text-capitalize" name="student_name">
                            <?php
                            include "../base/db_connection.php";
                            // SQL query to retrieve data from the database
                            $sql = "SELECT id, firstname, lastname, middlename, year, section, subject, firstsem, secondsem, id_number, password FROM students";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    $string = $row['middlename'];
                                    $middlename = $string[0]; // Gets the first character 'H'
                                    $name = $row['lastname'] . " " . $row['firstname'] . " " . $middlename . ".";
                                    // echo "ID: " . $row["id"] . "<br>";
                                    // echo "First Name: " . $row["firstname"] . "<br>";
                                    // echo "Last Name: " . $row["lastname"] . "<br>";
                                    // echo "Middle Name: " . $row["middlename"] . "<br>";
                                    // echo "Year: " . $row["year"] . "<br>";
                                    // echo "Section: " . $row["section"] . "<br>";
                                    // echo "Subject: " . $row["subject"] . "<br>";
                                    // echo "First Semester: " . $row["firstsem"] . "<br>";
                                    // echo "Second Semester: " . $row["secondsem"] . "<br>";
                                    // echo "ID Number: " . $row["id_number"] . "<br>";
                                    // echo "Password: " . $row["password"] . "<br>";
                                    // echo "<hr>";
                            ?>
                            <option value="<?php echo $name ?>"><?php echo $name ?></option>
                            <?php
                                }
                            } else {
                                echo "No results found.";
                            }
                            // Close the database connection
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" value="Programming 001"
                                    class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dateInput">Date</label>
                                <input type="date" id="dateInput" name="date" class="form-control" readonly>
                                <script>
                                // Get the current date
                                const currentDate = new Date();

                                // Format the date as 'YYYY-MM-DD'
                                const formattedDate = currentDate.toISOString().slice(0, 10);

                                // Set the value of the input field to the current date
                                document.getElementById('dateInput').value = formattedDate;
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="items">Number of Items</label>
                                <input type="number" id="items" name="number_of_items" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="score">Score</label>
                                <input type="number" id="score" name="score" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="save_project" class="btn btn-primary">Save changes</button>
                </div>
            </form>



        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>