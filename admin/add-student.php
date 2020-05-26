<!--heading and breadcom-->
<h1 class="text-primary" style="display: inline; margin-right:10px;"><i class="fa fa-user-plus"></i>Add Student</h1><h1 style="display:inline;"><small style="font-size:27px;">Add New Student</small></h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php?page=dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-tachometer-alt"></i>Add Student</li>
            </ol>
<!--heading and breadcom-->

<?php
if (isset($_POST['add-student'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $city = $_POST['city'];
    $pcontact = $_POST['pcontact'];
    $class = $_POST['class'];
    $photo = explode('.',$_FILES['photo']['name']);
    $extention = strtolower(end($photo));
    $nameMake=$name.$roll.'.'.$extention;
    $photo = $nameMake;

    

    

    
}
?>

<div class="row">
    <div class="col-md-6">
       <form action=""method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="name" style="font-weight:700">Student Name</label>
              <input type="text" name="name" placeholder="Student Name" id="name" class="form-control">
            </div>

            <div class="form-group">
              <label for="Roll" style="font-weight:700">Roll</label>
              <input type="number" name="roll" placeholder="Roll" id="roll" class="form-control" pattern="[0-9]{6}">
            </div>

            <div class="form-group">
              <label for="city" style="font-weight:700">City</label>
              <input type="text" name="city" placeholder="" id="city" class="form-control">
            </div>

            <div class="form-group">
              <label for="pcontact" style="font-weight:700">Perent Contact</label>
              <input type="text" name="pcontact" placeholder="01***********" id="pcontact" class="form-control" pattern="01[1|5|6|7|8|9][0-9]{8}">
            </div>

            <div class="form-group">
              <label for="class">Class</label>
                <select name="class" class="form-control" id="class">
                    <option value="">Select</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                    <option value="5th">5th</option>
                    <option value="7th">7th</option>
                    <option value="8th">8th</option>
                    <option value="9th">9th</option>
                    <option value="10th">10th</option>
                </select>
            </div>

            <div class="form-group">
              <label for="photo">Photo</label>
              <input type="file" name="photo" id="photo">
            </div>

            <div class="form-group">
                <input type="submit" name="add-student" value="Add Student" class="btn btn-primary text-right">
            </div>
       </form>
    </div>
</div>