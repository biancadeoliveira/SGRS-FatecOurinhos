<?php


namespace App\system\Controllers;

use App\system\Models;

class ProdutoController
{
    
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

        header("Location: " . $GLOBALS['$urlpadrao'] . "painel/categorias");

    }


    public function deleteProduto($request, $response, $args){

        \App\system\Models\Validacao::validarLogin(2);

        $produto = new \App\system\Models\Produto();

        $result = $produto->deleteProduto($args['idproduto']);


          header("Location: " . $GLOBALS['$urlpadrao'] . "painel/categorias");   

    }

    public function PostEditarProduto($request, $response, $args){

        \App\system\Models\Validacao::validarLogin(2);

        $codCategoria = $_POST['codCategoria'];
        $numProduto = $_POST['numProduto'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];

        $dados = array($codCategoria, $numProduto, $nome, $descricao, $preco);

        $prod = new \App\system\Models\Produto($dados);
        $result = $prod->editar($args['cod']);

        header("Location: " . $GLOBALS['$urlpadrao'] . "painel/categorias");

    }



}//Fim da classe