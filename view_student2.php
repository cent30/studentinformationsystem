<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Data</title>
  <link rel="stylesheet" href="style2.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="ajax.js"></script>

 <body style="background-image: url(back2.jpg);">

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>STUDENT SYSTEM</h3>
      </div>
      <div class="right_area">
        <a href="index.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="admin1.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="dashboard2.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="student2.php"><i class="fas fa-desktop"></i><span>Create Student</span></a>
        <a href="view_student2.php"><i class="fas fa-desktop"></i><span>Student Report</span></a>
        <a href="view-parent2.php"><i class="fas fa-table"></i><span>Parent Report</span></a>
     <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="changepassword.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>>

      
      </div>
    </div>
    <div class="sidebar">
      <div class="profile_info">
        <img src="student2.jpg" class="profile_image" alt="">
        <h4>Student</h4>
      </div>
      <a href="dashboard2.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="student2.php"><i class="fas fa-desktop"></i><span>Create Student</span></a>
      <a href="view_student2.php"><i class="fas fa-desktop"></i><span>Student Report</span></a>
      <a href="view-parent2.php"><i class="fas fa-table"></i><span>Parent Report</span></a>
      
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="changepassword.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <body>
</head>




    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  
    <div class="content mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    	<center>
                        <h4>Student Details</h4>
                        </center>
                            <center><a href="#" class="btn btn-primary float-end">Add Students</a></center>
<form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export Data" />
      <button onclick="window.print()"class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> Print PDF</button>
    </form>

                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Extension Name</th>
                                    <th>Birthday</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Civil Status</th>
                                    <th>Street Number</th>
                                    <th>Barangay</th>
                                    <th>Town</th>
                                    <th>Province</th>
                                    <th>Zipcode</th>
                                    <th>Parent</th>
                                    <th>Login_ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM students";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $student['id']; ?></td>
                                                <td><?= $student['firstname']; ?></td>
                                                <td><?= $student['middlename']; ?></td>
                                                <td><?= $student['lastname']; ?></td>
                                                <td><?= $student['extensionname']; ?></td>
                                                <td><?= $student['birthday']; ?></td>
                                                <td><?= $student['age']; ?></td>
                                                 <td><?= $student['gender']; ?></td>
                                                  <td><?= $student['civilstatus']; ?></td>
                                                   <td><?= $student['streetnumber']; ?></td>
                                                    <td><?= $student['barangay']; ?></td>
                                                     <td><?= $student['town']; ?></td>
                                                      <td><?= $student['province']; ?></td>
                                                       <td><?= $student['zipcode']; ?></td>
                                                        <td><?= $student['parent']; ?></td>
                                                         <td><?= $student['login_id']; ?></td>
                                                <td>
                                                    <a href="student2-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="#id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>  