<?php
include_once('header.html');
?>



<!DOCTYPE html>
<html >
<head>
    
    <title>Registration</title>
</head>
<body>
    <form method='POST' action="registrationcheck.php">
	
        <fieldset>
            <legend>Registration</legend>
            <table width="500px">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" id=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name='user_name'></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id=""></td>
                </tr>
                <tr>
                    <td>Confirm password</td>
                    <td><input type="password" name="con_pas" id=""></td>
                </tr>
                <tr>
                    <td colspan="2">
					User Type<hr/>
					<input type="radio" name="gen" value="Admin"/>Admin
					<input type="radio" name="gen" value="Buyer"/>Buyer
					<input type="radio" name="gen" value="Seller"/>Seller
                        
                    </td>
                </tr>
                <!--<tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Date Of Birth</legend>
                            <input type="date" name="dob" id="">
                        </fieldset>

                    </td>
                </tr>-->
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" id="">
                        
                    </td>

                </tr>
               </table>  
           
        </fieldset>
		
    </form>
</body>
</html>

<?php

    if(isset($_GET['msg']))
    {
        if($_GET['msg']=='wrong_data')
        {
            echo "<h1>Please fill out the form.<h1>";
        }
    }
?>

