<?php

var_dump($_POST);

$product = $_POST['product'];
$pdo = new PDO('mysql:host=localhost; dbname=app; charset=utf8', 'root','');
$pdo->prepa('INSERT INTO products (name, price, quantity, imei, mac, sn) VALUES (:name, :price, :quantity, :imei, :mac, :sn)') ;
$statement->execute(
	[
		':name' => $product['name'],
		':price' => $product['price'],
		':quantity' => $product['quantity'],
		':imei' => $product['imei'],
		':mac' => $product['mac'],
		':sn' => $product['sn']
	]
);



?>
