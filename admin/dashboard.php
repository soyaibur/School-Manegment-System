<div class="content">
         <h1 class="text-primary"><i class="fas fa-tachometer-alt"></i> Dashboard</h1><h1><small>Statistic overview</small></h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-tachometer-alt"></i>Dashboard</li>
            </ol>
          </nav>
          <div class="row">
            <div class="col-md-3 single-panel">
              <div class="panel-wrapper">
                    <div class="row blue-color">
                      <div class="col-md-6"><i class="fa fa-users"></i> </div>
                      <div class="col-md-6">
                        <div class="number">1</div>
                        <p>Stutent</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 panel-dis">
                        <p>Viwe All Student <a href="#"><i class="fas fa-arrow-alt-circle-right"></i></a> </p>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          <!-- Table-->

          <hr>

          <h3>Student</h3>
        <div class="table-responsive">
          <table id="data"class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>City</th>
                <th>Contract</th>
                <th>Photo</th>
              </tr>
            </thead>
            <tbody>
            <?php
               $db_info = mysqli_query($link,'SELECT * FROM student_info');
                
               while($row = mysqli_fetch_assoc($db_info)){?>
                
              
              <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['roll']?></td>
                <td><?php echo $row['city']?></td>
                <td><?php echo $row['pcontact']?></td>
                <td><img  style="width:100px;" src="student-images/<?php echo $row['photo']?>" alt=""></td>
              </tr>

              <?php
               }
                ?>
            </tbody>
          </table>
        </div>
</div>  