<?php

require_once('../db/user.php');
if(isset($_POST['submit'])){
    $user = ['name'=>  $_POST['name'],
    'c_no'=> $_POST['con_no'], 
    'username'=> $_POST['un'], 'password'=>$_POST['pass'] ];

    $status = insertUser($user);

    if($status)
    {
        header('location: ../view/home.php');
    }
    else
    {
        echo 'Wrong data';
    }
}
else{

}

?>