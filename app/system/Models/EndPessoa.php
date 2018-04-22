<?php

/*
** Author: Lucas Gabriel
** Date: 2018-04-22
**
** Classe Endereço Pessoa
*/

namespace App\system\Models;

class EndPessoa{

	private $cep;
	private $cpfCliente;
	private $numero;
	private $complemento;
	private $estado;
	private $tipo;

public $camposNull = array(
		'1', '1', '1', '0', '1','0'
	);


	//Método construtor
	public function __construct($dados = array()){


		if(!empty($dados) && !is_null($dados)){
			$this->setDados($dados);
		}

	}


	//cep
	public function getCep(){
		return $this->cep;
	}

	public function setCep($dado){
		$this->cep = $dado;
	}

	//CPF Cliente
	public function getCpfCliente(){
		return $this->cpfCliente;
	}

	public function setCpfCliente($dado){
		$this->cpfCliente = $dado;
	}

	//Numero
	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($dado){
		$this->numero = $dado;
	}

	//Complemento
	public function getComplemento(){
		return $this->complemento;
	}

	public function setComplemento($dado){
		$this->complemento = $dado;
	}

	//Estado
	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($dado){
		$this->estado = $dado;
	}

	//Tipo
	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($dado){
		$this->tipo = $dado;
	}

	public function getDadosNull(){
		return $this->camposNull;
	}

	public function setDados($dados){

		$this->setCep($dados[0]);
		$this->setCpfCliente($dados[1]);
		$this->setNumero($dados[2]);
		$this->setComplemento($dados[3]);
		$this->setEstado($dados[4]);
		$this->setTipo($dados[5]);

	}

	public function getDados(){		

		$dados = array(
			$this->getCep(),
			$this->getCpfCliente(),
			$this->getNumero(),
			$this->getComplemento(),
			$this->getEstado(),
			$this->getTipo()
		);

		return $dados;
	}

	//Incluir Endereço Pessoa
	public function inserir(){

		$dados = $this->getDados();
		$cn = $this->getDadosNull();
		
		$r = Validacao::verificarNullGeral($cn, $dados);

		if ($r == true) {
		 	return ("Erro! Existem valores em branco");
		 	//echo("Erro! Existem valores em branco");
		} else {
		 	$dao = new \App\system\Models\EndPessoaDAO();
		 	return $dao->insert($dados);
		}

		
	}

	public function select(){

		 	$dao = new \App\system\Models\EndPessoaDAO();
		 	return $dao->select();

	}

	public function excluir($id){
		 	$dao = new \App\system\Models\EndPessoaDAO();
		 	return $dao->excluir($id);
	}





}//fim da classe