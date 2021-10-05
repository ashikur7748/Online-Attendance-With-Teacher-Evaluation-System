<?php


$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];





if($name!="" && $password!="" && $mobile!="" && $email!="")
{


	require_once('connection.php');

$sql="UPDATE users SET name='$name', address='$address' ,password='$password', mobile='$mobile', email='$email' WHERE id='$id'";

$query=mysqli_query($conn,$sql);
if($query)
{
	header("location:profile.php?msg=Update Successfully.");
}
else
{
	header("location:profile.php?msg=Update Not Successfull.Please Check.");
}

	
}
else
{
	header("location:profile.php?msg=Enter Fields");
}


mysqli_close($conn);

?>