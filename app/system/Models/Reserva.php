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
	public function setCcodReserva($dado){
		$this->codReserva = $dado;
	}
	public function getcodReserva(){
		return $this->codReserva;
	}
	
	
	public function setcpfCliente($dado){
		$this->cpfCliente = $dado;
	}
	public function getcpfCliente(){
		return $this->cpfCliente;
	}
	
	
	public function setcodMesa($dado){
		$this->codMesa = $dado;
	}
	public function getcodMesa(){
		return $this->codMesa;
	}
	
	
	public function setdataReserva($dado){
		$this->cpfCliente = $dado;
	}
	public function getdataReserva(){
		return $this->cpfCliente;
	}
	
	public function sethora($dado){
		$this->hora = $dado;
	}
	public function getHora(){
		return $this->hora;
	}
	
	public function setestado($dado){
		$this->estado = $dado;
	}
	public function getestado(){
		return $this->estado;
	}
	
	
	//Get e Set para campos nulo
	public function getCamposNull(){
		return $this->camposNull;
	}
	
	
	
	public function setDados($dados){
		$this->cpfCliente(dados[0]);
		$this->codMesa($dados[1]);
		$this->dataReserva($dados[2]);
		$this->codReserva($dados[3]);		
		$this->estado($dados[4]);
		$this->hora($dados[5]);
	}
	public function getDados(){		
		$dados = array(
		$this->cpfCliente(),
		$this->codMesa(),
		$this->dataReserva(),
		$this->codReserva(),		
		$this->estado(),
		$this->hora()
			
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
		 	$dao = new \App\system\Models\ReservaDAO();
		 	return $dao->insert($dados);
		}
	}
	public function excluir($cod){
			$dao = new \App\system\Models\ReservaDAO();
		 	return $dao->delete($cod);
	}
	public function select(){
		 	$dao = new \App\system\Models\ReservaDAO();
		 	return $dao->search();
	}
}
