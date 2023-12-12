<?php
require 'db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Admin View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Admin View Details 
                            <a href="admin_report.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM admin_table WHERE id='$id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Admin First Name</label>
                                        <p class="form-control">
                                            <?=$student['firstname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Admin Middle Name</label>
                                        <p class="form-control">
                                            <?=$student['middlename'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Admin Extension Name</label>
                                        <p class="form-control">
                                            <?=$student['extensionname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Admin Birthday</label>
                                        <p class="form-control">
                                            <?=$student['birthday'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Admin Age</label>
                                        <p class="form-control">
                                            <?=$student['age'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Admin Gender</label>
                                        <p class="form-control">
                                            <?=$student['gender'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Admin Civil Status</label>
                                        <p class="form-control">
                                            <?=$student['civilstatus'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Admin Street Number</label>
                                        <p class="form-control">
                                            <?=$student['streetnumber'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Admin Barangay</label>
                                        <p class="form-control">
                                            <?=$student['barangay'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Admin Town</label>
                                        <p class="form-control">
                                            <?=$student['town'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Admin Province</label>
                                        <p class="form-control">
                                            <?=$student['province'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Admin Zipcode</label>
                                        <p class="form-control">
                                            <?=$student['zipcode'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Student ID</label>
                                        <p class="form-control">
                                            <?=$student['student_id'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Admin LogIn ID</label>
                                        <p class="form-control">
                                            <?=$student['login_id'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>