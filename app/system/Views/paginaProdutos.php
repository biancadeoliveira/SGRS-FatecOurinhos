<div class="content">

		<!-- <div class="buttons">
			<h3>Cadastrar</h3>
			<h3>Buscar</h3>
		</div> -->

	<div id="page-title" class="col-6">
		<h1>Produtos / Categorias</h1>
	</div>

	<div class="col-2">	
		<?php include_once($c . 'formProdutos.php'); ?>
		<?php include_once($c . 'formCategoria.php'); ?>
	</div>


	<div class="col-4">

		<div class="info">

			<div id="t1" class="col-3 tab-title tb-t-active"  onclick="manageGuia(2, 1);">
				<h3>Produtos</h3>
			</div>
			<div id="t2" class="col-3 tab-title" onclick="manageGuia(2, 2);">
				<h3>Categorias</h3>
			</div>

		</div>
		<div id="g1" class="table active">
			<div class="guia">
				<?php include_once($c . 'tableProdutos.php'); ?>	
			</div>
		</div>
		<div id="g2" class="table">
			<div class="guia">
				<?php include_once($c . 'tableCategorias.php'); ?>
			</div>
		</div>
	</div>
	<?php  if(isset($_GET['editar']) && isset($_GET['cod'])){ 
		include_once($c . 'formEditarCategoria.php'); 
	}?>
</div>