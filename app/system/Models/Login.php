<?php

/**
** Bianca de Oliveira
** Criado em 2018-Abr-22
** Classe de login
*/

namespace App\system\Models;
use App\system\Models;

class Login
{
	
	//Atributos da classe
	private $cpf;
	private $senha;
	private $funcao;
	private $nivel;


	//Get's e Set's
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

	private function setNivel($dado){
		$this->nivel = $dado;
	}

	public function getNivel(){
		return $this->nivel;
	}

	/* ::efetuarLogin::
	** Função que efetua o processo de login no sistema, recebe como 
	** parametros de entrada o cpf e a senha que o usuário informou na tela de 
	** login.
	*/
	public function efetuarLogin($cpf, $senha){
		
		//Atribui os valores recebidos aos respectivos atributos.
		$this->setCPF($cpf);
		$this->setSenha($senha);

		//Instancia a classe Usuario para efetuar uma busca no banco de dados, o método buscaCPF verifica se existe algum usuário cadastrado no banco com o cpf que foi informado, retornando true se existir e false se não existir
		$user = new \App\system\Models\Usuario();
		$result = $user->buscarCPF($this->cpf);

		if ($result == true) {
			//Armazena em uma variavel a senha cadastrados no banco para o CPF informado
			$senhaBD = $user->getSenha();

			//Compara se a senha informada pelo usuario na tela de cadastro é igual a senha cadastrada no banco. 
			if($senha == $senhaBD){
				//Armazena no atributo funcao a função que o usuário exerce no sistema (Garçon, caixa ou gerente)
				$this->setFuncao($user->getFuncao());

				//Login realizado com sucesso, registra as váriaveis de sessão
				session_start();
				$_SESSION['user'] = $this->getCPF();
				$_SESSION['funcao'] = $this->getFuncao();
				header("Location: " . $GLOBALS['$urlpadrao'] . "painel");
			} else {
				//Caso o cpf esteja cadastrado no sistema mas as senhas não estejam iguais, a variavel $result passa a ser false
				$result = false;
			}

		} else {
			//O CPF informado na tela de login não foi encontrado no sistema, a variavel $result continua valendo false.
			$result = false;
		}

		//Se o login falhou em algum momento, o usuário é redirecionao para a tela de login com o status = 2
		if ($result == false) {
			header("Location: " . $GLOBALS['$urlpadrao'] . "app/login?status=1");
		}

	}	

	/* ::validarLogin::
	** Função para validar o login, verificar se esta logado
	** e se possui a permissão necessária, recebe como 
	** parametro um int que define o nivel de permissão do usuário:
	** null = Inválido
	** 1 = Gerente
	** 2 = Caixa
	** 3 = Garçom
	*/
	public function validarLogin($nivel = NULL){

		//Inicia o uso de sessão
		session_start();

		//Verifica se a sessão esta iniciada, esse é o primeiro filtro, caso a variavel $_SESSION('user') não exista ou esteja null o usuário é redirecionado para a tela de login.
		if (!isset($_SESSION['user']) || is_null($_SESSION['user'])){
			return 1;
 		} else {
 			//Caso o usuário esteja logado, é verificado o nivel de permissão dele.
 			$n = $this->nivelUsuario();

 			if ($n <= $nivel) {
 				return 0;
 			} else {
 				return 2;
 			}
 			
 		}

	}

	/* Função para verificar qual a função exercida no sistema pelo usuário 
	** logado e retorna o nivel do mesmo.
	** Inválido = null
	** Gerente = 1
	** Caixa = 2
	** Garçon = 3
	*/
	private function nivelUsuario(){

		switch (utf8_encode($_SESSION['funcao'])) {
			case 'Caixa':
				$n = 2;
				break;
			case 'Gerente':
				$n = 1;
				break;
			case 'Garçom':
				$n = 3;
				break;
			default:
				$n = NULL;
				break;
		}

		return $n;
	}

	



	public function validarPermissao(){

	}

	//
	public function efetuarLogout(){
		$_SESSION = array();
		header("Location: " . $GLOBALS['$urlpadrao'] . "app/login");
	}	

	//Verifica se o usuário está logado e retorna seu nivel de permissão
	

	public function registrarLog(){

	}	

	public function registrarLogFinal(){

	}

	public function alterarSenha(){

	}		
}