<?php


require_once '../../../config/Database.php';
require_once '../../../model/Users.php';
$database=new Database();
$con=$database->connect();

$user= new Users($con);
$user->name=$_GET['name'];
$user->read_single();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
</head>
<body>
        
    <h1>Edit user</h1>
    
    <form method="post" action="../../../controller/admis/user/edit.php">
        
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $user->name ?>">
        
        <label for="description">email</label>
        <textarea name="email" id="description"><?= htmlspecialchars($user->email) ?></textarea>
        
        <button>Submit</button>
    </form>
    
</body>
</html>
