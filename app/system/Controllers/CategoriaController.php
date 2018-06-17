<?php 

/**
** Author: Bianca de Oliveira
** Date: 2018-04-14
**
** Controller do objeto Categoria
*/

namespace App\system\Controllers;

use App\system\Models;

class CategoriaController
{

	public function GetCategoria($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);

	
		$cat = new \App\system\Models\Categoria();
		$cats = $cat->select();

		$dados = array(
			'Categorias' => $cats,
		);

		PainelController::AbrirContent('Categorias Cadastrados');
		PainelController::GetExibir('tableCategorias', $dados);
		PainelController::FecharContent();
		//PainelController::GetExibir('paginaProdutos', $dados);
	}

	public function GetInserirCategoria(){

			\App\system\Models\Validacao::validarLogin(1);

			PainelController::AbrirContent('Adicionar categoria');
			PainelController::GetExibir('formCategoria');
			PainelController::FecharContent();
	}

	public function PostInserirCategoria($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);


		$codCategoria = $_POST['codCategoria'];
		$nome = $_POST['nome'];
		$departamento = $_POST['departamento'];

		//$dados = array('22', 'Porções', 'Cozinha');

		$dados = array($codCategoria, $nome, $departamento);
		
		$cat = new \App\system\Models\Categoria($dados);
		$result = $cat->inserir();

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/categorias");

	}


	public function PostEditar($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(2);

		$codCategoria = $_POST['codCategoria'];
		$nome = $_POST['nome'];
		$departamento = $_POST['departamento'];

		$dados = array($codCategoria, $nome, $departamento);

		$cat = new \App\system\Models\Categoria($dados);
		$result = $cat->editar($args['cod']);

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/categorias");

	}

	public function ViewCategoria($request, $response, $args){

		$cat = new \App\system\Models\Categoria();
		$cats = $cat->visualizar($args['cod']);

		$prod = new \App\system\Models\Produto();
		$prods = $prod->selectProdutoByCat($args['cod']);

		$dados = array(
			'Categoria' => $cats,
			'Produtos' => $prods,
		);

		PainelController::GetExibir('singleCategoria', $dados);

	}

	public function DeleteCategoria($request, $response, $args){

		$cat = new \App\system\Models\Categoria();
		$result = $cat->excluir($args['codCat']);
		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/categorias");

	}
	
	
}