

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
                              <h3 class="mt-4">Attendance Report</h3>
                              <hr style="margin-bottom: 30px;">

                              <form method="_GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="row rounded border border-success py-4 px-1">
                              <div class="col-md-5">
                                <select class="form-control" aria-label="Default select example" name="course">
                                    <option selected disabled>--Select Course--</option>


                                    <?php

            if($role=="Teacher"){
                
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

            }else{

              require_once('connection.php');
            $sql = "SELECT * FROM courses";
            $query = mysqli_query($conn,$sql);
             while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
           
              {
              
              $coures_code= $row['c_code'];            
                echo"<option value='$coures_code'>$coures_code</option>";
              }



            }

            
             ?>
                                    
                                </select>
                              </div>


                              <div class="col-md-5">
                                <input type="date" name="search_date" class="form-control">
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
    $search_date = $_GET['search_date'];
    $search_date_f = date("d-m-Y", strtotime($search_date));

    if($course!="")
    {

           
            ?>


                          <div class="container">
                            <div class="row mt-5">
                              <div class="col">
                                <div class="bg-light">
                              <h5 class="text-center text-dark py-2">Course: <?php echo $course;?> , Date: <?php echo $search_date_f; ?></h5>
                              </div>
                            </div>
                            </div>
                          </div>

                          <!--Attendence-area-start-->
                          <div class="container mt-4">
                            <div class="row">
                                  <div class="col">
            <form action="attendance_update_action.php" method="post">

              
                                
                                  

                                <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>Student ID</th>
                                  <!-- <th>Name</th> -->
                                  <th>Present</th>
                                  <th>Absent</th>
                                </tr>
                              </thead>
                              <tbody>


 
        <?php

         require_once('connection.php');
            $sql = "SELECT * FROM attendance WHERE course_code = '$course' AND atten_date = '$search_date'";
            $query = mysqli_query($conn,$sql);
             while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
             {

              
              $student_id= $row['student_id'];
              $atten_status= $row['atten_status'];
              $id= $row['id'];

                    echo"<tr>

                                  <input type='hidden' name='id[]' value='$id'/>
                               
                                  <td>
                                  $student_id
                                  </td>
                                  <!--<td>Md Ashikur Rahman</td>-->";

                                   if($role=="Teacher"){

                              if($atten_status == "P") {

                                  echo"<td>
                                    <div class='form-check form-check-inline'>
                                      <input class='form-check-input' type='radio' name='atten_status[$id]' id='inlineRadio1' value='P' checked>
                                      <label class='form-check-label' for='inlineRadio1'>P</label>
                                    </div>
                                  </td>
                                  <td>
                                    <div class='form-check form-check-inline'>
                                      <input class='form-check-input' type='radio' name='atten_status[$id]' id='inlineRadio1' value='A'>
                                      <label class='form-check-label' for='inlineRadio1'>A</label>
                                    </div>
                                    </td>";

                                  }
                                  else
                                  {

                                    echo"<td>
                                    <div class='form-check form-check-inline'>
                                      <input class='form-check-input' type='radio' name='atten_status[$id]' id='inlineRadio1' value='P'>
                                      <label class='form-check-label' for='inlineRadio1'>P</label>
                                    </div>
                                  </td>
                                  <td>
                                    <div class='form-check form-check-inline'>
                                      <input class='form-check-input' type='radio' name='atten_status[$id]' id='inlineRadio1' value='A' checked>
                                      <label class='form-check-label' for='inlineRadio1'>A</label>
                                    </div>
                                    </td>";

                                  }

                                }else{

                                            if($atten_status == "P") {

                                  echo"<td>
                                    <div class='form-check form-check-inline'>
                                      <input class='form-check-input' type='radio' name='atten_status[$id]' id='inlineRadio1' value='P' checked disabled>
                                      <label class='form-check-label' for='inlineRadio1'>P</label>
                                    </div>
                                  </td>
                                  <td>
                                    <div class='form-check form-check-inline'>
                                      <input class='form-check-input' type='radio' name='atten_status[$id]' id='inlineRadio1' value='A' disabled>
                                      <label class='form-check-label' for='inlineRadio1'>A</label>
                                    </div>
                                    </td>";

                                  }
                                  else
                                  {

                                    echo"<td>
                                    <div class='form-check form-check-inline'>
                                      <input class='form-check-input' type='radio' name='atten_status[$id]' id='inlineRadio1' value='P' disabled>
                                      <label class='form-check-label' for='inlineRadio1'>P</label>
                                    </div>
                                  </td>
                                  <td>
                                    <div class='form-check form-check-inline'>
                                      <input class='form-check-input' type='radio' name='atten_status[$id]' id='inlineRadio1' value='A' checked disabled>
                                      <label class='form-check-label' for='inlineRadio1'>A</label>
                                    </div>
                                    </td>";

                                  }
                                }


                                  
                                echo"</tr>";

                               
                     }

    }
    else
    {
        echo"<p style='color:red; margin-left:5px;'>Enter Field</p>";
    }

           





                      if($role=="Teacher"){
                           echo" </tbody>
                            </table>
                            <!--<input type='submit' class='btn btn-success float-end' value='Update' name='update' />-->
                            <button class='btn btn-primary' onclick='window.print();'>Print</button>
                            </form>

                            <br>

                            </div>
                        </div>
                    
                    </div>";
                  }else{
                    echo" </tbody>
                            </table>
                           
                            <br>

                            </div>
                        </div>
                    
                    </div>";
                  }
  }
?>
                </main>
                
            </div>
        </div>
       
        <?php require_once('jsfile.php'); ?>
    </body>
</html>



