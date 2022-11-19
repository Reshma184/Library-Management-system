<?php
require('functions.php');
session_start();
$connection = mysqli_connect("localhost","root","","lms");
$db = mysqli_select_db($connection,"lms");$name = $row['name'];
$book_name = "";
$author= "";
$book_no="";
$student_name ="";
$query = "select issued_books.book_name,issued_books.book_author,issued_books.book_no,
users.name from issued_books left join users on issued_books.student_id = users.id where issued_books.status = 1";
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
            <font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
             <font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
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
                <a href="" class="dropdown-item">Add New Category</a>
                <a href="" class="dropdown-item">Manage Category</a>
             </div>
         </li>

         <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
             <div class="dropdown-menu">
                <a href="" class="dropdown-item">Add New Author</a>
                <a href="" class="dropdown-item">Manage Author</a>
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
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
							<th>Name:</th>
							<th>Author:</th>
							<th>Number:</th>
							<th>Student Name:</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							$book_name = $row['book_name'];
							$book_author = $row['book_author'];
							$book_no = $row['book_no'];
							$student_name = $row['student_name'];
							
							
					?>
						<tr>
							<td><?php echo $book_name;?></td>
							<td><?php echo $row['book_author'];?></td>
							<td><?php echo $row['book_no'];?></td>
							<td><?php echo $row['student_name'];?></td>
						</tr>
					<?php
						}
					?>	
				</table>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>