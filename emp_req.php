<?php
include("includes/connection.php");
if(isset($_POST['enter_empkey'])){
	$emp = $_POST['empkey'];
				
	$get_empkey = "SELECT * FROM `users` WHERE `users`.`key` = '$emp'";
	$run_empkey = mysqli_query($con,$get_empkey);
	$check = mysqli_num_rows($run_empkey);
	$row2 = mysqli_fetch_array($run_empkey);
	$boss_req = $row2['emp_requests'];
	
	$req_array = explode(',',$boss_req);
				
	if($check==0){
		echo "<script>alert('Employment key not found.')</script>";
	}else if(in_array($user_id,$req_array)){
		echo "<script>alert('Employment request already sent.')</script>";
	}else{
		if($boss_req == NULL){
			$insert = "UPDATE `users` SET `emp_requests` = '$user_id' WHERE `users`.`key` = '$emp'";
		}else{
			$insert = "UPDATE `users` SET `emp_requests` = CONCAT(`emp_requests`, ',$user_id') WHERE `users`.`key` = '$emp'";
		}
					
		$run_insert = mysqli_query($con,$insert);
					
		if($run_insert){
			echo "<script>alert('Employment request sent!')</script>";
		}else{
			echo "<script>alert('Insert fail')</script>";
		}
	}
}
?>