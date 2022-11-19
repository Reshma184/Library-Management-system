<?php
session_start();
function get_user_issue_book_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
    $user_issue_book_count = 0;
    $query = "select count(*) as user_issue_book_count from issued_books where student_id = $_SESSION[id]";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $user_issue_book_count = $row['user_issue_book_count'];
    }
    return($user_issue_book_count);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>User Dashboad</title>
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
            <li class="nav navbar-nav navbar-right">
               <a  class="nav-link" href="index.php">Admin Login</a>
            </li>
            <li class="nav navbar-nav navbar-right">
               <a  class="nav-link" href="index.php">User Login</a>
            </li>
          <li class="nav navbar-nav navbar-right">
               <a  class="nav-link" href="index.php">Register</a>
          </li>



             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="view_profile.php">View Profile</a>
                     <a class="dropdown-item" href="edit_profile.php">Edit Profile</a> 
                     <a class="dropdown-item" href="change_password.php">Change Password</a>
             </div>
             </li>
           </ul>
    <li class="nav-item"><a  class="nav-link" href="logout.php">Logout</a></li>
 </div>
    </nav><br>
    <span><marquee>This is library Management System</marquee></span><br><br>


    <div class="row"><div class="row">
          <div class="col-md-3">
            <div class="card bg-light" style="width:300px">
            <div class="card-header">Issued Books:</div>
             <div class="card-body">
                  <p class="card-text">No of book issued: <?php echo get_user_issue_book_count();?></p>
                    <a href="view_issued_book.php" class="btn btn-danger" target="_blank">View Issued Books</a>
             </div>
            </div>
          </div>

          <div class="col-md-3">
          <div class="col-md-3">
          </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>
</html>