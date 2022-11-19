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
                <a href="add_cat.php" class="dropdown-item">Add New Category</a>
                <a href="manage_book.php" class="dropdown-item">Manage Category</a>
             </div>
         </li>

         <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
             <div class="dropdown-menu">
                <a href="add_author.php" class="dropdown-item">Add New Author</a>
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
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="email">Book Name:</label>
						<input type="text" name="book_name" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="email">Book Author:</label>
				     <select class="form-control" name="book_author">
                        <option>-Select author-</option>
                         <?php 
                         $connection = mysqli_connect("localhost","root","","lms");
                         $db = mysqli_select_db($connection,"lms");
                         $query ="select author_name from authors";
                         $query_run = mysqli_query($connection,$query);  
                         while($row = mysqli_fetch_assoc($query_run)){

                         }
                            ?>
                           <option><?php   echo $row['author_name']; ?></option>
                           <?php
                         ?>
                           
                     </select>
                     <div class="form-group">
						<label for="email">Book Number:</label>
						<input type="text" name="book_no" class="form-control" required>
					</div><div class="form-group">
						<label for="email">Student ID Name:</label>
						<input type="text" name="student_id" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="email">Issue Date:</label>
						<input type="text" name="issue_date" class="form-control" value=""
                        <?php  echo date("yy-m-d");?> required="">
					</div>

					</div>
					<button  class="btn btn-primary" name="issue_book">Issue Book</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>

</body>
</html>

<?php
	if(isset($_POST['issue_book']))
	{
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "insert into issued_books values(null,$_POST[book_no],
        '$_POST[book_name]','$_POST[book_author]',$_POST[student_id],1,'$_POST[issue_date]')";
		$query_run = mysqli_query($connection,$query);
		
	}
?>
