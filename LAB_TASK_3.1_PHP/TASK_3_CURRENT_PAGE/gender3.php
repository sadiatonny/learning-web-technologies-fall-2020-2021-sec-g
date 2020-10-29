<!DOCTYPE html>
<html>
<head>
	<title>Name </title>
</head>
<body>

<form method="POST" >
			<fieldset>
			<legend>Gender</legend>
			<input type="radio" name="gender">male
				<input type="radio" name="gender">female
				<input type="radio" name="gender">other
			<?php
			if(isset($_POST['submit'])){
				$name = $_POST['gender'];
				echo $gender;

			}
			?><hr/>
			
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
	
</body>
</html>
