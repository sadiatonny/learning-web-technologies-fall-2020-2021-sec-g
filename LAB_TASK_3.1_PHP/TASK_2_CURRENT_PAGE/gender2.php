<?php
		
		
		if(isset($_POST['submit']))
{
	$name=$_POST['gender'];

echo $gender ;
}
else
{ echo "Enter Date of Birth";
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
			Gender:<input type="radio" name="gender">male
				<input type="radio" name="gender">female
				<input type="radio" name="gender">other<hr/>
			<input type="submit" name="submit " value="submit"><br/>
			</fieldset>
			
		</form>
	
	</body>
</html>