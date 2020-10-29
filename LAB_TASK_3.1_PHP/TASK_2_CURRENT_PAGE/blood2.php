<?php
		
		
		if(isset($_POST['submit']))
{
	$name=$_POST['blood'];

echo $blood ;
}
else
{ echo "Submit your blood group";
}


?>

<html>
	<head>
		<title>home page 2</title>
	</head>
	<body>
		<form method="POST" >
			<fieldset>
			<legend>BLOOD GROUP</legend>
			<select name="blood group">
					<option seleceted></option>
					
					<option>A+</option>
					<option>b+</option>
					<option >ob+</option>
				</select><hr/>
			<input type="submit" name="submit " value="submit"><br/>
			</fieldset>
			
		</form>
	
	</body>
</html>