<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>BLOOD GROUP</legend>
			<select name="bloodgroup">
					<option seleceted></option>
					
					<option>A+</option>
					<option>b+</option>
					<option >ob+</option>
			<?php
			if(isset($_POST['submit'])){
				$name = $_POST['bloodgroup'];
				echo $bloodgroup;

			}
			?></select><hr/>
			
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
	
</body>
</html>
