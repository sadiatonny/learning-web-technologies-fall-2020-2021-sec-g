<?php
		
		
		if(isset($_POST['submit']))
{
	$name=$_POST['degree'];

echo $degree ;
}
else
{ echo "Submit your degree";
}


?>


<html>
	<head>
		<title>home page 2</title>
	</head>
	<body>
		<form method="POST" >
			<fieldset>
			<legend>Degree</legend>
			<input type="checkbox" name="dept">SSC
				<input type="checkbox" name="dept">HSC
			<input type="checkbox" name="dept">BSC.
			<input type="checkbox" name="dept">MSC.<hr/>
			<input type="submit" name="submit " value="submit"><br/>
			</fieldset>
			
		</form>
	
	</body>
</html>