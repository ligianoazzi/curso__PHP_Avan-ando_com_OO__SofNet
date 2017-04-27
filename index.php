<?php

$db = new \PDO("mysql:host=localhost;dbname=test","root","root");

$query = "select * from clientes";

$stmt = $db->prepare($query);

$stmt->execute();

$list = $stmt->fetchAll(\PDO::FETCH_ASSOC);

var_dump($list);

?>