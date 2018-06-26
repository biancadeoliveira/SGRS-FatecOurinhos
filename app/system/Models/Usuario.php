<?php

/*
** Author: Lucas Gabriel
** Author: Bianca de Oliveira
** Date: 2018-03-30
**
** Classe Usuário Model
*/


namespace App\system\Models;

class Usuario
{
	
	private $cpf;
	private $nome;
	private $senha;
	private $dataNasc;	
	private $rg;
	private $telefone;
	private $email;
	private $funcao;
	private $estado;
	private $cep;
	private $numero;
	private $complemento;


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

	//SENHA
	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($dado){
		$this->senha = $dado;

	}

	//DATA DE NASCIMENTO
	public function getDataNasc(){
		return $this->dataNasc;
	}

	public function setDataNasc($dado){
		$this->dataNasc = $dado;

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

	//FUNÇÃO
	public function getFuncao(){
		return $this->funcao;
	}

	public function setFuncao($dado){
		$this->funcao = $dado;

	}

	//ESTADO
	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($dado){
		$this->estado = $dado;

	}

	//CEP
	public function getCep(){
		return $this->cep;
	}

	public function setCep($dado){
		$this->cep = $dado;

	}

	//NUMERO
	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($dado){
		$this->numero = $dado;
	}
	

	//COMPLEMENTO
	public function getComplemento(){
		return $this->complemento;
	}

	public function setComplemento($dado){
		$this->complemento = $dado;

	}


	//funções de get e set

	public function setDados($dados){

		$this->setCpf($dados[0]);
		$this->setNome($dados[1]);
		$this->setSenha($dados[2]);
		$this->setDataNasc($dados[3]);
		$this->setRg($dados[4]);
		$this->setTelefone($dados[5]);
		$this->setEmail($dados[6]);
		$this->setFuncao($dados[7]);
		$this->setEstado($dados[8]);
		$this->setCep($dados[9]);
		$this->setNumero($dados[10]);
		$this->setComplemento($dados[11]);


	}

	public function getDados(){		

		$dados = array(
			
		$this->getCpf(),
		$this->getNome(),
		$this->getSenha(),
		$this->getDataNasc(),
		$this->getRg(),
		$this->getTelefone(),
		$this->getEmail(),
		$this->getFuncao(),
		$this->getEstado(),
		$this->getCep(),
		$this->getNumero(),
		$this->getComplemento()
		
		);

		return $dados;

	}

	//Incluir Usuario no sistema
	public function inserirUsuario(){

		$dados = $this->getDados();
		// $r = $this->verificarNull();


		// if ($r == true) {
		//  	// echo "Erro! Existem valores em branco";
		// } else {

		var_dump($dados);

		 	$dao = new \App\system\Models\UsuarioDAO();
		 	
		 	$dao->insert($dados);

		// }

	}


	//Editar usuário do sistema
	public function editarUsuario($dados, $cod){

		
		 	$dao = new \App\system\Models\UsuarioDAO();
		 	
		 	$dao->update($dados, $cod);

		// }

	}


	//funao para verificar se um determinado cpf esta cadastrado no banco
	public function buscarCPF($cpf){

		$dao = new \App\system\Models\UsuarioDAO();
		
		$result = $dao->buscarUsuarioCPF($cpf);

		if (count($result) == 1) {
			$this->setCpf($result[0]['cpf']);
			$this->setNome($result[0]['nome']);
			$this->setSenha($result[0]['senha']);
			$this->setFuncao($result[0]['funcao']);
			return true;
		} else {
			return false;
		}


	}

	//Função que retorna os dados di 
	public function selectCPF($cpf){

		$dao = new \App\system\Models\UsuarioDAO();
		
		$result = $dao->selecionarUsuarioCPF($cpf);

		if (count($result) == 1) {
			$this->setCpf($result[0]['cpf']);
			$this->setNome($result[0]['nome']);
			$this->setSenha($result[0]['senha']);
			$this->setFuncao($result[0]['funcao']);
			return $result;
		} else {
			return false;
		}


	}

	public function select(){

		 	$usua = new \App\system\Models\UsuarioDAO();
		 	return $usua->buscar();

	}


	public function delete($id){
    
            $usua = new \App\system\Models\UsuarioDAO();
		 	return $usua->delete($id);
    }

	//Função para verificar valores nulos
	private function verificarNull(){

		$dados = $this->getDados();

		foreach ($dados as $key => $value) {

			if(is_null($value) || empty($value) || $value == ""){
				//Tem nulo
				return true;
			}

 		}

 		//"nao tem nulo";
		return false;
	}

}