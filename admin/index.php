<?php
session_start();
if (!isset($_SESSION['user_login'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!--font-->

    <!--Main CSS-->
    <link rel="stylesheet" href="../style.css">
    <!--Bootstrap CSS link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/dataTables.bootstrap4.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!--CSS for Responsive-->
    <link rel="stylesheet" href="../assets/responsive.css">
    

    <title>Title</title>
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fa fa-user"></i>Welcome: Soyaibur<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href=""><i class="fa fa-user-plus"></i>Add User<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href=""><i class="fa fa-user"></i>Profile<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Log Out<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
 
 <div class="container-fluid" style="min-height:70vh;">
   <div class="row">
     <div class="col-md-3">
        <div class="list-group">
            <a href="index.php?page=dashboard" class="list-group-item list-group-item-action active"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
            <a href="index.php?page=add-student" class="list-group-item list-group-item-action"><i class="fa fa-user-plus"> </i>Add Student</a>
            <a href="index.php?page=all-student" class="list-group-item list-group-item-action"><i class="fa fa-users"> </i>All Student</a>
            <a href="index.php?page=all-users" class="list-group-item list-group-item-action"><i class="fa fa-users"> </i>All Users</a>
        </div>
      </div>
     <div class="col-md-9">
       
              <?php
                  if (isset($_GET['page'])) {
                    $page_link=$_GET['page'].'.php';
                  } else{
                    $page_link = "dashboard.php";
                  }

                
                

                if (file_exists($page_link)) {
                  require_once $page_link;
                } else{
                  echo "File Not Found";
                }
              ?>

     </div>
   </div>
 </div>
<div class="container-fluid">
<div class="row">
     <div class="col-md-12 footer">
      <p>Copyright &copy; Student Manegment System. All Rights are reserved</p>
     </div>
   </div>
</div>

    <!--Main Jquery js-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!--Main bootstrap js-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--fontAwesome file-->
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    <!--Data Table-->
   <script src="../assets/js/jquery.dataTables.min.js"></script>
   <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
       
    <!--main js file-->
    <script src="../assets/js/main.js"></script>
    
   
 
 </body>
 </html>