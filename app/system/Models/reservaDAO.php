<?php 
/*
** Author: Lucas Granado
** Date: 2018-04-14
**
**Classe ReservaDAO
** Implementa o método de insersão, busca e desabilitação de objetos da classe reserva
*/

namespace App\system\Models;
use App;
class reservaDAO
{
		//Método para insersão de uma nova reserva.
		public function insert($data){
		
			$query = 'INSERT INTO reserva (codReserva, cpfCliente, codMesa, dataReserva, hora, estado) VALUES (:CODRESERVA, :CPFCLIENTE, :CODMESA, :DATARESERVA, :HORA, :ESTADO)';

			$var = array(
				':CODRESERVA' => $data[0],
				':CPFCLIENTE' => $data[1], 
				':CODMESA' => $data[2], 
				':DATARESERVA' => $data[3], 
				':HORA' => $data[4], 
				':ESTADO' => $data[5]
			);
			
		
		$r = App\system\Helpers\SqlHelper::executar($query, 'executarQuery', $var);

}		

		//Método de exclusão de uma reserva
		public function delete($cod){
		$query = 'DELETE FROM reserva WHERE codReserva =:CODRESERVA';
		$var = array(
			':CODRESERVA' => $cod
		);
		$r = App\system\Helpers\SqlHelper::executar($query, 'executarQuery', $var);	
	}	
	
	
		//Método para buscar as reservas de uma mesa
		public function search(){
		$query = 'SELECT * FROM reserva ORDER BY codMesa';	
		$r = App\system\Helpers\SqlHelper::executar($query, 'executarSelect');	
		return $r;
	}
	
		//Método para buscar as reservas cadastradas pelo codigo da reserva
		public function searchBycodReserva($dado){
		$query = 'SELECT * FROM reserva ORDER BY codReserva WHERE codReserva= :CODRESERVA';	
		$var = array(
			':CODRESERVA' => $dado
		);
		$r = App\system\Helpers\SqlHelper::executar($query, 'executarSelect', $var);	
		return $r;
		
	}
			//Método para buscar as reservas cadastradas pelo cpf do cliente
		public function searchBycodClientes($dado){
		$query = 'SELECT * FROM reserva ORDER BY cpfCliente WHERE codReserva= :CPFCLIENTE';	
		$var = array(
			':CPFCLIENTE' => $dado
		);
		$r = App\system\Helpers\SqlHelper::executar($query, 'executarSelect', $var);	
		return $r;
		
	}
	
			//Método para buscar as reservas cadastradas pela data
		public function searchBydataReserva($dado){
		$query = 'SELECT * FROM reserva ORDER BY dataReserva WHERE dataReserva= :DATARESERVA';	
		$var = array(
			':DATARESERVA' => $dado
		);
		$r = App\system\Helpers\SqlHelper::executar($query, 'executarSelect', $var);	
		return $r;
		
	}	
	
			//Método para buscar as reservas cadastradas pelo horario
		public function searchByhora($dado){
		$query = 'SELECT * FROM reserva ORDER BY hora WHERE hora= :HORA';	
		$var = array(
			':HORA' => $dado
		);
		$r = App\system\Helpers\SqlHelper::executar($query, 'executarSelect', $var);	
		return $r;
		
	}	

			//Método para buscar as reservas cadastradas pelo estado
		public function searchByestado($dado){
		$query = 'SELECT * FROM reserva ORDER BY estado WHERE estado= :ESTADO';	
		$var = array(
			':ESTADO' => $dado
		);
		$r = App\system\Helpers\SqlHelper::executar($query, 'executarSelect', $var);	
		return $r;
		
	}	
}