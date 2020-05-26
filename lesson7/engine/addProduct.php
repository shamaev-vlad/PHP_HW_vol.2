<?php
var_dump($_POST);

$product = $_POST['product'];
$pdo = new PDO('mysql:host=localhost; dbname=app; charset=utf8', 'root','');
$pdo->prepare('INSERT INTO products (title, price, quantity, imei, mac, sn) VALUES (:title, :price, :quantity, :imei, :mac, :sn)') ;
$statement->execute(
	[
		':title' => $product['title'],
		':price' => $product['price'],
		':quantity' => $product['quantity'],
		':imei' => $product['imei'],
		':mac' => $product['mac'],
		':sn' => $product['sn']
	]
);

 ?>
