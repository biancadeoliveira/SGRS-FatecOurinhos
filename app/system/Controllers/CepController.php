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

	public function GetCeps($request, $response, $args){

		$cep = new \App\system\Models\CEP();
		$c = $cep->selectCodPostal(2); //O parametro 2 indica que a seleção deverá retornar todos as informações do cep cadastrado

		

		PainelController::AbrirContent('CEPS');
		PainelController::GetExibir('tableCeps', $c);
		PainelController::FecharContent();

		//PainelController::GetExibir('formCep', $c);


	}

	public function GetInserir(){

			\App\system\Models\Validacao::validarLogin(1);

			$cid = new \App\system\Models\Cidades();
			$cids = $cid->select();

			PainelController::AbrirContent('Adicionar usuário');
			PainelController::GetExibir('formCep', $cids);
			PainelController::FecharContent();

}


public function GetEditarEndereco($request, $response, $args){
        \App\system\Models\Validacao::validarLogin(1);

        $cep = new \App\system\Models\CEP();
        $ceps = $cep->selectCEP($args['cod']);


        var_dump('$ceps');
        $cid = new \App\system\Models\Cidades();
        $cids = $cid ->select();
        $dados = array(
        	'CIDADES' => $cids,
            'CEP' => $ceps
            
        );

        PainelController::AbrirContent('Editar Endereço');
        PainelController::GetExibir('formEditarEndereco', $dados);
        PainelController::FecharContent();
    }



		public function PostEditarEndereco($request, $response, $args){

        \App\system\Models\Validacao::validarLogin(1);

        $cep = $_POST['cep'];
        $codCidade = $_POST['codCidade'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        

        $dados = array($cep, $codCidade, $rua, $bairro);

        $end = new \App\system\Models\CEP();
        $result = $end->editar($dados, $args['cod']);


        header("Location: " . $GLOBALS['$urlpadrao'] . "painel/enderecos/editar/". $args['cod'] ."?status=1");

    }

	

	public function PostInserir(){

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
		//header("Location: " . $GLOBALS['$urlpadrao'] . "painel/cidade");

		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/endereco/add");

	}

	public function Delete($request, $response, $args){
		
		//Instancia a classe model CEP, responsável pelas regras para manter o objeto cep
		$cep = new \App\system\Models\CEP();

		//Recebe o resultado da exclusão
		$result = $cep->excluir($args['cod']);

		//Retorna para a página de cadastro de cep
	
		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/enderecos");

	}
	
}