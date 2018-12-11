<?php 

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name=$_POST['name'] || '';
		$uni= $_POST['uni'] || '';
		$email=$_POST['email'] || '';

		$xml = file_get_contents("http://10.2.157.27/4/on");
		$xml = file_get_contents("http://10.2.157.27/5/on");

	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Arts 108</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script  href="scripts.js"></script>
</head>



<body>  
	<div class="container" data-position="1">

	  <div class="dolly"><a href="http://maluto.com" target="_parent" class="credit"> maluto.com</a></div>

	  <div class="register">
	  
	    <h1 class="register-heading">Register </h1>
	      
	    <form method="post" id="form" action="Form.php">
	      	<label for="name">Your full name</label>
	        <input type="text" 
	               name="name" 
	               placeholder="John Edwards"  
	               class="input-txt" data-pos="1" required/>
	    	<label for="company">organization</label>
	        <input type="text" 
	               name="uni" 
	               placeholder="Cocoa, Co." 
	               minlength="5"
	               class="input-txt" data-pos="2" required/>
			<label for="email">Your email</label>
	        <input type="email" 
	               name="email" 
	               placeholder="jonhymelave@cocoa.com" 
	               minlength="5"
	               class="input-txt" data-pos="3" required/>

	        <button type="submit"> Send it baby! </button>
	    </form>

	  </div>

	</div>


	
</body>
</html>

