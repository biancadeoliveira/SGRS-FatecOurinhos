<?php

/*
** Author: Lucas de Abreu Mendonça
** Date: 2018-04-14
**
** Controller do objeto Clientes
*/

namespace App\system\Controllers;

use App\system\Models;

class ClientesController
{

	public function GetInserir($request, $response, $args){

		$cliente = new \App\system\Models\Clientes();
		$clientes = $cliente->select();

		PainelController::GetExibir('formCliente', $clientes);
	}

	public function PostInserir($request, $response, $args){

		$cpf = $_POST['cpf'];
		$nome = $_POST['nome'];
		$rg = $_POST['rg'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
	
		//$dados = array('45164522861', 'Lucas de Areu Mendonça', '415424173', '14996917224', 'devlucasmendonca@gmail.com');

		$dados = array($cpf, $nome, $rg, $telefone, $email);

	var_dump($dados);
	echo "<br>===================<br>";
		$cliente = new \App\system\Models\Clientes($dados);

		$result = $cliente->inserir();

		// \Core\Request::newR('GET', 'http://localhost/framework/public/painel/cliente');

//		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/cliente");

	}

	public function DeleteCliente($request, $response, $args){

		$cliente = new \App\system\Models\Clientes();


		$result = $cliente->excluir($args['idcliente']);

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/cliente");

	}
	
}