<?php


$role="Admin";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$name=$fname.$lname;

$uname=$_POST['uname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];




if($fname!="" && $lname!="" && $uname!="" && $password!="")
{


	require_once('connection.php');

$sql="INSERT INTO users(role,name,username,password,email,mobile,entrydate)VALUES('Admin','$name','$uname','$password','$email','$mobile',NOW())";

$query=mysqli_query($conn,$sql);
if($query)
{
	header("location:index.php?msg=Admin Registration Successfully.Please Login Now.");
}
else
{
	header("location:signup.php?msg=Admin Registration Not Successfull.Please Check.");
}

	
}
else
{
	header("location:signup.php?msg=Enter Fields");
}


mysqli_close($conn);

?>