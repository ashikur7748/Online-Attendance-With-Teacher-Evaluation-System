

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
                <main style="margin-bottom: 100px;">
                    <div class="container-fluid">
                        
                        
                        <div class="row">
                             <div class="col-11" style="margin: auto;">
                              <br>
                              <h3 class="mt-4">Add New Teacher</h3>
                              <hr style="margin-bottom: 30px;">

    <form class="row g-3" method="post" action="add_teacher_action.php">
<div class="col-md-6">
  <label for="inputEmail4" class="form-label">Teacher Name <span style="color: red;">*</span></label>
  <input type="text" class="form-control" id="inputname" name="name">
</div>

<div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email <span style="color: red;">*</span></label>
      <input type="email" class="form-control" id="inputEmail4" name="email">
    </div>

<div class="col-md-6">
  <label for="inputEmail4" class="form-label">Username/Teacher ID <span style="color: red;">*</span></label>
  <input type="text" class="form-control" id="inputID" name="username">
</div>
    
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password <span style="color: red;">*</span></label>
    <input type="password" class="form-control" id="inputPassword4" name="password">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address">
  </div>

  <div class="col-6">
    <label for="inputAddress" class="form-label">Mobile <span style="color: red;">*</span></label>
    <input type="number" class="form-control" id="inputAddress" name="mobile">
  </div>
  
  <div class="col-md-6">
    <label for="inputState" class="form-label">Department <span style="color: red;">*</span></label>
    <select id="inputState" class="form-control" name="department">
      <option value="CSE" selected>CSE</option>
          <option value="EEE">EEE</option>
          <option value="TEX">TEX</option>
          <option value="CIVILL">CIVIL</option>
    </select>
  </div>



  <div class="col-md-3">
    <label for="inputZip" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="inputDOB" name="dob">
  </div>


  <div class="col-12">
    <br>
    <label class="form-label">Gender <span style="color: red;">*</span></label>
    <div class="form-check">
      <input class="form-check-input" type="radio" value="Male" id="gridCheck" name="gender">
      <label class="form-check-label" for="gridCheck">
        Male
      </label>
    </div>
  </div>

    <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="radio" value="Female" id="gridCheck" name="gender">
      <label class="form-check-label" for="gridCheck">
        Female
      </label>
    </div>
  </div>

  <div class="col-12">
  <?php 
                                        if(isset($_GET['msg']))
                                          {
                                            $msgshow = $_GET['msg'];
                                            if($msgshow=="Teacher Add Successfully."){

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



