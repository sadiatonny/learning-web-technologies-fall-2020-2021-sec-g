<!DOCTYPE html>
<html>
<head>
	<title> add user</title>
</head>
<body>
<center>
    <h1>Please insert Your Data </h1>
<br>
<br>
<br>
<form method="POST" action="">
    <fieldset style="width:40%">
        <legend>Create Your Data</legend>
    
        <table>
		
		<tr>
                <td>
                    Id :
                </td>
                <td>
                    <input type="number" name="number" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Username :
                </td>
                <td>
                    <input type="text" name="username" id="">
                </td>
            </tr>


            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="text" name="pass" id="">
                </td>
            </tr>


            <tr>
                <td>
                    E-mail :
                </td>
                <td>
                    <input type="text" name="email" id="">
                </td>
            </tr>
			<tr>
                <td>
                    Type :
                </td>
                <td>
                    <input type="text" name="type" id="">
                </td>
            </tr>

            <tr>
                <td>
                <input type="submit" name='submit' value="Create Data">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
            
        
        </table>
    </fieldset>
    
</form>

</center>
</body>
</html>

<?php

//$value =$_GET['msg'];


require_once('../db/db.php');

$conn = getconnection();





if(isset($_POST['submit']))
{
	$id = $_POST['id'];
    $username = $_POST['username'];
    $pas = $_POST['pass'];
    $email = $_POST['email']; 
	$type = $_POST['type'];	
    if($id != ' '&& $username!= '' && $pas!='' && $email!='' && $type!='')
    {
        /*$sql = "INSERT INTO user
       SET username = '$username', password = '$pas', email= '$email'
       WHERE id = '$value'";*/
		$sql ="INSERT INTO user (id , username , password ,email , type)
VALUES ('$id', '$username', '$pas', '$email', '$type')";
        mysqli_query($conn , $sql);
        $conn->close();
        echo '';
        header('location: ../view/userlist.php');
        exit();
    }
    else
    {
        echo 'Fill up';
    }
}

//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 /*if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/
?>