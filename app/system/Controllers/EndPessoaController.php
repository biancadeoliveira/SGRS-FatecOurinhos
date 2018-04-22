<?php

/*
** Author: Lucas Gabriel
** Date: 2018-04-22
**
** Controller do objeto EndPessoa
*/

namespace App\system\Controllers;

use App\system\Models;


class EndPessoaController{

public function GetInserir($request, $response, $args){

		$endPessoa = new \App\system\Models\EndPessoa();
		$endPessoas = $endPessoa->select();

		echo('
			<form method="POST" action="http://localhost/sgrs/public/EndPessoa">
				
				<label>CEP</label>
				<input type="number" name="cep">
				
			    <br>
			    <label>CPF do Cliente</label>
				<input type "number" name="cpfCliente">
				<br>

				<label>Numero</label>
				<input type="number" name="numero">
				
				<br>

				<label>complemento</label>
				<input type="text" name="complemento">
				
				<br>

				<label>Estado</label>
				<select name="estado">
					<option value="1">Ativo</option>
					<option value="2">Inativo</option>
				</select>	
				
				<br>
				
				<br><label>Tipo</label>
				<input type="text" name="tipo">
				
				<br>

	            <input type="submit" value="Enviar">

			</form>');	}

	public function PostInserir($request, $response, $args){

		$cep = $_POST['cep'];
		$cpfCliente = $_POST['cpfCliente'];
		$numero = $_POST['numero'];
		$complemento = $_POST['complemento'];
		$estado = $_POST['estado'];
		$tipo = $_POST['tipo'];


		$dados = array($cep, $cpfCliente, $numero, $complemento, $estado, $tipo);

		$EndPessoa = new \App\system\Models\EndPessoa($dados);

		$result = $EndPessoa->inserir();

		

		echo('Inserido');

	}

	public function DeleteEndPessoa($request, $response, $args){

		$endPessoaDel = new \App\system\Models\EndPessoa();


		$result = $endPessoaDel->excluir($args['idendpessoa']);

		echo('Excluido');

		

	}

}//fim da classe