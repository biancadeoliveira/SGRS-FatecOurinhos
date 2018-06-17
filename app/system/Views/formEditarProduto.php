<div class="cadastro">
	<div class="col-4">
		<div class="title-cadastro">
			Informações do produto
		</div>
		<div class="form-cadastro">

		<?php foreach ($dados['Produtos'] as $value => $key){?>

			<form method="POST" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/produto/editar/'.$key['codProduto'])?>">

				<div class="form-group">
					<label for="codProduto">Código do Produto</label>
					<input id="codProduto" type="text" name="codProduto" value="<?php echo $key['codProduto']?>">
					<span class="desc">? 
						<span class="desc-text">Número do produto dentro de sua categoria</span>
					</span>
				</div>

				<div class="form-group">
					<label for="codCategoria">Categoria</label>
					<select name="codCategoria">
						<?php 
							foreach ($dados['Categorias'] as $k => $v) {
							if($key['codCategoria'] == $v['codCategoria']){
									echo"<option selected  value='".$v['codCategoria']. "'>".$v['nome']."</option>";
								}else{
									echo"<option value='".$v['codCategoria']. "'>".$v['nome']."</option>";
								}
							}
						?>
					</select>
					<span class="desc">?</span>	
				</div>

				<div class="form-group">
					<label for="numProduto">Número do produto</label>
					<input type="text" name="numProduto" value="<?php echo $key['numProduto']?>">
					<span class="desc">?
						<span class="desc-text"></span>
					</span>
				</div>
					
				<div class="form-group">
					<label for="nome">Nome do produto</label>
					<input type="text" name="nome" value="<?php echo $key['nome']?>">
					<span class="desc">?
						<span class="desc-text"></span>
					</span>
				</div>

				<div class="form-group">
					<label for="descricao">Descrição</label>
					<textarea name="descricao"><?php echo $key['descricao']?></textarea>
					<span class="desc">?
						<span class="desc-text"></span>
					</span>
				</div>

				<div class="form-group">
					<label for="preco">Preço</label>
					<input type="text" name="preco" value="<?php echo $key['preco']?>">
					<span class="desc">?
						<span class="desc-text"></span>
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
					<a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/produtos')?>"> Voltar </a>
				</div>

			</form>

			<?php } ?>

		</div>

	</div>
</div>