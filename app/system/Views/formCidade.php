<div class="content">

	<fieldset>
	   <legend>Cadastrar cidade</legend>
	   
	
		<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/cidade')?>">
			
			<table>
				<tr>
					<td><label>Nome da cidade</label></td>
					<td><label>Código Postal</label></td>
					<td><label>Estado</label></td>
					<td><label>Pais</label></td>
					<td rowspan="2"><input type="button" value="Inserir" style="height: 100%;" onclick="confirmarExclusao('Confirmar cadastro?');"></td>			
				</tr>
				<tr>
					<td><input type="text" name="nome"></td>
					<td><input type="number" name="codPostal" placeholder="00000000"></td>
					<td><select type="text" name="estado">
							<option value="">Selecionar</option>
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
					</td>
					<td><input type="text" name="pais" value="Brasil"></td>
				</tr>
			</table>

		</form>

		<!-- <?php 

			if(!is_null($GLOBALS['mensagem'])){
				echo($GLOBALS['mensagem']);
			}

		?> -->

	</fieldset>
	<br><br>
		

		<div class="buttons">
			<h3>Cadastrar</h3>
			<h3>Buscar</h3>
		</div>
	

</div>