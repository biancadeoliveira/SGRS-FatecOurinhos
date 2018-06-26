<?php

/*
** Author: Lucas Gabriel
** Date: 2018-04-18
**
** Classe Item
*/

namespace App\system\Models;


class Item
{

	private $codPedido;
	private $codProduto;
	private $quantidade;
	private $preco;
	private $estado;
	private $observacao;

	public $camposNull = array(
		 '1', '1', '1', '1', '1', '0'
	);


	//Método construtor
	public function __construct($dados = array()){


		if(!empty($dados) && !is_null($dados)){
			$this->setDados($dados);
		}

	}



//codPedido
	public function getCodPedido(){
		return $this->codPedido;
	}

	public function setCodPedido($dado){
		$this->codPedido = $dado;
	}

//
	public function getCodProduto(){
		return $this->codProduto;
	}

	public function setCodProduto($dado){
		$this->codProduto = $dado;
	}

	//Quantidade
	public function getQuantidade(){
		return $this->quantidade;
	}

	public function setQuantidade($dado){
		$this->quantidade = $dado;
	}

	//Preço
	public function getPreco(){
		return $this->preco;
	}

	public function setPreco($dado){
		$this->preco = $dado;
	}

	//Estado
	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($dado){
		$this->estado = $dado;
	}

//Observação
	public function getObservacao(){
		return $this->observacao;
	}

	public function setObservacao($dado){
		$this->observacao = $dado;
	}

	public function getDadosNull(){
		return $this->camposNull;
	}

	private function setDados($dados){

		
		$this->setCodPedido($dados[0]);
		$this->setCodProduto($dados[1]);
		$this->setQuantidade($dados[2]);
		$this->setPreco($dados[3]);
		$this->setEstado($dados[4]);
		$this->setObservacao($dados[5]);


	}

	public function getDados(){		

		$dados = array(
			
			$this->getCodPedido(),
			$this->getCodProduto(),
			$this->getQuantidade(),
			$this->getPreco(),
			$this->getEstado(),
			$this->getObservacao()

		);

		return $dados;
	}

	//Incluir Item no sistema
	public function inserir($data){

		// $dados = $this->getDados();
		// $cn = $this->getDadosNull();
		
		// $r = Validacao::verificarNullGeral($cn, $dados);

		// if ($r == true) {
		//  	return ("Erro! Existem valores em branco");
		//  	//echo("Erro! Existem valores em branco");
		// } else {
		 	$dao = new \App\system\Models\ItemDAO();
		 	return $dao->insert($data);
		// }

}
		public function excluir($id){
		 	$dao = new \App\system\Models\ItemDAO();
		 	return $dao->excluir($id);
	}


	public function select(){

		 	$dao = new \App\system\Models\itemDAO();
		 	return $dao->select();

	}


}//fim da classe