<?php
include("includes/connection.php");

if (isset($_POST['userCheck_req'])){
    $newEmps = implode(',', $_POST['userCheck_req']);
    $newEmpsArray = $_POST['userCheck_req'];
    $user_emps = $row['employees'];
    
    $insert_null_req = "UPDATE `users` SET `emp_requests` = NULL WHERE `users`.`id` = '$user_id'";
    $run_insert_null_req = mysqli_query($con,$insert_null_req);
    
    if($user_emps == NULL){
		$insert_emps = "UPDATE `users` SET `employees` = '$newEmps' WHERE `users`.`id` = '$user_id'";
	}else{
		$insert_emps = "UPDATE `users` SET `employees` = CONCAT(`employees`, ',$newEmps') WHERE `users`.`id` = '$user_id'";
	}
	
	$run_insert_emps = mysqli_query($con,$insert_emps);
	
	$addBoss_loop = 0;
	while($addBoss_loop < count($newEmpsArray)){
		$current_emp_id = $newEmpsArray[$addBoss_loop];
		$get_emp_bosses = "SELECT * FROM `users` WHERE `users`.`id` = '$current_emp_id'";
		$run_get_emp_bosses = mysqli_query($con,$get_emp_bosses);
		$row4 = mysqli_fetch_array($run_get_emp_bosses);
		$bosses = $row4['manager'];
		$newBoss = (string)$user_id;
		
		if($bosses == NULL){
			$insert_boss_req = "UPDATE `users` SET `manager` = '$newBoss' WHERE `users`.`id` = '$current_emp_id'";
		}
		else{
			$insert_boss_req = "UPDATE `users` SET `manager` = CONCAT(`manager`, ',$newBoss') WHERE `users`.`id` = '$current_emp_id'";
		}
		$insert_new_boss = mysqli_query($con,$insert_boss_req);
		$addBoss_loop++;
	}
}

?>