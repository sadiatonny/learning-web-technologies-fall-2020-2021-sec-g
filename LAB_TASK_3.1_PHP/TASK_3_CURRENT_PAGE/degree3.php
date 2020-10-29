<!DOCTYPE html>
<html>
<head>
	<title>Name </title>
</head>
<body>

<form method="POST" >
			<fieldset>
			<legend>DEGREE</legend>
			<select name="DEGREE">
	
			<input type="checkbox" name="dept">SSC
				<input type="checkbox" name="dept">HSC
			<input type="checkbox" name="dept">BSC.
			<input type="checkbox" name="dept">MSC.
			<?php
			if(isset($_POST['submit'])){
				$name = $_POST['DEGREE'];
				echo $DEGREE;

			}
			?><hr/>
			
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
	
</body>
</html>
