<?php
require_once './connect.php';
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
      </tr>
    <?php
    }
    ?>
  </table>



</body>

</html>