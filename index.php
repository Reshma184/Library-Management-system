<!DOCTYPE html>
<html lang="en">
<head>
 <title>LMS</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="navbar-brand" href="index.php">Library Management System</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php">Admin Login</a>
                     </li>
                   <li class="nav-item">
                        <a class="nav-link" href="index.php">User Login</a>
                   </li> 
                   <li class="nav-item">
                        <a class="nav-link" href="signup.php">Register</a>
                   </li>


            </ul>
        </div>
    </nav><br>
    <span><marquee>This is library Management System</marquee></span><br><br>
   <div class="col-md-8" id="main_content">
       <center><h3>User Login Form</h3></center>
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
            $query ="select * from users where email = '$_POST[email]'";
            $query_run = mysqli_query($connection,$query);  
            while($row = mysqli_fetch_assoc($query_run)){
                if($row['email'] == $_POST['email']){
                    if($row['password']== $_POST['password']){
                        $_SESSION['name'] =$row['name'];
                        $_SESSION['email'] =$row['email'];
                        $_SESSION['id'] =$_row['id'];
                        header("Location:user_dashboard.php");
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
    


   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>





</body>
</html>
