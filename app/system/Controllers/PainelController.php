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

		$c = 'C:/xampp/htdocs/framework/app/system/Views/';
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
					'Clientes' => '#',
					'Mesas' => '#',
					'Reserva' => '#',
					'Pedidos' => '#',
					'Pagamentos' => '#',
					'Sair' => 'http://localhost/framework/public/app/logout'
			);
		} else if($func == 'Gerente'){

			$teste = array (
				'Cidades' => 'http://localhost/framework/public/painel/cidade',
				'Usuários' => 'http://localhost/framework/public/painel/usuario',
				'Clientes' => 'http://localhost/framework/public/painel/clientes',
				'Categorias' => 'http://localhost/framework/public/painel/categorias',
				'Produtos' => 'http://localhost/framework/public/painel/produtos',
				'Mesas' => 'http://localhost/framework/public/painel/mesas',
				'Reservas' => 'http://localhost/framework/public/reservas',
				'Pedidos' => 'http://localhost/framework/public/painel/pedidos',
				'Pagamentos' => '#',
				'Relatórios' => '#',
				'Sair' => 'http://localhost/framework/public/app/logout'
			);		

		} else if($func == 'Garçom'){
			$teste = array (
					'Pedidos' => '#',
					'Sair' => 'http://localhost/framework/public/app/logout'
				);
		}

		$c = 'C:/xampp/htdocs/framework/app/system/Views/';
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