<?php 
        require_once'dbcon.php';
        session_start();
      if (isset($_POST['registration'])) {
          $name = $_POST['name'];
          $email =$_POST['email'];
          $username = $_POST['username'];
          $password = $_POST['password'];
          $c_password = $_POST['c_password'];
          
          /*Grapping photo files & midifying */
          $photo = explode('.',$_FILES['photo']['name']);
          $photo = end($photo);
          $actualPhotoName = $username.'.'.$photo;

          /* Showing empty field*/

          $input_error  = array();

         /* if (empty($name)) {
            $input_error['name'] = "please Insert your Name.";
          }

          if (empty($email)) {
            $input_error['email'] = "please Insert your Email.";
          }

          if(empty($username)){
            $input_error['username'] = "Please Insert your Username.";
          }
          if(empty($password)){
            $input_error['password'] = "please Insert Your password.";
          }
          if(empty($c_password)){
            $input_error['c_password'] = "Conferm Password.";
          }
          if(empty($_FILES['photo']['name'])){
            $input_error['photo'] = "You have to upload a photo,";
          }*/
        //End of Showing empty fields

        //Code for data validation criteria.
        $data_validation = array();
        
        $mmm=array(); 
          if(!count($input_error)==0){
            echo "you have an error before you can go farther";
          }else{
                //Data validation start here.
                 /*$email_check =mysqli_query($link,"SELECT * FROM `users` WHERE `email`='$email';");
                 //Email validation.
                 if(!mysqli_num_rows($email_check) == 0){
                 $data_validation['email']="Opp! This email holder already exits!";
                 }
                 //UserName validation.
                 $user_check = mysqli_query($link,"SELECT * FROM `users` WHERE `username`='$username';");
                 if(!mysqli_num_rows($user_check)==0){
                  $data_validation['username'] = "User Name has already taken";
                  }
                  //password confermation
                  if($password !== $c_password){
                  $data_validation['password'] = "Opp!You password and conferm password dose not match!";
                   } */

                   

                if(count($data_validation) == 0){
                  $password = md5($password);
                  $insertdata = "INSERT INTO users (name, email, username, password, photo, status) VALUES ('$name','$email','$username','$password','$actualPhotoName','inactive');";

                  $query = mysqli_query($link,$insertdata);

                  
                  if($query){
                    $_SESSION['success']= "Data Insert Seccess";
                    move_uploaded_file($_FILES['photo']['tmp_name'],'image/'.$actualPhotoName);
                    header('location:registration.php');
                  } else{
                    $_SESSION['error']= "Data Insert Error";
                  }
                  
                  
                } 

              
                 
                
                

              }
       }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>registration in School</title>
    <style>
      label {font-weight: 700;margin-right: 20px;font-size: 17px;}
      input {padding-left: 10px;width: 278px;}
      .single-row{margin-bottom:20px;}
      .error{color:red;font-style:italic; font-weight: 700; font-size:12px;}
    </style>
</head>
<body>


  <h1>User Registration Form</h1>
  <?php if(isset($_SESSION['success'])){echo '<div class="alert alert-success text-center">'.$_SESSION['success'].'</div>';} 
   if(isset($_SESSION['error'])){echo '<div class="alert alert-warning text-center">'.$_SESSION['error'].'</div>';}
  ?>
  <div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <form action="registration.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
               <div class="row single-row">
                  <div class="col-md-4">
                    <label for="name">Name</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" name="name"id="name" value="<?php if(isset($name)){echo $name;} ?>" placeholder="Enter your name">
                    <label for="" class="error"><?php if(isset($input_error['name'])){echo $input_error['name'];}?></label>
                  </div>
               </div>
               

               <div class="row single-row">
                  <div class="col-md-4">
                    <label for="email">Email</label>
                  </div>
                  <div class="col-md-8">
                    <input type="email" name="email"id="email" value="<?php if(isset($email)){echo $email;} ?>" placeholder="Enter your Email">
                    <label for="" class="error"><?php if(isset($input_error['email'])){echo $input_error['email'];}?></label>
                    <label for="" class="error"><?php if(isset($data_validation['email'])){echo $data_validation['email'];}?></label>
                </div>
                
               </div>

               <div class="row single-row">
                 <div class="col-md-4">
                 <label for="username">User name</label>
                 </div>
                <div class="col-md-8">
                <input type="text" name="username"id="username" value="<?php if(isset($username)){echo $username;} ?>" placeholder="Enter your User name">
                <label for="" class="error"><?php if(isset($input_error['username'])){echo $input_error['username'];}?></label>
                <label for="" class="error"><?php if(isset($data_validation['username'])){echo $data_validation['username'];}?></label>
               </div>
               
                
               </div>

               <div class="row single-row">
                <div class="col-md-4">
                <label for="password" >Password</label>
                </div>
                <div class="col-md-8">
                <input type="password" name="password"id="password" value="<?php if(isset($password)){echo $password;} ?>" placeholder="Enter your Password">
                <label for="" class="error"><?php if(isset($input_error['password'])){echo $input_error['password'];}?></label>                      
               </div>
                
               </div>

               <div class="row single-row">
                 <div class="col-md-4">
                 <label for="c_password">Conform Password</label>
                 </div>
                <div class="col-md-8">
                <input type="password" name="c_password"id="c_password" value="<?php if(isset($c_password)){echo $c_password;} ?>" placeholder="Conform Password">
                <label for="" class="error"><?php if(isset($input_error['c_password'])){echo $input_error['c_password'];}?></label>
                <label for="" class="error"><?php if(isset($data_validation['password'])){echo $data_validation['password'];}?></label>
               </div>
                
               </div>

               <div class="row single-row">
                  <div class="col-md-4">
                    <label for="photo">Photo</label>
                  </div>
                
                  <div class="col-md-8">
                     <input type="file" name="photo"id="photo">
                     <label for="" class="error"><?php if(isset($input_error['photo'])){echo $input_error['photo'];}?></label>
                  </div>
                
               </div>

               <div class="row single-row">
                  <div class="col-md-4">
                  If you Registar then please <a href="login.php">Login</a>
                  </div>
                
                  <div class="col-md-8">
                  <input type="submit" value="Registration" name="registration" class="btn btn-primary">
                  </div>
                
               </div>
            </form>
    </div>
  </div>
</div>
    <script src="../../asset/js/jquery-3.3.1.min.js"></script>
    <script src="../../asset/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
 
 </body>
 </html>


