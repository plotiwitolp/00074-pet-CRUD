<?php
require_once './config/connect.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>00074-pet-CRUD</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <table>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Price</th>
    </tr>
    <?php $products = mysqli_query($conn, "SELECT * FROM `products`");
    $products = mysqli_fetch_all($products);
    foreach ($products as $product) {
    ?>
      <tr>
        <td><?= $product[0] ?></td>
        <td><?= $product[1] ?></td>
        <td><?= $product[3] ?></td>
        <td><?= $product[2] ?></td>
        <td><a href="./update.php?id=<?= $product[0] ?>">Изменить</a></td>
        <td><a style="color:#720000" href="./vendor/delete.php?id=<?= $product[0] ?>">Удалить</a></td>
      </tr>
    <?php
    }
    ?>
  </table><br><br>
  <h3>Добавить новый продукт</h3>
  <form action="./vendor/create.php" method="POST">
    <p>Зоголовок</p>
    <input type="text" name="title"><br><br>
    <p>Описание</p>
    <textarea type="text" name="description"></textarea><br><br>
    <p>Цена</p>
    <input type="number" name="price"><br><br>
    <input type="submit" value="Добавить новый продукт">
  </form>


</body>

</html>