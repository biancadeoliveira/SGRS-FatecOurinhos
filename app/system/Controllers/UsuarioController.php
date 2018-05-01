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

public function GetInserirUsuario(){

		\App\system\Models\Validacao::validarLogin(1);


		$usuario = new \App\system\Models\Usuario();
		$usuarios = $usuario->select();

		PainelController::GetExibir('paginaUsuarios', $usuarios);

}


public function PostInserirUsuario(){

	\App\system\Models\Validacao::validarLogin(1);


		$cpf = $_POST['cpf'];
		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$dataNasc = $_POST['dataNasc'];
		$rg= $_POST['rg'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$funcao = $_POST['funcao'];
		$estado = $_POST['estado'];
		$cep = $_POST['cep'];
		$numero= $_POST['numero'];
		$complemento = $_POST['complemento'];

		$dados = array($cpf, $nome, $senha, $dataNasc, $rg, $telefone, $email, $funcao, $estado, $cep, $numero, $complemento);

		$usuario = new \App\system\Models\Usuario( $dados );

		$usuario->inserirUsuario();

	}

}