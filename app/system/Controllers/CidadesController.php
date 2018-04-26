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

	public function GetInserir($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(2);


		$cidade = new \App\system\Models\Cidades();
		$cidades = $cidade->select();

		PainelController::GetExibir('formCidade', $cidades);
	}

	public function PostInserir($request, $response, $args){

		\App\system\Models\Login::validarLogin(2);

		$nome = $_POST['nome'];
		$codPostal = $_POST['codPostal'];
		$estado = $_POST['estado'];
		$pais = $_POST['pais'];

		$dados = array($nome, $codPostal, $estado, $pais);


		$cidade = new \App\system\Models\Cidades($dados);

		$result = $cidade->inserir();

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/cidade");

	}

	public function DeleteCidade($request, $response, $args){

		\App\system\Models\Login::validarLogin(2);

		$cidade = new \App\system\Models\Cidades();

		$result = $cidade->excluir($args['idcidade']);

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/cidade");

		

	}
	
}