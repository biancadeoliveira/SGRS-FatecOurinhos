<div class="cadastro">
	<div class="title-cadastro">
		Adicionar Categoria
	</div>
	<div class="form-cadastro">
		<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/categorias')?>">
			
				<input placeholder="Código da categoria" type="nember" name="codCategoria">
				<br>
				<input placeholder="Nome" type="text" name="nome">
				<br>
				<input type="text" name="departamento" placeholder="Departamento">
				<br>
	</div>
	<div class="submit-cadastro">
		<input type="submit" value="Cadastrar" style="height: 100%;">
		</form>
	</div>
</div>