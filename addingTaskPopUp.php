<!DOCTYPE html>
<html>
<body>

<form action="" method="post">

	workers email<br>
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
