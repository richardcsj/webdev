<?php
	
	$weather ='';
	$error='';
	
	if($_GET['city']) {
		
		$urlContents = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['city'])."&appid=927ef6db92d37dba9ccab8c357f10a30");
		
		$weatherArray = json_decode($urlContents, true);
		
		//print_r($weatherArray);
		
		if($weatherArray['cod'] == 200) {
		
			$weather = "The weather in ".$_GET['city']." is currently '".$weatherArray['weather'][0]['description']."'. ";
			
			$temperature = intval($weatherArray['main']['temp'] - 273);
			
			$weather .= " The temperature is ".$temperature."&deg;C and the wind speed is ".$weatherArray['wind']['speed']." m/s.";
	
		} else {
			
			$error = "Could not find the city - please try again.";
			
		}
		
	}
	

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Weather</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	<style type="text/css">
	
		 html { 
			  
			  background: url(background.PNG) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			  
			  }
			  
		body {
			
			
			background:none;
		}
		
		.container{
			
			text-align:center;
			margin-top:100px;
			width:500px;
		}
		
		input{
			margin:10px 0;
		}
		
		#weather {
			
			margin-top:10px;
		}
	
	</style>
  </head>
  <body>
		<div class="container">
		
			<h1>What's The Weather?</h1>
			
			
			<form method="GET">
			  <div class="form-group">
				<label for="city">Enter the name of the city.</label>
				<input type="text" class="form-control" id="city" name="city" placeholder="Eg. London, Tokyo" 
				value = "<?php 
						
							if(array_key_exists('city', $_GET)) {
				
				
							echo $_GET['city'];
							
							}
						?>">
				</div>
		
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			
			<div id="weather"><?php 
			
				if($weather) {
					
					echo '<div class="alert alert-info">
					'.$weather.'
					</div>';
					
				} else if($error) {
					
					echo '<div class="alert alert-danger">
					'.$error.'
					</div>';
					
					
				}
			
			?></div>
		
		</div>
	
	<img src="background.PNG"> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>