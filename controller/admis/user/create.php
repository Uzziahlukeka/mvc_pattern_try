<?php
require_once '../../config/Database.php';
require_once '../../model/Users.php';

$database=new Database();
$con=$database->connect();

$user= new Users($con);

if (filter_has_var(INPUT_POST, "signup")) {
    $name = filter_input(INPUT_POST, "name");
    $email = filter_input(INPUT_POST, "email");
    $passw = filter_input(INPUT_POST, "password");

    $user->name=$name;
    $user->email=$email;
    $user->passw=$passw;

    if($user->create()==true){
        header("Location:../../../view/admis/show.php");
            exit();
    }else{
        echo "<br>";
        ?>
        <p>something wemt wrong please try again</p>
        <br>
        <a href="../../../view/admis/show.php"><button>back</button></a>
        <?php
    }
     }
     ?>