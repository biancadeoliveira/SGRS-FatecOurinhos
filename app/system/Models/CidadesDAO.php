<?php

/*
** Author: Bianca de Oliveira
** Author: Lucas Gabriel
** Date: 2018-03-28
**
** Classe CidadesDAO
** Implementa os métodos insert, select e busca do objeto Cidades
*/

namespace App\system\Models;

use App;
use Helpers;

class CidadesDAO
{	


	//Método para inserir uma nova cidade
	public function insert($data){


		$a = 'INSERT INTO cidade (nome, codPostal, estado, pais) VALUES (:NOME, :CODPOSTAL, :ESTADO, :PAIS)';
		
		$var = array(
			':NOME' => $data[0],
			':CODPOSTAL' => $data[1],
			':ESTADO' =>  $data[2],
			':PAIS' => $data[3]
		);

		// $this->executar($a, 'executarQuery', $var);
		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
	}



	public function search($data){

		$a = 'SELECT codCidade, nome FROM cidade WHERE estado = :ESTADO';
		
		$var = array(
			':ESTADO' => $data[0]
		);

		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect', $var);
	}


	public function listarCep(){

		$a = 'SELECT * FROM cep';

		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect');
		return $result;
	}



	//Método para listar todas as cidades do banco
	public function select(){

		$a = 'SELECT * FROM cidade ORDER BY nome';
		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect');
		return $result;
	}


	//Método para excluir uma cidade
	public function excluir($id){

		$a = 'DELETE FROM cidade where codCidade = :ID';

		$var = array(
			':ID' => $id
		);

		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
		return $r;
	}
}