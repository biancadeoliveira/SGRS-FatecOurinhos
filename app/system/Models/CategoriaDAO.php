<?php 

/*
** Author: Bianca de Oliveira
** Date: 2018-04-13
**
** Classe CardapioDAO
** Implementa os métodos de insersão, busca e desabilitação de objetos da classe cidade
*/

namespace App\system\Models;

use App;

class CategoriaDAO
{
	//Método para inserção de uma nova categoria de cardápio
	public function insert($data){

		$query = 'INSERT INTO categoria (codCategoria, nome, departamento) VALUES (:CODCATEGORIA, :NOME, :DEPARTAMENTO)';

		$var = array(
			':CODCATEGORIA' => $data[0],
			':NOME' => $data[1],
			':DEPARTAMENTO' => $data[2]
		);

		$r = App\system\Helpers\SqlHelper::executar($query, 'executarQuery', $var);
	}


	public function update($data, $id){

		$a = 'UPDATE categoria SET codCategoria = :CODCATEGORIA, nome = :NOME, departamento = :DEPARTAMENTO WHERE codCategoria = :ID;';
		
		$var = array(
			':CODCATEGORIA' => $data[0],
			':NOME' => $data[1],
			':DEPARTAMENTO' => $data[2],
			':ID' => $id
		);

		// $this->executar($a, 'executarQuery', $var);
		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
	}


	//Método de exclusão de uma categoria do cardapio
	public function delete($cod){
		$query = 'DELETE FROM categoria WHERE codCategoria =:CODCATEGORIA';

		$var = array(
			':CODCATEGORIA' => $cod
		);

		$r = App\system\Helpers\SqlHelper::executar($query, 'executarQuery', $var);	
	}

	//Método para buscar as categorias cadastradas
	public function search(){

		$query = 'SELECT * FROM categoria ORDER BY nome';	
		$r = App\system\Helpers\SqlHelper::executar($query, 'executarSelect');	
		return $r;

	}

	//Método para buscar as categorias cadastradas
	public function searchByNome($dado){

		$query = 'SELECT * FROM categoria ORDER BY nome WHERE nome = :NOME';	

		$var = array(
			':NOME' => $dado
		);

		$r = App\system\Helpers\SqlHelper::executar($query, 'executarSelect', $var);	
		return $r;
		
	}

	//Método para buscar as categorias cadastradas
	public function searchByCategoria($dado){

		$query = 'SELECT * FROM categoria ORDER BY nome WHERE departamento = :DEPARTAMENTO';

		$var = array(
			':DEPARTAMENTO' => $dado
		);

		$r = App\system\Helpers\SqlHelper::executar($query, 'executarSelect', $var);	
		return $r;
		
	}

}