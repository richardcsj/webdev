<?php

	$i = 5;
	
	while($i<=50) {
		
		echo $i."<br>";
		
		$i+=5;
		
	}
	
	$myArray = array("Me", "You", "Someone", "Nobody");
	
	$i=0;
	
	while($i < sizeof($myArray)) {
		
		echo $myArray[$i]."<br>";
		
		$i++;
		
	}
	
	

?>