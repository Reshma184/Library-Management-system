<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
<script type="text/javascript" src="../bootstrap-4.4.1/js/.js/juquery_latest.js"></script>
<script type="text/javascript" src="../bootstrap-4.4.1/js/.js/bootstrap.min.js"></script>
</head>
<style type="text/css"></style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="navbar-brand" href="index.php">Library Management System</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Admin Login</a>
                     </li>
                   <li class="nav-item">
                        <a class="nav-link" href="../index.php">User Login</a>
                   </li> 
                   <li class="nav-item">
                        <a class="nav-link" href="../signup.php">Register</a>
                   </li>


            </ul>
        </div>
    </nav><br>
    <span><marquee>This is library Management System</marquee></span><br><br>
   <div class="col-md-8" id="main_content">
       <center><h3>Admin Login Form</h3></center>
       <form action="" method="post">
          

          <div class="form-group">
             <label for="name">Email ID:</label>
             <input type="text" name="email" class="form-control" required>
          </div>

        <div class="form-group">
             <label for="name">Password:</label>
             <input type="text" name="password" class="form-control" required>
          </div>

             <button type="submit" name="login" class="btn btn-primary">Login</button>

       </form>
       <?php
        session_start();
       if(isset($_POST['login'])){
           
            $connection = mysqli_connect("localhost","root","","lms");
            $db = mysqli_select_db($connection,"lms");
            $query ="select * from admins where email = '$_POST[email]'";
            $query_run = mysqli_query($connection,$query);  
            while($row = mysqli_fetch_assoc($query_run)){
                if($row['email'] == $_POST['email']){
                    if($row['password']== $_POST['password']){
                        $_SESSION['name'] =$row['name'];
                        $_SESSION['email'] =$row['email'];
                        header("Location:admin_dashboard.php");
                    }
                    else{
                       ?>
                       <br><br><center><span class="alert-danger">Wrong Password</span></center>
                       <?php
                    }
                }
                
            }
       }
       ?>
   </div>
    
</body>
</html>
