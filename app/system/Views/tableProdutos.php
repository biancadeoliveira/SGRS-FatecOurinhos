<div class="dados">

<a href="http://localhost/framework/public/painel/produto/add"><div class="btn-addNovo">Add Novo</div></a>

<table>
	<tr>
		<th><label>#</label></th>
		<th><label>Nome</label></th>
		<th><label>Descricao</label></th>
		<th><label>Categoria</label></th>
		<th><label>Preço</label></th>
		<th colspan="2"></th>
	</tr>

<?php


	foreach ($dados['Produtos'] as $key => $value) {
	
	if($key%2 == 0){
		echo "<tr class='l1' id='" .$value['codProduto']."'>";
	} else {
		echo "<tr id='" .$value['codProduto']."'>";
	}

		
?>
		
			<td><?php echo $value['codProduto'];?></td>
			<td><?php echo $value['nome'];?></td>
			<td>
				<span class="desc" style="background-color: #22ad22;">Ver 
						<span class="desc-text"><?php echo $value['descricao'];?></span>
				</span>

			</td>
			<td><?php echo $value['nomeCat'];?></td>
			<td><?php echo ('R$ ' . number_format($value['preco'], 2, ',', '.'));?></td>
			<td class="btn-editar"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/produto/editar/' . $value['codProduto']);?>">Editar</a></td>
			<td class="btn-excluir" onclick="confirmarExclusao('Confirmar cadastro?');"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/produto/delete/' . $value['codProduto']);?>">Excluir</a></td>
		</tr>

<?php
		}		

?>
</table>

</div>