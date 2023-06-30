<?php

require_once '../../config/Database.php';
require_once '../../model/Users.php';

$database=new Database();
$con=$database->connect();

$user= new Users($con);

if (filter_has_var(INPUT_POST, "sign")) {
    $email = filter_input(INPUT_POST, "email");
    $passw = filter_input(INPUT_POST, "password");

    if($user->login($email,$passw)==true){
        header("location:../view/user/loggedin.php");
        exit();
    }else{
        ?>
        <a href='../view/login.php'><button>try again</button></a>
        <?php
    }
}
?>