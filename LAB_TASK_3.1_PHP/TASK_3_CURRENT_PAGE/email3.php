<!DOCTYPE html>
<html>
<head>
	<title>Name </title>
</head>
<body>

<form method="POST" >
			<fieldset>
			<legend>Email</legend>
			<input type="text" name="email" value=" 
			<?php
			if(isset($_POST['submit'])){
				$name = $_POST['email'];
				echo $email;

			}
			?> "><hr/>
			
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
	
</body>
</html>
