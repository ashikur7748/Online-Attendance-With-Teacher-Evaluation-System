

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
                             <div class="col-12" style="margin: auto; ">
                              <br>
                              <h3 class="mt-4">Take Attendance</h3>
                              <hr style="margin-bottom: 30px;">

                              <form method="_GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="row rounded border border-success py-4 px-1">
                              <div class="col-md-10">
                                <select class="form-control" aria-label="Default select example" name="course">
                                    <option selected disabled>--Select Course--</option>


                                    <?php
                
            require_once('connection.php');
            $sql = "SELECT * FROM courses_assign WHERE teacher_id = '$username'";
            $query = mysqli_query($conn,$sql);
             while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
           
              {
              
              $coures_code= $row['course_code'];

              $coures_code_array = explode(',',$row['course_code']);

              $coures_code_array_size=count($coures_code_array);

              for($i=0;$i<$coures_code_array_size;$i++) {

                echo"<option value='$coures_code_array[$i]'>$coures_code_array[$i]</option>";
              }
              


              }

            
             ?>
                                    
                                </select>
                              </div>
                             
                              <div class="col-md-2"> 
                                  <input type="submit" name="search" class="btn btn-success w-100" value="Search" />
                              </div>
                            </div>
                            </form>
                          </div>


                          <div class="container">
                            <div class="row mt-5">
                              <div class="col">
                                <div class="bg-secondary">
                              <h3 class="text-center text-white py-2">Stdent List</h3>
                              </div>
                            </div>
                            </div>
                          </div>

                          <!--Attendence-area-start-->
                          <div class="container mt-4">
                            <div class="row">
                                  <div class="col">
            <form action="attendance_take_action.php" method="post">

              
                                <div class="input-group w-50 mb-3">
                                      <span class="input-group-text" id="basic-addon1">Date</span>
                                      <input type="date" class="form-control w-50" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="atten_date" />
                                      
                                  </div>
                                  

                                <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>Student ID</th>
                                  <th>Name</th>
                                  <th>Present</th>
                                  <th>Absent</th>
                                </tr>
                              </thead>
                              <tbody>


 <?php

if(isset($_GET['search']))
    {
    
    $course = $_GET['course'];
    

    if($course!="")
    {

            require_once('connection.php');
            $sql = "SELECT * FROM courses_reg ORDER BY id DESC";
            $query = mysqli_query($conn,$sql);
             while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
             {

              $student_id= $row['student_id'];
              $id= $row['id'];
              

              $coures_code_array = explode(',',$row['course_code']);

              

              foreach($coures_code_array as $value) {

               if($value == $course) {

                    echo"<tr>
                               
                                  <td>
                                  $student_id
                                  <input type='hidden' name='student_id[]'' value='$student_id'/>
                                  </td>
                                  <td>Md Ashikur Rahman</td>
                                  <td>
                                    <div class='form-check form-check-inline'>
                                      <input class='form-check-input' type='radio' name='atten_status[$id]' id='inlineRadio1' value='P'>
                                      <label class='form-check-label' for='inlineRadio1'>P</label>
                                    </div>
                                  </td>
                                  <td>
                                    <div class='form-check form-check-inline'>
                                      <input class='form-check-input' type='radio' name='atten_status[$id]' id='inlineRadio1' value='A'>
                                      <label class='form-check-label' for='inlineRadio1'>A</label>
                                    </div>
                                  </td>
                                </tr>";

                               
               }
             else
             {
                 
             }

        }

        

      }

    }
    else
    {
        echo"<p style='color:red; margin-left:5px;'>Enter Field</p>";
    }

           

}

?>

                    
                              </tbody>
                            </table>
                            <input type="hidden" name="course_code" value="<?php echo $course; ?>">
                            


                            <input type="submit" class="btn btn-success float-end" value="Submit" name="attendance" />
                            </form>

                            <br>
                            <?php 
                                        if(isset($_GET['msg']))
                                          {
                                            $msgshow = $_GET['msg'];
                                            if($msgshow=="Attendance Taken Successfully."){

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
                            </div>
                        </div>
                    
                    </div>
                </main>
                
            </div>
        </div>
       
        <?php require_once('jsfile.php'); ?>
    </body>
</html>



