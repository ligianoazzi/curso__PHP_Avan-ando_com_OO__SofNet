<?php

require_once "Product.php";

$db = new \PDO("mysql:host=localhost;dbname=ligiano","root","root");

$product = new Product($db);
// a variavel $product armazena uma instancia da classe Product
// ao instanciar enviou a variável $db com as configurações de conexão ao banco de dados 


$list = $product->lista();
// $list chamou a function lista da classe Product

var_dump($list);
// var_dump() vai imprimir o array em tela


?>