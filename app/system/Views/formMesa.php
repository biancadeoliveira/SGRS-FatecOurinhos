<div class="cadastro">
	<div class="col-4">
		<div class="form-cadastro">
	      	<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/mesas/add')?>">
		
					<div class="form-group">
						<label>Código da mesa</label>
						<input type="number" name="codMesa">
						<span class="desc">? 
							<span class="desc-text">Número do produto dentro de sua categoria</span>
						</span>
					</div>

					<div class="form-group">
						<label>Quantidade de Lugares</label>
						<input type="number" name="qtdLugares">
						<span class="desc">? 
							<span class="desc-text">Número do produto dentro de sua categoria</span>
						</span>
					</div>

					<div class="form-group">
						<label>Estado da mesa</label>
						<select type="text" name="estado">
							<option value="Aberta">Aberta</option>
							<option value="Fechada">Fechada</option>
						</select>
						<span class="desc">? 
							<span class="desc-text">Número do produto dentro de sua categoria</span>
						</span>
					</div>

				<input class="cl-both btn-submit" type="submit" value="Adicionar">
			</form>				 

		</div>
	</div>
</div>