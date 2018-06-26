<?php

/*
** Author: Lucas Gabriel
** Author: Bianca de Oliveira
** Date: 2018-03-30
**
** Controller do objeto Usuário
*/

namespace App\system\Controllers;

use App\system\Models;

class UsuarioController

{

	//Rota: painel/usuarios
	//Lista os usuários cadastrados no sistema
	public function GetUsuarios(){

			\App\system\Models\Validacao::validarLogin(1);

			$usuario = new \App\system\Models\Usuario();
			$usuarios = $usuario->select();

			PainelController::AbrirContent('Usuários Cadastrados');
			PainelController::GetExibir('tableUsuarios', $usuarios);
			PainelController::FecharContent();

	}

	//Rota: /painel/usuario/add
	//Exibe formulário para inclusão de um novo usuário
	public function GetInserirUsuario(){

			\App\system\Models\Validacao::validarLogin(1);

			PainelController::AbrirContent('Adicionar usuário');
			PainelController::GetExibir('formUsuario');
			PainelController::FecharContent();
	}


	//Rota: /painel/usuario/add
	//Insere os dados enviados atraves do formulário
	public function PostInserirUsuario(){

		\App\system\Models\Validacao::validarLogin(1);


			$cpf = $_POST['cpf'];
			$nome = $_POST['nome'];
			$senha = $_POST['senha'];
			$dataNasc = $_POST['dataNasc'];
			$rg = $_POST['rg'];
			$telefone = $_POST['telefone'];
			$email = $_POST['email'];
			$funcao = $_POST['funcao'];
			$estado = $_POST['estado'];
			$cep = $_POST['cep'];
			$numero = $_POST['numero'];
			$complemento = $_POST['complemento'];

			$dados = array($cpf, $nome, $senha, $dataNasc, $rg, $telefone, $email, $funcao, $estado, $cep, $numero, $complemento);

			$usuario = new \App\system\Models\Usuario($dados);

			$usuario->inserirUsuario();

			header('Location: ' . $GLOBALS['$urlpadrao'] . 'painel/usuario');
	}

	public function GetEditarUsuario($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);
		$usuario = new \App\system\Models\Usuario();
		$user = $usuario->selectCPF($args['cpf']);

		$dados = array(
				'Usuario' => $user
		);

		PainelController::AbrirContent('Editar: ' . $user[0]['nome']);
		PainelController::GetExibir('formEditarUsuario', $dados);
		PainelController::FecharContent();	

	}

	//Rota: /painel/usuario/editar/{cpf}
	//Edita os dados de um usuário
	public function PostEditarUsuario($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);


			$cpf = $_POST['cpf'];
			$nome = $_POST['nome'];
			$senha = $_POST['senha'];
			$dataNasc = $_POST['dataNasc'];
			$rg = $_POST['rg'];
			$telefone = $_POST['telefone'];
			$email = $_POST['email'];
			$funcao = $_POST['funcao'];
			$estado = $_POST['estado'];
			$cep = $_POST['cep'];
			$numero = $_POST['numero'];
			$complemento = $_POST['complemento'];

			$dados = array($cpf, $nome, $senha, $dataNasc, $rg, $telefone, $email, $funcao, $estado, $cep, $numero, $complemento);

			$usuario = new \App\system\Models\Usuario($dados);

			$usuario->editarUsuario($dados, $args["cpf"]);

			header('Location: ' . $GLOBALS['$urlpadrao'] . 'painel/usuario/editar/' . $args["cpf"]);
	}	

	//Rota: /painel/usuario/delete/{cod}
	//Exclui um usuário do sistema
	public function Delete($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);

		//Instancia a classe model CEP, responsável pelas regras para manter o objeto cep
		$usuario = new \App\system\Models\Usuario($dados);

		//Recebe o resultado da exclusão
		$usuario->delete($args['cod']);

		//Retorna para a página de cadastro de cep
		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/usuario");

	}

}