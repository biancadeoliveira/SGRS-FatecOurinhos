<?php

/*
** Author: Bianca de Oliveira
** Date: 2018-03-18
**
** Define as rotas do sistema, indicando os controllers e métodos responsáveis por ela.
*/

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//Inicia o autoload automatico das classes
require '..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

// require '..'.DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR.'bootstrap.php';



//Inicia o slim

//Define a estrutura principal do sistema
$GLOBALS['$urlpadrao'] = 'http://localhost/framework/public/';
$GLOBALS['mensagem'] = "aa";

$app = new \Slim\App();


/*
** Inicio da configuração das rotas
*/

//Site
$app->get('/', App\site\Controllers\SiteController::class. ':home');						//Home site
$app->get('/sobre', App\site\Controllers\SiteController::class. ':sobre');					//Página sobre
// $app->get('/contato', App\site\Controllers\SiteController::class. ':contato');				//Página contato
// $app->get('/cardapio', App\site\Controllers\SiteController::class. ':cardapio');			//Página cardapio
// $app->get('/cardapio/{item}', App\site\Controllers\SiteController::class. ':cardapioItem');	//Página item do cardapio




$app->get('/painel', App\system\Controllers\PainelController::class. ':Home');	//Painel inicial do sistema


/*
** Rotas para o objeto cidade 
** Bianca - 2018-04-07
*/

//CIDADES
$app->get('/painel/cidade', App\system\Controllers\CidadesController::class. ':GetInserir')->setName('cidade');;	//Página teste banco
$app->post('/painel/cidade', App\system\Controllers\CidadesController::class. ':PostInserir');	//Página teste banco
$app->get('/painel/cidade/delete/{idcidade}', App\system\Controllers\CidadesController::class. ':DeleteCidade'); //Página teste banco


// PRODUTO
$app->post('/painel/produto', App\system\Controllers\ProdutoController::class. ':PostInserirProduto');	//Página teste banco


// $app->get('/painel/cidade/:idcidade', App\system\Controllers\CidadesController::class. ':GetExibir');	//Página teste banco
// $app->post('/painel/cidade/:idcidade', App\system\Controllers\CidadesController::class. ':PostUpdate');	//Página teste banco

//CATEGORIAS
$app->get('/painel/categorias', App\system\Controllers\CategoriaController::class. ':GetInserir');
$app->post('/painel/categorias', App\system\Controllers\CategoriaController::class. ':PostInserir');
$app->get('/painel/categorias/delete/{codCat}', App\system\Controllers\CategoriaController::class. ':DeleteCategoria');


//RESERVA

$app->get('/reservas', App\system\Controllers\ReservaController::class. ':GetInserirReserva');
$app->post('/reservas', App\system\Controllers\ReservaController::class. ':PostInserirReserva');
$app->get('/painel/Reserva/delete/{codReserva}', App\system\Controllers\ReservaController::class. ':DeleteReserva');


//USUARIO
$app->get('/painel/usuario', App\system\Controllers\UsuarioController::class. ':GetInserirUsuario');	//Página teste banco
$app->post('painel/usuario', App\system\Controllers\UsuarioController::class. ':PostInserirUsuario');	//Página teste banco


// CLIENTES
$app->get('/painel/clientes', App\system\Controllers\ClientesController::class. ':GetInserir');	//
$app->post('/painel/clientes', App\system\Controllers\ClientesController::class. ':PostInserir');	//

//Sistema
$app->get('/app/login', App\system\Controllers\LoginController::class . ':exibirLogin');		//Página de login
$app->post('/app/login', App\system\Controllers\LoginController::class . ':validarLogin');		//Validação de login


$app->get('/app/logout', App\system\Controllers\LoginController::class . ':finalizarSessao');		


$app->run();