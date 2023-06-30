<?php


require_once '../../../config/Database.php';
require_once '../../../model/Items.php';
$database=new Database();
$con=$database->connect();

$item= new Items($con);
$item->item_id=$_GET['item_id'];
$description=filter_input(INPUT_POST,'item_description');
$name=filter_input(INPUT_POST,'item_name');

$item->item_description=$description;
$item->item_name=$name;

if($item->update()){

    header('location:../../../view/admis/show.php');

    ?>
    <script> alert('item updated')</script>
    <?php
}

?>
