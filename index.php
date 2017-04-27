<?php

require_once "Product.php";

$db = new \PDO("mysql:host=localhost;dbname=test","root","root");

$product = new Product($db);

$list = $product->lista();

var_dump($list);

?>