<?php


$role="Teacher";
$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$department=$_POST['department'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];




if($name!="" && $username!="" && $password!="" && $department!="" && $gender!="" && $mobile!="" && $email!="")
{


	require_once('connection.php');

$sql="INSERT INTO users(role,name,username,password,email,mobile,address,department,dateofbirth,gender,entrydate)VALUES('$role','$name','$username','$password','$email','$mobile','$address','$department','$dob','$gender',NOW())";

$query=mysqli_query($conn,$sql);
if($query)
{
	header("location:add_teacher.php?msg=Teacher Add Successfully.");
}
else
{
	header("location:add_teacher.php?msg=Data Add Not Successfull.Please Check.");
}

	
}
else
{
	header("location:add_teacher.php?msg= Empty Fields");
}


mysqli_close($conn);

?>