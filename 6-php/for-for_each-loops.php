<?php

	$family = array("Rich", "John", "May");

	
	foreach($family as $key => $value) {
		
		$family[$key] = $value." is a member in our array";
		
		echo "Array item ".$key." is ".$value."<br>";
		
	}
	
	for($i=0; $i < sizeof($family); $i++) {
		
	
		echo $family[$i]."<br>";
	
	}
?>