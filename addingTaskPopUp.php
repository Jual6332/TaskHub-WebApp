Enter file contents here<!DOCTYPE html>
<html>
<body>

<form action="" method="post">
	Task Id#<br>
	<input type "text" name="u_id"><br>
	worker 1<br>
		<input type "text" name="u_worker1"><br>
	Task Description<br>
		<input type "text" name="u_TaskDescription"><br>
	Difficulty<br>
		<input type "text" name="u_difficulty"><br>
	Due Date<br>
		<input type="date" name="u_dateDue"><br>
	<input type="Submit" value="Sumbit Task"  name="b_Submit_Task">		
</form>

<?php
include("includes/connection.php");
if(isset($_POST['b_Submit_Task'])){
	$taskId=$_POST['u_id'];
	$difficulty=$_POST['u_difficulty'];
	$worker1=$_POST['u_worker1'];
	$manager="testerManager";
	$description=$_POST['u_TaskDescription'];
	$due = $_POST['u_dateDue'];
	$assigned = "2016-08-12";
	$progress = "Not started";
	$insert="insert into `InProgress` (`id`, `manager`, `workers`, `description`, `difficulty`, `due`, `assigned`, `progress`) values ('$taskId','your mother','$worker1','$description','$difficulty','$due',now(),'Not stated')";

	$run_insert = mysqli_query($con,$insert);
	if (false==$run_insert){
		printf("error: %s\n", mysqli_error($con));
	}		
	if($run_insert){

	
        	echo "<script>window.open('home.php','_self')</script>";
	}
        }

?>


</body>
</html>
