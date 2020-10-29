<?php
		
		
		if(isset($_POST['submit']))
{
	$name=$_POST['dob'];

echo $dob ;
}


?>


<html>
	<head>
		<title>home page 2</title>
	</head>
	<body>
		<form method="POST" >
			<fieldset>
			<legend>Date Of Birth</legend>
			DOB:<input type="date" name="dob"><hr/>
			<input type="submit" name="submit " value="submit"><br/>
			</fieldset>
			
		</form>
	
	</body>
</html>