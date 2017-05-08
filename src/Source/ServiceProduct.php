<?php

namespace Source;

class ServiceProduct implements IServiceProduct
{

	public function __construct(IConn $db){	
		//$this->db = $db;
		$this->db = $db->connect();
	}	

	public function lista()
	{
		$query = "select * from clientes";

		$stmt = $this->db->prepare($query);

		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);		
	}

	public function save(){

	}
	public function update(){

	}
	public function delete(){

	}	

}


?>