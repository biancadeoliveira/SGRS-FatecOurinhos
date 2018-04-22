<?php

/*
** Author: Bianca de Oliveira
** Date: 2018-04-18
**
** Controller do objeto cep
*/

namespace App\system\Controllers;

use App\system\Models;

class CepController
{

	public function GetInserir($request, $response, $args){

		$cep = new \App\system\Models\CEP();
		$c = $cep->select(2); //O parametro 2 indica que a seleção deverá retornar todos as informações do cep cadastrado

		echo ("<form method='POST' id='form' action='" . $GLOBALS['$urlpadrao'] . "painel/cep'>
			
			<table>
				<tr>
					<td><label>Codigo Postal</label></td>
					<td><label>Cep</label></td>
					<td><label>Rua</label></td>
					<td><label>Bairro</label></td>
					<td rowspan='2'><input type='submit' value='Inserir' style='height: 100%;');'></td>			
				</tr>
				<tr>
					<td><input type='number' name='codPostal'></td>
					<td><input type='number' name='cep'></td>
					<td><input type='text' name='rua'></td>
					<td><input type='text' name='bairro'></td>
				</tr>
			</table>

		</form>");

		//PainelController::GetExibir('formCep', $c);


	}

	public function PostInserir($request, $response, $args){

		//Recebe os dados passados pelo formulário de cadastro
		$codPostal = $_POST['codPostal'];
		$cep = $_POST['cep'];
		$rua = $_POST['rua'];
		$bairro = $_POST['bairro'];

		//Insere os dados em um array para enviar para a classe model do objeto
		$dados = array($codPostal, $cep, $rua, $bairro);

		//Instancia a classe model do objeto passando as informações para inclusão
		$cep = new \App\system\Models\CEP($dados);

		//Executa o método responsável por dar inicio a inclusão no banco de dados
		$result = $cep->inserir();

		//Retorna para a página de cadastro de cep
		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/cep");

	}

	public function DeleteCep($request, $response, $args){

		//Instancia a classe model CEP, responsável pelas regras para manter o objeto cep
		$cep = new \App\system\Models\CEP();

		//Recebe o resultado da exclusão
		$result = $cep->excluir($args['codcep']);

		//Retorna para a página de cadastro de cep
		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/cep");

	}
	
}