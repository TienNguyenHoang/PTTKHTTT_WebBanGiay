<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneaker Shop</title>
    <link rel="icon" type="image/x-icon" href="./public/img/logo/logoShop.png">
    <script src="https://kit.fontawesome.com/1381aa78a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./public/css/style.css">
    <script src="./public/js/main.js"></script>
</head>
<body>
    <div id="header">
        <?php require_once "./mvc/views/blocks/header.php";?>
    </div>
    <div id="content">
        <?php 
            require_once "./mvc/views/blocks/LogInModal.php";
            require_once "./mvc/views/blocks/CartModal.php";
            require_once "./mvc/views/pages/".$data['page'].".php";
        ?>
    </div>
    <div id="footer">
        <?php require_once "./mvc/views/blocks/footer.php";?>
    </div>
</body>
</html>