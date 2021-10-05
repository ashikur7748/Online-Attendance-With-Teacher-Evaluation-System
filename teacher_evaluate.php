

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
                              <h3 class="mt-4">Teacher Evaluation</h3>
                              <hr style="margin-bottom: 30px;">

                              
                              <!--heading part-->
        <div class="container">
           <div class="row mt-5">
            <div class="col">
          <div class="bg-light">
    <h3 class="text-center text-warning py-2">Good = 3 Better = 4 Best = 5</h3>
    </div>
  </div>
  </div>
</div>

<br>

<!-- Teacher Evaluation table--->
  <div class="container">
    
    <div class="row">
      <div class="col">
      <form action="">
     
        <table class="table table-hover table-bordered">
          <thead class="bg-light">
            <th>SI</th>
            <th class="text-center">Course Code</th>
            <th class="text-center">Teacher Name</th>
            <th colspan="3" class="text-center">Evaluation</th>
          </thead>
          <tbody>

            <?php
                require_once('connection.php');
                $sql = "SELECT course_code FROM courses_reg WHERE student_id = '$username'";
                $query = mysqli_query($conn,$sql);
                 $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
                 

                  $student_coures_code_array = explode(',',$row['course_code']);

                  $student_coures_code_array_size = count($student_coures_code_array);



                

                 require_once('connection.php');
                 $sql2 = "SELECT course_code FROM courses_assign ORDER BY id DESC";
                 $query2 = mysqli_query($conn,$sql2);
                 while($row2 = mysqli_fetch_array($query2, MYSQLI_ASSOC))
                   {

                  $teacher_coures_code_array = explode(',',$row2['course_code']);

                  $teacher_coures_code_array_size=count($teacher_coures_code_array);

                  for($j=0;$j<$student_coures_code_array_size;$j++) {

                     

                       
      
                         echo"<tr>
              <td>$j</td>
              <td> $student_coures_code_array[$j]</td>
              <td> Demo </td>
              <td>
                <div class='form-check'>
                  <input class='form-check-input' type='radio' id='gridCheck1'>
                  <label class='form-check-label' for='gridCheck1'>
                    Good
                  </label>
                </div>
              </td>
              <td>
                <div class='form-check'>
                  <input class='form-check-input' type='radio' id='gridCheck2'>
                  <label class='form-check-label' for='gridCheck2'>
                    Better
                  </label>
                </div>
              </td>
              <td>
                <div class='form-check'>
                  <input class='form-check-input' type='radio' id='gridCheck3'>
                  <label class='form-check-label' for='gridCheck3'>
                    Best
                  </label>
                </div>
              </td> 
            </tr>";

                   


                    }


                   }

              ?>
          


          </tbody>
        </table>
      
      </form>
      </div>
    </div>
    <!-- Submit Button-->
    <div class="row mt-5">
      <div class="col-lg-3 mx-auto d-grid">
        <input type="submit" value="SUBMIT" class="btn btn-success btn-block">
      </div>
    </div>
    <!-- Submit Button-->
  </div>
<!-- Teacher Evaluation table--->




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



