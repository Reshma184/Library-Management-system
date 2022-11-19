<?php
require('functions.php');
session_start();
$connection = mysqli_connect("localhost","root","","lms");
$db = mysqli_select_db($connection,"lms");
$author_name ="";
$author_id ="";
$query ="select * from authors where author_id = $_GET[aid]";
$query_run = mysqli_query($connection,$query);  
while($row = mysqli_fetch_assoc($query_run)){
    $author_name =$row['author_name'];
    $author_id =$row['author_id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>User Dashboard</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap-4.4.1/js/.js/juquery_latest.js"></script>
    <script type="text/javascript" src="../bootstrap-4.4.1/js/.js/bootstrap.min.js"></script>
    <style type="text/css"></style>
    
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
						<label for="email">Author Nae:</label>
						<input type="text" name="author_name" value= "<?php echo $author_name;?>"class="form-control" required>
					</div>

                    <button  class="btn btn-primary" name="update">Update Author</button>
				</form>
			</div>
			<div class="col-md-4"></div>
          </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>


<?php
	if(isset($_POST['update'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
        $query = "update authors set author_name = '$_POST[author_name]' where author_id = $_GET[aid]";
		$query_run = mysqli_query($connection,$query);
		header("location:manage_author.php");
	}
?>