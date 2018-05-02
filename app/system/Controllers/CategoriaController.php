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

	public function GetInserir($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);

	
		$cat = new \App\system\Models\Categoria();
		$cats = $cat->select();

		$prod = new \App\system\Models\Produto();
		$prods = $prod->selectProduto();

		$dados = array(
			'Categorias' => $cats,
			'Produtos' => $prods
		);

		PainelController::GetExibir('paginaProdutos', $dados);
	}

	public function PostInserir($request, $response, $args){

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

	public function DeleteCategoria($request, $response, $args){

		$cat = new \App\system\Models\Categoria();
		$result = $cat->excluir($args['codCat']);
		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/categorias");

	}
	
	
}