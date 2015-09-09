<?php

	// LOGIN.PHP
	// echo $_POST["email"];
	$email_error = "";

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "keegi vajutas nuppu";
		
		if (empty($_POST["email"]) )  {
			$email_error = "see väli on kohustuslik";

		}
	}
?>
<html>
<head>
<title>Login page</title>
</head>

<body>
	<h2>log in</h2>
		
		<form action="login.php" method="post">
		<input name="email"e type="email" placeholder = "email"> <?php echo $email_error;  ?><br><br>
		<input name="password" type="password" placeholder = "parool"> <br><br>
		<input type="submit" value="login">
		</form>


	<h2>create user</h2>
</body>


</html>