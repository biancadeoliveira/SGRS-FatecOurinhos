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

		\App\system\Models\Validacao::validarLogin(2);


		$cliente = new \App\system\Models\Clientes();
		$clientes = $cliente->select();

		//var_dump($clientes);

		PainelController::GetExibir('paginaClientes', $clientes);
	}

	public function PostInserir($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(2);


		$cpf = $_POST['cpf'];
		$nome = $_POST['nome'];
		$rg = $_POST['rg'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];

		$dados = array($cpf, $nome, $rg, $telefone, $email);

		$cliente = new \App\system\Models\Clientes($dados);

		$result = $cliente->inserir();

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/clientes");

	}

	public function DeleteCliente($request, $response, $args){
		
		\App\system\Models\Validacao::validarLogin(2);


		$cliente = new \App\system\Models\Clientes();


		$result = $cliente->excluir($args['idcliente']);

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/clientes");

	}
	
}