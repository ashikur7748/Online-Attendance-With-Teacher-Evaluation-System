

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
                              <h3 class="mt-4">Course Assign</h3>
                              <hr style="margin-bottom: 30px;">

                                <form class="row g-3" method="post" action="courses_assign_action.php">
                                <div class="col-md-6">
                                  <label for="inputname" class="form-label">Teacher Name <span style="color: red;">*</span></label>
                                  

                                  <select id="inputname" class="form-control" name="  teacher_id">
         <?php
              
            require_once('connection.php');
            $sql = "SELECT * FROM users WHERE role = 'Teacher'";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
            {
            
              
              $username = $row['username'];
              $name = $row['name'];

                                    echo"<option value='$username'>$username</option>";

             }

             ?>
                                  </select>


                                </div>

                                <div class="col-md-6">
                                      <label for="inputEmail4" class="form-label">Course Name <span style="color: red;">*</span></label>
                                    
                                      <select id="inputEmail4" class="form-control" name="course_code[]" multiple>
         <?php
                
            require_once('connection.php');
            $sql = "SELECT * FROM courses ORDER BY id DESC";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
            {
            
              $c_code = $row['c_code'];
              $c_name = $row['c_name'];


                                    echo"<option value='$c_code'>$c_name</option>";

             }

             ?>
                                  </select>
                                    </div>



                                  <div class="col-12">
                                  <?php 
                                        if(isset($_GET['msg']))
                                          {
                                            $msgshow = $_GET['msg'];
                                            if($msgshow=="Courses Add Successfully."){

                                              echo"<div class='alert alert-success text-center mt-3'>
                                                <strong>Success!</strong> $msgshow
                                              </div>";
                                            }
                                            else{
                                              echo"<div class='alert alert-warning text-center mt-3'>
                                                <strong>Error!</strong> $msgshow
                                              </div>";
                                            }
                                            
                                          }
                                      ?>
                                    <input  type="submit" class="w-100 btn btn-success" value="SUBMIT">
                                  </div>
                                </form>

                            </div>
                        </div>
                    
                    </div>
                </main>
                
            </div>
        </div>
       
        <?php require_once('jsfile.php'); ?>
    </body>
</html>



