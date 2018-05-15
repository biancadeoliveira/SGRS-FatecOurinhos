<?php
/**
** Author: Lucas Granado
** Date: 2018-04-14
**
** Classe Reserva
** Implementa os métodos de insersão, busca e desabilitação de objetos da classe reserva
*/

namespace App\system\Models;
use App\system\Models;
class Reserva
{
	
	private $codReserva;
	private $cpfCliente;
	private $codMesa;
	private $dataReserva;
	private $hora;
	private $estado;
	
	//1 = Obrigatorio | 0 = Não obrigatorio
	public $camposNull = array(
		'1', '1', '1', '1', '1', '1'
	);	

	public function __construct($dados = array()){
		
		if(!empty($dados) && !is_null($dados)){
			$this->setDados($dados);
		}
	}	
	
	//Get's e Set's
	public function setCodReserva($dado){
		$this->codReserva = $dado;
	}
	public function getCodReserva(){
		return $this->codReserva;
	}
	
	
	public function setCpfCliente($dado){
		$this->cpfCliente = $dado;
	}
	public function getCpfCliente(){
		return $this->cpfCliente;
	}
	
	
	public function setCodMesa($dado){
		$this->codMesa = $dado;
	}
	public function getCodMesa(){
		return $this->codMesa;
	}
	
	
	public function setDataReserva($dado){
		$this->dataReserva = $dado;
	}
	public function getDataReserva(){
		return $this->dataReserva;
	}
	
	public function setHora($dado){
		$this->hora = $dado;
	}
	public function getHora(){
		return $this->hora;
	}
	
	public function setEstado($dado){
		$this->estado = $dado;
	}
	public function getEstado(){
		return $this->estado;
	}
	
	
	//Get e Set para campos nulo
	public function getCamposNull(){
		return $this->camposNull;
	}
	
	
	
	public function setDados($dados){
		$this->setCpfCliente($dados[0]);
		$this->setCodMesa($dados[1]);
		$this->setDataReserva($dados[2]);
		$this->setCodReserva($dados[3]);		
		$this->setEstado($dados[4]);
		$this->setHora($dados[5]);
	}
	public function getDados(){		
		$dados = array(
		$this->getCpfCliente(),
		$this->getCodMesa(),
		$this->getDataReserva(),
		$this->getCodReserva(),		
		$this->getEstado(),
		$this->getHora()
			
		);
		return $dados;
	}
	//Incluir categorias no sistema
	public function inserir(){
		$dados = $this->getDados();
		// $cn = $this->getCamposNull();
		
		// $r = Validacao::verificarNullGeral($cn, $dados);
		// if ($r == true) {
		//  	return ("Erro! Existem valores em branco");
		//  	// echo("Erro! Existem valores em branco");
		// } else {
		 	$dao = new \App\system\Models\ReservaDAO();
		 	return $dao->insert($dados);
		// }
	}
	public function excluir($cod){
			$dao = new \App\system\Models\reservaDAO();
		 	return $dao->delete($cod);
	}
	public function select(){
		 	$dao = new \App\system\Models\ReservaDAO();
		 	return $dao->search();
	}
}
