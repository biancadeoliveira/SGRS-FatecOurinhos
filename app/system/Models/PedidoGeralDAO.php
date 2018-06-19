<?php

/*

** Author: Lucas Gabriel
** Date: 2018-05-23
**
** Classe PedidoGeral
*/

namespace App\system\Models;

use App;
use Helpers;

class PedidoGeralDAO
{	

//Método para inserir uma nova cidade
	public function insert($data){


		$a = 'INSERT INTO pedidogeral (cod, codEndereco, codMesa, estado) VALUES (:COD, :CODENRECO,:CODMESA, :ESTADO)';
		
		$var = array(
			':COD' => $data[0],
			':CODENRECO' => $data[1],
			':CODMESA' =>  $data[2],
			':ESTADO'=> $data[3]
			);

		// $this->executar($a, 'executarQuery', $var);
		$r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
	}

		public function search($data){

		$a = 'SELECT cod FROM pedidogeral WHERE cod = :COD';
		
		$var = array(
			':COD' => $data[0]
		);

		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect', $var);
	}

	   public function update($data, $id){

        $a = 'UPDATE pedidogeral SET estado = :ESTADO  WHERE cod = :COD;';
        
        $var = array(
            ':ESTADO' => $data[3],
            ':COD' => $id
        );

        // $this->executar($a, 'executarQuery', $var);
        $r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
    }


        public function deletePbgeral($id){

            $a = 'DELETE FROM pedidogeral where cod = :ID';

            $var = array(
                ':ID' => $id
            );

            $r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
            return $r;
        }


}//FIM