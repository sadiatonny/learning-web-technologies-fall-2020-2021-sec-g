<!DOCTYPE html>
<html>
<head>
    <title> Name Page </title>
</head>
<body>

    <form method="POST">

        <table>
            
            <tr>
                <td>  Name  </td>
            </tr>

            <tr>
                <td><input type="text"  name="name" ></td>
            </tr>

            <tr>
                <td> <input type="submit" name="submit" value="Submit"> </td>
            </tr>

        </table>

                


    </form>


</body>
</html>
<?php
if(isset($_POST['submit']))
{
    
    if(empty($_POST["name"]))
		
    {echo "Please enter your name!" ;
    }
	
	
    else
    {
        $name = $_POST["name"];

        if(str_word_count($name) >= 2  && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(" ", "", $name))  )
        {
            
            echo "$name";
        }
        else if(str_word_count(str_replace(".", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(".", "", $name)) && $name[strlen($name)-1] != "." )
        {
            echo "$name";
        }
        else if(str_word_count(str_replace("-", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace("-", "", $name)) && $name[strlen($name)-1] != "-" )
        {
            echo "$name";
        }
        else
        {
            echo "Invalid Name";
        }

    }
    
    
}
?>





