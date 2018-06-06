<table class="dados">
	<tr>
		<th><label>#</label></th>
		<th><label>Nome</label></th>
		<th><label>Categoria</label></th>
		<th><label>Preço (R$)</label></th>
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
			<td><?php echo $value['codCategoria'];?></td>
			<td><?php echo $value['preco'];?></td>
			<td class="btn-editar"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/categorias?editar=produto&cod=' . $value['codProduto']);?>">Editar</a></td>
			<td class="btn-excluir" onclick="confirmarExclusao('Confirmar cadastro?');"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/produto/delete/' . $value['codProduto']);?>">Excluir</a></td>
		</tr>

<?php
		}		

?>
</table>