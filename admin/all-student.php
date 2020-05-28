<!--heading and breadcom-->
<h1 class="text-primary" style="display: inline; margin-right:10px;"><i class="fa fa-users"></i>All Student</h1><h1 style="display:inline;"><small style="font-size:27px;">List of All Student</small></h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php?page=dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-users"></i>All Student</li>
            </ol>
<!--heading and breadcom-->

<div class="table-responsive">
          <table id="data"class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Class</th>
                <th>City</th>
                <th>Contract</th>
                <th>Photo</th>
                <th>Action</th>
                

              </tr>
            </thead>
            <tbody>
            <?php
               $db_info = mysqli_query($link,'SELECT * FROM student_info');

               while($row = mysqli_fetch_assoc($db_info)){?>
                
              
              <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo ucwords($row['name'])?></td>
                <td><?php echo $row['roll']?></td>
                <td><?php echo $row['class']?></td>
                <td><?php echo ucwords($row['city'])?></td>
                <td><?php echo $row['pcontact']?></td>
                <td><img  style="width:100px;" src="student-images/<?php echo $row['photo']?>" alt=""></td>
                <td>
                <a href="index.php?page=update-student&id=<?php echo base64_encode($row['id']); ?>" class="btn btn-xs btn-warning"><i class="fa fa-star"></i>Edit</a>
                
                <a href="delete_student.php?id=<?php echo base64_encode($row['id']); ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                
                </td>
              </tr>

              <?php
               }
                ?>
            </tbody>
          </table>
        </div>