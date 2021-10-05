<?php

$flag=0;

$c_code=$_POST['c_code'];
$c_name=$_POST['c_name'];



if($c_code!="" && $c_name!="")
{


	require_once('connection.php');

		$check_sql = "SELECT * FROM courses ORDER BY id DESC";

        $check_query = mysqli_query($conn,$check_sql);
        while($check_row = mysqli_fetch_array($check_query, MYSQLI_ASSOC))
            {

	              $code = $check_row['c_code'];
	              $name = $check_row['c_name'];

	              if(($code == $c_code) || ($name == $c_name)) {

	              		$flag=1;

	              }
            
              }


             if($flag==0) {

             	$sql="INSERT INTO courses(c_code,c_name,entrydate)VALUES('$c_code','$c_name',NOW())";
              	$query=mysqli_query($conn,$sql);
					if($query)
					{
						header("location:add_course.php?msg=Courses Add Successfully.");
					}
					else
					{
						header("location:add_course.php?msg=Data Add Not Successfull.Please Check.");
					}

             }
             else 
             {
             	header("location:add_course.php?msg=Already add this course.");
             }


}
else
{
	header("location:add_course.php?msg=Enter Fields");
}


mysqli_close($conn);

?>