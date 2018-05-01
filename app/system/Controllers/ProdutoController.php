<?php
/**
 * Created by Lucas Gabriel.
 * User: LucasG
 * Date: 08/04/2018
 * Time: 20:21
 */

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

    }



}//Fim da classe