<?php


require_once '../../../config/Database.php';
require_once '../../../model/USers.php';
$database=new Database();
$con=$database->connect();

$user= new USers($con);

$email=filter_input(INPUT_POST,'email');
$name=filter_input(INPUT_POST,'name');

$user->email=$email;
$user->name=$name;

if($user->update()){

    header('location:../../../view/admis/show.php');

    ?>
    <script> alert('item updated')</script>
    <?php
}

?>