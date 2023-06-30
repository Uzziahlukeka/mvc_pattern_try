<?php


require_once '../../../config/Database.php';
require_once '../../../model/Items.php';
$database=new Database();
$con=$database->connect();

$item= new Items($con);
$item->item_name=$_GET['item_name'];
$item->read_single();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/icons/Main Logo.svg">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/inner-card.css">
    <title>Uzh_lkk</title>
</head>

<body>


    <section class="card-content">
        <div class="wrapper cards">
            <!-- ............................................................................ -->
            <div class="back-button">
                <a href="../show.php"><i class="fa-solid fa-arrow-left fa-lg" style="color: #3b3b3b;"></i>  Back</a>
            </div>
            <div class="card auction-card">
                <div class="auction-card-img">
                    <a href="#"><img src="/controller/admis/item/images/<?php echo $item->item_photo ?>" alt="Product Image"></a>
                </div>
                <div class="card-details">
                    <div class="like-icon-num">
                        <a class="like-button">
                            <i class="fa-regular fa-heart fa-lg like1-icon" style="color: #000000;"></i>
                            <i class="fa-solid fa-heart fa-lg" style="color: #f92a2a;"></i>
                        </a>
                    </div>

                    <!-- Title -->
                    <form method="post" action="/controller/admis/item/edit.php?item_id=<?php echo $item->item_id?>">
                    <div>
                        <label class="one-label" for="title">Title</label>
                        <h3 class="card-title">
                            <input type="text" name="item_name" value="<?php echo $item->item_name ; ?>">
                        </h3>
                    </div>

                    <!-- Description -->
                    <div class="description">
                        <label class="one-label" for="description">Description</label>
                        <input type="text"  name="item_description"> <?php htmlspecialchars($item->item_description) ; ?>
                        
                    </div>
                    <div class="current-price-p">
                        <div class="stroke"></div>
                    </div>
                    <div class="card-bid">
                        <button type="submit" class="card-bid"> submit</button>
                    </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
    <script src="/js/script.js"></script>
    <script src="/js/bid.js"></script>
    <script src="/js/like-counter.js"></script>

</body>
</html>