<?php

/*require_once "IConn.php";
require_once "Conn.php";
require_once "Product.php";
require_once "Container.php";*/
//troquei o codigo acima, pelo abaixo
require_once "../vendor/autoload.php";

use Pimple\Container;

$container = new Container();

$container['date'] = $container->factory(function(){
	return date('H:i:s');
});
//usando a factory, cria 2 objetos, caso contrário, cria um e o re-usa 

@var_dump($container['date']);
echo "<br>";
echo "<br>";
sleep(5);
@var_dump($container['date']);




//$db = new \PDO("mysql:host=localhost;dbname=ligiano","root","root");
//$db = new Conn("mysql:host=localhost; dbname=ligiano", "root", "root");
// a diferença é que não chamo mais direto o PDO, chamo a classe Conn

//$db = Container::getConn();


//$product = new Product($db);
// a variavel $product armazena uma instancia da classe Product
// ao instanciar enviou a variável $db com as configurações de conexão ao banco de dados 

//$product = Container::getProduct();


//$list = $product->lista();
// $list chamou a function lista da classe Product

//var_dump($list);
// var_dump() vai imprimir o array em tela


?>