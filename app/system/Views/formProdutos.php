<div class="cadastro">
	<div class="title-cadastro">
		Adicionar Produto
	</div>
	<div class="form-cadastro">

		<form method="POST" action="http://localhost/sgrs/public/produto">
				<input placeholder="Código do Produto" type="text" name="codProduto">
			    <br>
				<select name="codCategoria">
					<option value="null"> Código da categoria </option>
					
					<?php 

					foreach ($dados['Categorias'] as $key => $value) {
						echo"<option value='".$value['codCategoria']. "'>".$value['nome']."</option>";
					}

					?>
				</select>	
				<br>
				<input placeholder="Número do Produto" type="text" name="numProduto">
				<br>
				<input placeholder="Nome" type="text" name="nome">
				<br>
				<textarea placeholder="Descrição" type="text" rows="8" name="descricao"></textarea> 
				<br>
				<input placeholder="Preço" type="text" name="preco">
	</div>
	<div class="submit-cadastro">
			<input type="submit" value="Enviar">
		</form>
	</div>
</div>