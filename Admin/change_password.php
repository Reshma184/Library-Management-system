<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <title>Admin Dashboard</title>  
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="navbar-brand" href="index.php">Library Management System</a>
            </div>
           
           <ul class="nav navbar-nav navbar-right">

           <li class="nav-item dropdown">
          
           <a class="nav-link dropdown-toggle" data-toggle= "dropdown">My Profile</a>
               <div class="dropdown-menu">
                <a class="dropdown-item" href="view_profile.php">View Profile</a>
                <a class="dropdown-item" href="edit_profile.php" >Edit Profile</a>
                <a class="dropdown-item" href="change_password.php">Change Password</a>
               </div>

          <li class="nav-item"><a  class="nav-link" href="logout.php">Logout</a></li>
           </ul>    
        </div>
    </nav><br>
    <span><marquee>This is library Management System</marquee></span><br><br>
   <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <form action="update_password.php">
                <div class="form-group">
                    <label>Enter Current Password:</label>
                    <input type="password" name="old_password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Enter New Password:</label>
                    <input type="password" name="new_password" class="form-control">
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update Password</button>
            </form>
          </div>
          <div class="col-md-4"></div>     
    </div>
</body>
</html>