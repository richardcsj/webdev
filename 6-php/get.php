<?php

	if(is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)) {
		
		$i=2;
		
		$isPrime = true;
		
		while($i < $_GET['number']) {
			
			if($_GET['number']%$i ==0) {
				
				$isPrime = false;
				
			
			}
			
			$i++;
			
		
		}	
	
		if($isPrime) {
			
			echo "<p>".$i." is a prime number.</p>";
			
		} else {
			
			
			echo "<p>".$i." is not prime.</p>";
		}
		
	
	} else {
		
		echo "Please enter a valid whole number.";
	}
	

?>

<p>Please enter a whole number</p>

<form>
	
	<input name="number" type="text">
	
	<input type="submit" value ="submit">

</form>