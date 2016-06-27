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

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>TaskHub | Add Task</title>
    
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="plugins/morris/morris.css">
	<!-- jvectormap -->
  	<link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  	<!-- Date Picker -->
  	<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  	<!-- Daterange picker -->
  	<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  	<!-- bootstrap wysihtml5 - text editor -->
  	<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class=="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

<form action="" method="post">
Description: <?php echo $description?><br>
Difficulty: <?php echo $taskInfo['difficulty']?><br>
Assigned: <?php echo $taskInfo['assigned']?><br>
Due: <?php echo $taskInfo['due']?><br>
Days Until Due: <?php $datediff=strtotime($taskInfo['due'])-time(); echo floor($datediff /(60*60*24));?><br>
Progress:

<input type text size="60" value='<?php echo $taskInfo['progress'] ?>' name="u_progress"><br>
<input type="Submit" value = "Submit Changes" name = "b_submitChanges">

<input type="Submit" value="Task Is Completed" name = "b_taskComplete">
</form>

</div>

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
	$delete="DELETE FROM `InProgress` WHERE id='$taskId'";
	$runDelete=mysqli_query($con,$delete);
	echo "<script>window.open('home.php','_self')</script>";	


	
}
?>

 
</body>
</html>
