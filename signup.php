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

    <nav class="navbar navbar-light bg-info">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="img/logo.png" alt="" width="110" height="70">
    </a>
  </div>
</nav>


<div class="container mb-5 mt-5">
    <h2 class="text-center mark font-weight-bolder">Admin Registration</h2>
</div> 

<div class="container border border-success rounded p-5">
  <form method="post" action="signup_action.php">
    <div class="row mb-4">
  <div class="col">
    <input type="text" class="form-control" placeholder="First Name *" aria-label="First name" name="fname">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last Name *" aria-label="Last name" name="lname">
  </div>
</div>

  <div class="row mb-4">
    <div class="col">

    <input type="text" class="form-control" placeholder="User Name *" aria-label="Last name" name="uname">
  </div>
    <div class="col">
    <input type="Email" class="form-control" placeholder="Email" aria-label="Last name" name="email">
  </div>
</div>
  <div class="row mb-4">
    <div class="col">
    <input type="Number" class="form-control" placeholder="Mobile Number" aria-label="Mobile" name="mobile">
     </div>
     <div class="col">
    <input type="password" class="form-control" placeholder="Password *" aria-label="Password" name="password">
     </div>
</div>
  <div class="d-grid col-4 mx-auto">
    <p style="color:red; padding-top:5px;"><?php if(isset($_GET['msg'])){echo $_GET['msg'];} ?></p>
  <input type="submit" class="btn btn-success" value="Submit"/>
</div>


  </form>
</div>

   

    <!-- Separate Popper and Bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    
  </body>
</html>
