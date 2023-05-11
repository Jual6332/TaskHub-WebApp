<?php 
include("includes/connection.php");
if(isset($_POST['sign_up'])){
			$fname = $_POST['u_fname'];
			$lname = $_POST['u_lname'];
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
				$get_users = "select count(firstname) from users";
				$run_users = mysqli_query($con,$get_users);
				$fetch_users = mysqli_fetch_array($run_users);
				$numUsers = $fetch_users['count(firstname)']+1;
				
				$empKey = rand(11111111,99999999);

				$insert = "insert into users values ('$fname','$lname','$email','$pass')";
				//$insert = "insert into users values ('$numUsers',NULL,NULL,'$name','None','$email','$pass',NULL,NULL,'$empKey','None',NULL)";

				$run_insert = mysqli_query($con,$insert);

				if($run_insert){
					$_SESSION['user_email']=$email;
					echo "<script>alert('Registration Successful!')</script>";
					echo "<script>window.open('home.php','_self')</script>";
				}

			}
}
			
?>