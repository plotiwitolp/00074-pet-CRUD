<?php
require_once './../config/connect.php';

$id = $_GET['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

echo "<pre>";
print_r($id);
print_r($title);
print_r($description);
print_r($price);
echo "</pre>";


mysqli_query($conn, "UPDATE `products` SET `title` = '$title', `price` = '$price', `description` = '$description' WHERE `products`.`id` = $id;");

header('Location: /');
