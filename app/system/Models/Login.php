<?php

/**
** Bianca de Oliveira
** 16/Abr/2018
** Classe de login
*/

namespace App\system\Models;
use App\system\Models;

class Login
{
	
	private $cpf;
	private $senha;
	private $funcao;

	public function setCPF($dado){
		$this->cpf = $dado;
	}

	public function getCPF(){
		return $this->cpf;
	}

	private function setSenha($dado){
		$this->senha = $dado;
	}

	public function getSenha(){
		return $this->senha;
	}

	private function setFuncao($dado){
		$this->funcao = $dado;
	}

	public function getFuncao(){
		return $this->funcao;
	}


	//
	public function efetuarLogin($cpf, $senha){
		$this->setCPF($cpf);
		$this->setSenha($senha);

		$user = new \App\system\Models\Usuario();
		$user->buscarCPF($this->cpf);

		if ($user == true) {
			//Senha e cpf fornecidos para login
			$senha = $this->getSenha();
			$cpf = $this->getCPF();

			//Senha e cpf cadastrados no banco
			$senhaBD = $user->getSenha();
			$cpfBD = $user->getCPF();

			if($senha == $senhaBD){
				$this->setFuncao($user->getFuncao());
				$r = true;
			} else {
				$r = false;
			}

		} else {
			$r = false;
		}

		if ($r == true) {
			session_start();
			$_SESSION['user'] = $this->getCPF();
			$_SESSION['funcao'] = $this->getFuncao();
		} else {
			$this->validarLogin();
			return false;
		}

	}	

	public static function validarLogin(){

			// echo "entrou aqui";
			session_start();
			var_dump($_SESSION);

		if (!isset($_SESSION['user']) || is_null($_SESSION['user'])){
			header("Location: " . $GLOBALS['$urlpadrao'] . "app/login?status=0");
 		} else {
 			return true;
 		}

	}

	//
	public function efetuarLogout(){
		$_SESSION = array();
		header("Location: " . $GLOBALS['$urlpadrao'] . "app/login");
	}	

	//Verifica se o usuário está logado e retorna seu nivel de permissão
	public function verificarLogin(){

	}

	public function registrarLog(){

	}	

	public function registrarLogFinal(){

	}

	public function exibirMenu(){



	}	

	public function alterarSenha(){

	}		
}