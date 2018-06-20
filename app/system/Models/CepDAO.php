<?php 

/**
** Author: Bianca de Oliveira
** Date: 2018-04-18
**
** DAO do objeto cep 
*/

namespace App\system\Models;

use App;
use Helpers;

class CepDAO
{

	public function insert($data){


		$a = 'INSERT INTO cep (cep, codCidade, rua, bairro) VALUES (:CEP, :CODCIDADE, :RUA, :BAIRRO)';
		
		$var = array(
			':CEP' => $data[0],
			':CODCIDADE' => $data[1],
			':RUA' =>  $data[2],
			':BAIRRO' => $data[3]
		);


		// $this->executar($a, 'executarQuery', $var);
		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
	}

	//Método para listar todas as cidades do banco
	public function selectAll(){

		$a = 'SELECT * FROM cep ORDER BY bairro';
		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect');
		//var_dump($result);
		return $result;
	}


	public function selectCodPostal(){

		$a = 'SELECT cep FROM cep';
		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect');
		return $result;
	}

	public function selectCEP($ID){

		$c = 'SELECT * FROM cep WHERE cep = :CEP';
		$var = array(
			':CEP' => $ID
		);
		$result = App\system\Helpers\SqlHelper::executar($c, 'executarSelect', $var);
		return $result;

	}

	//Método para excluir uma cidade
	public function excluir($cod){

		$a = 'DELETE FROM cep WHERE cep = :COD;';

		$var = array(
			':COD' => $cod
		);

		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
		return $r;
	}	


	public function update($data, $id){

		$a = 'UPDATE cep SET cep = :CEP, codCidade = :CODCIDADE, rua = :RUA, bairro = :BAIRRO WHERE cep = :CEP';
		
		$var = array(
			'CEP' => $data[0],
			'CODCIDADE' => $data[1],
			'RUA' => $data[2],
			':BAIRRO' => $data[3]		
		
		);

		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
	}
}