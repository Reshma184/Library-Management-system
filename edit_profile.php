<?php
session_start(); 
$connection = mysqli_connect("localhost","root","","lms");
$db = mysqli_select_db($connection,"lms");
$name ="";
$email ="";
$mobile ="";
$address ="";
$query ="select * from users where email = '$_SESSION[email]'";
$query_run = mysqli_query($connection,$query);  
while($row = mysqli_fetch_assoc($query_run)){
     $name = $row['name'];
     $email = $row['email'];
     $mobile = $row['mobile']; 
     $address = $row['address'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  

 
    <title>User Dashboard</title>

    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="navbar-brand" href="user_dashboard.php">Library Management System</a>
            </div>
           <font style="color: white"><span><strong>welcome: <?php echo $_SESSION['name'];?></strong></span></font>
           <font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
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
            <form action="update.php" method="post">
                <div class="form-group">
                     <label>Name:</label>
                     <input type="text" class="form-control" value="<?php echo $name;?>"
                     name="name">
                </div>
                <div class="form-group">
                     <label>Email:</label>
                     <input type="text" class="form-control" value="<?php echo $email;?>"
                     name="email" >
                </div>
                <div class="form-group">
                     <label>Mobile:</label>
                     <input type="text" class="form-control" value="<?php echo $mobile;?>"
                     name="mobile">
                </div>
                <div class="form-group">
                     <label>Address:</label>
                     <textarea rows="3" cols="40" name="address" class="form-control">
                        <?php echo $address;?></textarea>
                </div>
                 <button  type="submit" name="update"class="btn btn-primary">Update</button>
            </form>
          </div>
          <div class="col-md-4"></div>


    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>
</html>