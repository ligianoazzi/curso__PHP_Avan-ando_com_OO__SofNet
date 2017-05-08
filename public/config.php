<?php

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=ligiano";
$container['user'] = "root";
$container['pass'] = "root";

?>