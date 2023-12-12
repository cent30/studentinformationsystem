<?php
session_start();
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

    <title>Student Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Parents Edit 
                            <a href="view_parent.php" class="btn btn-danger float-end">BACK</a>
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
                                <form action="code2.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                <label>First Name</label>
                                <input type="text" name="firstname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Middle Name</label>
                                <input type="text" name="middlename" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Last Name</label>
                                <input type="text" name="lastname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Extend Name</label>
                                <input type="text" name="extensionname" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label>Birthday</label>
                                <input type="date" name="birthday" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label>Age</label>
                                <input type="number" name="age" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label>Gender</label>
                                <input type="text" name="gender" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label>Civil Status</label>
                                <input type="text" name="civilstatus" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label>Street Number</label>
                                <input type="number" name="streetnumber" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label>Barangay</label>
                                <input type="text" name="barangay" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label>Town</label>
                                <input type="text" name="town" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label>Province</label>
                                <input type="text" name="province" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label>Zipcode</label>
                                <input type="number" name="zipcode" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label>Student</label>
                                <input type="text" name="student" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label>LogIn ID</label>
                                <input type="number" name="login_id" class="form-control">
                            </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_parent" class="btn btn-primary">
                                            Update Student
                                        </button>
                                    </div>

                                </form>
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