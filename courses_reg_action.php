<?php

$flag=0;

$student_id=$_POST['student_id'];
$allcourse_code = implode(', ', $_POST['course_code']);




if($student_id!="" && $allcourse_code!="")
{


	require_once('connection.php');

		$check_sql = "SELECT * FROM courses_reg ORDER BY id DESC";

        $check_query = mysqli_query($conn,$check_sql);
        while($check_row = mysqli_fetch_array($check_query, MYSQLI_ASSOC))
            {

	              $student_id_check = $check_row['student_id'];

	              if(($student_id == $student_id_check)) {

	              		$flag=1;

	              }
            
              }


             if($flag==0) {

             	$sql="INSERT INTO courses_reg(student_id,course_code,entrydate)VALUES('$student_id','$allcourse_code',NOW())";
              	$query=mysqli_query($conn,$sql);
					if($query)
					{
						header("location:courses_reg.php?msg=Courses Add Successfully.");
					}
					else
					{
						header("location:courses_reg.php?msg=Data Add Not Successfull.Please Check.");
					}

             }
             else 
             {
             	header("location:courses_reg.php?msg=Already assign this course.");
             }


}
else
{
	header("location:courses_reg.php?msg=Enter Fields");
}


mysqli_close($conn);

?>