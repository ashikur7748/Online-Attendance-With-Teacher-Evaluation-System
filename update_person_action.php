<?php


$id=$_POST['id'];
$role=$_POST['role'];
$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$department=$_POST['department'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];




if($name!="" && $password!="" && $department!="" && $gender!="" && $mobile!="" && $email!="")
{


	require_once('connection.php');


$sql="UPDATE users SET name='$name', password='$password', email='$email',mobile='$mobile',address='$address',department='$department',dateofbirth='$dateofbirth',gender='$gender' WHERE id='$id'";

$query=mysqli_query($conn,$sql);
if($query)
{
	if($role=="Teacher"){
		header("location:teacher_list.php?msg=Update Successfully.");
	}else{
		header("location:student_list.php?msg=Update Successfully.");
	}
	
}
else
{
	header("location:update_person.php?msg=Update Not Successfull.Please Check&id=$id");
}

	
}
else
{
	header("location:update_person.php?msg=Enter Fields&id=$id");
}


mysqli_close($conn);

?>