<?php

/*
** Author: Lucas Gabriel
** Date: 2018-05-23
**
** Classe Mesa Model
*/

namespace App\system\Models;


class Mesa
{

	private $codMesa;
	private $qtdLugares;
	private $estado;

		public $camposNull = array(
		'1', '1', '1'
	);


	//Método construtor
	public function __construct($dados = array()){


		if(!empty($dados) && !is_null($dados)){
			$this->setDados($dados);
		}

	}

	//Código da mesa
	public function getCodMesa(){
		return $this->codMesa;
	}

	public function setCodMesa($dado){
		$this->codMesa = $dado;
	}

	//Quantidade de Lugares
	public function getQtdLugares(){
		return $this->qtdLugares;
	}

	public function setQtdLugares($dado){
		$this->qtdLugares = $dado;
	}

	//Estado
	public function getEstado(){
		return $this->estado;
	}

	public function setEstado ($dado){
		$this->estado = $dado;
	}


	public function getDadosNull(){
		return $this->camposNull;
	}

	public function setDados($dados){

		$this->setCodMesa($dados[0]);
		$this->setQtdLugares($dados[1]);
		$this->setEstado($dados[2]);
		
	}

	public function getDados(){		

		$dados = array(
			$this->getCodMesa(),
			$this->getQtdLugares(),
			$this->getEstado()
			
		);

		return $dados;
	}


	//Incluir Mesa no sistema
	public function inserir(){

		$dados = $this->getDados();
		$cn = $this->getDadosNull();
		
		$r = Validacao::verificarNullGeral($cn, $dados);

		if ($r == true) {
		 	return ("Erro! Existem valores em branco");
		 	echo("Erro! Existem valores em branco");
		} else {
		 	$dao = new \App\system\Models\mesaDAO();
		 	return $dao->insert($dados);
		}
	}

// Função de edição de mesas
	public function editar($id){

		$dados = $this->getDados();
		$cn = $this->getDadosNull();
		
		$r = Validacao::verificarNullGeral($cn, $dados);

		if ($r == true) {
		 	return ("Erro! Existem valores em branco");
		 	// echo("Erro! Existem valores em branco");
		} else {
		 	$dao = new \App\system\Models\mesaDAO();
		 	return $dao->update($dados, $id);
		}
	}


	public function excluir($id){
		 	$dao = new \App\system\Models\mesaDAO();
		 	return $dao->excluir($id);
	}

	public function encerrar($id){
		 	$dao = new \App\system\Models\mesaDAO();
		 	return $dao->encerrar($id);
	}

	public function selectPedidosMesa($cod){
		$dao = new \App\system\Models\mesaDAO();
		return $dao->selectPedidos($cod);	
	}

	public function select(){

		 	$dao = new \App\system\Models\mesaDAO();
		 	return $dao->select();

	}

}

