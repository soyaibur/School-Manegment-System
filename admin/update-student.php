<!--heading and breadcom-->
<h1 class="text-primary" style="display: inline; margin-right:10px;"><i class="fa fa-wrench" aria-hidden="true"></i>Update Student</h1><h1 style="display:inline;"><small style="font-size:27px;"> Update Student</small></h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php?page=dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
              <li class="breadcrumb-item"><a href="index.php?page=all-student"><i class="fa fa-users"></i>All Student</a></li>
              <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-wrench" aria-hidden="true"></i>Update Student</li>
            </ol>
<!--heading and breadcom-->

<?php

$id = base64_decode($_GET['id']);

$db_data = mysqli_query($link, "SELECT * FROM student_info WHERE id = '$id';");
$db_row = mysqli_fetch_assoc($db_data);

  if (isset($_POST['update-student'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $city = $_POST['city'];
    $pcontact = $_POST['pcontact'];
    $class = $_POST['class'];

    

    $query = "UPDATE student_info SET name='$name',roll='$roll',class='$class',city='$city',pcontact='$pcontact' WHERE id = '$id'";

    $massege= mysqli_query($link,$query);
    if ($massege) {
      header('location:index.php?page=all-student');
    }



  }





?>


<div class="row">
    <div class="col-md-6">
       <form action=""method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="name" style="font-weight:700">Student Name</label>
              <input type="text" name="name" placeholder="Student Name" id="name" value="<?= $db_row['name'] ?>" class="form-control">
            </div>

            <div class="form-group">
              <label for="Roll" style="font-weight:700">Roll</label>
              <input type="number" name="roll" placeholder="Roll" id="roll" class="form-control"value="<?= $db_row['roll'] ?>" pattern="[0-9]{6}">
            </div>

            <div class="form-group">
              <label for="city" style="font-weight:700">City</label>
              <input type="text" name="city" placeholder="Where do you live?" id="city" value="<?= $db_row['city'] ?>" class="form-control">
            </div>

            <div class="form-group">
              <label for="pcontact" style="font-weight:700">Perent Contact</label>
              <input type="text" name="pcontact" placeholder="01***********" id="pcontact" class="form-control" value="<?= $db_row['pcontact'] ?>" pattern="01[1|5|6|7|8|9][0-9]{8}">
            </div>

            <div class="form-group">
              <label for="class">Class</label>
                <select name="class" class="form-control" id="class">
                    <option value="">Select</option>
                    <option value="1st" <?php echo $db_row['class'] == '1st'?'selected=""':'' ?> >1st</option>
                    <option value="2nd" <?php echo $db_row['class'] == '2nd'?'selected=""':'' ?> >2nd</option>
                    <option value="3rd" <?php echo $db_row['class'] == '3rd'?'selected=""':'' ?>>3rd</option>
                    <option value="4th" <?php echo $db_row['class'] == '4th'?'selected=""':'' ?>>4th</option>
                    <option value="5th" <?php echo $db_row['class'] == '5th'?'selected=""':'' ?>>5th</option>
                    <option value="5th" <?php echo $db_row['class'] == '6th'?'selected=""':'' ?>>6th</option>
                    <option value="7th" <?php echo $db_row['class'] == '7th'?'selected=""':'' ?>>7th</option>
                    <option value="8th" <?php echo $db_row['class'] == '8th'?'selected=""':'' ?>>8th</option>
                    <option value="9th" <?php echo $db_row['class'] == '9th'?'selected=""':'' ?>>9th</option>
                    <option value="10th"<?php echo $db_row['class'] == '10th'?'selected=""':'' ?>>10th</option>
                </select>
            </div>

            <div class="form-group">
              <label for="photo">Image</label>
              <img style="width:250px;" src="student-images/<?php echo $db_row['photo']; ?>" alt="i don't find any image">
              <input type="file" name="photo" id="photo">
            </div>

            <div class="form-group">
                <input type="submit" name="update-student" value="Update Student" class="btn btn-primary text-right">
            </div>
       </form>
    </div>
</div>