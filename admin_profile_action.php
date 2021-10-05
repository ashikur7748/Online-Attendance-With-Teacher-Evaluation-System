<?php


$role="Admin";
$name=$_POST['name'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];




if($name!="" && $uname!="" && $password!="")
{


	require_once('connection.php');


$sql="UPDATE users SET name='$name', username='$uname' ,password='$password', mobile='$mobile', email='$email' WHERE role='$role'";

$query=mysqli_query($conn,$sql);
if($query)
{
	header("location:index.php?msg=Admin Update Successfully.Please Login Now.");
}
else
{
	header("location:admin_profile.php?msg=Admin Info Update Not Successfull.Please Check.");
}

	
}
else
{
	header("location:admin_profile.php?msg=Enter Fields");
}


mysqli_close($conn);

?>