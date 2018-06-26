<?php

/*

** Author: Lucas Gabriel
**Author: Gabriel Ribeiro
** Date: 2018-05-23
**
** Classe MesaDAO
** Implementa os m�todos insert, select e busca do objeto Mesa
*/

namespace App\system\Models;

use App;
use Helpers;

class mesaDAO
{	

//M�todo para inserir uma nova cidade
	public function insert($data){


		$a = 'INSERT INTO mesa (codMesa, qtdLugares, estado) VALUES (:CODMESA, :QTDLUGARES, :ESTADO)';
		
		$var = array(
			':CODMESA' => $data[0],
			':QTDLUGARES' => $data[1],
			':ESTADO' =>  $data[2]
			);

		// $this->executar($a, 'executarQuery', $var);
		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
	}


	// Fun��o de edi��o de mesas
	public function update($data, $id){


		$a = 'UPDATE mesa SET codMesa = :CODMESA, qtdLugares = :QTDLUGARES, estado = :ESTADO WHERE codMesa = :ID';
		
			$var = array(
			':CODMESA' => $data[0],
			':QTDLUGARES' => $data[1],
			':ESTADO' =>  $data[2],
			':ID' => $id
		);

		// $this->executar($a, 'executarQuery', $var);
		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
	}


	public function search($data){

		$a = 'SELECT codMesa FROM mesa WHERE codMesa = :CODMESA';
		
		$var = array(
			':CODMESA' => $data[0]
		);

		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect', $var);
	}


	//M�todo para listar todas as mesas
	public function select(){

		$a = 'SELECT * FROM mesa ORDER BY codMesa';
		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect');
		return $result;
	}


	//M�todo para excluir uma mesa
	public function excluir($id){

		$a = 'DELETE FROM mesa where codMesa = :ID';

		$var = array(
			':ID' => $id
		);

		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
		return $r;
	}

	//M�todo para excluir uma mesa
	public function selectPedidos($id){

		$a = "SELECT produto.*, pedido.codPedido, pedidogeral.cod AS pkPedidoGeral FROM pedidogeral, pedido, item, produto WHERE pedidogeral.codMesa = :CODMESA AND pedidogeral.cod = pedido.codPedidoGeral AND item.codPedido = pedido.codPedido AND produto.codProduto = item.codProduto AND pedidogeral.estado = 'Aberta' ORDER BY item.codItem;";

		$var = array(
			':CODMESA' => $id
		);

		$r = App\system\Helpers\SqlHelper::executar($a, 'executarSelect', $var);
		return $r;
	}

	public function encerrar($id){


		$a = "UPDATE pedidogeral SET estado = 'Fechada' WHERE codMesa = :ID AND estado = 'Aberta'";
		
			$var = array(
			':ID' => $id
		);

		// $this->executar($a, 'executarQuery', $var);
		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
	}

}
