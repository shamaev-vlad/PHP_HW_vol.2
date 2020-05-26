<?php

requare_once 'rb.php';

$db = [
  'dsn' => 'mysql:host=localhost;dbname=payment;charset=utf8',
  'user' => 'root',
  'password' => ''
];

R::setup($db['dsn'], $db['user'], $db['password']);
R::freeze(true);
 ?>
