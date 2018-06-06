<div class="cadastro">
	<div class="col-4">
		<div class="title-cadastro">
			Informações do produto
		</div>
		<div class="form-cadastro">

			<form method="POST" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/produto/add')?>">

				<div class="form-group">
					<label for="codProduto">Código do Produto</label>
					<input id="codProduto" type="text" name="codProduto">
					<span class="desc">? 
						<span class="desc-text">Número do produto dentro de sua categoria</span>
					</span>
				</div>

				<div class="form-group">
					<label for="codCategoria">Categoria</label>
					<select name="codCategoria">
						<?php 
							foreach ($dados['Categorias'] as $key => $value) {
							echo"<option value='".$value['codCategoria']. "'>".$value['nome']."</option>";
							}
						?>
					</select>
					<span class="desc">?</span>	
				</div>

				<div class="form-group">
					<label for="numProduto">Número do produto</label>
					<input type="text" name="numProduto">
					<span class="desc">?
						<span class="desc-text"></span>
					</span>
				</div>
					
				<div class="form-group">
					<label for="nome">Nome do produto</label>
					<input type="text" name="nome">
					<span class="desc">?
						<span class="desc-text"></span>
					</span>
				</div>

				<div class="form-group">
					<label for="descricao">Descrição</label>
					<input type="text" name="descricao">
					<span class="desc">?
						<span class="desc-text"></span>
					</span>
				</div>

				<div class="form-group">
					<label for="preco">Preço</label>
					<input type="text" name="preco">
					<span class="desc">?
						<span class="desc-text"></span>
					</span>
				</div>

				<input class="cl-both btn-submit" type="submit" value="Adicionar">

		</div>

	</div>
</div>