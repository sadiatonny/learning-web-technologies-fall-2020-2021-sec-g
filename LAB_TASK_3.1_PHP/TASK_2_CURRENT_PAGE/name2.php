<?php
		
		
		if(isset($_POST['submit']))
{
	$name=$_POST['name'];

echo $name ;
}


?>

<html>
	<head>
		<title>home page 1</title>
	</head>
	<body>
		<form method="POST" >
			<fieldset>
			<legend>Form</legend>
			<input type="text" name="name" value=" "	><hr/>
			<input type="submit" name="submit " value="submit"><br/>
			</fieldset>
			
		</form>
	
	</body>
</html>