<div class="content">

		<!-- <div class="buttons">
			<h3>Cadastrar</h3>
			<h3>Buscar</h3>
		</div> -->

	<div id="page-title" class="col-6">
		<h1>Cidades / Cep</h1>
	</div>

	
	<div class="col-3">	
		<div class="col-5">	
			<?php include_once($c . 'formCidade.php'); ?>
		</div>
	</div>
	<div class="col-3">	
		<div class="col-5">	
			<?php include_once($c . 'formCep.php'); ?>
		</div>
	</div>


	<div class="col-6 tableEnderecos">

		<div class="info noMarginAuto">

			<div id="t1" class="col-3 tab-title tb-t-active"  onclick="manageGuia(2, 1);">
				<h3>Cidades</h3>
			</div>
			<div id="t2" class="col-3 tab-title" onclick="manageGuia(2, 2);">
				<h3>Cep</h3>
			</div>

		</div>
		<div id="g1" class="table active">
			<div class="guia noMarginAuto">
				<?php include_once($c . 'tableCidades.php'); ?>	
			</div>
		</div>
		<div id="g2" class="table">
			<div class="guia noMarginAuto">
				<?php include_once($c . 'tableCeps.php'); ?>
			</div>
		</div>
	</div>

</div>