<?php

$flag=0;

$teacher_id=$_POST['teacher_id'];
$allcourse_code = implode(', ', $_POST['course_code']);




if($teacher_id!="" && $allcourse_code!="")
{


	require_once('connection.php');

		// $check_sql = "SELECT * FROM courses_assign ORDER BY id DESC";

		// if (!$check1_res) {
	    // printf("Error: %s\n", mysqli_error($con));
	    // exit();
// }
        $check_query = mysqli_query($conn,$check_sql);
        while($check_row = mysqli_fetch_array($check_query, MYSQLI_ASSOC))
            {

	              $teacher_id_check = $check_row['teacher_id'];

	              if(($teacher_id == $teacher_id_check)) {

	              		$flag=1;

	              }
            
              }


             if($flag==0) {

             	$sql="INSERT INTO courses_assign(teacher_id,course_code,entrydate)VALUES('$teacher_id','$allcourse_code',NOW())";
              	$query=mysqli_query($conn,$sql);
					if($query)
					{
						header("location:courses_assign.php?msg=Courses Add Successfully.");
					}
					else
					{
						header("location:courses_assign.php?msg=Data Add Not Successfull.Please Check.");
					}

             }
             else 
             {
             	header("location:courses_assign.php?msg=Already assign this teacher.");
             }


}
else
{
	header("location:courses_assign.php?msg=Field is empty");
}


mysqli_close($conn);

?>