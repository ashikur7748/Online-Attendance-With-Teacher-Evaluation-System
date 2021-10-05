<?php

if(isset($_POST['update']))
    {
    


    $id = implode(', ', $_POST['id']);
    $all_id = explode(',',$id);
    $all_id_size=count($all_id);



    $atten_status = implode(', ', $_POST['atten_status']);
	$all_atten_status = explode(',',$atten_status);





	           require_once('connection.php');


             	for ($i = 0; $i < $all_id_size; $i++) {
             	$sql="UPDATE attendance SET atten_status='$all_atten_status[$i]' WHERE id='$all_id[$i]'";
              	$query=mysqli_query($conn,$sql);
					if($query)
					{
						header("location:attendance_reports.php?msg=Update  Successfully.");
					}
					else
					{
						header("location:attendance_reports.php?msg=Update Not Successfull.Please Check.");
					}
				}

            



}


?>