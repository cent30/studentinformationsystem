<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civil Status Information</title>
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

 
  <body style="background-image: url(back1.jpg);">

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
        <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="student.php"><i class="fas fa-desktop"></i><span>Create Student</span></a>
        <a href="view_student.php"><i class="fas fa-desktop"></i><span>Student Report</span></a>
        <a href="parent.php"><i class="fas fa-table"></i><span>Create Parent</span></a>
        <a href="view_parent.php"><i class="fas fa-table"></i><span>Parent Report</span></a>
        <a href="gender.php"><i class="fas fa-th"></i><span>Manage Gender</span></a>
        <a href="view_gender.php"><i class="fas fa-th"></i><span>Gender Report</span></a>
        <a href="civil_status.php"><i class="fas fa-th"></i><span>Manage Civil Status</span></a>
         <a href="view_civil_status.php"><i class="fas fa-th"></i><span>Civil Status Report</span></a>
 <a href="address.php"><i class="fas fa-th"></i><span>Address Management</span></a>
          <div class="dropdown-container">
    <a href="barangay.php">*Barangay*</a>
    <a href="town.php">*Town*</a>
    <a href="province.php">*Province*</a>
  </div>
        <a href="admin.php"><i class="fas fa-th"></i><span>Admin Management</span></a>
        <a href="admin_report.php"><i class="fas fa-th"></i><span>Admin Report</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <div class="sidebar">
      <div class="profile_info">
        <img src="admin1.jpg" class="profile_image" alt="">
        <h4>Admin</h4>
      </div>
      <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="student.php"><i class="fas fa-desktop"></i><span>Create Student</span></a>
      <a href="view_student.php"><i class="fas fa-desktop"></i><span>Student Report</span></a>
      <a href="parent.php"><i class="fas fa-table"></i><span>Create Parent</span></a>
      <a href="view_parent.php"><i class="fas fa-table"></i><span>Parent Report</span></a>
      <a href="gender.php"><i class="fas fa-th"></i><span>Manage Gender</span></a>
      <a href="view_gender.php"><i class="fas fa-th"></i><span>Gender Report</span></a>
      <a href="civil_status.php"><i class="fas fa-th"></i><span>Manage Civil Status</span></a>
      <a href="view_civil_status.php"><i class="fas fa-th"></i><span>Civil Status Report</span></a>
       <a href="address.php"><i class="fas fa-th"></i><span>Address Management</span></a>
          <div class="dropdown-container">
    <a href="barangay.php">*Barangay*</a>
    <a href="town.php">*Town*</a>
    <a href="province.php">*Province*</a>
  </div>
        <a href="admin.php"><i class="fas fa-th"></i><span>Admin Management</span></a>
        <a href="admin_report.php"><i class="fas fa-th"></i><span>Admin Report</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
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

    <title>Status Create</title>
</head>
<body>
  <center>
  
    <div class="content mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Civil Status 
                            <a href="dashboard.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code5.php" method="POST">

                            <div class="mb-3">
                                <label>Civil Status Name</label>
                                <input type="text" name="civil_status_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Date Created</label>
                                <input type="date" name="date_created" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <button type="submit" name="save_status" class="btn btn-primary">Save Gender</button>
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