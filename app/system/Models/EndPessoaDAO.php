<?php

/*
** Author: Lucas Gabriel
** Date: 2018-04-22
**
** Classe DAO do objeto EndPessoa
*/

namespace App\system\Models;

use App;
use Helpers;

class EndPessoaDAO
{	


	//Método para inserir uma nova cidade
	public function insert($data){


		$a = 'INSERT INTO endpessoa (cep, cpfCliente, numero, complemento, estado, tipo) VALUES (:CEP, :CPFCLIENTE, :NUMERO, :COMPLEMENTO, :ESTADO, :TIPO)';
		
		$var = array(
			':CEP' => $data[0],
			':CPFCLIENTE' => $data[1],
			':NUMERO' =>  $data[2],
			':COMPLEMENTO' => $data[3],
			':ESTADO' => $data[4],
			':TIPO' => $data[5]
		);

		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
	}


		public function select(){

		$a = 'SELECT * FROM endpessoa ORDER BY codEndereco';
		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect');
		return $result;
	}


	//Método para excluir um Endereço
	public function excluir($id){

		$a = 'DELETE FROM endpessoa where codEndereco = :ID';

		$var = array(
			':ID' => $id
		);

		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
		return $r;
	}

}//fim da classe