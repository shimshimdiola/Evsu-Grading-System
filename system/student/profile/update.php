<aside class="control-sidebar control-sidebar-dark" style="height: 320px;">
    <!-- Control sidebar content goes here -->
    <div class=" p-2 container text-center">
        <div class="row">
            <div class="col">
                <button class="btn btn-sm  btn-success" data-widget="control-sidebar" data-slide="true"> <i class="fas fa-minus-circle"></i> Cancel</button>
                <a href="./logout.php" class="btn btn-sm  btn-danger"> <i class="fas fa-power-off"></i> Logout</a>
            </div>
        </div>
        <hr>

        <style>
            .position-relative {
                display: inline-block;
                position: relative;
            }

            .camera-icon {
                position: absolute;
                bottom: 5px;
                right: 5px;
                width: 30px;
                /* Equal width and height for a circular background */
                height: 30px;
                background: grey;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                box-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
            }

            #selectedImage {
                width: 150px;
                height: 150px;
                max-width: 100%;
            }
        </style>

        <form action="./profile/update_profile.php" method="post" enctype="multipart/form-data">
            <div class="form-group text-center">
                <div class="position-relative">
                    <img id="selectedImage" class="img-thumbnail img-circle" src="./pages/uploads/<?php
                                                                                                    include "../../base/db_connection.php";
                                                                                                    // session_start();
                                                                                                    $nameToSearch = $_SESSION['id_number'];
                                                                                                    $sql = "SELECT * FROM profile WHERE name = ?";

                                                                                                    // Prepare the statement
                                                                                                    $stmt = $conn->prepare($sql);
                                                                                                    if ($stmt) {
                                                                                                        // Bind parameter
                                                                                                        $stmt->bind_param("s", $nameToSearch);

                                                                                                        // Execute the SELECT statement
                                                                                                        $stmt->execute();

                                                                                                        // Get the result set
                                                                                                        $result = $stmt->get_result();

                                                                                                        // Fetch and display the data
                                                                                                        while ($row = $result->fetch_assoc()) {

                                                                                                            echo $row["avatar"];
                                                                                                        }

                                                                                                        // Close the statement
                                                                                                        $stmt->close();
                                                                                                    } else {
                                                                                                        echo "Error preparing the SELECT statement: " . $conn->error;
                                                                                                    }

                                                                                                    // Close the database connection
                                                                                                    $conn->close();
                                                                                                    ?>" alt="Selected Image">
                    <label for="profilePicture" class="camera-icon" data-toggle="tooltip" data-placement="right" title="Change Profile Picture">
                        <i class="fas fa-camera"></i>
                    </label>
                    <input type="file" class="form-control-file d-none" name="image" id="profilePicture" accept="image/*" required>

                </div>

                <p> <strong class=" text-uppercase"><?php
                                                    echo  $_SESSION['full_name'] ?></strong></p>

            </div>
            <hr>
            <div class="d-flex justify-content-end">

                <button class="btn btn-sm btn-success mx-2" name="save" type="submit"> <i class="fas fa-save"></i>
                    Save</button>
                <button class="btn btn-sm btn-primary " name="update" type="submit"> <i class="fas fa-upload"></i>
                    Update</button>

            </div>
        </form>





    </div>


</aside>