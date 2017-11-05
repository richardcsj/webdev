<?php

	$error="";
	$success="";
	
	
	if($_POST) {
		
		
		if (!$_POST['email']) {
			
			$error .= "An email address is required.<br>";
			
		}
		
		if (!$_POST['subject']) {
			
			$error .= "The subject field is required.<br>";
			
		}
		
		if (!$_POST['content']) {
			
			$error .= "The content field is required.<br>";
			
		}
		
		if ($_POST['email'] && 	filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			
			
			$error .= "The email address is invalid.<br>";
			
		}
		
		if($error !="") {
			
			$error = '<div class="alert alert-danger" role="alert"><strong>There were error(s) in your form!</strong><br>' 
				. $error . '</div>';
			
			
		} else {
			
			$emailTo = "mishyrawrs@gmail.com";
			
			$subject = $_POST['subject'];
			
			$content = $_POST['content'];
			
			$headers = "From: ".$_POST['email'];
			
			if (mail($emailTo, $subject, $content, $headers)) {
				
				$success = '<div class="alert alert-success" role="alert">Your message was successfully sent
				, we\'ll get back to you ASAP!</div>';
				
			} else {
				
				$error = '<div class="alert alert-danger" role="alert">Your message couldn\'t be sent - please try again later.</div>';
				
			}
			
			
		}
			
		
}
		
	
	

?>

<!doctype html>
<html lang="en">
  <head>
	
		<title>Contact us</title>
		
	
  </head>
  <body>
  
	<div class="container">
	
		<h1>Get in touch!</h1>
		
		<div id="error"><?php echo $error.$success; ?></div>
		
		<form method="post">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address">
  </div>
 <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" name="subject" class="form-control" id="subject">
  </div>
  <div class="form-group">
    <label for="content">What would you like to ask us?</label>
    <textarea class="form-control" name="content"id="content" rows="3"></textarea>
  </div>
  
  <button type="submit" id="submit" class="btn btn-primary">Submit</button>
</form>
		
		
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script type="text/javascript">
	
	
	</script>
	
  </body>
</html>



















