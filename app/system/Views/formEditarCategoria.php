<div id="modal">
	<div id="modal-editar">
		<div id="btn-close">
			<img onclick="modalClose();" src="http://localhost/framework/img/icons/btn-close.png">
		</div>
		
		<div class="cadastro">
			<div class="title-cadastro">
				Editar Categoria
			</div>

			<?php foreach ($dados['Categorias'] as $key => $value) { if($value['codCategoria'] == $_GET['cod']){?>

			<div class="form-cadastro">
				<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/categorias')?>">
						<label>Código da categoria:</label>
						<input type="number" name="codCategoria" value="<?php echo $value['codCategoria'] ?>">
						<br>
						<label>Nome:</label>
						<input placeholder="Nome" type="text" name="nome" value="<?php echo $value['nome'] ?>">
						<br>
						<label>Departamento:</label>
						<input type="text" name="departamento"  value="<?php echo $value['departamento'] ?>">
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