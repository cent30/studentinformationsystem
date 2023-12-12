<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Dashboard</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body style="background-image: url(back3.jpg);">

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
        <img src="parent.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
       <a href="dashboard3.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        
        <a href="view-student3.php"><i class="fas fa-desktop"></i><span>Student Report</span></a>
        <a href="view-parent3.php"><i class="fas fa-table"></i><span>Parent Report</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="changepassword2.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
     
      </div>
    </div>
    <div class="sidebar">
      <div class="profile_info">
        <img src="parent.jpg" class="profile_image" alt="">
        <h4>Parent</h4>
      </div>
      <a href="dashboard3.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      
      <a href="view-student3.php"><i class="fas fa-desktop"></i><span>Student Report</span></a>
      <a href="view-parent3.php"><i class="fas fa-table"></i><span>Parent Report</span></a>
        
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="changepassword2.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>

    <div class="content">
      <div class="card">
        <p>.</p>
      </div>
      <div class="card">
        <p>.</p>
      </div>
      <div class="card">
        <p>.</p>
      </div>
        <div class="card">
        <p>.</p>
      </div>
        <div class="card">
        <p>.</p>
      </div>
        <div class="card">
        <p>.</p>
      </div>
        <div class="card">
        <p>.</p>
      </div>
        <div class="card">
        <p>.</p>
      </div>
        <div class="card">
        <p>.</p>
      </div>
        <div class="card">
        <p>.</p>
      </div>
        <div class="card">
        <p>.</p>
      </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>
 
</script>

  </body>
</html>
