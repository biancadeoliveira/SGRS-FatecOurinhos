<div id="modal">
	<div id="modal-editar">
		<div id="btn-close">
			<img onclick="modalClose();" src="http://localhost/sgrs/img/icons/btn-close.png">
		</div>
		
		<div class="cadastro">
			<div class="title-cadastro">
				Editar Produto
			</div>

			<?php foreach ($dados['Produtos'] as $key => $value) { if($value['codProduto'] == $_GET['cod']){?>

			<div class="form-cadastro">
				<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/produto/editar/'.$value['codProduto'])?>">
						<select name="codCategoria">
					<option value="null"> Código da categoria </option>
					
					<?php 

					foreach ($dados['Categorias'] as $key => $value) {
						echo"<option value='".$value['codCategoria']. "'>".$value['nome']."</option>";
					}

					?>
				</select>	
				<br>
						<label>Número do Produto:</label>
						<input type="number" name="numProduto" value="<?php echo $value['numProduto'] ?>">
						<br>
						<label>Nome:</label>
						<input type="text" name="nome" value="<?php echo $value['nome'] ?>">
						<br>
						<label>Descrição:</label>
						<input placeholder="Descrição" type="text" name="descricao" value="<?php echo $value['descricao'] ?>">
						<br>
						<label>Preço:</label>
						<input type="number" name="preco"  value="<?php echo $value['preco'] ?>">
						<br>
			</div>
			<div class="submit-cadastro">
				<input type="submit" value="Salvar" style="height: 100%;">
				</form>
			</div>
			<?php }}?>
		</div>
	</div>
</div>