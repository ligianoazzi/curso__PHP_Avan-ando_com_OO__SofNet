<?php

$db = new \PDO("mysql:host=localhost;dbname=test_oo","root","root");

$query = "select * from clientes";

$stmt = $db->prepare($query);

$smtp->execute();

$list = $stmt->fetchAll(\PDO::FETCH_ASSOC);

var_dump($list);

?>