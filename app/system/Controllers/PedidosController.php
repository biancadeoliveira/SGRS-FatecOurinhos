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

		$produtos = new \App\system\Models\Produto();
		$cardapio = $produtos->selectProduto();


		PainelController::AbrirContent('Novo Pedido');
  		PainelController::GetExibir('novoPedido', $cardapio);
        PainelController::FecharContent();
	}

}