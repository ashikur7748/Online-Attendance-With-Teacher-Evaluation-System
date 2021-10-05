<?php

if(isset($_POST['attendance']))
    {
    
    $course_code=$_POST['course_code'];


    $student_id = implode(', ', $_POST['student_id']);
	$all_student_id = explode(',',$student_id);
	$all_student_id_size=count($all_student_id);


    $atten_status = implode(', ', $_POST['atten_status']);
	$all_atten_status = explode(',',$atten_status);


    $atten_date=$_POST['atten_date'];  
    $myatten_date = date("Y-m-d", strtotime($atten_date));  
    $current_date=date("Y-m-d");
    

   if($atten_date!="" && $atten_status!="")
   {


	require_once('connection.php');

		$check_sql = "SELECT * FROM attendance WHERE atten_date = $current_date";

        $check_query = mysqli_query($conn,$check_sql);
        while($check_row = mysqli_fetch_array($check_query, MYSQLI_ASSOC))
            {

	              $course_code_check = $check_row['course_code'];
	              $atten_date_check = $check_row['atten_date'];

					if(($course_code_check === $course_code)) {
	
	              		$flag=1;

	              }
            
              }


             if($flag==0) {

             	for ($i = 0; $i < $all_student_id_size; $i++) {
             	$sql="INSERT INTO attendance(course_code,student_id,atten_status,atten_date,entrydate)VALUES('$course_code','$all_student_id[$i]','$all_atten_status[$i]','$myatten_date',NOW())";
              	$query=mysqli_query($conn,$sql);
					if($query)
					{
						header("location:attendance_take.php?msg=Attendance Taken Successfully.");
					}
					else
					{
						header("location:attendance_take.php?msg=Data Add Not Successfull.Please Check.");
					}
				}

             }
             else 
             {
             	header("location:attendance_take.php?msg=Already taken.");
             }


}
else
{
	header("location:attendance_take.php?msg=Enter Fields");
}


}


?>