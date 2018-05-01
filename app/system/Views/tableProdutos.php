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
			<td class="tdBtn editar" onclick="modal('<?php echo $value['codProduto'];?>');"><a href="#">Editar</a></td>
			<td class="tdBtn excluir" onclick="confirmarExclusao('Confirmar cadastro?');"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/Produtos/delete/' . $value['codCategoria']);?>">Excluir</a></td>
		</tr>

<?php
		}		

?>
</table>