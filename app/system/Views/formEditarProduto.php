<div id="modal">
	<div id="modal-editar">
		<div id="btn-close">
			<img onclick="modalClose();" src="<?php echo ($GLOBALS['$urlImg'] . 'icons/btn-close.png');?>">
		</div>
		
		<div class="cadastro">
			<div class="title-cadastro">
				Editar Produto
			</div>

			<?php foreach ($dados['Produtos'] as $key => $value){
				 if($value['codProduto'] == $_GET['cod']){?>
				 	<?php echo $value['codProduto'];?><br>
				 	<?php ;?><br>
					<div class="form-cadastro">
						 
						<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/produto/editar/'.$value['codProduto'])?>">
								<select name="codCategoria">
							
							<?php 

							foreach ($dados['Categorias'] as $key => $v) {
								if($value['codCategoria'] == $v['codCategoria']){
									echo"<option selected  value='".$v['codCategoria']. "'>".$v['nome']."</option>";
								}else{
									echo"<option value='".$v['codCategoria']. "'>".$v['nome']."</option>";
								}
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
								<input type="text" name="preco"  value="<?php echo $value['preco'] ?>">
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