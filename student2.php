<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
   <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="css/form.css" type="text/css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
    type="text/javascript"></script>
<script src="./js/validation.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

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
      <a href="changepassword.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
     
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
  </body>
  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>
<body>
  <center>
  
    <div class="content mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Add 
                            <a href="dashboard2.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="#">

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
                                <label>Parent</label>
                                <input type="text" name="parent" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label>LogIn ID</label>
                                <input type="number" name="login_id" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="#" class="btn btn-primary">Save Student</button>
                            </div>

                        </form>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
      <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>