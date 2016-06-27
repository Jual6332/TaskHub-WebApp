<?php echo '
	<form action="reset.php" method="POST>
	E-mail Address: <input type="text" name="email" /><br />
	New Password: <input type="password" name="password" /><br />
	Confirm Password: <input type="password" name="confirmpassword" size="20" /><br />
	<input type="hidden" name="q" value="';
	
	if(isset($_GET["q"])) {
		echo $_GET["q"];
	}
	
	echo '" /><input type="submit" name="ResetPasswordForm" value=" Reset Password " />
	
	</form>';

?>