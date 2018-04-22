<?php

/*
** Author: Lucas de Abreu Mendonça
** Date: 2018-04-14
**
** Classe Cliente Model
*/

namespace App\system\Models;

class Clientes
{
	
	private $cpf;
	private $nome;
	private $rg;
	private $telefone;
	private $email;


	public $camposNull = array(
		'1', '1', '1', '1', '1'
	);


	//Método construtor
	public function __construct($dados = array()){


		if(!empty($dados) && !is_null($dados)){
			$this->setDados($dados);
		}

	}

	//CPF
	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($dado){
		$this->cpf = $dado;
	}

	//NOME
	public function getNome(){
		return $this->nome;
	}

	public function setNome($dado){
		$this->nome = $dado;
	}

	//RG
	public function getRg(){
		return $this->rg;
	}

	public function setRg($dado){
		$this->rg = $dado;
	}

	//TELEFONE
	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($dado){
		$this->telefone = $dado;
	}

	//EMAIL
	public function getEmail(){
		return $this->email;
	}

	public function setEmail($dado){
		$this->email = $dado;
	}

	public function getDadosNull(){
		return $this->camposNull;
	}

	public function setDados($dados){

		$this->setCpf($dados[0]);
		$this->setNome($dados[1]);
		$this->setRg($dados[2]);
		$this->setTelefone($dados[3]);
		$this->setEmail($dados[4]);

	}

	public function getDados(){		

		$dados = array(
			$this->getCpf(),
			$this->getNome(),
			$this->getRg(),
			$this->getTelefone(),
			$this->getEmail()
		);

		return $dados;
	}


	//Incluir Clientes no sistema
	public function inserir(){

		$dados = $this->getDados();
		$cn = $this->getDadosNull();
		
		$r = Validacao::verificarNullGeral($cn, $dados);

		if ($r == true) {
		 	return ("Erro! Existem valores em branco");
		 	// echo("Erro! Existem valores em branco");
		} else {
		 	$dao = new \App\system\Models\ClientesDAO();
		 	return $dao->insert($dados);
		}
	}

	public function excluir($id){
		 	$dao = new \App\system\Models\ClientesDAO();
		 	return $dao->excluir($id);
	}

	public function select(){

		 	$dao = new \App\system\Models\ClientesDAO();
		 	return $dao->select();

	}

	private function validarCpf(){

		$cod = $this->getCpf();

		echo($cod);
	}

}