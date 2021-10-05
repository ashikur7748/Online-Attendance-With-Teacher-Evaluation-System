<?php
 session_start();
 if(!isset($_SESSION['username']))
  {
  header("location:index.php");
  }
  $role = $_SESSION['role'];
  $username = $_SESSION['username'];

?>




 <nav class="sb-topnav navbar navbar-expand navbar-dark " style="background-color: #005174; ">
            <a class="navbar-brand" href="index.html">OAWTES</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                   
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i> <?php echo $username ; ?></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                        <?php 
                        if($role=="Admin"){
                         echo"<a class='dropdown-item' href='admin_profile.php'>Profile</a>";
                        }else{
                          echo"<a class='dropdown-item' href='profile.php'>Profile</a>";
                        } ?>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                      
                    </div>
                </li>
            </ul>
        </nav>
