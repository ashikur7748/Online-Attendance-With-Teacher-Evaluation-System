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
                              <h3 class="mt-4">All Course</h3>
                              <hr style="margin-bottom: 30px;">

                                 <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                List
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>SN</th>
                                                <th>Courses Code</th>
                                                <th>Courses Name</th>
                                                <th>Entry Date</th>                          
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <?php
                    $i=0;
            require_once('connection.php');

 
            $sql = "SELECT * FROM courses ORDER BY id DESC";


            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
            {
            
              $id = $row['id'];
              $c_code = $row['c_code'];
              $c_name = $row['c_name'];
              $entrydate = $row['entrydate'];


              $sn= ++$i;


               echo "<tr>
                      <td>$sn</td>
                      <td>$c_code</td>
                      <td>$c_name</td>
                      <td>$entrydate</td>
                      <td>

                            <a href='update_courses.php?id=$id' class='btn btn-primary btn-sm'>Edit</a>
                            <a href='courses_delete.php?id=$id' class='btn btn-danger btn-sm'>Delete</a>
                             
                         
                      </td>
                    </tr>";
              


            }


?>

                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                            </div>


                        </div>
                    </div>
                </main>
                
            </div>
        </div>
       <?php require_once('jsfile.php'); ?>
    </body>
</html>



