

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



                      <?php

if(isset($_GET['id']))
  {
            $id = $_GET['id'];
                   
            require_once('connection.php');

 
            $sql = "SELECT * FROM users WHERE id = '$id'";


            $query = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
                      
              $id = $row['id'];
              $roleinfo = $row['role'];
              $usernameinfo = $row['username'];
              $name = $row['name'];
              $email = $row['email'];
              $department = $row['department'];
              $mobile = $row['mobile'];
              $address = $row['address'];
              $dateofbirth = $row['dateofbirth'];
              $gender = $row['gender'];
              $entrydate = $row['entrydate'];
              $password = $row['password'];
              


  }           

           
?>
                        
                        
                        <div class="row">
                             <div class="col-11" style="margin: auto;">
                              <br>
                              <h3 class="mt-4">Update <?php echo $roleinfo; ?> <span style="float: right;">
                                <?php
                                if($roleinfo=="Teacher") {
echo"<a href='teacher_list.php' class='btn btn-success'>Back</a>";
                                }else{
echo"<a href='student_list.php' class='btn btn-success'>Back</a>";
                                }
                                ?>
            
                              </span></h3>
                              <hr style="margin-bottom: 30px;">

    <form class="row g-3" method="post" action="update_person_action.php">


      <input type="hidden" name="id" value="<?php echo $id; ?>">
       <input type="hidden" name="role" value="<?php echo $roleinfo; ?>">

<div class="col-md-6">
  <label for="inputEmail4" class="form-label"><?php echo $roleinfo; ?> Name <span style="color: red;">*</span></label>
  <input type="text" class="form-control" id="inputname" name="name" value="<?php echo $name; ?>">
</div>

<div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email <span style="color: red;">*</span></label>
      <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $email; ?>">
    </div>

<div class="col-md-6">
  <label for="inputEmail4" class="form-label">Username/<?php echo $roleinfo; ?> ID <span style="color: red;">*</span></label>
  <input type="text" class="form-control" id="inputID" name="username" disabled="" value="<?php echo $usernameinfo; ?>">
</div>
    
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password <span style="color: red;">*</span></label>
    <input type="password" class="form-control" id="inputPassword4" name="password" value="<?php echo $password; ?>">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address" value="<?php echo $address; ?>">
  </div>

  <div class="col-6">
    <label for="inputAddress" class="form-label">Mobile <span style="color: red;">*</span></label>
    <input type="number" class="form-control" id="inputAddress" name="mobile" value="<?php echo $mobile; ?>">
  </div>
  
  <div class="col-md-6">
    <label for="inputState" class="form-label">Department </label>
    <select id="inputState" class="form-control" name="department" >

      <?php
      if($department=="CSE"){

       echo"<option value='CSE' checked>CSE</option>
       <option value='EEE'>EEE</option>
       <option value='TEX'>TEX</option>
       <option value='CIVILL'>CIVIL</option>";

      }else if($department=="EEE") {

        echo"<option value='CSE'>CSE</option>
       <option value='EEE' checked>EEE</option>
       <option value='TEX'>TEX</option>
       <option value='CIVILL'>CIVIL</option>";

      }
      else if($department=="EEE") {

        echo"<option value='CSE'>CSE</option>
       <option value='EEE' >EEE</option>
       <option value='TEX' checked>TEX</option>
       <option value='CIVILL'>CIVIL</option>";

      }
      else{

        echo"<option value='CSE'>CSE</option>
       <option value='EEE' >EEE</option>
       <option value='TEX'>TEX</option>
       <option value='CIVILL' checked>CIVIL</option>";
      }
      ?> 
    </select>
  </div>



  <div class="col-md-6">
    <label for="inputZip" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="inputDOB" name="dob" value="<?php echo $dateofbirth; ?>" >
  </div>

<?php
if($gender=="Male"){
  echo"<div class='col-12'>
    <br>
    <label class='form-label'>Gender </label>
    <div class='form-check'>
      <input class='form-check-input' type='radio' value='Male' id='gridCheck' name='gender' checked >
      <label class='form-check-label' for='gridCheck'>
        Male
      </label>
    </div>
  </div>

    <div class='col-12'>
    <div class='form-check'>
      <input class='form-check-input' type='radio' value='Female' id='gridCheck' name='gender' >
      <label class='form-check-label' for='gridCheck'>
        Female
      </label>
    </div>
  </div>";
}else{
 echo"<div class='col-12'>
    <br>
    <label class='form-label'>Gender </label>
    <div class='form-check'>
      <input class='form-check-input' type='radio' value='Male' id='gridCheck' name='gender'  >
      <label class='form-check-label' for='gridCheck'>
        Male
      </label>
    </div>
  </div>

    <div class='col-12'>
    <div class='form-check'>
      <input class='form-check-input' type='radio' value='Female' id='gridCheck' name='gender' checked >
      <label class='form-check-label' for='gridCheck'>
        Female
      </label>
    </div>
  </div>";
}
  ?>

  <div class="col-12">
    <p style="color:red; padding-top:5px;"><?php if(isset($_GET['msg'])){echo $_GET['msg'];} ?></p>
    <input  type="submit" class="w-100 btn btn-success" value="Update">
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



