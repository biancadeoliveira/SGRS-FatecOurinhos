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

	
		$cli = new \App\system\Models\Clientes();
		$clientes = $cli->select();

		$mes = new \App\system\Models\Mesa();
		$mesas = $mes->select();

        $dados = array(
            'Clientes' => $clientes,
            'Mesas'=> $mesas
        );

		PainelController::AbrirContent('Reservas');
		PainelController::GetExibir('formReserva', $dados);
		PainelController::FecharContent();
	}


		public function PostInserirReserva($request, $response, $args){

		\App\system\Models\Validacao::validarLogin(1);


		$codReserva = '';
		$cpfCliente= $_POST['cpfCliente'];
		$codMesa = $_POST['codMesa'];
		$dataReserva = $_POST['dataReserva'];
		$hora = $_POST['hora'];
		$estado = $_POST['estado'];

		$dados = array($codReserva, $cpfCliente, $codMesa, $dataReserva, $hora, $estado);

		$res = new \App\system\Models\Reserva($dados);
		$result = $res->inserir();

		// \Core\Request::newR('GET', 'http://localhost/SGRS-FatecOurinhos/public/painel/cidade');
		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/reservas");

	}

	public function DeleteReserva($request, $response, $args){

		$res = new \App\system\Models\Reserva();
		$result = $res->excluir($args['codReserva']);
		header("Location: " . $GLOBALS['$urlpadrao'] . "painel/reservas");

	}

	public function GetReserva($request, $response, $args){


        \App\system\Models\Validacao::validarLogin(1);

        $reserv = new \App\system\Models\Reserva();
        $reservs = $reserv->select();

        $dados = array(
            'Reservas' => $reservs
        );

		PainelController::AbrirContent('Reservas');
		PainelController::GetExibir('tableReservas', $dados);
		PainelController::FecharContent();

	}
}