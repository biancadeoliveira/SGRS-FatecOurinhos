<div class="cadastro">
	<div class="col-4">
	<div class="title-cadastro">
		Cadastrar CEP
	</div>
	<div class="form-cadastro">
		<form method='POST' id='form' action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/endereco/add');?>">

			<!-- <input placeholder="Cidade" type='number' name='codPostal'>
 -->

			<div class="form-group">
							<label for="codPostal">Cidade</label>
					<select type="text" name="codPostal">

				<option>-- Selecionar Cidade -- </option>

				<?php 
					foreach ($dados as $key => $value) {

						echo "<option value='". $value['codCidade'] . "'>" . $value['nome'] . "</option>";

					}

				?>
			</select>

			</div> 

			<div class="form-group">
					<label for="cep">CEP</label>
					<input type='number' name='cep'>
					<span class="desc">? 
						<span class="desc-text">Cep da rua</span>
					</span>
				</div>

	

			<div class="form-group">
							<label for="rua">Rua</label>
				<input type='text' name='rua'>
				<span class="desc">? 
						<span class="desc-text">Nome da rua do usuário</span>
					</span>
			</div>
			
			<div class="form-group">
				<label for="bairro">Bairro</label>
				<input  type='text' name='bairro'>
				<span class="desc">? 
						<span class="desc-text">Nome do bairro do usuário</span>
					</span>
			</div>
			
		<input class="cl-both btn-submit" type="submit" value="Cadastrar">
		</form>
	</div>
</div>
</div>