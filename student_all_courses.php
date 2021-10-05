

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
                             <div class="col-6" style="margin: auto; ">
                             <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" style="font-size:20px;">All Registration Course</li>
                        </ol>

                                     <!--Attendence-area-start-->
                                   

              

                                <table class="table table-hover table-bordered">
                              <thead>
                                <tr>
                                  <th>Course Code</th>
                                  <!-- <th>Course Name</th> -->
                                </tr>
                              </thead>
                              <tbody>


                                    <?php
                
            require_once('connection.php');
            $sql = "SELECT * FROM courses_reg WHERE student_id = '$username'";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
           
              {
              
              $coures_code= $row['course_code'];

              $coures_code_array = explode(',',$row['course_code']);

              $coures_code_array_size=count($coures_code_array);

              for($i=0; $i<$coures_code_array_size; $i++) {


                  require_once('connection.php');
                  $sql2 = "SELECT * FROM courses WHERE c_code = '$coures_code_array[$i]'";
                  $query2 = mysqli_query($conn,$sql2);
                  $row2 = mysqli_fetch_array($query2, MYSQLI_ASSOC);

                  $c_code= $row2['c_code'];
                  $c_name= $row2['c_name'];


                echo"<tr>
                               
                                  <td>
                                  $coures_code_array[$i]
                                 
                                  </td>
                                  <!--<td>$c_name</td>-->
                                  
                                </tr>";
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



