<?php
                   
            require_once('connection.php');

 
            $sql = "SELECT * FROM users WHERE role = 'Admin'";


            $query = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
                      
              $id = $row['id'];
              $username = $row['username'];
              $name = $row['name'];
              $email = $row['email'];
              $mobile = $row['mobile'];
              $password = $row['password'];


             

           
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
                <main style="margin-bottom: 100px;">
                    <div class="container-fluid">
                        
                        
                        <div class="row">
                             <div class="col-11" style="margin: auto;">
                              <br>
                              <h3 class="mt-4">Admin Profile Update</h3>
                              <hr style="margin-bottom: 30px;">

                              
 <form method="post" action="admin_profile_action.php">
    <div class="row mb-4">

     
 
  <div class="col">
    <input type="text" class="form-control" placeholder="Name *" aria-label="Name" name="name" value="<?php echo $name; ?>">
  </div>
</div>

  <div class="row mb-4">
    <div class="col">

    <input type="text" class="form-control" placeholder="User Name *" aria-label="Last name" name="uname" value="<?php echo $username; ?>">
  </div>
    <div class="col">
    <input type="Email" class="form-control" placeholder="Email" aria-label="Last name" name="email" value="<?php echo $email; ?>">
  </div>
</div>
  <div class="row mb-4">
    <div class="col">
    <input type="Number" class="form-control" placeholder="Mobile Number" aria-label="Mobile" name="mobile" value="<?php echo $mobile; ?>">
     </div>
     <div class="col">
    <input type="password" class="form-control" placeholder="Password *" aria-label="Password" name="password" value="<?php echo $password; ?>">
     </div>
</div>
  <div class="d-grid col-4 ">
    <p style="color:red; padding-top:5px;"><?php if(isset($_GET['msg'])){echo $_GET['msg'];} ?></p>
  <input type="submit" class="btn btn-success " value="Update"/>
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



