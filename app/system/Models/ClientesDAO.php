<?php

/*
** Author: Lucas de Abreu Mendonça
** Date: 2018-04-14
**
** Classe ClientesDAO
** Implementa os métodos insert, select e busca do objeto Clientes
*/

namespace App\system\Models;

use App;
use Helpers;

class ClientesDAO
{	
	//Método para inserir um novo cliente
	public function insert($data){


		$a = 'INSERT INTO cliente (cpf, nome, rg, telefone, email) VALUES (:CPF, :NOME, :RG, :TELEFONE, :EMAIL)';
		
		$var = array(
			':CPF' => $data[0],
			':NOME' => $data[1],
			':RG' =>  $data[2],
			':TELEFONE' => $data[3],
			':EMAIL' => $data[4]
		);

		// $this->executar($a, 'executarQuery', $var);
		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
	}

	public function update($data, $id){

		$a = 'UPDATE cliente SET cpf = :CPF, nome = :NOME, rg = :RG, telefone = :TELEFONE, email = :EMAIL WHERE cpf = :CPF;';
		
		$var = array(
			'CPF' => $data[0],
			'NOME' => $data[1],
			'RG' => $data[2],
			':TELEFONE' => $data[3],
			':EMAIL' => $data[4]
		
		);

		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
	}

	/*public function search($data){

		$a = 'SELECT cpf, nome FROM cliente WHERE  = :ESTADO';
		
		$var = array(
			':ESTADO' => $data[0]
		);

		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect', $var);
	}*/

	//Método para listar todas as cidades do banco
	public function select(){

		$a = 'SELECT * FROM cliente ORDER BY nome';
		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect');
		return $result;
	}


	public function selectByCPF($ID){

		$a = 'SELECT * FROM cliente WHERE cpf = :CPF';
		$var = array(
			':CPF' => $ID
		);
		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect', $var);
		return $result;
	}




	//Método para excluir uma cidade
	public function delete($id){

		$a = 'DELETE FROM cliente where cpf = :CPF';

		$var = array(
			':CPF' => $id
		);

		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
		return $r;
	}

	public function searchByCod($id){

		$query = 'SELECT * FROM cliente WHERE cpf = :CPF';	

		$var = array(
			':CPF' => $id
		);

		$r = App\system\Helpers\SqlHelper::executar($query, 'executarSelect', $var);	
		return $r;
		
	}
}