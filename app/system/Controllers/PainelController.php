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

	public static function AbrirContent($title){
		
		if(!isset($_SESSION)){
			session_start();
		}
		// echo ($_SESSION('funcao'));

		$icones = array();
		$menu = array();

		$func = utf8_encode($_SESSION['funcao']);

		if ($func == 'Caixa') {

			$menu = array (
				'HOME' => array(
								'Home' => ($GLOBALS['$urlpadrao'] . 'painel')
						),
				'Endereços' => array(
								'Endereços' => ($GLOBALS['$urlpadrao'] . 'painel/cidade')
							),
				'Clientes' => array(
								'Clientes' => ($GLOBALS['$urlpadrao'] . 'painel/clientes')
							),
				'Mesas' => array(
								'Mesas' => ($GLOBALS['$urlpadrao'] . 'painel/mesas')
							),
				'Reservas' => array(
								'Reservas' => ($GLOBALS['$urlpadrao'] . 'reservas')
							),
				'Pedidos' => array(
								'Todos Pedidos' => ($GLOBALS['$urlpadrao'] . 'pedidos'),
								'Novo Pedido' => ($GLOBALS['$urlpadrao'] . 'pedidos')
							),
				'Pagamentos' => '',
				'Sair' => ($GLOBALS['$urlpadrao'] . 'app/logout')
			);
		} else if($func == 'Gerente'){

			$icones = array(
				($GLOBALS['$urlImg'] . 'icones-menu/home.png'),
				($GLOBALS['$urlImg'] . 'icones-menu/enderecos.png'),
				($GLOBALS['$urlImg'] . 'icones-menu/usuario.png'),
				($GLOBALS['$urlImg'] . 'icones-menu/clientes.png'),
				($GLOBALS['$urlImg'] . 'icones-menu/menu.png'),
				($GLOBALS['$urlImg'] . 'icones-menu/home.png'),
				($GLOBALS['$urlImg'] . 'icones-menu/reservas.png'),
				($GLOBALS['$urlImg'] . 'icones-menu/pedidos.png'),
				($GLOBALS['$urlImg'] . 'icones-menu/pagamento.png'),
				($GLOBALS['$urlImg'] . 'icones-menu/relatorios.png'),
				($GLOBALS['$urlImg'] . 'icones-menu/sair.png')
			);

			$menu = array (

				'HOME' => ($GLOBALS['$urlpadrao'] . 'painel'),
				'Endereços' => array(
								'Endereços Cadastrados' => ($GLOBALS['$urlpadrao'] . 'painel/enderecos'),
								'Novo Endereço' => ($GLOBALS['$urlpadrao'] . 'painel/endereco/add'),
								'Cidades Cadastradas' => ($GLOBALS['$urlpadrao'] . 'painel/cidades'),
								'Nova Cidade' => ($GLOBALS['$urlpadrao'] . 'painel/cidade/add')
							),
				'Usuários' => array(
								'Usuários Cadastrados' => ($GLOBALS['$urlpadrao'] . 'painel/usuario'),
								'Novo Usuário' => ($GLOBALS['$urlpadrao'] . 'painel/usuario/add')
							),
				'Clientes' => array(
								'Clientes Cadastrados' => ($GLOBALS['$urlpadrao'] . 'painel/clientes'),
								'Novo Cliente' => ($GLOBALS['$urlpadrao'] . 'painel/clientes/add')
							),
				'Cardapio' => array(
								'Produtos Cadastrados' => ($GLOBALS['$urlpadrao'] . 'painel/produtos'),
								'Novo Produto' => ($GLOBALS['$urlpadrao'] . 'painel/produto/add'),
								'Categorias Cadastradas' => ($GLOBALS['$urlpadrao'] . 'painel/categorias'),
								'Nova Categoria' => ($GLOBALS['$urlpadrao'] . 'painel/categoria/add')
							),
				'Mesas' => array(
								'Todas Mesas' => ($GLOBALS['$urlpadrao'] . 'painel/mesas'),
								'Gerenciar Mesas' => ($GLOBALS['$urlpadrao'] . 'painel/gerenciar-mesas')
							),
				'Reservas' => array(
								'Nova Reserva' => ($GLOBALS['$urlpadrao'] . 'reserva/add'),
								'Todas Reservas' => ($GLOBALS['$urlpadrao'] . 'reservas')
							),
				'Pedidos' => array(
								'Todos Pedidos' => ($GLOBALS['$urlpadrao'] . 'pedidos'),
								'Novo Pedido' => ($GLOBALS['$urlpadrao'] . 'pedidos/add')
							),
				'Pagamentos' => '#',
				'Relatórios' => '#',


				// 'HOME' => ($GLOBALS['$urlpadrao'] . 'painel'),
				// 'Endereços' => ($GLOBALS['$urlpadrao'] . 'painel/cidade'),
				// 'Usuários' => ($GLOBALS['$urlpadrao'] . 'painel/usuario'),
				// 'Clientes' => ($GLOBALS['$urlpadrao'] . 'painel/clientes'),
				// 'Cardápio' => ($GLOBALS['$urlpadrao'] . 'painel/categorias'),
				// 'Mesas**' => ($GLOBALS['$urlpadrao'] . 'painel/mesas'),
				// 'Reservas' => ($GLOBALS['$urlpadrao'] . 'painel/reservas'),
				// 'Pedidos**' => '',
				// 'Pagamentos**' => '',
				// 'Relatórios**' => '',
				'Sair' => ($GLOBALS['$urlpadrao'] . 'app/logout')
			);		

		} else if($func == 'Garcom'){
			$menu = array (
					'Pedidos' => '#',
					'Sair' => ($GLOBALS['$urlpadrao'] . 'app/logout')
				);
		}

		$c = ($GLOBALS['$urlraiz'] . 'app/system/Views/');
		include_once($c . 'menuSuperior.php');

		echo "<div class='content'>
				<div id='page-title' class='col-6'>
					<h1>$title</h1>
				</div>";
	}

	public static function FecharContent(){
		
		echo "</div>";
	}


	public static function GetExibirLogin($arq, $dados = array()){

		$c = ($GLOBALS['$urlraiz'] . 'app/system/Views/');
		include_once($c . $arq . '.php');
	}	

	public static function GetExibir($arq, $dados = array()){
		// $path = $_SERVER['SCRIPT_FILENAME'];
		// $path_parts = pathinfo($path);
		// $c = $path_parts['dirname'];

		
		$c = ($GLOBALS['$urlraiz'] . 'app/system/Views/');

		//include_once('..' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'system.php');
		if(!is_null($arq) || !isset($arq)){
			include_once($c . $arq . '.php');
		}
	}

	public function erro(){
		echo "Erro, acesso negado";
	}
}
