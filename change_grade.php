<?php
include("includes/connection.php");

if(isset($_POST['change_grade'])){
	$newGrade = $_POST['change_grade'][0];
	$taskid = $_POST['hid_in'][0];
	if($newGrade<=10 && $newGrade>=1){
		$upd_taskGrade = "UPDATE `CompletedTasks` SET `grade` = '$newGrade' WHERE `CompletedTasks`.`id` = '$taskid'";
		$run_updGrade = mysqli_query($con,$upd_taskGrade);
	}else{
		echo "Please enter number between 1 and 10";
	}
	echo "<META http-equiv='refresh' content='0;URL=/3308-project/tasks_sent_dash.php'>";
}

?>