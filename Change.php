<?php
	
	//Connect to SQL
	$username = "root";
	$password = "";
    $host = "localhost";
    $dbname = "taskhub";

    
try {
	$conn = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);
}
catch(PDOException $ex) {
    $msg = "Failed to connect to the database";
}

//Was the form submitted?
if (isset($_POST["ForgotPassword"])) {
	
	//Harvest submitted email address
	if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$email = $_POST["email"];
	}
	else {
		echo "Email is not valid";
		exit;
	}
	
	//Ensure user exists with this email
	$query = (new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password))->prepare('SELECT username FROM users WHERE username = :email');
	$query->bindParam(':email', $email);
	$query->execute();
	$userExists = $query->fetch(PDO::FETCH_ASSOC);
	$conn = null;
	
	if ($userExists["username"]) {
		//Create a unique salt. This will never leave PHP unencrypted.
		$salt =  "498#2D83B631%3800EBD!801600D*7E3CC13";
		
		//Create password reset key
		$password = hash('sha512', $salt.$userExists["username"]);
		
		//Create URL to reset passwork
		$pwrurl = "http://localhost/project/reset_password.php?q=".$password;
		
		//Mail reset link
		$mailbody = "Dear user,\n\nIt appears that you have requested a password reset at TaskHub\n\nTo reset your password, please click the link below. If you cannot click it, please paste it into your web browser's address bar.\n\n" . $pwrurl . "\n\nThanks,\nThe Administration";
		$headers = 'From: webmaster@taskhub.com' . "\r\n";
		mail($userExists["username"], "TaskHub Password Reset", $mailbody, $headers);
		echo "Your password recovery key has been sent to your email address.";
	}
	else {
		echo "No user with that email address exists.";
	}
	
}
?>
