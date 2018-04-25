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
	public static function GetExibir($arq, $dados = array()){
		// $path = $_SERVER['SCRIPT_FILENAME'];
		// $path_parts = pathinfo($path);
		// $c = $path_parts['dirname'];


		//*****Gerente*****\\
		$teste = array (
			'Cidades',
			'Usuários',
			'Clientes',
			'Categorias',
			'Produtos',
			'Mesas',
			'Reservas',
			'Pedidos',
			'Pagamentos',
			'Relatórios'
		);

		//*****Garçom*****\\
		// $teste = array (
		// 	'Pedidos',
		// )
		//*****Caixa*****\\
		// $teste = array (
		// 	'Clientes',
		// 	'Mesas',
		// 	'Reserva',
		// 	'Pedidos',
		// 	'Pagamentos'
		// );

		$c = 'C:/xampp/htdocs/framework/app/system/Views/';
		include_once($c . 'menuSuperior.php');


		//include_once('..' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'system.php');
		include_once($c . $arq . '.php');
	}

	public function erro(){
		echo "Erro, acesso negado";
	}
}