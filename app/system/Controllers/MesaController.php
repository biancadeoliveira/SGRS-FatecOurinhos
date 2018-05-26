<?php

/*
** Author: Lucas Gabriel
** Date: 2018-05-23
**
** Controller do objeto Mesas
*/

namespace App\system\Controllers;

use App\system\Models;

class MesaController
{


	public function GetInserirMesa($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);


		$mesa = new \App\system\Models\Mesa();
		$mesas= $mesa->select();

		//var_dump($clientes);


		PainelController::GetExibir('PaginaMesa', $mesas);

	}

	public function PostInserirMesa($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);

		$codmesa = $_POST['codMesa'];
		$qtdlugares = $_POST['qtdLugares'];
		$estado = $_POST['estado'];
		

		$dados = array($codmesa, $qtdlugares, $estado);


		$mesa = new \App\system\Models\Mesa($dados);

		$result = $mesa->inserir();

		

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/mesas");

}

// Função de edição de mesas
	public function PostEditar($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);

		$codmesa = $_POST['codMesa'];
		$qtdlugares = $_POST['qtdLugares'];
		$estado = $_POST['estado'];

		$dados = array($codMesa, $qtdLugares, $estado);

		$mesa = new \App\system\Models\Mesa($dados);

		$result = $mesa->editar($args['idmesa']);

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/mesa");

	}

	public function DeleteMesa($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);

		$mesa = new \App\system\Models\Mesa();

		$result = $mesa->excluir($args['idmesa']);

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/mesa");
	

	}

	}