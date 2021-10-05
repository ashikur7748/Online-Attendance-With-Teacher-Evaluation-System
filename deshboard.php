 <?php
            $allcourse=0;
            require_once('connection.php');

 
            $sql = "SELECT * FROM courses ORDER BY id DESC";


            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
            {
              $allcourse= ++$allcourse;
            }
?>

 <?php
            $allteacher=0;
            require_once('connection.php');

 
            $sql2 = "SELECT * FROM users WHERE role='Teacher'";


            $query2 = mysqli_query($conn,$sql2);
            while($row2 = mysqli_fetch_array($query2, MYSQLI_ASSOC))
            {
                $allteacher= ++$allteacher;
            }
?>

 <?php
            $allstudent=0;
            require_once('connection.php');

 
            $sql3 = "SELECT * FROM users WHERE role='Student'";


            $query3 = mysqli_query($conn,$sql3);
            while($row3 = mysqli_fetch_array($query3, MYSQLI_ASSOC))
            {
                $allstudent= ++$allstudent;
            }
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
        <link href="backend/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
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
                        <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" style="font-size: 40px;">Dashboard</li>
                        </ol>
                        <div class="row">

                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Courses</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <span class="small text-white" style="font-size: 20px;"><?php echo $allcourse; ?></span>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Teachers</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                         <span class="small text-white" style="font-size: 20px;"><?php echo $allteacher; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Students</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                         <span class="small text-white" style="font-size: 20px;"><?php echo $allstudent; ?></span>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    
                    </div>
                </main>
               
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="backend/assets/demo/chart-area-demo.js"></script>
        <script src="backend/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="backend/assets/demo/datatables-demo.js"></script>
    </body>
</html>
