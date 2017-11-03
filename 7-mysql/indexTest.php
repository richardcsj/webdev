<?php

	session_start();
	
	if(array_key_exists('email', $_POST) OR array_key_exists('email', $_POST)) {
		
		$link = mysqli_connect("shareddb1d.hosting.stackcp.net","users-database-3137bc03", "mypassword!", "users-database-3137bc03");
	
			if (mysqli_connect_error()) {
		
			die ("There was an error connecting to the database");	
		
	}
		
		if ($_POST['email'] == '') {
			
			echo "<p>Email address is required.</p>";
			
		} else if ($_POST['password'] == ''){
			
			echo "<p>Please enter your password.</p>";
			
		} else {
			
			$query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
			
			$result = mysqli_query($link, $query);
			
			if (mysqli_num_rows($result) > 0) {
				
				echo "<p>This email address has already been taken.</p>";		
				
				
			} else {
				
				$query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."',
				'".mysqli_real_escape_string($link, $_POST['password'])."')";
				
				if (mysqli_query($link, $query)) {
					
					$_SESSION['email'] = $_POST['email'];
					
					header("Location: session.php");
					
				} else {
					
					echo "<p>There was a problem signing you up - please try again later.</p>";
				}
				
			}
			
		}
		
		
		
		
	}
	
	//$name = "Alice O'Green";
	
	
	// $query = "SELECT * FROM users WHERE name = '".mysqli_real_escape_string($link, $name)."'";
	
	//if ($result = mysqli_query($link, $query)) {
		
		//while($row = mysqli_fetch_array($result))
		
		
		//print_r($row);
		
		
	//}
	

?>

<form method = "post">
	
	<input name="email" type="text" placeholder="Email Address">
	
	<input name="password" type="password" placeholder="password">
	
	<input type="submit" value="Sign up">
	

</form>





















