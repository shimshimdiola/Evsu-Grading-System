<div class="modal fade" id="modal-lg-second">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Add student</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="./send.php" method="post">
                <div class="modal-body">
                    <input type="text" value="2" name="semester" id="" hidden>
                    <div class="form-group">
                        <label for="exampleSelectRounded0">Student Name</label>
                        <select class="custom-select text-capitalize" name="student_name" required>
                            <!-- <option value="" selected disabled>Choose..</option>    -->
                            <?php
                            include "../base/db_connection.php";
                            // SQL query to retrieve data from the database
                            $subject = $_SESSION['subject'];
                            // Query to fetch data from the table
                            $sql = "SELECT * FROM students_user 
                            WHERE subject1 = ' $subject'
                            OR subject2 = ' $subject'
                            OR subject3 = ' $subject'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Output data for each row
                                while ($row = $result->fetch_assoc()) {
                                    $name = $row['lastname'] . " " . $row['firstname'] . " " . $row['middlename'][0] . ".";
                            ?>
                            <option value="<?php echo  $name ?>"><?php echo  $name ?></option>

                            <?php
                                }
                            } else {
                                echo "No records found.";
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
                                <input type="text" id="subject" name="subject"
                                    value="<?php echo $_SESSION['subject'] ?>" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dateInput">Date</label>
                                <input type="date" id="dateInput1" name="date" class="form-control" readonly>
                                <script>
                                // Get the current date
                                const datetoday = new Date();

                                // Format the date as 'YYYY-MM-DD'
                                const formattedDate1 = datetoday.toISOString().slice(0, 10);

                                // Set the value of the input field to the current date
                                document.getElementById('dateInput1').value = formattedDate1;
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="items">Number of Items</label>
                                <input type="number" id="items" name="number_of_items" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="score">Score</label>
                                <input type="number" id="score" name="score" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="save_second_sem" class="btn btn-primary">Save changes</button>
                </div>
            </form>



        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>