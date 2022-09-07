<?php
require_once './config/connect.php';
$product_id = $_GET['id'];
$product = mysqli_query($conn, "SELECT * FROM `products` WHERE `id` = '$product_id';");
$product = mysqli_fetch_assoc($product);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Изменить продукт</h3>
    <form action="./vendor/update.php?id=<?= $product_id ?>" method="POST">
        <p>Зоголовок</p>
        <input type="text" name="title" value="<?= $product['title'] ?>"><br><br>
        <p>Описание</p>
        <textarea type="text" name="description"><?= $product['description'] ?></textarea><br><br>
        <p>Цена</p>
        <input type="number" name="price" value="<?= $product['price'] ?>"><br><br>
        <input type="submit" value="Изменить продукт">
    </form>
</body>

</html>