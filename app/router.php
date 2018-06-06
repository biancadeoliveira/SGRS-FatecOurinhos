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


/*
****************************************************
** ENDEREÇOS (CEPS)
**
** Rotas para o menu de Endereços, engloba as cidades e ceps cadastrados no sistema.
****************************************************
*/

//Exibe uma página com uma tabela contendo todos os ceps cadastrados no sistema
$app->get('/painel/enderecos', App\system\Controllers\CepController::class. ':GetInserir');

//Exibe a página com o formulário para inserir um novo cep ao sistema
$app->get('/painel/endereco/add', App\system\Controllers\CepController::class. ':PostInserir');

//Rota que captura os dados enviados pelo formulário, a partir do método post e que é responsável por cadastra-lo no banco
$app->post('/painel/endereco/add', App\system\Controllers\CepController::class. ':PostInserir');

//Rota para exclusão de um endereço, o código do endereço é passado atraves da rota, o controler captura esse numero de identificação e executa os métodos responsáveis pela exclusão
$app->get('/painel/endereco/delete/{codcep}', App\system\Controllers\CepController::class. ':DeleteCep');


/*
****************************************************
** CIDADES
**
** Rotas para o menu de cidades
****************************************************
*/

//Exibe uma página com uma tabela contendo todos as cidades cadastrados no sistema
$app->get('/painel/cidades', App\system\Controllers\CidadesController::class. ':GetInserir');

//Exibe a página com o formulário para inserir uma nova cidade ao sistema
$app->get('/painel/cidade/add', App\system\Controllers\CidadesController::class. ':PostInserir');

//Rota que captura os dados enviados pelo formulário, a partir do método post e que executa os métodos responsáveis por cadastrar as cidades no banco
$app->post('/painel/cidade/add', App\system\Controllers\CidadesController::class. ':PostInserir');

//Rota para exclusão de uma cidade
$app->get('/painel/cidade/delete/{idcidade}', App\system\Controllers\CidadesController::class. ':DeleteCidade');



/*
****************************************************
** Produtos
**
** Rotas para o menu de produtos
****************************************************
*/

//Rota que lista todos os produtos cadastrados no banco
$app->get('/painel/produtos', App\system\Controllers\ProdutoController::class. ':GetProdutos');

//Rota que exibe a pagina com o formulário para inclusão de um novo produto
$app->get('/painel/produto/add', App\system\Controllers\ProdutoController::class. ':GetInserirProduto');

//Rota para inclusão de um produto, atraves do método post
$app->post('/painel/produto/add', App\system\Controllers\ProdutoController::class. ':PostInserirProduto');

//Rota para edição de um produto previamente cadastrado no sistema
$app->post('/painel/produto/editar/{cod}', App\system\Controllers\ProdutoController::class. ':PostEditarProduto');

//Rota para exclusão de um produto
$app->get('/painel/produto/delete/{cod}', App\system\Controllers\ProdutoController::class. ':DeleteProduto');


/*
****************************************************
** Categorias de produtos
**
** Rotas para o menu de produtos -> categorias
****************************************************
*/

//Rota que lista todas as categorias cadastradas no sistema
$app->get('/painel/categorias', App\system\Controllers\CategoriaController::class. ':GetInserir');

//Rota que exibe um formuário para inclusão de uma niva categoria no sistema
$app->get('/painel/categorias/add', App\system\Controllers\CategoriaController::class. ':GetInserir');

//Rota que recebe os dados enviados pelo formulario e cadastra a categoria no banco
$app->post('/painel/categoria/add', App\system\Controllers\CategoriaController::class. ':PostInserir');

//Rota para edição de uma categoria previamente cadastrada
$app->post('/painel/categoria/editar/{cod}', App\system\Controllers\CategoriaController::class. ':PostEditar');

//Rota para vizualizar as informações de uma categoria em especifico
$app->get('/painel/categoria/view/{cod}', App\system\Controllers\CategoriaController::class. ':ViewCategoria');

//Rota para excluir uma categoria
$app->get('/painel/categoria/delete/{codCat}', App\system\Controllers\CategoriaController::class. ':DeleteCategoria');


/*
****************************************************
** Usuários do sistema
**
** Rotas para o menu de usuários
****************************************************
*/

//Exibe todos os usuários cadastrados no sistema
$app->get('/painel/usuario', App\system\Controllers\UsuarioController::class. ':GetUsuarios');

//Exibe uma página com o formulário para inclusão de um novo usuário no sistema
$app->get('/painel/usuario/add', App\system\Controllers\UsuarioController::class. ':GetInserirUsuario');

//Cadastra um novo usuário no sistema
$app->post('/painel/usuario/add', App\system\Controllers\UsuarioController::class. ':PostInserirUsuario');

//Exclui um usuário cadastrado no sistema
$app->get('/painel/usuario/delete/{cod}', App\system\Controllers\UsuarioController::class. ':Delete');


/*
****************************************************
** Reserva de mesas
**
** Rotas para o menu de reservas
****************************************************
*/

//RESERVA
$app->get('/painel/reservas', App\system\Controllers\ReservaController::class. ':GetInserirReserva');
$app->post('/painel/reservas', App\system\Controllers\ReservaController::class. ':PostInserirReserva');
$app->get('/painel/reservas/delete/{codReserva}', App\system\Controllers\ReservaController::class. ':DeleteReserva');



/*
****************************************************
** Clientes
**
** Rotas para o menu de clientes
****************************************************
*/

// CLIENTES
$app->get('/painel/clientes', App\system\Controllers\ClientesController::class. ':GetInserir');
$app->post('/painel/clientes', App\system\Controllers\ClientesController::class. ':PostInserir');
$app->get('/painel/clientes/delete/{idcliente}', App\system\Controllers\ClientesController::class. ':DeleteCliente');
		

/*
****************************************************
** Mesas
**
** Rotas para o menu de mesas do sistema
****************************************************
*/

//Mesa
$app->get('/painel/mesas', App\system\Controllers\MesaController::class . ':GetInserirMesa');
$app->post('/painel/mesas', App\system\Controllers\MesaController::class. ':PostInserirMesa');


/*
****************************************************
** Rotas de acesso do sistema
**
****************************************************
*/

//Sistema
$app->get('/app/login', App\system\Controllers\LoginController::class . ':exibirLogin');
$app->post('/app/login', App\system\Controllers\LoginController::class . ':validarLogin');
$app->get('/app/logout', App\system\Controllers\LoginController::class . ':finalizarSessao');


$app->run();