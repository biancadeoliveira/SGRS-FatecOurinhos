<div class="content">

	<div id="page-title" class="col-6">
		<h1>Categoria: <?php echo $dados['Categoria'][0]['nome'];?></h1>
	</div>

	<div class="col-2">	
		<p><b>Código: </b><?php echo $dados['Categoria'][0]['codCategoria'];?></p>

		<p><b>Nome: </b><?php echo $dados['Categoria'][0]['nome'];?></p>

		<p><b>Departamento: </b><?php echo $dados['Categoria'][0]['departamento'];?></p>

	</div>

	<div class="col-3">
		
		<div class="title-cadastro">
			Produtos cadastrados nesta categoria
		</div>

		<table class="dados">
				
		<tr>
			<th><label>#</label></th>
			<th><label>Nome</label></th>
			<th><label>Descrição</label></th>
		</tr>

		<?php 
			foreach ($dados['Produtos'] as $key => $value) {
	
				if($key%2 == 0){
					echo "<tr id='" .$value['codProduto']."'>";
				} else {
					echo "<tr class='l1'>";
				}
		?>
		
			<td><?php echo $value['codProduto'];?></td>
			<td><?php echo $value['nome'];?></td>
			<td><?php echo $value['descricao'];?></td>

		</tr>

	<?php }	?>
	</table>
	
	</div>

	
</div>