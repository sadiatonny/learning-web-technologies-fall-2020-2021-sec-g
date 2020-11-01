<?php

if(isset($_POST['submit']))
{

    if(empty($_POST["day"]))
    {
        echo "day is error";
    }
    else if(empty($_POST["month"]))
    {
        echo "month enter correctly";
    }
    else if(empty($_POST["year"]))
    {
        echo "Year enter correctly";
    }
    else
    {

       if($_POST["day"] >= 1 && $_POST["day"] <=31 && $_POST["month"] >= 1 && $_POST["month"] <= 12 && $_POST["year"] >= 1900 && $_POST["year"] <= 2016)
        {
            if( ($_POST["month"] == 4 || $_POST["month"] == 6 ||  $_POST["month"] == 9 || $_POST["month"] == 11 ) && $_POST["day"] <= 30 )
            {
                echo {$_POST["day"]}/{$_POST["month"]}/{$_POST["year"]};
                
            }
            else if( ($_POST["month"] == 1 || $_POST["month"] == 3 ||  $_POST["month"] == 5 || $_POST["month"] == 7 || $_POST["month"] == 8 || $_POST["month"] == 10 || $_POST["month"] == 12 ) && $_POST["day"] <= 31 )
            {
                echo  {$_POST["day"]}/{$_POST["month"]}/{$_POST["year"]};

            }
            else if( $_POST["month"] == 2  && $_POST["day"] <= 28 )
            {
                echo  {$_POST["day"]}/{$_POST["month"]}/{$_POST["year"]};

            }
            else
            {
                echo "Invalid dob";
            }
        }
        else
        {
            echo "Invalid dob";
        }

    }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> dob </title>
    </head>
    <body>

        <form method="POST">

            <fieldset style="display: inline-block;">

                <legend> Date of Birth </legend>

                <table>

                    <tr align = "center">

                        <td> dd </td>
                        <td> mm </td>
                        <td> yyyy </td>

                    </tr>

                    <tr align = "center">

                        <td> <input type="text" name="day" size="1" > <strong><big>/</big></strong> </td>
                        <td> <input type="text" name="month" size="1" > <strong><big>/</big></strong> </td>
                        <td> <input type="text" name="year" size="1" > </td>   

                    </tr>

                    <tr>
                        <td colspan = "3"> <hr> <input type="submit" name="submit" value="Submit"> </td>
                    </tr>

                </table>    

            </fieldset>
        
        </form>

    </body>
</html>