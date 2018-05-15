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


//Inicia o slim

//Define a estrutura principal do sistema
$GLOBALS['$urlpadrao'] = 'http://localhost/framework/public/';
$GLOBALS['$urlImg'] = 'http://localhost/framework/img/';
$GLOBALS['$urlraiz'] = 'C:/xampp/htdocs/framework/';


$app = new \Slim\App();


/*
** Inicio da configuração das rotas
*/

//Site
$app->get('/', App\site\Controllers\SiteController::class. ':home');						//Home site
$app->get('/sobre', App\site\Controllers\SiteController::class. ':sobre');					//Página sobre




$app->get('/painel', App\system\Controllers\PainelController::class. ':Home');	//Painel inicial do sistema


/*
** Rotas para o objeto cidade 
** Bianca - 2018-04-07
*/

//CIDADES
$app->get('/painel/cidade', App\system\Controllers\CidadesController::class. ':GetInserir');
$app->post('/painel/cidade', App\system\Controllers\CidadesController::class. ':PostInserir');
$app->post('/painel/cep', App\system\Controllers\CepController::class. ':PostInserir');
$app->get('/painel/cep/delete/{codcep}', App\system\Controllers\CepController::class. ':DeleteCep');
$app->get('/painel/cidade/delete/{idcidade}', App\system\Controllers\CidadesController::class. ':DeleteCidade');

// PRODUTO
$app->post('/painel/produto', App\system\Controllers\ProdutoController::class. ':PostInserirProduto');
$app->post('/painel/produto/editar/{cod}', App\system\Controllers\ProdutoController::class. ':PostEditarProduto');
$app->get('/painel/produto/delete/{cod}', App\system\Controllers\ProdutoController::class. ':DeleteProduto');

//CATEGORIAS
$app->get('/painel/categorias', App\system\Controllers\CategoriaController::class. ':GetInserir');
$app->post('/painel/categorias', App\system\Controllers\CategoriaController::class. ':PostInserir');
$app->post('/painel/categorias/editar/{cod}', App\system\Controllers\CategoriaController::class. ':PostEditar');
$app->get('/painel/categorias/view/{cod}', App\system\Controllers\CategoriaController::class. ':ViewCategoria');
$app->get('/painel/categorias/delete/{codCat}', App\system\Controllers\CategoriaController::class. ':DeleteCategoria');


//USUARIO
$app->get('/painel/usuario', App\system\Controllers\UsuarioController::class. ':GetInserirUsuario');
$app->post('/painel/usuario', App\system\Controllers\UsuarioController::class. ':PostInserirUsuario');
$app->get('/painel/usuario/delete/{cod}', App\system\Controllers\UsuarioController::class. ':Delete');

//RESERVA
$app->get('/painel/reservas', App\system\Controllers\ReservaController::class. ':GetInserirReserva');
$app->post('/painel/reservas', App\system\Controllers\ReservaController::class. ':PostInserirReserva');
$app->get('/painel/reservas/delete/{codReserva}', App\system\Controllers\ReservaController::class. ':DeleteReserva');


// CLIENTES
$app->get('/painel/clientes', App\system\Controllers\ClientesController::class. ':GetInserir');
$app->post('/painel/clientes', App\system\Controllers\ClientesController::class. ':PostInserir');
$app->get('/painel/clientes/delete/{idcliente}', App\system\Controllers\ClientesController::class. ':DeleteCliente');

//Sistema
$app->get('/app/login', App\system\Controllers\LoginController::class . ':exibirLogin');
$app->post('/app/login', App\system\Controllers\LoginController::class . ':validarLogin');


$app->get('/app/logout', App\system\Controllers\LoginController::class . ':finalizarSessao');		


$app->run();