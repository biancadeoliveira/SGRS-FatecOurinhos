<div id="modal">
	<div id="modal-editar">
		<div id="btn-close">
			<img onclick="modalClose();" src="<?php echo ($GLOBALS['$urlImg'] . 'icons/btn-close.png');?>">
		</div>
		
		<div class="cadastro">
			<div class="title-cadastro">
				Editar Clientes
			</div>

			<?php foreach ($dados['Clientes'] as $key => $value) { if($value['codCliente'] == $_GET['cod']){?>

			<div class="form-cadastro">
				<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/clientes/editar/'.$value['codCliente'])?>">
						<label>Telefone:</label>
						<input type="number" name="telefone" value="<?php echo $value['telefone'] ?>">
						<br>
						<label>Email:</label>
						<input type="text" name="email"  value="<?php echo $value['email'] ?>">
						<br>
			</div>
			<div class="submit-cadastro">
				<input type="submit" value="Salvar" style="height: 100%;">
				</form>
			</div>
			<?php }}?>
		</div>
	</div>
</div>