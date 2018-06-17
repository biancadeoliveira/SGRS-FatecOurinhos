<?php


namespace App\system\Controllers;

use App\system\Models;

class ProdutoController
{

    //Rota: /painel/produtos
    //Exibe uma tabela com todos os produtos cadastrados no banco
    public function GetProdutos($request, $response, $args){

        \App\system\Models\Validacao::validarLogin(1);

        $prod = new \App\system\Models\Produto();
        $prods = $prod->selectProduto();

        $dados = array(
            'Produtos' => $prods
        );

        PainelController::AbrirContent('Produtos');
        PainelController::GetExibir('tableProdutos', $dados);
        PainelController::FecharContent();
    }
    
    //Rota: /painel/produto/add
    //Exibe formulário para inclusão de um novo produto
    public function GetInserirProduto(){

        \App\system\Models\Validacao::validarLogin(1);

        $cat = new \App\system\Models\Categoria();
        $cats = $cat->select();

        $dados = array(
            'Categorias' => $cats,
        );

        PainelController::AbrirContent('Novo produto');
        PainelController::GetExibir('formProdutos', $dados);
        PainelController::FecharContent();
    }

    //Rota: /painel/produto/add
    //Inclusão de um novo usuário no sistema
    public function PostInserirProduto(){

        $codProduto = $_POST['codProduto'];
        $codCategoria = $_POST['codCategoria'];
        $numProduto = $_POST['numProduto'];
        $nome = $_POST['nome'];
        $descricao= $_POST['descricao'];
        $preco = $_POST['preco'];


        $dados = array($codProduto, $codCategoria, $numProduto, $nome, $descricao, $preco);

        $produto = new \App\system\Models\Produto( $dados );

        $produto->inserirProduto();

        header("Location: " . $GLOBALS['$urlpadrao'] . "painel/produtos");

    }

    //Rota: /painel/produto/delete/{cod}
    //Exclui um produto do sistema
    public function deleteProduto($request, $response, $args){

        \App\system\Models\Validacao::validarLogin(2);

        $produto = new \App\system\Models\Produto();

        $result = $produto->deleteProduto($args['cod']);


        header("Location: " . $GLOBALS['$urlpadrao'] . "painel/produtos");   

    }

    public function PostEditarProduto($request, $response, $args){

        \App\system\Models\Validacao::validarLogin(2);

        $codCategoria = $_POST['codCategoria'];
        $numProduto = $_POST['numProduto'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];

        $dados = array($codCategoria, $numProduto, $nome, $descricao, $preco);

        $prod = new \App\system\Models\Produto();
        $result = $prod->editar($dados, $args['cod']);

        header("Location: " . $GLOBALS['$urlpadrao'] . "painel/produto/editar/". $args['cod'] ."?status=1");
    }

    public function GetEditarProduto($request, $response, $args){
        \App\system\Models\Validacao::validarLogin(1);

        $cat = new \App\system\Models\Categoria();
        $cats = $cat->select();

        $prod = new \App\system\Models\Produto();
        $prods = $prod->selectProdutoByCod($args['cod']);

        $dados = array(
            'Categorias' => $cats,
            'Produtos' => $prods
        );

        PainelController::AbrirContent('Editar ' . $prods[0]['nome'] );
        PainelController::GetExibir('formEditarProduto', $dados);
        PainelController::FecharContent();
    }



}//Fim da classe