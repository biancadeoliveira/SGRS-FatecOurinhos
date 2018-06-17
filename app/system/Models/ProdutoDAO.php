<?php
/**
 * Created by Lucas Gabriel.
 * User: LucasG
 * Date: 08/04/2018
 * Time: 19:53
 */

namespace App\system\Models;

use App\system\Models;

use App;

    class ProdutoDAO
    {
        public function insert($data){


            $a = 'INSERT INTO produto (codProduto, codCategoria, numProduto, nome, descricao, preco) VALUES (:CODPRODUTO, :CODCATEGORIA, :NUMPRODUTO, :NOME, :DESCRICAO, :PRECO)';

            $var = array(
                ':CODPRODUTO' => $data[0],
                ':CODCATEGORIA' => $data[1],
                ':NUMPRODUTO' =>  $data[2],
                ':NOME' => $data[3],
                ':DESCRICAO' => $data[4],
                ':PRECO' => $data[5],
            );

            $this->executar($a, 'executarQuery', $var);
        }

        public function search($data)
        {

            $a = 'SELECT codProduto, nome FROM produto WHERE codCategoria = :CODCATEGORIA';

            $var = array(
                ':CODCATEGORIA' => $data[0]
            );
            $this->executar($a, 'executarSelect', $var);
        }

        public function listarProduto(){

            $a = 'SELECT * FROM produto';

            $result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect');  
            return $result;
        }

        public function selectByCat($id){
            
            $a = 'SELECT *  FROM produto WHERE codCategoria = :CODCATEGORIA;';

             $var = array(
                ':CODCATEGORIA' => $id
            );

            $result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect', $var);  
            
            return $result;

        }

        public function selectByCod($id){
            
            $a = 'SELECT *  FROM produto WHERE codProduto = :CODPRODUTO;';

             $var = array(
                ':CODPRODUTO' => $id
            );

            $result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect', $var);  
            
            return $result;

        }

        public function countByCat($id){
            
            $a = 'SELECT COUNT(*) as "Quantidade de Pedidos"  FROM produto WHERE codCategoria = :CODCATEGORIA;';

             $var = array(
                ':CODCATEGORIA' => $id
            );

            $result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect');  
            
            return $result;

        }


        public function deleteProduto($id){

            $a = 'DELETE FROM produto where codProduto = :ID';

            $var = array(
                ':ID' => $id
            );

            $r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
            return $r;
        }


        public function update($data, $id){

        $a = 'UPDATE produto SET codCategoria = :CODCATEGORIA, numProduto = :NUMPRODUTO, nome = :NOME, descricao = :DESCRICAO, preco = :PRECO  WHERE codProduto = :ID;';
        
        $var = array(
            ':CODCATEGORIA' => $data[0],
            ':NUMPRODUTO' => $data[1],
            ':NOME' => $data[2],
            ':DESCRICAO' => $data[3],
            ':PRECO' => $data[4],
            ':ID' => $id
        );

        var_dump($var);

        // $this->executar($a, 'executarQuery', $var);
        $r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
    }



        public function select(){

            $a = "SELECT p.codProduto, c.nome as nomeCat, p.numProduto, p.nome, p.descricao, p.preco FROM produto AS p inner join categoria AS c where p.codCategoria = c.codCategoria ORDER BY p.codCategoria, p.numProduto;";

            $result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect');  

            return $result;
        }



        private function executar($a, $func, $var = array()){

            $db = new App\Sql();

            if(!empty($var) && !is_null($var)){
                $result = $db->$func($a, $var);
            } else{
                $result = $db->$func($a);
            }

            return $result;

        }
    }//Fim da Classe