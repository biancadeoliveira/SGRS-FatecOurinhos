<?php

/*

** Author: Lucas Gabriel
** Date: 2018-05-23
**
** Classe PedidoGeralController
*/

namespace App\system\Controllers;

use App\system\Models;

class ProdutoController
{
    
    public function PostInserirProdutoGeral(){

        

        $cod = $_POST['cod'];
        $codEndereco = $_POST['codEndereco'];
        $codMesa = $_POST['codMesa'];
        $estado = $_POST['estado'];



        $dados = array($cod, $codEndereco, $codMesa, $estado);

        $produto = new \App\system\Models\PedidoGeral( $dados );

        $produto->inserirPgeral();

        header("Location: " . $GLOBALS['$urlpadrao'] . "painel/pedidos");

    }

    public function DeleteMesa($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);

		$pgeral = new \App\system\Models\PedidoGeral();

		$result = $pgeral->deletePgeral($args['idgeral']);

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/pedidos");
	

	}

}