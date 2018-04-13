<?php

/**
* 
*/

namespace App\system\Helpers;

use App;

class SqlHelper
{
	
	//Executa uma função no banco de dados
	public static function executar($a, $func, $var = array()){

		$db = new App\Sql();

		if(!empty($var) && !is_null($var)){
			$result = $db->$func($a, $var);
		} else{
			$result = $db->$func($a);
		}

		return $result;

	}
}