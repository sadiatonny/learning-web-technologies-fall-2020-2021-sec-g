<?php
if(isset($_POST['submit']))
{

    if(!isset($_POST["Gender"]))
    {
        echo "Select gender";
    }
    else
    {
        echo "Your gender is {$_POST["Gender"]}";
    }

    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> gender </title>
    </head>
    <body>

        <form method="POST">

            <fieldset style="display: inline-block;">

                <legend> Gender </legend>
               <input type="radio" name="gender">male
				<input type="radio" name="gender">female
				<input type="radio" name="gender">other

            </fieldset>
            <br>
            <input type="submit" name="submit" value="Submit">

        </form>


    </body>
</html>