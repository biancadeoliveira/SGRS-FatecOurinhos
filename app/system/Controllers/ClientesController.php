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

	public function GetClientes(){

			\App\system\Models\Validacao::validarLogin(1);

			$cliente = new \App\system\Models\Clientes();
			$clientes = $cliente->select();

			PainelController::AbrirContent('Clientes Cadastrados');
			PainelController::GetExibir('tableClientes', $clientes);
			PainelController::FecharContent();

	}

	public function GetInserir($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(2);


			PainelController::AbrirContent('Adicionar cliente');
			PainelController::GetExibir('formCliente');
			PainelController::FecharContent();
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

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/clientes/add");

	}

	public function PostEditar($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);
		$cpf = $_POST['cpf'];
		$nome = $_POST['nome'];
		$rg = $_POST['rg'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];

		$dados = array($cpf, $nome, $rg, $telefone, $email);

		$cliente = new \App\system\Models\Clientes();

		$result = $cliente->editar($dados, $args['idcliente']);

		

		 header("Location: " . $GLOBALS['$urlpadrao'] . "painel/clientes/editar/". $args['idcliente'] ."?status=1");

	}


	public function GetEditarCliente($request, $response, $args){
        \App\system\Models\Validacao::validarLogin(1);

        $cli = new \App\system\Models\Clientes();
        $clientes = $cli->selectByCPF($args['idcliente']);
        var_dump($clientes);
        $dados = array(
            'Clientes' => $clientes
            
        );

        PainelController::AbrirContent('Editar Cliente');
        PainelController::GetExibir('formEditarCliente', $dados);
        PainelController::FecharContent();
    }

	public function ViewCliente($request, $response, $args){

		$cliente = new \App\system\Models\Clientes($dados);
		$clientes = $cliente->visualizar($args['idcliente']);

		$dados = array(
			'Clientes' => $clientes,
		);

		PainelController::GetExibir('singleCliente', $dados);

	}


	public function DeleteCliente($request, $response, $args){
		
		\App\system\Models\Validacao::validarLogin(2);


		$cliente = new \App\system\Models\Clientes($dados);


		$cliente->delete($args['idcliente']);

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/clientes");

	}
	
}