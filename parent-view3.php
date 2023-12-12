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

    <title>Parent View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Parent View Details 
                            <a href="view-parent3.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM parents_table WHERE id='$id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Parent First Name</label>
                                        <p class="form-control">
                                            <?=$student['firstname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Parent Middle Name</label>
                                        <p class="form-control">
                                            <?=$student['middlename'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Parent Extension Name</label>
                                        <p class="form-control">
                                            <?=$student['extensionname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Parent Birthday</label>
                                        <p class="form-control">
                                            <?=$student['birthday'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Parent Age</label>
                                        <p class="form-control">
                                            <?=$student['age'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Parent Gender</label>
                                        <p class="form-control">
                                            <?=$student['gender'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Parent Civil Status</label>
                                        <p class="form-control">
                                            <?=$student['civilstatus'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Parent Street Number</label>
                                        <p class="form-control">
                                            <?=$student['streetnumber'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Parent Address</label>
                                        <p class="form-control">
                                            <?=$student['address'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Parent Barangay</label>
                                        <p class="form-control">
                                            <?=$student['barangay'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Parent Town</label>
                                        <p class="form-control">
                                            <?=$student['town'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Parent Province</label>
                                        <p class="form-control">
                                            <?=$student['province'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Parent Zipcode</label>
                                        <p class="form-control">
                                            <?=$student['zipcode'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Student</label>
                                        <p class="form-control">
                                            <?=$student['student'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Parent LogIn ID</label>
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