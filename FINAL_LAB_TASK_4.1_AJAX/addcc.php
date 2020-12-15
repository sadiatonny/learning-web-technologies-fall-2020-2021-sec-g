<?php
	require_once('db.php');
	$Name = $POST_['sName'];
	$Email = $POST_['sEmail'];
	$Gender = $POST_['sGender'];
	$Dob = $POST_['sDob'];
   	$Blood= $POST_['sBlood'];
	$Deg = $POST_['sDeg'];

	$conn = getConnection();
		$sql = "insert into person values(name = '$Name', email = '$Email', gender = '$Gender', dob = '$Dob', bloodgroup = '$Blood', degree = '$Deg')";

		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}

?>