<!DOCTYPE html>
<html>
<head>	<title>Registration</title>
</head>
<body>
<center> 
   <form method="post" action="registrationCheck.php">
   <table border="0" cellspacing="0" cellpadding="0">
   <tr>
   <td>	
   <fieldset>
   <legend><h3>REGISTRATION</h3></legend>
   Id<br/><input type="text" name="id"><br/>
   Password<br/><input type="password" name="password"><br/>					
   Confirm Password<br/><input type="password" name="con_password"><br/>
   Name<br/><input type="text" name="name"><br/>					
   User Type<hr/>					
   <input type="radio" name="usertype" value="User" />User					
   <input type="radio" name="usertype" value="Admin" />Admin					
   <hr/>					
   <input type="submit" value="Sign Up">				
   <a href="login.html">Sign In</a>				
   </fieldset>			
   </td>		
   </tr>                                	 
   </table>
   </form>
   </center>		
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

   