<?php
require_once '../../config/Database.php';
require_once '../../model/Users.php';
require_once '../../model/Items.php';
$database=new Database();
$con=$database->connect();

$user= new Users($con);
$item= new Items($con);
$data=$user->read();
$leh=$data->fetchAll(PDO::FETCH_ASSOC);
$datas=$item->read();
$lez=$datas->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
        
    <h1>Users</h1>
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>creation Date</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($leh as $repository): ?>
                
                <tr>
                    <td>
                        <a href="../../view/admis/users/edit.php?name=<?= $repository["name"] ?>">
                            <?= $repository["name"] ?>
                        </a>
                    </td>
                    <td><?= htmlspecialchars($repository["email"]) ?></td>
                    <td><?= $repository['created_at']?></td>
                    <td><a href="../../view/admis/user/delete.php?item_id=<?=$repository['id'] ?>">delete</a></td>
                    
                </tr>
            <?php endforeach; ?>
            <td><h2><a href="../../view/admis/users/create.php">add user</a></h2></td>
        </tbody>
    </table>

    <h1>Items</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Description</th>
                <th>creation Date</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($lez as $repository): ?>
                
                <tr>
                    <td>
                        <a href="../../view/admis/items/showone.php?item_name=<?= $repository["item_name"] ?>">
                            <?= $repository["item_name"] ?>
                        </a>
                    </td>
                    <td><?= htmlspecialchars($repository["item_description"]) ?></td>
                    <td><?= $repository['created_at']?></td>
                    <td><a href="../../controller/admis/item/delete.php?item_id=<?=$repository['item_id'] ?>">delete</a></td>
                   
                </tr>
            <?php endforeach; ?>
            <td><h2><a href="../../view/admis/items/create.php">new item</a></h2></td>
        </tbody>
    </table>



    <h2><a href="../../view/login.php"> log-in user</a></h2>
</body>
</html>