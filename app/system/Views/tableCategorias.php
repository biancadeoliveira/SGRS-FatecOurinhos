<table id="categoria" class="dados">
	<tr>
		<th><label>Cod</label></th>
		<th><label>Nome</label></th>
		<th><label>Departamento</label></th>
		<th colspan="2"><label>-</label></th>
	</tr>

<?php

	foreach ($dados['Categorias'] as $key => $value) {
	
	if($key%2 == 0){
		echo "<tr id='" .$value['codCategoria']."'>";
	} else {
		echo "<tr class='l1'>";
	}

		
?>
		
			<td><?php echo $value['codCategoria'];?></td>
			<td><?php echo $value['nome'];?></td>
			<td><?php echo $value['departamento'];?></td>
			<td class="tdBtn editar" onclick="editarDado(<?php echo($key+1); ?>)"><a href="#">Editar</a></td>
			<td class="tdBtn excluir" onclick="confirmarExclusao('Confirmar cadastro?');"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/categorias/delete/' . $value['codCategoria']);?>">Excluir</a></td>
		</tr>

<?php
		}		

?>
</table>