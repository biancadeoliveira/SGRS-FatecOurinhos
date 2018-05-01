<div class="cadastro">
	<div class="title-cadastro">
		Cadastrar cidade
	</div>
	<div class="form-cadastro">
	      
		<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/cidade')?>">
		
					<input placeholder="Nome da cidade" type="text" name="nome">
					<input placeholder="Código postal" type="number" name="codPostal">
					<select type="text" name="estado">
							<option value="">Selecionar Estado</option>
							<option value="AC">AC</option>
							<option value="AL">AL</option>
							<option value="AP">AP</option>
							<option value="AM">AM</option>
							<option value="BA">BA</option>
							<option value="CE">CE</option>
							<option value="DF">DF</option>
							<option value="ES">ES</option>
							<option value="GO">GO</option>
							<option value="MA">MA</option>
							<option value="MT">MT</option>
							<option value="MS">MS</option>
							<option value="MG">MG</option>
							<option value="PA">PA</option>
							<option value="PB">PB</option>
							<option value="PR">PR</option>
							<option value="PE">PE</option>
							<option value="PI">PI</option>
							<option value="RJ">RJ</option>
							<option value="RN">RN</option>
							<option value="RS">RS</option>
							<option value="RO">RO</option>
							<option value="RR">RR</option>
							<option value="SC">SC</option>
							<option value="SP">SP</option>
							<option value="SE">SE</option>
							<option value="TO">TO</option>
						</select>
					<input placeholder="País" type="text" name="pais" value="Brasil">
		</div>
		<div class="submit-cadastro">
					<input type="button" value="Inserir" style="height: 100%;" onclick="confirmarExclusao('Confirmar cadastro?');">

				</form>
		</div>
</div>