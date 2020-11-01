<?php

if(isset($_POST['submit']))
{

    if( !isset($_POST["SSC"]) && !isset($_POST["HSC"]) && !isset($_POST["BSc"]) )
    {
        echo " degree";
    }
    
        
        
    }
    
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title> Degree  </title>
    </head>
    <body>

        <form method="POST">

            <fieldset style="display: inline-block;">

                <legend> Degree </legend>
               
				<input type="checkbox" name="dept">SSC
				<input type="checkbox" name="dept">HSC
			<input type="checkbox" name="dept">BSC.

            </fieldset>
            <br>
            <input type="submit" name="submit" value="Submit">

        </form>


    </body>
</html>