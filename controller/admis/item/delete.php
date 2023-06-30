<?php


require_once '../../../config/Database.php';
require_once '../../../model/Items.php';
$database=new Database();
$con=$database->connect();

$item= new Items($con);
$item->item_id=$_GET['item_id'];

if($item->delete()){
    header('location:../../../view/admis/items/delete.php');
}