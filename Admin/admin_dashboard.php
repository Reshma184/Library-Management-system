<?php
require('functions.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>User Dashboard</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">   
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="navbar-brand" href="index.php">Library Management System
                 </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
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
           <li class="nav-item"><a  class="nav-link" href="../logout.php">Logout</a>
        </li>
     </ul>
</div>
    </nav>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">

  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-center">
        <li class="nav-item dropdown">
            <a href="admin_dashboard.php" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
             <div class="dropdown-menu">
                <a href="" class="dropdown-item">Add New book</a>
                <a href="" class="dropdown-item">Manage book</a>
             </div>

        </li>
         <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
             <div class="dropdown-menu">
                <a href="add_cat.php" class="dropdown-item">Add New Category</a>
                <a href="manage_cat.php" class="dropdown-item">Manage Category</a>
             </div>
         </li>

         <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
             <div class="dropdown-menu">
                <a href="add_author.php" class="dropdown-item">Add New Author</a>
                <a href="manage_author.php" class="dropdown-item">Manage Author</a>
             </div>
         </li>


         <li class="nav-item dropdown">
            <a href="" class="nav-link">Issue Book</a>
        </li>


    </ul>
  </div>
  </nav>

    <span><marquee>This is library Management System</marquee></span><br><br>

    <div class="row">
          <div class="col-md-3">
            <div class="card bg-light" style="width:300px">
            <div class="card-header"> Registered Users:</div>
             <div class="card-body">
                  <p class="card-text">No of total users:<?php echo get_user_count()?> ();?></p>
                  <a href="" class="btn btn-danger" target="_blank">View Registered Users</a>
             </div>
            </div>
          </div>


          <div class="col-md-3">
            <div class="card bg-light" style="width:300px">
            <div class="card-header"> Registered Books:</div>
             <div class="card-body">
                  <p class="card-text">No of available books: <?php echo get_book_count();?></p>
                  <a href="regbooks.php" class="btn btn-primary" target="_blank">View Registered Users</a>
             </div>
            </div>
          </div>


          <div class="col-md-3">
            <div class="card bg-light" style="width:300px">
            <div class="card-header"> Registered Category:</div>
             <div class="card-body">
                  <p class="card-text">No of books category: <?php echo get_category_count();?></p>
                  <a href="regcat.php" class="btn btn-danger" target="_blank">View Catagories</a>
             </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card bg-light" style="width:300px">
            <div class="card-header"> Registered Authors:</div>
             <div class="card-body">
                  <p class="card-text">No of available authors: <?php echo get_author_count();?></p>
                  <a href="regauth.php" class="btn btn-primary" target="_blank">View Authors</a>
             </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card bg-light" style="width:300px">
            <div class="card-header">Issued bOOK:</div>
             <div class="card-body">
                  <p class="card-text">No of total Issued book: <?php echo get_issued_book_count();?></p>
                  <a href="view_issued_book.php" class="btn btn-danger" target="_blank">View issued books</a>
             </div>
            </div>
          </div>

    </div>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>
</html>