<?php


if(isset($_POST['submit']))
{
    $email = $_POST["email"];
    $S = strpos($email, "@");
    $D = strripos($email, ".");


    if(!empty($_POST["email"]))
    {
        if($S > 0 && $email[$S+1] != "." && $D > $S+1 && !strpos($email, " ") && !strpos($email, "..") && strlen($email) > ($D+1))
        {
            echo "email is $email";
        }
        else
        {
            echo "Invalid email..!";
        }

    }
    else
    {
        echo "Please enter your email!";
    }
    

    
}
?>
<!DOCTYPE html>
<html>
<head>
    <title> Email  Page </title>
</head>
    <body>

        <form method="POST">

            <table>
                
                <tr>
                    <td>  Email  </td>
                </tr>

                <tr>
                    <td><input type="text"  name="email" ></td>
                </tr>

                <tr>
                    <td> <input type="submit" name="submit" value="Submit"> </td>
                </tr>

            </table>

                    


        </form>


    </body>
</html>