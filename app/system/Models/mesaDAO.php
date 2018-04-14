<?php

/*
** Author: Gabriel Ribeiro
** Date: 2018-04-14
** 
** Classe MesaDAO
** Implementa os métodos de inserção, busca e desabilitação de objetos da classe mesa 
*/

namespace App\system\Models;

use App;

class MesaDAO
{
	//Método para inserção de uma nova mesa
	public function insert($data){
		
		$query = 'INSERT INTO mesa (codMesa, qtdLugares, estado) VALUES (:CODMESA, :NOME, :DEPARTAMENTO)';
		
		$var = array(
				':CODMESA' => $data[0],
				':QTDLUGARES' => $data[1],
				':ESTADO' => $data[2]
		);
		
		$r = App\system\Helpers\SqlHelper::executar($query, 'executarQuery', $var);
	}

	//Método de exclusão de uma mesa
	public function delete ($cod){
		$query = 'DELETE FROM mesa WHERE codMesa =:CODMESA';
		
		$var = array(
				':CODMESA' => $cod
		);
		
		$r = App\system\Helpers\SqlHelper::executar($query, 'executarQuery', $var);
	}
	
	//Método para buscar as mesas cadastradas
	public function search(){
		
		$query = 'SELECT * FROM mesa ORDER BY codMesa';
		$r = App\system\Helpers\SqlHelper::executar($query, 'executarSelect');
		return $r;
	}
	
	//Método para buscar as mesas cadastradas
	public function searchByEstado($dado){
		
		$query = 'SELECT * FROM mesa ORDER BY estado WHERE estado = :ESTADO';
		
		$var = array(
				':ESTADO' => $dado
		);
		
		$r = App\system\Helpers\SqlHelper::executar($query, 'executarSelect', $var);
		return $r;
	}
}