<?php

/**
** Author: Bianca de Oliveira
** Date: 2018-03-18
** 
** Controller Login 
*/

namespace App\system\Controllers;
use App\system\Models;

class LoginController
{
	
	function exibirLogin($request, $response, $args){
		
		// $login = new \App\system\Views\Login();
		// $r = $login->teste();
		// $body = $response->getBody();
		// $body->write($r);
		session_start();
		$_SESSION = array();

		$msg = "";

		if (isset($_GET['status'])){
			$s = $_GET['status'];	
			if ($s == 0) {
				$msg = "DESCONECTADO<br>Bom descanso.";
			} else if($s == 1){
				$msg = "Erro ao efetuar login.<br>Tente novamente.";
			} else if($s == 2){
				$msg = "Erro de validação";
			}
		}

		$dados = array($msg);

		PainelController::GetExibirLogin('Login', $dados);

	}


	public function finalizarSessao(){
		session_start();
		$_SESSION = array();
		header("Location: " . $GLOBALS['$urlpadrao'] . "app/login?status=0");
	}

	function validarLogin(){
		$cpf = $_POST['login'];
		$senha = $_POST['senha'];

		$login = new \App\system\Models\Login();
		$r = $login->efetuarLogin($cpf, $senha);

		if ($r === true) {
			
		}
		
	}

}