<?php 

/**
** Author: Bianca de Oliveira
** Date: 2018-04-18
**
** Classe endereço
*/

namespace App\system\Models;

use App\system\Models;


class CEP
{

	private $cep;
	private $codCidade;
	private $rua;
	private $bairro;

	//Campos null é um vetor onde é informado quais campos podem ser nulos e quais não podem, 1 = não nulo, 0 = nulo.
	public $camposNull = array(
		'1', '1', '1', '1'
	);
	
	//Método contrutor, ele pode receber um array como parametro.
	public function __construct($dados = array()){
		
		//Se for passado um array, deve-se armazenar os valores dos atributos, isso será feito atraves da função set dados. ** É importante que a ordem das informações no array seja: Codigo da cidade, cep, rua e bairro.
		if(!empty($dados) && !is_null($dados)){
			$this->setDados($dados);
		}

	}


	//Get's e Set's
	public function setCEP($dado){
		$this->cep = $dado;
	}
	public function getCEP(){
		return $this->cep;
	}

	public function setCodCidade($dado){
		$this->codCidade = $dado;
	}
	public function getCodCidade(){
		return $this->codCidade;
	}

	public function setRua($dado){
		$this->rua = $dado;
	}
	public function getRua(){
		return $this->rua;
	}

	public function setBairro($dado){
		$this->bairro = $dado;
	}
	public function getBairro(){
		return $this->bairro;
	}

	public function getDadosNull(){
		return $this->camposNull;
	}


	//Recebe um array com todas as informações e armazena cada uma em sua respectiva variavel
	private function setDados($dados){
		$this->setCodCidade($dados[0]);
		$this->setCEP($dados[1]);
		$this->setRua($dados[2]);
		$this->setBairro($dados[3]);
	}

	//Insere todos as informações armazenadas em um array e retorna esse array.
	private function getDados(){
		$dados = array(
			$this->getCEP(),
			$this->getCodCidade(),
			$this->getRua(),
			$this->getBairro()
		);

		return $dados;
	}

	//Trata as informações e se elas respeitarem as regras, são enviadas para CepDAO que vai inserir no banco de dados.
	public function inserir(){

		$dados = $this->getDados();
		$cn = $this->getDadosNull();

		$r = Validacao::verificarNullGeral($cn, $dados);

		if ($r == true) {
		 	return ("Erro! Existem valores em branco");
		} else {
		 	$dao = new \App\system\Models\CepDAO();
		 	return $dao->insert($dados);
		}
	}

	//Recebe como parametro um valor que indica qual o tipo de select que devera ser efetuado.
	public function selectCodPostal($a){

		 	$dao = new \App\system\Models\CepDAO();

		 	if ($a == 1) {
		 		return $dao->selectCodPostal();
		 	} else if ($a == 2){
		 		return $dao->selectAll();
		 	}
	}

	public function selectCEP($ID){
		$dao = new \App\system\Models\CepDAO();

		return $dao->SelectCEP($ID);
	}

	//Recebe o cep a ser excluido e passa a informação para CepDAO ue será responsável por realmente excluir.
	public function excluir($cod){
		 	$dao = new \App\system\Models\CepDAO();
		 	return $dao->excluir($cod);
	}

	
public function editar($dados, $id){


		
		$cn = $this->getDadosNull();
		
		$r = Validacao::verificarNullGeral($cn, $dados);

		if ($r == true) {
		 	return ("Erro! Existem valores em branco");
		 	// echo("Erro! Existem valores em branco");
		} else {
		 	$dao = new \App\system\Models\CepDAO();
		 	return $dao->update($dados, $id);
		}
	




	}

}