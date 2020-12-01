<?php

    require_once('db.php');

    function getAllUser(){

		$conn = getConnection();
		$sql = "select * from job";

		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
    }
    
    function updateUser($job){

		$conn = getConnection();
        $sql = "update job set employeename='{$job[0]}', 
        companyname='{$job[1]}', contact='{$job[2]}', username='{$job[3]}',
        password='{$job[4]} ";

		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	}

	
	function deleteUser($job){

		$conn = getConnection();
		$sql = "delete from job where id='$id'";

		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	}

?>
