<?php

/*
** Author: Bianca de Oliveira
** Date: 2018-05-13
**
** Controller do objeto Pedidos
*/

namespace App\system\Controllers;

use App\system\Controllers;
use App\system\Models;

class PedidosController
{

	public function GetPedidosAdd(){

		$mesas = new \App\system\Models\Mesa();
		$m = $mesas->select();


		$produtos = new \App\system\Models\Produto();
		$cardapio = $produtos->selectProduto();

		$dados = array(
				'Cardapio' => $cardapio,
				'Mesas' => $m
		);

		PainelController::AbrirContent('Novo Pedido');
  		PainelController::GetExibir('novoPedido', $dados);
        PainelController::FecharContent();
	}


	public function GetPedidosConfirmar(){

			$produtos = new \App\system\Models\Produto();
			$cardapio = $produtos->selectProduto();
		
			//A mesa selecionada é sempre a primeira informaçao do $_POST
			$mesa = $_POST['Mesa'];

			//Calcula quantos produtos diferentes foram selecionados, sem levar em consideração a quantidade de cada um
			$qtdProdutos = (count($_POST)-1)/2;
			
			//Armazeno as informações recebidas, referentes aos produtos, em um array númerico
			$produtos = array();
			foreach ($_POST as $key => $value) {
				if($key != 'Mesa'){
						array_push($produtos, $value);
				}
			}

		$dados = array(
				'Produtos' => $produtos,
				'Cardapio' => $cardapio,
				'Mesa' => $mesa
		);

		 PainelController::AbrirContent('Confirmar Pedido');
         PainelController::GetExibir('confirmarPedido', $dados);
  		 PainelController::FecharContent();
	}

	public function PostPedidosAdd($request, $response, $args){
		$pedidos = new \App\system\Models\Pedidos();

		//Recebe o codigo do pedido geral aberto para aquela mesa
		$p = $pedidos->verificarPedidoGeral($_POST['mesa']);

		//Recebe o suário Logado
		if(!isset($_SESSION)){
			session_start();
		}

		$user = $_SESSION['user'];

		//Array com dados para inserir o pedido
		$dados = array($p['0']['cod'], $user);
		$codPedido = $pedidos->inserir($dados);		//Retorna o código do pedido

		
		$codPedido = $codPedido['0']['codPedido'];
		

		$item = new \App\system\Models\Item();

		//var_dump($_POST);

		$total = (count($_POST) - 1)/2;

		echo "$total";

		for($k = 0; $k < $total; $k++){
			echo ($_POST["$k"]. '-' . $_POST["desc-$k"] . '<br>' );

			$cp = $_POST["$k"];
			$op = $_POST["desc-$k"];

			$infoItens = array($codPedido, $cp, $op);
				echo "<br>";echo "<br>";
			var_dump($infoItens);
echo "<br>";echo "<br>";
			$item->inserir($infoItens);

			header("Location: " . $GLOBALS['$urlpadrao'] . "painel/pedidos/add?status=0");

		}

	}

}