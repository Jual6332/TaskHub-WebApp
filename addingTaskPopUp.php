<!DOCTYPE html>
<html>
	
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

	Worker's Email<br>
		<input type "text" name="u_worker1"><br>
	Task Description<br>
		<input type "text" name="u_TaskDescription"><br>
	Difficulty<br>
		<input type "text" name="u_difficulty"><br>
	Due Date<br>
		<input type="date" name="u_dateDue"><br>
	<input type="Submit" value="Submit Task"  name="b_Submit_Task">
	<br>
	<br>		
</form>
	</div>

<?php
include("includes/connection.php");
session_start();
$user=$_SESSION['user_email'];
$get_userID = mysqli_query($con,"select * from users where username ='$user'");
$get_userID = mysqli_fetch_array($get_userID);
$id = $get_userID['id'];

$employees=explode(",",$get_userID['employees']);

echo "Your current employees' names and emails are";
echo "<table border=1>
	<tr>

	<th> Employees Name</th>
	<th> Email </th>
	</tr>";
foreach($employees as $employId){

	$getEmployID=mysqli_query($con,"select *from users where id='$employId'");
	//$getEmployID=mysqli_fetch_array($getEmployID);
while($record = mysqli_fetch_array($getEmployID)){
	echo "<tr>";
	echo "<td>" . $record['name'] . "</td>";
	echo "<td>" . $record['username'] . "</td>";
	echo "</tr>";
}}
echo "</table>";

if(isset($_POST['b_Submit_Task'])){	
	


	$worker1_email=$_POST['u_worker1'];
	$name="SELECT name, manager FROM users WHERE username='$worker1_email'";
	$run_email = mysqli_query($con,$name);
	$row=mysqli_fetch_array($run_email);
	$name=$row['name'];
	$check = mysqli_num_rows($run_email);
	if($check==1){
		$test=0;
		$employees = explode(",",$row['manager']);
		foreach($employees as $employId){
			if($id==$employId){
				$test=1;
			}
		}	
		
		if($test==1){
		
			$difficulty=$_POST['u_difficulty'];
			$manager=$id;
			$description=$_POST['u_TaskDescription'];
			$due = $_POST['u_dateDue'];
			$assigned = "2016-08-12";
			$progress = "Not started";
			$insert="insert into `InProgress` (`manager`, `workers`, `description`, `difficulty`, `due`, `assigned`, `progress`) values ('$manager','$name','$description','$difficulty','$due',now(),'Not started')";

			$run_insert = mysqli_query($con,$insert);
			if (false==$run_insert){
				printf("error: %s\n", mysqli_error($con));
			}		
			if($run_insert){

	
        			echo "<script>window.open('home.php','_self')</script>";
			}
		
		}else{
			printf("Please enter one of YOUR workers emails");
		}
	}else{
		printf("Error: User's email is not in the system. Please insert a email of a worker signed up for taskHub");
	}
}

?>


</body>
</html>
