<div class="cadastro">
	<div class="title-cadastro">
		Cadastrar Mesa
	</div>
	<div class="form-cadastro">
	      
		<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/mesas')?>">
		
					<input placeholder="Codigo da Mesa" type="number" name="codMesa">
					<input placeholder="Quantidade de Lugares" type="number" name="qtdLugares">
					<select type="text" name="estado">
							<option value="">Estado</option>
							<option value="Ocupada">Ocupada</option>
							<option value="Disponivel">Disponivel</option>
							</select>
							 

		</div>
		<div class="submit-cadastro">
					<input type="button" value="Inserir" style="height: 100%;" onclick="confirmarExclusao('Confirmar cadastro?');">

				</form>
		</div>
</div>