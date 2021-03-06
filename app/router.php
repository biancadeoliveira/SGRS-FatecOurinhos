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
$app->get('/painel/enderecos', App\system\Controllers\CepController::class. ':GetCeps');

//Exibe a página com o formulário para inserir um novo cep ao sistema
$app->get('/painel/endereco/add', App\system\Controllers\CepController::class. ':GetInserir');

//Rota que captura os dados enviados pelo formulário, a partir do método post e que é responsável por cadastra-lo no banco
$app->post('/painel/endereco/add', App\system\Controllers\CepController::class. ':PostInserir');

//Rota para exclusão de um endereço, o código do endereço é passado atraves da rota, o controler captura esse numero de identificação e executa os métodos responsáveis pela exclusão
$app->get('/painel/enderecos/delete/{cod}', App\system\Controllers\CepController::class. ':Delete');

$app->get('/painel/enderecos/editar/{cod}', App\system\Controllers\CepController::class. ':GetEditarEndereco');

$app->post('/painel/enderecos/editar/{cod}', App\system\Controllers\CepController::class. ':PostEditarEndereco');


/*
****************************************************
** CIDADES
**
** Rotas para o menu de cidades
****************************************************
*/

//Exibe uma página com uma tabela contendo todos as cidades cadastrados no sistema
$app->get('/painel/cidades', App\system\Controllers\CidadesController::class. ':GetCidades');

//Exibe a página com o formulário para inserir uma nova cidade ao sistema
$app->get('/painel/cidade/add', App\system\Controllers\CidadesController::class. ':GetInserir');

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
$app->get('/painel/produto/editar/{cod}', App\system\Controllers\ProdutoController::class. ':GetEditarProduto');

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
$app->get('/painel/categorias', App\system\Controllers\CategoriaController::class. ':GetCategoria');

//Rota que exibe um formuário para inclusão de uma niva categoria no sistema
$app->get('/painel/categoria/add', App\system\Controllers\CategoriaController::class. ':GetInserirCategoria');

//Rota que recebe os dados enviados pelo formulario e cadastra a categoria no banco
$app->post('/painel/categoria/add', App\system\Controllers\CategoriaController::class. ':PostInserirCategoria');

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

//Exibe página para editar um usuário
$app->get('/painel/usuario/editar/{cpf}', App\system\Controllers\UsuarioController::class. ':GetEditarUsuario');

$app->post('/painel/usuario/editar/{cpf}', App\system\Controllers\UsuarioController::class. ':PostEditarUsuario');

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
$app->get('/painel/reservas', App\system\Controllers\ReservaController::class. ':GetReserva');
$app->get('/painel/reserva/add', App\system\Controllers\ReservaController::class. ':GetInserirReserva');
$app->post('/painel/reserva/add', App\system\Controllers\ReservaController::class. ':PostInserirReserva');
$app->get('/painel/reservas/delete/{codReserva}', App\system\Controllers\ReservaController::class. ':DeleteReserva');



/*
****************************************************
** Clientes
**
** Rotas para o menu de clientes
****************************************************
*/

// CLIENTES
$app->get('/painel/clientes', App\system\Controllers\ClientesController::class. ':GetClientes');
$app->get('/painel/clientes/add', App\system\Controllers\ClientesController::class. ':GetInserir');
$app->post('/painel/clientes/add', App\system\Controllers\ClientesController::class. ':PostInserir');
$app->get('/painel/clientes/delete/{idcliente}', App\system\Controllers\ClientesController::class. ':DeleteCliente');
$app->get('/painel/clientes/editar/{idcliente}', App\system\Controllers\ClientesController::class. ':GetEditarCliente');
$app->post('/painel/clientes/editar/{idcliente}', App\system\Controllers\ClientesController::class. ':PostEditar');
		

/*
****************************************************
** Mesas
**
** Rotas para o menu de mesas do sistema
****************************************************
*/

//Mesa
$app->get('/painel/mesa/{idmesa}', App\system\Controllers\MesaController::class . ':GetMesaPedidos');
$app->get('/painel/mesas', App\system\Controllers\MesaController::class . ':GetMesas');
$app->get('/painel/mesas/add', App\system\Controllers\MesaController::class . ':GetInserirMesa');
$app->post('/painel/mesas/add', App\system\Controllers\MesaController::class. ':PostInserirMesa');
$app->get('/painel/mesas/encerrar/{idmesa}', App\system\Controllers\MesaController::class. ':FecharMesa');


/*
****************************************************
** Pedidos
****************************************************
*/

//Exibe o painel com todas as opções de pedidos
$app->get('/painel/pedidos/add', App\system\Controllers\PedidosController::class . ':GetPedidosAdd');

//Exibe a tela de confirmação de pedido
$app->post('/painel/pedidos/add/confirmar', App\system\Controllers\PedidosController::class . ':GetPedidosConfirmar');

//Recebe o pedido final
$app->post('/painel/pedidos/add', App\system\Controllers\PedidosController::class . ':PostPedidosAdd');




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