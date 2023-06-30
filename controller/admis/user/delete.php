<?php


require_once '../../../config/Database.php';
require_once '../../../model/Users.php';
$database=new Database();
$con=$database->connect();

$user= new USers($con);
$user->id=$_GET['id'];

if($item->delete()){
    header('location:../../../view/admis/user/delete.php');
}