

<!DOCTYPE html>
<html>
<head>
	<title> edit </title>
</head>
<body>
<center>
    <h1>Please insert Your Data </h1>
<br>
<br>
<br>
<form method="POST" action="">
    <fieldset style="width:40%">
        <legend> Edit Your Data</legend>
    
        <table>
            <tr>
                <td>
                    EmployerName :
                </td>
                <td>
                    <input type="text" name="employeename" id="">
                </td>
            </tr>
			 <tr>
                <td>
                    CompanyName :
                </td>
                <td>
                    <input type="text" name="companyname" id="">
                </td>
            </tr>
			
			 <tr>
                <td>
                    ContactNo :
                </td>
                <td>
                    <input type="number" name="contact" id="">
                </td>
            </tr>
			
			 <tr>
                <td>
                    UserName :
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
                <input type="submit" name='submit' value="Register">
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

$value =$_GET['msg'];


require_once('../model/userService.php');
$conn = getconnection();


$value =$_GET['msg'];










/*
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $pas = $_POST['pass'];
    $email = $_POST['email'];   
    if($username!= '' && $pas!='' && $email!='')
    {
        $sql = "UPDATE user
        SET username = '$username', password = '$pas', email= '$email'
        WHERE id = '$value'";
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
*/
?>
