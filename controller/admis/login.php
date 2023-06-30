<?php

require_once '../../config/Database.php';
require_once '../../model/Admis.php';

$database=new Database();
$con=$database->connect();

$user= new Admis($con);

if (filter_has_var(INPUT_POST, "sign")) {
    $email = filter_input(INPUT_POST, "email");
    $passw = filter_input(INPUT_POST, "password");

    if($user->login($email,$passw)==true){
        header("location:../view/main.php");
        exit();
    }else{
        ?>
        <a href='../view/admis/login.php'><button>try again</button></a>
        <p>log in for user<a href='../view/login.php'><button>log-in</button></a></p>
        <br>
        <p>if you don't have an admin account please contact the administrator of the web site <a href="../../contact.php"> ADMINISTRATOR </a></p>
        <?php
    }
}
?>