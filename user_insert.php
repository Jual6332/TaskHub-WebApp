<?php 
include("includes/connection.php");
if(isset($_POST['sign_up'])){
			$name = $_POST['u_name'];
			$email = $_POST['u_email'];
			$pass = $_POST['u_pass'];

			$get_email = "select * from users where username='$email'";
			$run_email = mysqli_query($con,$get_email);
			
			$check = mysqli_num_rows($run_email);

			if($check==1){
				echo "<script>alert('Email is already registered, please try another.')</script>";
				exit();
			}

			if(strlen($pass)<8){
				echo "<script>alert('Password must have a minimum of 8 characters.')</script>";
				exit();
			}else{
				$get_users = "select count(id) from users";
				$run_users = mysqli_query($con,$get_users);
				$fetch_users = mysqli_fetch_array($run_users);
				$numUsers = $fetch_users['count(id)']+1;

				$insert = "insert into users values ('$numUsers',NULL,NULL,'$name','None','$email','$pass',NULL,NULL,123,'None',NULL)";

				$run_insert = mysqli_query($con,$insert);

				if($run_insert){
					$_SESSION['user_email']=$email;
					echo "<script>alert('Registration Successful!')</script>";
					echo "<script>window.open('home.php','_self')</script>";
				}

			}
}
			
?>