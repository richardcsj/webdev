<?php

	$myArray = array("Rob", "Tom", "Bob");
	
	print_r($myArray);

	echo "<p>$myArray[1]</p>";
	
	$myArray[3] = "Alice";
	
	print_r($myArray);
	
	$myArray[0] = "Rich";
	
	echo"<br><br>";
	
	print_r($myArray);
	
	$myArray[10] = "John";
	
	$myArray["Nobody"] = "nobody";
	
	$myArray[] = "Last";
	
	unset($myArray["Nobody"]);
	
	echo"<br><br>";
	
	print_r($myArray);
	
	echo"<br><br>";
	
	$anotherArray = array(
	
	"US" => "English",
	"Korea" => "Korean");
	
	print_r($anotherArray);
	
	echo"<br><br>";
	
	echo sizeof($anotherArray);
	
	
	
	
?>