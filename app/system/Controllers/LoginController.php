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

		

		if (isset($_GET['status'])) {
			$s = $_GET['status'];	
			if ($s == 0) {
				echo "Erro ao efetuar login.<br>Tente novamente.";
			} elseif($s == 1){
				echo "DESCONECTADO<br>Bom descanso.";
			}
		}

		echo "<form method='post' action='http://localhost/framework/public/app/login'>
			 	<input type='text' name='login' placeholder='CPF: xxx.xxx.xxx-xx'><br>
			  	<input type='password' name='senha' placeholder='Senha'><br>
			  	<input type='submit' value='Entrar'>
			  </form>";

	}


	public function finalizarSessao(){
		session_start();
		$_SESSION = array();
		header("Location: " . $GLOBALS['$urlpadrao'] . "app/login?status=1");
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