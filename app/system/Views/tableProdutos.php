<table class="dados">
			
	<tr>
		<th><label>#</label></th>
		<th><label>Nome</label></th>
		<th><label>R$</label></th>
		<th colspan="2"><label>-</label></th>
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
			<td><?php echo $value['preco'];?></td>
			<td class="tdBtn editar"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/categorias?editar=produto&cod=' . $value['codProduto']);?>"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-edit.png')?>"></a></td>
			<td class="tdBtn excluir" onclick="confirmarExclusao('Confirmar cadastro?');"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/produto/delete/' . $value['codProduto']);?>"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-delete.png')?>"></a></td>
		</tr>

<?php
		}		

?>
</table>