<div class="cadastro">
	<div class="title-cadastro">
		Cadastrar CEP
	</div>
	<div class="form-cadastro">
		<form method='POST' id='form' action='" . $GLOBALS['$urlpadrao'] . "painel/cep'>

			<input placeholder="Codigo Postal" type='number' name='codPostal'>
			<input placeholder="CEP" type='number' name='cep'>
			<input placeholder="Rua" type='text' name='rua'>
			<input placeholder="Bairro" type='text' name='bairro'>
	</div>
	<div class="submit-cadastro">
		<input type='submit' value='Inserir' style='height: 100%;'>
		</form>
	</div>
</div>