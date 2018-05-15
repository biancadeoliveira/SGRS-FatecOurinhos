<div class="cadastro">
	<div class="title-cadastro">
		Cadastrar CEP
	</div>
	<div class="form-cadastro">
		<form method='POST' id='form' action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/cep');?>">

			<!-- <input placeholder="Cidade" type='number' name='codPostal'>
 -->
			<select type="text" name="codPostal">

				<option>-- Selecionar Cidade -- </option>

				<?php 
					foreach ($dados['Cidades'] as $key => $value) {

						echo "<option value='". $value['codCidade'] . "'>" . $value['nome'] . "</option>";

					}

				?>
			</select>

			<input placeholder="CEP" type='number' name='cep'>
			<input placeholder="Rua" type='text' name='rua'>
			<input placeholder="Bairro" type='text' name='bairro'>
	</div>
	<div class="submit-cadastro">
		<input type='submit' value='Inserir' style='height: 100%;'>
		</form>
	</div>
</div>