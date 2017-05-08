<?php



// registrando serviço de conexão
$container['conn'] = function($c){
	return new \Source\Conn($c['dsn'], $c['user'], $c['pass']);
};

// registrando serviço para trazer serviços
$container['product'] = function($container) {
	return new \Source\Product($container['conn']);
};

$list = $container['product']->lista();

?>