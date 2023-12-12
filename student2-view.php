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

    <title>Student View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student View Details 
                            <a href="view_student2.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM students WHERE id='$id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Student First Name</label>
                                        <p class="form-control">
                                            <?=$student['firstname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Middle Name</label>
                                        <p class="form-control">
                                            <?=$student['middlename'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Extension Name</label>
                                        <p class="form-control">
                                            <?=$student['extensionname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Birthday</label>
                                        <p class="form-control">
                                            <?=$student['birthday'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Student Age</label>
                                        <p class="form-control">
                                            <?=$student['age'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Student Gender</label>
                                        <p class="form-control">
                                            <?=$student['gender'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Student Civil Status</label>
                                        <p class="form-control">
                                            <?=$student['civilstatus'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Student Street Number</label>
                                        <p class="form-control">
                                            <?=$student['streetnumber'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Student Barangay</label>
                                        <p class="form-control">
                                            <?=$student['barangay'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Student Town</label>
                                        <p class="form-control">
                                            <?=$student['town'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Student Province</label>
                                        <p class="form-control">
                                            <?=$student['province'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Student Zipcode</label>
                                        <p class="form-control">
                                            <?=$student['zipcode'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Student Parent</label>
                                        <p class="form-control">
                                            <?=$student['parent'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Student LogIn ID</label>
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