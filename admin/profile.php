<!--heading and breadcom-->
<h1 class="text-primary" style="display: inline; margin-right:10px;"><i class="fa fa-users"></i>User Profile</h1><h1 style="display:inline;"><small style="font-size:27px;">My Profile</small></h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php?page=dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-user"></i>User Profile</li>
            </ol>
<!--heading and breadcom-->

<?php

$user_name = $_SESSION['user_login'];
$query=mysqli_query($link,"SELECT * FROM users WHERE username = '$user_name'");
$result=mysqli_fetch_assoc($query);


?>

<div class="row">
<!--Start First 6 colom-->
 <div class="col-md-6">
    <table class="table table-bordered">
      <tr> 
        <td>User Id</td>
        <td><?php echo $result['id'] ?></td>
      </tr>
      <!--End table row-->
      <td>Name</td>
        <td><?php echo ucwords($result['name']); ?></td>
      </tr>
      <!--End table row-->
      <td>UserName</td>
        <td><?php echo ucwords($result['username']); ?></td>
      </tr>
      <!--End table row-->
      <td>Email</td>
        <td><?php echo $result['email'] ?></td>
      </tr>
      <!--End table row-->
      <td>Status</td>
        <td><?php echo ucwords($result['status']); ?></td>
      </tr>
      <!--End table row-->
      <td>Singup Date</td>
        <td><?php echo $result['datetime'] ?></td>
      </tr>
      <!--End table row-->
    </table>
    <a href="" class="btn btn-primary pul-right">Edit Profile</a>
 </div>
<!--End First 6 colom-->


<!-- Start last 6 colom-->
    <div class="col-md-6">
        <a href="">
          <img class="img-thumbnail"src="image/<?php echo $result['photo'] ?>" alt="">
        </a>
        <br>
        <br>
        <?php
   if (isset($_POST['upload'])) {
    $photo = explode('.',$_FILES['photo']['name']);
    $photo = end($photo);
    $actualPhotoName = $user_name.'.'.$photo;
    

    // Uploading Photo 

    $query=mysqli_query($link,"UPDATE users SET photo = '$actualPhotoName' WHERE username = '$user_name';");
    if ($query) {
      $path='image/'.$actualPhotoName;
      unlink($path);
      if ($path) {
        move_uploaded_file($_FILES['photo']['tmp_name'],'image/'.$actualPhotoName);
      }
    }
   }
 ?>
        <form action="" method="POST" enctype="multipart/form-data">
          <label for="photo">Profile Picture</label>
          <input type="file" name="photo" required="" id="photo">
          <input type="submit" name="upload" id="upload" value="Upload"class="btn btn-primary">

        </form>
    </div>
<!--End last 6 colom-->


</div>