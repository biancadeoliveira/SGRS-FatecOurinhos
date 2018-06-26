<?php

/*
** Author: Bianca Oliveira
** Date: 2018-06-20
**
** Classe pedidos
*/

namespace App\system\Models;

use App;
use Helpers;

class PedidosDAO
{

	public function SelecionarPedidoGeralMesa($mesa){

		$a = 'SELECT cod FROM pedidogeral WHERE codMesa = :MESA AND estado = "Aberta";';
		
		$var = array(
			':MESA' => $mesa
		);

		// $this->executar($a, 'executarQuery', $var);
		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect', $var);

		return $result;
	}

	public function inserir($dados){
		$a = 'INSERT INTO pedido (codPedidoGeral, codUsuario, dataPedido, hora) VALUES (:CODPG, :CODUSUARIO, :DATA, :HORA);';
		
		//var_dump($dados);

		$var = array(
			':CODPG' => $dados[0],
			':CODUSUARIO' => $dados[1],
			':DATA' => date('Y-m-d'),
			':HORA' => date('H:i:s')
		);

		//var_dump($var);

		// $this->executar($a, 'executarQuery', $var);
		App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);

			//Testar com WHERE em codUsuário
		$b = 'SELECT codPedido FROM pedido order by codPedido DESC limit 0,1';

		//Seleciona última linha inserida na tabela pedido
		$result = App\system\Helpers\SqlHelper::executar($b, 'executarSelect');

		
		return $result;
	}

}