<?php

/*
** Author: Bianca de Oliveira
** Date: 2018-03-29
**
** Controller do objeto Cidades
*/

namespace App\system\Controllers;

use App\system\Models;

class CidadesController
{

	public function GetCidades($request, $response, $Args){
		
			\App\system\Models\Validacao::validarLogin(1);

			$cid = new \App\system\Models\Cidades();
		    $cids = $cid->select();

		    $dados = array(
			'Cidades' => $cids,
		);

			PainelController::AbrirContent('Cidades / CEP');
			PainelController::GetExibir('tableCidades', $dados);
			PainelController::FecharContent();	

	}

	public function GetInserir($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);

		$cid = new \App\system\Models\Cidades();
		$cids = $cid->select();

		$cep = new \App\system\Models\CEP();
		$ceps = $cep->selectCep(2);

		$dados = array(
			'Cidades' => $cids,
			'Cep' => $ceps
		);

			PainelController::AbrirContent('Cidades / CEP');
			PainelController::GetExibir('formCidade', $cids);
			PainelController::FecharContent();	}

	public function PostInserir($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);

		$nome = $_POST['nome'];
		$codPostal = $_POST['codPostal'];
		$estado = $_POST['estado'];
		$pais = $_POST['pais'];

		$dados = array($nome, $codPostal, $estado, $pais);


		$cidade = new \App\system\Models\Cidades($dados);

		$result = $cidade->inserir();

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/cidades");

	}
	
// Função de edição de cidades
	public function PostEditar($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);

		$nome = $_POST['nome'];
		$codPostal = $_POST['codPostal'];
		$estado = $_POST['estado'];
		$pais = $_POST['pais'];

		$dados = array($nome, $codPostal, $estado, $pais);

		$cidade = new \App\system\Models\Cidades($dados);

		$result = $cidade->editar($args['idcidade']);

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/cidade");

	}
	public function DeleteCidade($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);

		$cidade = new \App\system\Models\Cidades();

		$result = $cidade->excluir($args['idcidade']);

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/cidades");

		

	}
	
}