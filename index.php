<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Online Attendence with Teacher Evaluation System</title>
  </head>
  <body>

    <!-- Just an image -->
<nav class="navbar navbar-light bg-info">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="img/logo.png" alt="" width="110" height="70">
    </a>
    <?php
            require_once('connection.php');

            $sql = "SELECT role FROM users WHERE role = 'Admin'";
            $query = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($query);

            if($row['role'] != "Admin")  
            {
               echo" <a class='navbar-brand btn btn-success text-white' href='signup.php'>Sign Up</a> ";
            }
    ?>
    
  </div>
</nav>


<div class="container mb-5 mt-5">
    <h2 class="text-center text-info font-weight-bolder">Online Attendence With Teacher Evaluation System</h2>
</div> 


<div class="container">
  <div class="row">

    <div class="col-md-7">
      <img src="img/homepic.jpg" alt="" class="w-100" >
    </div>

    <div class="col-md-4 border border-success rounded p-5 ml-auto">

      <form method="POST" action="login_action.php">
      <div class="mb-3">

        
        

      <select class="form-select form-select-lg" aria-label="Default select example" name="role">
          <option value="Admin" selected>Admin</option>
          <option value="Teacher">Teacher</option>
          <option value="Student">Student</option>
        </select>
      </div>

      <div class="form-floating mb-3">
      <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">User Name</label>
      </div>
      <div class="form-floating mb-4">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
       <p style="color:red; padding-top:5px;"><?php if(isset($_GET['msg'])){echo $_GET['msg'];} ?></p>
      <div class="d-grid">
        <input type="submit" name="" value="Sign In" class="btn btn-success"/>
      </div>
  
      </form>
    </div>
  </div>
</div> 


   

    <!-- Separate Popper and Bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    
  </body>
</html>
