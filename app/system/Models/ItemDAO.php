<?php

/*
** Author: Lucas Gabriel
** Date: 2018-04-18
**
** Classe ItemDAO
*/

namespace App\system\Models;

use App;
use Helpers;

class ItemDAO{



	//Método para inserir um novo item
	public function insert($data){


		$a = 'INSERT INTO item (codPedido, codProduto, quantidade, estado, observacao) VALUES (:CODPEDIDO, :CODPRODUTO, :QUANTIDADE, :ESTADO, :OBSERVACAO)';
		
		$var = array(
			
			':CODPEDIDO' => $data[0],
			':CODPRODUTO' =>  $data[1],
			':QUANTIDADE' => '1',
			':ESTADO' => 'Aguardando',
			':OBSERVACAO' => $data[2]
		);

		// $this->executar($a, 'executarQuery', $var);
		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
	}


	//Método para excluir uma cidade
	public function excluir($id){

		$a = 'DELETE FROM item where codItem = :ID';

		$var = array(
			':ID' => $id
		);

		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
		return $r;
	}

	public function select(){

		$a = 'SELECT * FROM item ORDER BY codItem';
		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect');
		return $result;
	}

}//fim da classe