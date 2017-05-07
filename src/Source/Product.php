<?php

namespace Source;

class Product
{

	private $db;
	
	//public function __construct(\PDO $db){
	public function __construct(IConn $db){	
		//$this->db = $db;
		$this->db = $db->connect();
	}
	// agora o tipo do parametro não é mais diretamente o PDO, e sim IConn
	
	public function lista()
	{
		$query = "select * from clientes";

		$stmt = $this->db->prepare($query);

		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);		
	}
}