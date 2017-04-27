<?php

class Product
{

	private $db;
	
	public function __construct($db){
		$this->db = $db;
	}
	
	public function lista()
	{
		$query = "select * from clientes";

		$stmt = $this->db->prepare($query);

		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);		
	}
}