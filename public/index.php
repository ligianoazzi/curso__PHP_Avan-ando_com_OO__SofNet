<?php


require_once "../vendor/autoload.php";

use Pimple\Container;

$container = new Container();

// registrando serviço de conexão
$container['conn'] = function(){
	return new \Source\Conn("mysql:host=localhost;dbname=ligiano","root","root");
};

// registrando serviço para trazer serviços
$container['product'] = function($container) {
	return new \Source\Product($container['conn']);
};

$list = $container['product']->lista();

var_dump($list);


?>