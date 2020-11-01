<?php


if(isset($_POST['submit']))
{

    if($_POST["bloodgroup"] == "")
    {
        echo " Select blood group!";
    }
    else
    {
        echo {$_POST["bloodGroup"]};
    }
    
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> blood </title>
    </head>
    <body>

        <form method="POST">

            <table>

                <tr align = "center">

                    <td> Blood Group  </td>

                    <td> 
                        <h1><select name="bloodgroup">
					<option seleceted>A+</option>
					<option>b+</option>
					<option >ob+</option>
				</select><br/>
                    </td>
                    

                </tr>

                <tr>
                    <td colspan="2"> <hr> </td>
                </tr>

                <tr>
                    <td colspan = "2"> <input type="submit" name="submit" value="Submit"> </td>
                </tr>

            </table>    

       
        </form>

    </body>
</html>