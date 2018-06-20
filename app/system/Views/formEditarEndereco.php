<div class="cadastro">
	<div class="col-4">
		<div class="title-cadastro">
			Informações do cliente
		</div>
		<div class="form-cadastro">

		<?php foreach ($dados['CEP'] as $value => $key){?>

			<form method="POST" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/enderecos/editar/'.$key['cep'])?>">

				<div class="form-group">
					<label for="cep">CEP</label>
					<input id="cep" type="number" name="cep" disabled ="true" value="<?php echo $key['cep']?>">
					<input id="cep" type="hidden" name="cep" value="<?php echo $key['cep']?>">
					<span class="desc">? 
						<span class="desc-text">CEP do Bairro/Cidade</span>
					</span>
				</div>

				<div class="form-group">
					<label for="codCidade">Código da cidade</label>
					<select name="codCidade">
						<?php 
							foreach ($dados['CIDADES'] as $k => $v) {
							if($key['codCidade'] == $v['codCidade']){
									echo"<option selected  value='".$v['codCidade']. "'>".$v['nome']."</option>";
								}else{
									echo"<option value='".$v['codCidade']. "'>".$v['nome']."</option>";
								}
							}
						?>
					</select>
					<span class="desc">?</span>	
				</div>


				<div class="form-group">
					<label for="rua">Rua</label>
					<input id="rua" type="text" name="rua" value="<?php echo $key['rua']?>">
					<span class="desc">? 
						<span class="desc-text">Nome da Rua</span>
					</span>
				</div>

				<div class="form-group">
					<label for="bairro">Bairro</label>
					<input id="bairro" type="text" name="bairro" value="<?php echo $key['bairro']?>">
					<span class="desc">? 
						<span class="desc-text">Nome do bairro</span>
					</span>
				</div>




				<?php 
					if(isset($_GET['status'])){
						if ($_GET['status'] == 1){
							echo "<span class='ok'>Alterações salvas com sucesso!</span>";
						}
					} 
				?>

				<input class="cl-both btn-submit" type="submit" value="Salvar alterações">
				<div class="btn-voltar">
					<a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/enderecos')?>"> Voltar </a>
				</div>

			</form>

			<?php } ?>

		</div>

	</div>
</div>