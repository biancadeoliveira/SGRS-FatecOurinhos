<div class="content">

	<div id="page-title" class="col-6">
		<h1>Clientes</h1>
	</div>

	<div class="col-2">	
		<?php include_once($c . 'formCliente.php'); ?>
	</div>

	<div class="col-4">

		<div id="g1" class="table active">
			<div class="guia">
				<?php include_once($c . 'tableClientes.php'); ?>	
			</div>
		</div>
	</div>
	<?php  if(isset($_GET['cod'])){ 
		
			include_once($c . 'formEditarCliente.php'); 	
		
	}?>
</div>