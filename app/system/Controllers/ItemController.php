<?php

/*
** Author: Lucas Gabriel
** Date: 2018-04-18
**
** Classe ItemController
*/



namespace App\system\Controllers;

use App\system\Models;

class ItemController
{



	public function GetInserir($request, $response, $args){

		$item = new \App\system\Models\Item();
		$itens = $item->select();

		PainelController::GetExibir('formItem', $itens);
	}

	public function PostInserir($request, $response, $args){

		
		$codPedido = $_POST['codPedido'];
		$codProduto = $_POST['codProduto'];
		$quantidade = $_POST['quantidade'];
		$preco = $_POST['preco'];
		$estado = $_POST['estado'];
		$observacao = $_POST['observacao'];


		$dados = array($codPedido, $codProduto, $quantidade, $preco, $estado, $observacao);

		$item = new \App\system\Models\Item($dados);

		$result = $item->inserir();

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/item");

	}

	public function DeleteItem($request, $response, $args){

		$item = new \App\system\Models\Item();


		$result = $item->excluir($args['codItem']);

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/item");

		

	}
}