<table class="dados">
	<tr>
		<th><label>Cod</label></th>
		<th><label>Nome</label></th>
		<th><label>Departamento</label></th>
		<th colspan="3"><label>-</label></th>
	</tr>

<?php

	foreach ($dados['Categorias'] as $key => $value) {
	
	if($key%2 == 0){
		echo "<tr class='l1' id='" .$value['codCategoria']."'>";
	} else {
		echo "<tr id='" .$value['codCategoria']."'>";
	}

		
?>
		
			<td><?php echo $value['codCategoria'];?></td>
			<td><?php echo $value['nome'];?></td>
			<td><?php echo $value['departamento'];?></td>
			<td class="btn-editar" onclick="editarDado(<?php echo($key+1); ?>)"><a href="#">Editar</a></td>
			<td class="btn-excluir" onclick="confirmarExclusao('Confirmar cadastro?');"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/categorias/delete/' . $value['codCategoria']);?>">Excluir</a></td>
			<td class="btn-editar");"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/categorias/view/' . $value['codCategoria']);?>">Ver</a></td>
		</tr>

<?php
		}		

?>
</table>