

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
                              <h3 class="mt-4">Add New Course</h3>
                              <hr style="margin-bottom: 30px;">

                                  <?php 
                                        if(isset($_GET['msg']))
                                          {
                                            $msgshow = $_GET['msg'];
                                            if($msgshow=="Courses Add Successfully."){

                                              echo"<div class='alert alert-success text-center'>
                                                <strong>Success!</strong> $msgshow
                                              </div>";
                                            }
                                            else{
                                              echo"<div class='alert alert-warning'>
                                                <strong>Success!</strong> $msgshow
                                              </div>";
                                            }
                                            
                                          }
                                      ?>

                                <form class="row g-3" method="post" action="add_course_action.php">
                                <div class="col-md-6">
                                  <label for="inputEmail4" class="form-label">Course Code <span style="color: red;">*</span></label>
                                  <input type="text" class="form-control" id="inputname" name="c_code">
                                </div>

                                <div class="col-md-6">
                                      <label for="inputEmail4" class="form-label">Course Name <span style="color: red;">*</span></label>
                                      <input type="text" class="form-control" id="inputEmail4" name="c_name">
                                    </div>



                                  <div class="col-12" style="margin-top: 20px;">
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



