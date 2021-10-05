<?php 
if(isset($_GET['id']))
	{
	$id = $_GET['id'];
	
		require_once('connection.php');
	$sql = "DELETE FROM courses WHERE id ='$id'";
	$query=mysqli_query($conn,$sql);
	if($query)
		{
			
		header("location:courses_list.php?msg=Delete Sucessfully");	
		}
		else
			{
			header("location:courses_list.php?msg=Not Delete?");
			}
	}

?>