<!DOCTYPE html>
<html>
<body>
 
<?php 
include("includes/connection.php");
session_start();
$user=$_SESSION['user_email'];
$get_userID=mysqli_query($con,"SELECT name FROM users WHERE username='$user'");
$get_userID = mysqli_fetch_array($get_userID);
$id = $get_userID['name'];
$taskId=$_GET['q'];
$getTaskInfo = mysqli_query($con, "SELECT * FROM InProgress where id='$taskId' AND workers='$id'");
$taskInfo=mysqli_fetch_array($getTaskInfo);

$description=$taskInfo['description'];
?>

<form action="" method="post">
Description: <?php echo $description?><br>
Difficutly: <?php echo $taskInfo['difficulty']?><br>
Assigned: <?php echo $taskInfo['assigned']?><br>
Due: <?php echo $taskInfo['due']?><br>
Days tell due: <?php $datediff=strtotime($taskInfo['due'])-time(); echo floor($datediff /(60*60*24));?><br>
progress:

<input type text size="60" value='<?php echo $taskInfo['progress'] ?>' name="u_progress"><br>
<input type="Submit" value = "Submit Changes" name = "b_submitChanges">

<input type="Submit" value="task is completed" name = "b_taskComplete">
</form>
<?php
if(isset($_POST['b_submitChanges'])){
	$progressPHP=$_POST['u_progress'];
	$progress="UPDATE InProgress SET progress='$progressPHP' WHERE id='$taskId' AND workers='$id'";
	
	$runProgress=mysqli_query($con,$progress);
	 echo "<script>window.open('home.php','_self')</script>";
	
}
if(isset($_POST['b_taskComplete'])){
	
	$manager=$taskInfo['manager'];
	//$today=date('Y-m-d',time());
	
	$insert="INSERT INTO `CompletedTasks` (`id`, `manager`, `workers`, `description`,`grade`,`completed`) VALUES('$taskId','$manager','$id','$description','Not given yet',now())";

	$runInsert=mysqli_query($con,$insert);
	$delete="DELETE FROM `InProgress` WHERE id='$taskId' AND workers='$id'";
	$runDelete=mysqli_query($con,$delete);
	echo "<script>window.open('home.php','_self')</script>";	


	
}
?>

 
</body>
</html>
