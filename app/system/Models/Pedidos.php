<?php

/*
** Author: Bianca Oliveira
** Date: 2018-05-27
**
** Classe pedidos
*/

namespace App\system\Models;

class Pedidos
{
	
	private $codPedido;			//int
	private $codPedidoGeral;	//int
	private $codUsuario;		//int
	private $data;				//data
	private $hora;				//hora
	private $valor;				//float


	public $camposNull = array(
		 '1', '1', '1', '1', '1', '1'
	);

	public function __construct($dados = array()){


		if(!empty($dados) && !is_null($dados)){
			$this->setDados($dados);
		}

	}

	//gets e sets
	public function getCodPedido(){
		return $this->codPedido;	
	}

	public function setCodPedido($dado){
		$this->codPedido = $dado;
	}

	public function getCodPedidoGeral(){
		return $this->codPedidoGeral;	
	}

	public function setCodPedidoGeral($dado){
		$this->codPedidoGeral = $dado;
	}

	public function getCodUsuario(){
		return $this->codUsuario;	
	}

	public function setCodUsuario($dado){
		$this->codUsuario = $dado;
	}

	public function getHora(){
		return $this->hora;	
	}

	public function setHora($dado){
		$this->hora = $dado;
	}

	public function getData(){
		return $this->data;	
	}

	public function setData($dado){
		$this->data = $dado;
	}

	private function setDados($dados){

		
		$this->setCodPedido($dados[0]);
		$this->setCodPedidoGeral($dados[1]);
		$this->setCodUsuario($dados[2]);
		$this->setHora($dados[3]);
		$this->setData($dados[4]);

	}

	public function getDados(){		

		$dados = array(
			
			$this->getCodPedido(),
			$this->getCodPedidoGeral(),
			$this->getCodUsuario(),
			$this->getHora(),
			$this->getData()

		);

		return $dados;
	}

	public function inserir($dados){

//		$dados = $this->getDados();
//		$cn = $this->getDadosNull();
		
		// $r = Validacao::verificarNullGeral($cn, $dados);

		// if ($r == true) {
		//  	return ("Erro! Existem valores em branco");
		//  	//echo("Erro! Existem valores em branco");
		// } else {
		 	$dao = new \App\system\Models\PedidosDAO();
		 	return $dao->inserir($dados);
		//}

}
		public function excluir($id){
		 	$dao = new \App\system\Models\ItemDAO();
		 	return $dao->excluir($id);
	}


	public function select(){
		 	$dao = new \App\system\Models\itemDAO();
		 	return $dao->select();
	}


	public function verificarPedidoGeral($mesa){
		$dao = new \App\system\Models\PedidosDAO();
		$cod = $dao->SelecionarPedidoGeralMesa($mesa);
		
		if(count($cod) == 0){
			echo "Mesa fechada";
			
			$data = array($mesa, "Aberta");

			$d = new \App\system\Models\PedidoGeral();
			$d->inserirPgeral($data);	
			$cod = $dao->SelecionarPedidoGeralMesa($mesa);


		}

		return $cod;


	}

}