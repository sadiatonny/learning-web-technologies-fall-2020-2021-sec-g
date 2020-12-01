<?php
	include('header.php');
	require_once('../models/usersService.php');

	$userlist = getAllUser();

?>


<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
	
		<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<h3>User list</h3>
	<table border="1"> 
		<tr>
			<td>EMPLOYERNAME</td>
			<td>COMPANYNAME</td>
			<td>CONTACTNO</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>

		</tr>

	<?php for($i=0; $i< count($userlist); $i++){ ?>

			<tr>
				<td><?=$userlist[$i]['employername']?></td>
				<td><?=$userlist[$i]['companyname']?></td>
				<td><?=$userlist[$i]['contactno']?></td>
				<td><?=$userlist[$i]['username']?></td>
				<td><?=$userlist[$i]['password']?></td>
				<td>
					<a href="edit.php?id=<?=$userlist[$i]['id']?>">UPDATE</a> | 
					<a href="delete.php?id=<?=$userlist[$i]['id']?>">DELETE</a> |
					<a href="searchin.php?id=<?=$userlist[$i]['id']?>">SEARCH INFORTMATION</a>
				</td>
			</tr>
	<?php } ?>

	</table>


</body>
</html>


