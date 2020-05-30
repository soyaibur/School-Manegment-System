<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>School Managment Sistym</title>
</head>
<body>
  <div class="container">
  <br>
    If you did not Register yet then Register first
    <a class="btn btn-primary"  href="admin/registration.php">Registration</a>
     <a class="btn btn-primary pull-right"  href="admin/login.php">Login Admin</a>
     
     <br><br>
     <h1>Welcome to Student Managment System</h1>
     
      <div class="row">
         <div class="col-sm-4 offset-sm-4">
                  <form action="" method="POST">
                     <table class="table table-bordered">
                        <tr>
                           <td colspan="2" class="text-center"><label for="">Student Imformation</label></td>

                        </tr>

                        <tr>
                           <td><label for="choose">Choose class</label></td>
                           <td>
                              <select class="from-control" name="class" id="class">
                                 <option value="0">Select</option>
                                 <option value="1st">1</option>
                                 <option value="2nd">2</option>
                                 <option value="3rd">3</option>
                                 <option value="4th">4</option>
                                 <option value="5th">5</option>
                                 <option value="6th">6</option>
                                 <option value="7th">7</option>
                                 <option value="8th">8</option>
                                 <option value="9th">9</option>
                                 <option value="10th">10</option>
                              </select>
                           </td>

                        </tr>

                        <tr>
                           <td><label for="roll">Roll</label></td>
                           <td><input type="text" required="" placeholder="Roll" name="roll"></td>
                        </tr>
                        <tr>
                           <td colspan="2" class="text-center"><input class="btn btn-primary" type="submit" value="Show Info" name="show_info"></td>
                        </tr>
                     </table>
            </form>
         </div>
      </div>
      <br>
      <br>
      <br>
      <?php
      require_once 'admin/dbcon.php';
   
        if (isset($_POST['show_info'])) {
           $class = $_POST['class'];
           $roll = $_POST['roll'];

          $query =  mysqli_query($link,"SELECT * FROM student_info WHERE class = '$class' and roll = '$roll';");

          $rows = mysqli_num_rows($query);
          $result=mysqli_fetch_assoc($query);

          if ($rows == 1) {
             ?>
               <div class="col-md-6 offset-md-3">
           <table class="table table-bordered">
          <tr>
             <td rowspan="5"><img src="admin/student-images/<?= $result['photo'] ?>" class="img-thumnail" style="width:200px;" alt="this is your image"></td>
             <td>Name</td>
             <td><?= $result['name'] ?></td>
          </tr>
          <tr>
             
             <td>Roll</td>
             <td><?= $result['roll'] ?></td>
          </tr>
          <tr>
             
             <td>Class</td>
             <td><?= $result['class'] ?></td>
          </tr>
          <tr>
             
             <td>City</td>
             <td><?= $result['city'] ?></td>
          </tr>
          <tr>
             
             <td>perent contact</td>
             <td><?= $result['pcontact'] ?></td>
          </tr>
      
         </table>
      </div>

         <?php
          } else {
             ?>
               <script type="text/javascript">
                 alert('DATA NOT FOUND');
               </script>

             <?php
          }
         
           
           
           ?>
          

      <?php
        }

      ?>
      


  </div>



    <script src="../asset/js/jquery-3.3.1.min.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
 
 </body>
 </html>


 