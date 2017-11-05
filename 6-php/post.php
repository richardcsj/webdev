<?php

	
	if($_POST) {
		
		$db = array("Richard", "JohnDoe","Alice","Bob");
		
		$found = false;
	
		
		
		for ($i = 0; $i < sizeof($db); $i++) {
			
			if($_POST['name'] == $db[$i]) {
				
				$found = true;
			
				
			} 
			
			
		} if ($found) {
			
			echo "<p>Hello ".$_POST['name']." !</p>";
			
		} else {
			
			echo "</p>".$_POST['name']." not found</p>";
			
		}
		
	}
	
	

?>


<form method="post">

	<p>Please enter your registered name</p>
	
	<input name="name" type="text">
	
	<input type="submit" value="submit">

</form>