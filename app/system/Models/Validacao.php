<?php

/* Classe com métodos de validação 
** Author: Bianca de Oliveira
** 		   Lucas Gabriel
** Date: 2018-04-07
*/

namespace App\system\Models;

use App\system\Models;

class Validacao
{
	
	/* Função para verificar se o campo obrigatório é null
	** Recebe como entrada dois arrays, um contendo as sequencia de 0 e 1 para identificar se o campo pode ser null (0) ou não (1).
	*/
	public static function verificarNullGeral($camposNull, $dados){

		//Percorre o array camposNull
		foreach ($camposNull as $key => $value) {
			
			//Para cada chave, verifica se o valor é 1 ou 0, caso seja 1 significa que o campo é obrigatório, portanto deve ser validado.
			if($value == '1'){

				//Verifica no array de dados, se o valor da chave corresponte é nula, vazia ou em branco, se qualquer uma dessas verificações for verdadeira, retornamos TRUE, ou seja, existe um campo obrigatório que não foi preenchido.
				if(is_null($dados[$key]) || empty($dados[$key]) || $dados[$key] == ""){
						return true;
		 		}
			}
		}

		//Nenhum campo obrigatório estava vazio, portanto, retorna false.
		return false;

	}	


	//Recebe o nivel de acesso da classe, e compara com o nivel de acesso do usuário.
	public static function validarLogin($nivel){
		$login = new \App\system\Models\Login();
		$r = $login->validarLogin($nivel);

		if ($r == 1) {
			header("Location: " . $GLOBALS['$urlpadrao'] . "app/login?status=2");
		} else if($r == 2){
			header("Location: " . $GLOBALS['$urlpadrao'] . "erro");
		}
	}


	/*
	** Author: Lucas de Abreu Mendonça e Gabriel Ribeiro
	** Date: 2018-04-25
	**
	** Validação CPF
	*/

	public static function validar_cpf($cpf) {

		$cpf = preg_replace('/[^0-9]/', '', (string) $cpf);
		// Valida tamanho
		if (strlen($cpf) != 11)
			return false;
		// Calcula e confere primeiro dígito verificador
		for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
			$soma += $cpf{$i} * $j;
		$resto = $soma % 11;
		if ($cpf{9} != ($resto < 2 ? 0 : 11 - $resto))
			return false;
		// Calcula e confere segundo dígito verificador
		for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--)
			$soma += $cpf{$i} * $j;
		$resto = $soma % 11;
		return $cpf{10} == ($resto < 2 ? 0 : 11 - $resto);
	}

}