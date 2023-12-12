<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(back1.jpg);">
    <center>
         

         <div class="form_deg">
            <center class="title_deg">
                Login Form

                
            </center>

            <form action="login_check.php" method="POST" class="login_form">
                

                <div>
                    
                    <label class="label_deg">Username</label>
                    <input type="text" name="username">


                </div>

                 <div>
                    
                    <label class="label_deg">Password</label>
                    <input type="text" name="password">

                    
                </div>

                 <div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Login">

                    
                </div>
            </form>
         </div>
     </center>
</body>
</html>