<?php
require_once '../../config/Database.php';
require_once '../../model/Admis.php';

$database=new Database();
$con=$database->connect();

$admis= new Users($con);

if (filter_has_var(INPUT_POST, "signup")) {
    $name = filter_input(INPUT_POST, "name");
    $email = filter_input(INPUT_POST, "email");
    $passw = filter_input(INPUT_POST, "password");

    $admis->name=$name;
    $admis->email=$email;
    $admis->passw=$passw;

    if($user->create()==true){
        header("Location:../../view/admis/signup.php");
            exit();
    }else{
        echo "<br>";
        ?>
        <p>something wemt wrong please try again</p>
        <br>
        <a href="../view/user/signup.php"><button>back</button></a>
        <?php
    }
     }
     ?>