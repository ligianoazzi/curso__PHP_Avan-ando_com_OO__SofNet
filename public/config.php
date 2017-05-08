<?php

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=mysql.ligiano.info;dbname=ligiano04";
$container['user'] = "ligiano04";
$container['pass'] = "ligiano01";

?>