<?php

/*
** Author: Lucas Gabriel
** Date: 2018-05-27
**
** Classe Model de pedidos gerais

*/

namespace App\system\Models;


class PedidoGeral
{

	private $cod
	private $codEndereço
	private $codMesa;
	private $estado;

		public $camposNull = array(
		'1', '0', '0','1'
	);


	//Método construtor
	public function __construct($dados = array()){


		if(!empty($dados) && !is_null($dados)){
			$this->setDados($dados);
		}


//codigo do pedido geral
	public function getCod(){
		return $this->cod;
	}

	public function setCod($dado){
		$this->cod = $dado;
	}


//Codigo de endereço
	public function getCodEndereço(){
		return $this->codEndereço;
	}

	public function setCodEndereço($dado){
		$this->codEndereço = $dado;
	}

	//Código da mesa
	public function getCodMesa(){
		return $this->codMesa;
	}

	public function setCodMesa($dado){
		$this->codMesa = $dado;
	}

	//estado
	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($dado){
		$this->estado= $dado;
	}


	//Incluir Pedido geral

	public function inserirPgeral(){

		$dados = $this->getDados();
		$cn = $this->getCamposNull();
		
		$r = Validacao::verificarNullGeral($cn, $dados);

		if ($r == true) {
		 	return ("Erro! Existem valores em branco");
		 	// echo("Erro! Existem valores em branco");
		} else {
		 	$dao = new \App\system\Models\PedidoGeralDAO();
		 	return $dao->insert($dados);
		}
	}

	public function select(){

		 	$dao = new \App\system\Models\PedidoGeralDAO();
		 	return $dao->search();
	}

public function deletePgeral($id){
    
            $dao = new \App\system\Models\PedidoGeralDAO();
            return $dao->deletePgeral($id);
    }

	}