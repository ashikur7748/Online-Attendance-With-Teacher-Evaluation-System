

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
                              
                              <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" style="font-size:20px;">Search Student</li>
                        </ol>

                              <form method="_GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="row  py-4 px-1">
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

   <?php

if(isset($_GET['search']))
    {
    
    $course = $_GET['course'];
    

    if($course!="")
    {

            require_once('connection.php');
            $sql = "SELECT * FROM courses_reg ORDER BY id DESC";
            $query = mysqli_query($conn,$sql);

?>
                          <div class="container">
                            <div class="row mt-5" >
                              <div class="col-6" style="margin: auto;">
                                <div class="bg-light">
                              <h5 class="text-center text-black py-2">Stdent List Of <?php echo $course;?></h5>
                              </div>
                            </div>
                            </div>
                          </div>

                          <!--Attendence-area-start-->
                          <div class="container mt-4">
                            <div class="row">
                                  <div class="col-6" style="margin: auto;">
            

              

                                <table class="table table-hover table-bordered">
                              <thead>
                                <tr>
                                  <th>Student ID</th>
                                  <!--<th>Name</th>-->
                                </tr>
                              </thead>
                              <tbody>


 <?php
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
                                 
                                  </td>
                                  <!--<td>Md Ashikur Rahman</td>-->
                                  
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
                            
                            


                           
                           

                            <br>

                            </div>
                        </div>
                    
                    </div>
                </main>
                
            </div>
        </div>
       
        <?php require_once('jsfile.php'); ?>
    </body>
</html>



