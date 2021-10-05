<?php


	$role = $_POST['role'];
	$uname = $_POST['username'];
	$pass = $_POST['password'];

	if(($role!="") && ($uname!="") && ($pass!=""))
	{
		require_once('connection.php');

		// $sql = "SELECT role FROM users WHERE role = '$role'";
		// $query = mysqli_query($conn,$sql);
		// $row = mysqli_fetch_array($query);

		// if($row['role'] == $role)  
		// {

			$sql = "SELECT username FROM users WHERE username = '$uname' AND role = '$role'";

					$query = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($query);
					
					if($row['username'] == $uname)  
					{


					$sql = "SELECT password FROM users WHERE password = '$pass'";
					$query = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($query);
					
					if($row['password'] == $pass)  
					{	
						$sql = "SELECT * FROM users WHERE username = '$uname'";
						$query = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($query);
						
						$id=$row['id'];
						$roleinfo=$row['role'];
						$unameinfo=$row['username'];
						

						if($roleinfo=="Admin") {
						session_start();
						$_SESSION['role'] = $roleinfo;
						$_SESSION['username'] = $unameinfo; 
						header("location:deshboard.php");
						}
						else if($roleinfo=="Teacher") {
							session_start();
						$_SESSION['role'] = $roleinfo;
						$_SESSION['username'] = $unameinfo; 
						header("location:teacher_deshboard.php");
						}
						else{
							session_start();
						$_SESSION['role'] = $roleinfo;
						$_SESSION['username'] = $unameinfo; 
						header("location:student_deshboard.php");
						}
						
					}
					else
					{
						header("location:index.php?msg=Password is invalid");
					}


				}
				else
				{
					header("location:index.php?msg=Chack Username or Type");

				}
		// }
		// else
		// 		{
		// 			header("location:index.php?msg=User type not found");
		// 		}
		
	}
	else
	{
		header("location:index.php?msg=Empty Field.");
	}


?>