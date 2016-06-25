<?php

include("includes/connection.php");
if(isset($_POST['enter_empkey'])){
	$emp = $_POST['empkey'];
				
	$get_empkey = "SELECT * FROM `users` WHERE `users`.`key` = '$emp'";
	$run_empkey = mysqli_query($con,$get_empkey);
	$check = mysqli_num_rows($run_empkey);
				
	if($check==0){
		echo "<script>alert('Employment key not found.')</script>";
	}else{
		$insert = "UPDATE `users` SET `emp_requests` = '$user_key' WHERE `users`.`key` = '$emp'";
					
		$run_insert = mysqli_query($con,$insert);
					
		if($run_insert){
			echo "<script>alert('Employment request sent!')</script>";
		}else{
			echo "<script>alert('Insert fail')</script>";
		}
	}
}

?>