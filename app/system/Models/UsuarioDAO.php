<?php

/*
** Author: Lucas Gabriel
** Author: Bianca de Oliveira
** Date: 2018-03-30
**
** Classe Usuário DAO
*/

namespace App\system\Models;

use App;


class UsuarioDAO
{	

	public function insert($data){

		$a = 'INSERT INTO usuario (cpf, nome, senha, dataNasc, rg, telefone, email, funcao, estado, cep, numero, complemento) VALUES (:CPF, :NOME, :SENHA, :DATANASC, :RG, :TELEFONE, :EMAIL, :FUNCAO, :ESTADO, :CEP, :NUMERO, :COMPLEMENTO)';
		
		$var = array(
			':CPF' => $data[0],
			':NOME' => $data[1],
			':SENHA' =>  $data[2],
			':DATANASC' => $data[3],
			':RG' => $data[4],
			':TELEFONE' => $data[5],
			':EMAIL' => $data[6],
			':FUNCAO' => $data[7],
			':ESTADO' => $data[8],
			':CEP' => $data[9],
			':NUMERO' => $data[10],
			':COMPLEMENTO' => $data[11],		
		);

		$result = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
	}

	public function update($data, $cod){

		$a = 'UPDATE usuario SET cpf = :CPF, nome = :NOME, senha = :SENHA, dataNasc = :DATANASC, rg = :RG, telefone = :TELEFONE, email = :EMAIL, funcao = :FUNCAO, estado = :ESTADO, cep = :CEP, numero = :NUMERO, complemento = :COMPLEMENTO WHERE cpf = :COD;';
		
		$var = array(
			':CPF' => $data[0],
			':NOME' => $data[1],
			':SENHA' =>  $data[2],
			':DATANASC' => $data[3],
			':RG' => $data[4],
			':TELEFONE' => $data[5],
			':EMAIL' => $data[6],
			':FUNCAO' => $data[7],
			':ESTADO' => $data[8],
			':CEP' => $data[9],
			':NUMERO' => $data[10],
			':COMPLEMENTO' => $data[11],
			':COD' => $cod
		);

		$result = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);

		echo "$result";
	}


	public function buscarUsuarioCPF($cpf){

		$a = 'SELECT cpf, nome, senha, funcao FROM usuario WHERE cpf = :CPF';

		$var = array(
			':CPF' => $cpf
		);

		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect', $var);

		return $result;

	}

	public function selecionarUsuarioCPF($cpf){

		$a = 'SELECT * FROM usuario WHERE cpf = :CPF';

		$var = array(
			':CPF' => $cpf
		);

		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect', $var);

		return $result;

	}
	
	public function delete($id){

            $a = 'DELETE FROM usuario where cpf = :CPF';

            $var = array(
                ':CPF' => $id
            );

            $r = App\system\Helpers\SqlHelper::executar($a, 'executarQuery', $var);
            return $r;
        }

	public function buscar(){

		$a = 'SELECT * FROM usuario';

		$result = App\system\Helpers\SqlHelper::executar($a, 'executarSelect');

		return $result;

	}

}