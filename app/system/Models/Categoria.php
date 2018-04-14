<?php

/**
** Author: Bianca de Oliveira
** Date: 2018-04-13
**
** Classe CardapioDAO
** Implementa os métodos de insersão, busca e desabilitação de objetos da classe cidade
*/

namespace App\system\Models;

use App\system\Models;

class Categoria
{
	
	private $codCategoria;
	private $nome;
	private $departamento;

	//1 = Obrigatorio | 0 = Não obrigatorio
	public $camposNull = array(
		'1', '1', '1'
	);	

	function __construct($dados = array()){
		
		if(!empty($dados) && !is_null($dados)){
			$this->setDados($dados);
		}

	}

	//Get's e Set's
	public function setCodCategoria($dado){
		$this->codCategoria($dado);
	}

	public function getCodCategoria(){
		return $this->codCategoria;
	}

	public function setNome($dado){
		$this->nome($dado);
	}

	public function getNome(){
		return $this->nome;
	}

	public function setDepartamento($dado){
		$this->departamento($dado);
	}

	public function getDepartamento(){
		return $this->departamento;
	}

	public function getCamposNull(){
		return $this->camposNull;
	}

	public function setDados($dados){

		$this->codCategoria = $dados[0];
		$this->nome = $dados[1];
		$this->departamento = $dados[2];

	}

	public function getDados(){		

		$dados = array(
			$this->getCodCategoria(),
			$this->getNome(),
			$this->getDepartamento()
			
		);

		return $dados;
	}




	//Incluir categorias no sistema
	public function inserir(){

		$dados = $this->getDados();
		$cn = $this->getCamposNull();
		
		$r = Validacao::verificarNullGeral($cn, $dados);

		if ($r == true) {
		 	return ("Erro! Existem valores em branco");
		 	// echo("Erro! Existem valores em branco");
		} else {
		 	$dao = new \App\system\Models\CategoriaDAO();
		 	return $dao->insert($dados);
		}
	}

	public function excluir($cod){
			$dao = new \App\system\Models\CategoriaDAO();
		 	return $dao->delete($cod);
	}

	public function select(){

		 	$dao = new \App\system\Models\CategoriaDAO();
		 	return $dao->search();

	}


}