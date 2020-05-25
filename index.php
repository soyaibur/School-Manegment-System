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
                              <select class="from-control" name="choose" id="choose">
                              <option value="0">Select</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              </select>
                           </td>

                        </tr>

                        <tr>
                           <td><label for="roll">Roll</label></td>
                           <td><input type="text" pattern="[1-9][6]" placeholder="Roll" name="roll"></td>
                        </tr>
                        <tr>
                           <td colspan="2" class="text-center"><input class="btn btn-primary" type="submit" value="Show Info" name="show_info"></td>
                        </tr>
                     </table>
            </form>
         </div>
      </div>


  </div>



    <script src="../asset/js/jquery-3.3.1.min.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
 
 </body>
 </html>


 