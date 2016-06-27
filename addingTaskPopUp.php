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
	<input type="Submit" value="Sumbit Task"  name="b_Submit_Task">
	<br>
	<br>		
</form>

<?php
include("includes/connection.php");
session_start();
$user=$_SESSION['user_email'];
$get_userID = mysqli_query($con,"select * from users where username='$user'");
$get_userID = mysqli_fetch_array($get_userID);
$user_emps = $get_userID['employees'];
$emp_array = explode(',',$user_emps);

echo "your current employees names and emails are";
echo "<div>";
echo "<table border='1' style='width:25%'>";
echo "<tr>";
echo "<td><b>Employees</b></td>";
echo "<td><b>Emails</b></td>";
echo "</tr>";
for($j=0;$j < count($emp_array);$j++){
	$cur_emp_id = (int)$emp_array[$j];
	$getEmployees = mysqli_query($con,"SELECT * FROM `users` WHERE `id` = '$cur_emp_id'");
	$row6 = mysqli_fetch_array($getEmployees);
	$user_full_name = $row6['name'];
	$user_email = $row6['username'];
	echo "<tr><td>$user_full_name</td>";
	echo "<td>$user_email</td></tr>";
}
echo "</table>";
echo "</div>";
/*echo "<table border=1>
	<tr>

	<th> Employees Name</th>
	<th> Email </th>
	</tr>";
while($record = mysqli_fetch_array($getEmployees)){
	echo "<tr>";
	echo "<td>" . $record['name'] . "</td>";
	echo "<td>" . $record['username'] . "</td>";
	echo "</tr>";
}
echo "</table>";*/

if(isset($_POST['b_Submit_Task'])){	
	


	$worker1_email=$_POST['u_worker1'];
	$name="SELECT name, manager FROM users WHERE username='$worker1_email'";
	$run_email = mysqli_query($con,$name);
	$row=mysqli_fetch_array($run_email);
	$name=$row['name'];
	$check = mysqli_num_rows($run_email);
	if($check==1){
		if($id==$row['manager']){
		
			$difficulty=$_POST['u_difficulty'];
			$manager=$row['manager'];
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
			printf("please enter one of YOUR workers emails");
		}
	}else{
		printf("error users email is not in the system please insert a email of a worker signed up for taskHub");
	}
}

?>


</body>
</html>
