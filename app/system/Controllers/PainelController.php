<?php

/*
** Author: Bianca de Oliveira
** Date: 2018-04-06
**
** Controller do objeto Painel
*/

namespace App\system\Controllers;

class PainelController
{

	public function Home(){


		PainelController::GetExibir('Home');

	}

	public static function GetExibirLogin($arq, $dados = array()){

		$c = ($GLOBALS['$urlraiz'] . 'app/system/Views/');
		include_once($c . $arq . '.php');
	}	

	public static function GetExibir($arq, $dados = array()){
		// $path = $_SERVER['SCRIPT_FILENAME'];
		// $path_parts = pathinfo($path);
		// $c = $path_parts['dirname'];

		if(!isset($_SESSION)){
			session_start();
		}
		// echo ($_SESSION('funcao'));

		$teste = array();

		$func = utf8_encode($_SESSION['funcao']);

		if ($func == 'Caixa') {

			$teste = array (
				'HOME' => ($GLOBALS['$urlpadrao'] . 'painel'),
				'Endereços' => ($GLOBALS['$urlpadrao'] . 'painel/cidade'),
				'Clientes' => ($GLOBALS['$urlpadrao'] . 'painel/clientes'),
				'Mesas' => ($GLOBALS['$urlpadrao'] . 'painel/mesas'),
				'Reservas' => ($GLOBALS['$urlpadrao'] . 'reservas'),
				'Pedidos' => '',
				'Pagamentos' => '',
				'Sair' => ($GLOBALS['$urlpadrao'] . 'app/logout')
			);
		} else if($func == 'Gerente'){

			$teste = array (
				'HOME' => ($GLOBALS['$urlpadrao'] . 'painel'),
				'Endereços' => ($GLOBALS['$urlpadrao'] . 'painel/cidade'),
				'Usuários' => ($GLOBALS['$urlpadrao'] . 'painel/usuario'),
				'Clientes' => ($GLOBALS['$urlpadrao'] . 'painel/clientes'),
				'Cardápio' => ($GLOBALS['$urlpadrao'] . 'painel/categorias'),
				'Mesas**' => ($GLOBALS['$urlpadrao'] . 'painel/mesas'),
				'Reservas' => ($GLOBALS['$urlpadrao'] . 'painel/reservas'),
				'Pedidos**' => '',
				'Pagamentos**' => '',
				'Relatórios**' => '',
				'Sair' => ($GLOBALS['$urlpadrao'] . 'app/logout')
			);		

		} else if($func == 'Garcom'){
			$teste = array (
					'Pedidos' => '#',
					'Sair' => ($GLOBALS['$urlpadrao'] . 'app/logout')
				);
		}

		$c = ($GLOBALS['$urlraiz'] . 'app/system/Views/');
		include_once($c . 'menuSuperior.php');


		//include_once('..' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'system.php');
		if(!is_null($arq) || !isset($arq)){
			include_once($c . $arq . '.php');
		}
	}

	public function erro(){
		echo "Erro, acesso negado";
	}
}