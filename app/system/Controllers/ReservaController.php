<?php
/**
 * Created by Lucas Gabriel.
 * User: LucasG
 * Date: 08/04/2018
 * Time: 20:21
 */

namespace App\system\Controllers;

use App\system\Models;


class ReservaController
{

	public function GetInserirReserva($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);

	
		$res = new \App\system\Models\Reserva();
		$reserv = $res->select();

		PainelController::GetExibir('paginaReserva', $reserv);
	}


		public function PostInserirReserva($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);


		$codReserva = $_POST['codReserva'];
		$cpfCliente= $_POST['cpfCliente'];
		$codMesa = $_POST['codMesa'];
		$dataReserva = $_POST['dataReserva'];
		$hora = $_POST['hora'];
		$estado = $_POST['estado'];

		$dados = array($codReserva, $cpfCliente, $codMesa, $dataReserva, $hora, $estado);

		$res = new \App\system\Models\Reserva($dados);
		$result = $res->inserirReserva();

		// \Core\Request::newR('GET', 'http://localhost/SGRS-FatecOurinhos/public/painel/cidade');
		header("Location: " . $GLOBALS['$urlpadrao'] . "Reserva");

	}

	public function DeleteReserva($request, $response, $args){

		$cat = new \App\system\Models\Reserva();
		$result = $res->excluir($args['codReserva']);
		header("Location: " . $GLOBALS['$urlpadrao'] . "Reserva");

	}
}