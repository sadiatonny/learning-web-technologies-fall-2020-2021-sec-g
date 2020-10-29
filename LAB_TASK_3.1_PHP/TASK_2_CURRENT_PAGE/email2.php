<?php
		
		
		if(isset($_POST['submit']))
{
	$name=$_POST['email'];

echo $email ;
}


?>


<html>
	<head>
		<title>home page 2</title>
	</head>
	<body>
		<form method="POST" >
			<fieldset>
			<legend>Email</legend>
			<input type="text" name="email" value=" "	><hr/>
			<input type="submit" name="submit " value="submit"><br/>
			</fieldset>
			
		</form>
	
	</body>
</html>