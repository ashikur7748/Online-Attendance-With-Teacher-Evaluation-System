<?php

$id=$_POST['id'];
$c_code=$_POST['c_code'];
$c_name=$_POST['c_name'];



if($c_code!="" && $c_name!="")
{

				require_once('connection.php');
				$sql="UPDATE courses SET c_code='$c_code', c_name='$c_name' WHERE id='$id'";

              	$query=mysqli_query($conn,$sql);
					if($query)
					{
						header("location:courses_list.php?msg=Update Successfully.");
					}
					else
					{
						header("location:update_courses_action.php?msg=Update Not Successfull.Please Check&id=$id");
					}




}
else
{
	header("location:update_courses_action.php?msg=Enter Fields&id=$id");
}


mysqli_close($conn);

?>