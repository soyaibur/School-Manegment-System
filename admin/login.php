<?php
require_once 'dbcon.php';
session_start();
if (isset($_SESSION['user_login'])) {
  header('location:index.php');
}
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $username_check = mysqli_query($link,"SELECT * FROM  users WHERE username = '$username' OR email = '$username';");
  


  if(mysqli_num_rows($username_check) > 0 ){
   $row = mysqli_fetch_assoc($username_check);
   if ($row['password'] == md5($password)) {
     if($row['status'] == 'active'){
       $_SESSION['user_login'] = $username;
       header('location:index.php');
     } else{
       $inactive = "Your status is Inactive";
     }
   } else{
     $wrong_password = "You input wrong Password";
   }

  }else {
    $user_not = "This Username NOT FOUND";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>School Managment Sistym</title>
</head>
<body>
<br>
   <div class="contaner">
       <h1 class="text-center">Student Management system</h1><br><br>

       <div class="row">
         <div class="col-sm-4 offset-sm-4">
           <h2 class="text-center">Admin Login Form</h2>
            <form action="login.php" method="POST">
               <div> 
               <input type="text" placeholder="Username" name="username" required="" value="<?php if (isset($username)) {
                 echo $username;
               } ?>" class="form-control">
                </div>

                <div> 
               <input type="password" placeholder="Password" name="password" required="" value="<?php if (isset($password)) {
                 echo $password;
               } ?>" class="form-control">
                </div><br>

                <div> 
               <input type="submit" name="login" class="btn btn-info pull-right">
               <a href="../index.php" class="btn btn-info">Back</a>

                </div>
            </form>
         </div>
       </div>
       <br>
       <br>
       <?php if (isset($user_not)) {
         echo '<div class="col-md-4 offset-md-4 alert alert-danger text-center">'.$user_not.'</div>';
       } 
       if (isset($wrong_password)) {
         echo '<div class="col-md-4 offset-md-4 alert alert-danger text-center">'.$wrong_password.'</div>';
       }
       if (isset($inactive)) {
        echo '<div class="col-md-4 offset-md-4 alert alert-danger text-center">'.$inactive.'</div>';
      }
       ?>
   </div>



    <script src="../../asset/js/jquery-3.3.1.min.js"></script>
    <script src="../../asset/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
 
 </body>
 </html>


