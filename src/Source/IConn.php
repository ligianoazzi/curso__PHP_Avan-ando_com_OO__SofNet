<?php

namespace Source;

interface IConn
{
	public function connect();
	// aqui estou obrigando a todas as classes que usarem esta interface, ter a funcao connect()
}

?> 