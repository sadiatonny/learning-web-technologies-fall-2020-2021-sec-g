<!DOCTYPE html>
<html>
<head>
	<title>Name </title>
</head>
<body>

<form method="POST" >
			<fieldset>
			<legend>Date Of Birth</legend>
			DOB:<input type="date" name="dob" VALUE="
			<?php
			if(isset($_POST['submit'])){
				$name = $_POST['dob'];
				echo $dob;

			}
			?>"><hr/>
			
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
	
</body>
</html>
