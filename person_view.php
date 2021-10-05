<?php

if(isset($_GET['id']))
  {
            $id = $_GET['id'];
                   
            require_once('connection.php');

 
            $sql = "SELECT * FROM users WHERE id = '$id'";


            $query = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
                      
              $id = $row['id'];
              $rolename = $row['role'];
              $usernameinfo = $row['username'];
              $name = $row['name'];
              $email = $row['email'];
              $department = $row['department'];
              $mobile = $row['mobile'];
              $address = $row['address'];
              $dateofbirth = $row['dateofbirth'];
              $gender = $row['gender'];
              $entrydate = $row['entrydate'];
              


  }           

           
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Online Attendence with Teacher Evaluation System</title>
       <?php require_once('cssfile.php'); ?>
    </head>
    <body class="sb-nav-fixed">
        <?php require_once('header.php'); ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav" >
                <?php require_once('left_ber.php'); ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                       
                        <div class="row">
                           

                            <div class="col-12" style="margin: auto;">
                              <br>
                              <h3 class="mt-4"><?php echo $rolename; ?> Details <span style="float: right;">
                                <?php
                                if($rolename=="Teacher") {
echo"<a href='teacher_list.php' class='btn btn-success'>Back</a>";
                                }else{
echo"<a href='student_list.php' class='btn btn-success'>Back</a>";
                                }
                                ?>
            
                              </span></h3>
                              <hr style="margin-bottom: 30px;">

                              
                            
                            
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                       
                    <tr>
                      <td>ID</td>
                      <td><?php echo $usernameinfo; ?></td>
                    
                    </tr>

                    <tr>
                      <td>Name</td>
                      <td><?php echo $name; ?></td>
                    
                    </tr>

                    <tr>
                      <td>Email:</td>
                      <td><?php echo $email; ?></td>
                    
                    </tr>

                    <tr>
                      <td>Mobile:</td>
                      <td><?php echo $mobile; ?></td>
                    
                    </tr>

                    <tr>
                      <td>Address:</td>
                      <td><?php echo $address; ?></td>
                    
                    </tr>

                    <tr>
                      <td>Date Of Birth:</td>
                      <td><?php echo $dateofbirth; ?></td>
                    
                    </tr>

                    <tr>
                      <td>Gender:</td>
                      <td><?php echo $gender; ?></td>
                    
                    </tr>

                    <tr>
                      <td>Department:</td>
                      <td><?php echo $department; ?></td>
                    
                    </tr>

                   
              

                                        
                                        
                                    </table>
                         
                        


                            </div>


                        </div>
                    </div>
                </main>
                
            </div>
        </div>
     <?php require_once('jsfile.php'); ?>
    </body>
</html>



