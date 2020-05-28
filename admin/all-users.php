<!--heading and breadcom-->
<h1 class="text-primary" style="display: inline; margin-right:10px;"><i class="fa fa-users"></i>All Users</h1><h1 style="display:inline;"><small style="font-size:27px;">List of All Users</small></h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php?page=dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-users"></i>All Users</li>
            </ol>
<!--heading and breadcom-->


<div class="table-responsive">
          <table id="data"class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>User Name</th>
                <th>Photo</th>
              </tr>
            </thead>
            <tbody>
            <?php
               $db_info = mysqli_query($link,'SELECT * FROM users');

               while($row = mysqli_fetch_assoc($db_info)){?>
                
              
              <tr>
                
                <td><?php echo ucwords($row['name'])?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['username']?></td>
                <td><img  style="width:100px;" src="image/<?php echo $row['photo']?>" alt=""></td>
              </tr>

              <?php
               }
                ?>
            </tbody>
          </table>
        </div>