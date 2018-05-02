<table id="categoria" class="dados">
	<tr>
		<th><label>Cod</label></th>
		<th><label>Nome</label></th>
		<th><label>Departamento</label></th>
		<th colspan="3"><label>-</label></th>
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
			<td class="tdBtn editar" onclick="editarDado(<?php echo($key+1); ?>)"><a href="#"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-edit.png')?>"></a></td>
			<td class="tdBtn excluir" onclick="confirmarExclusao('Confirmar cadastro?');"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/categorias/delete/' . $value['codCategoria']);?>"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-delete.png')?>"></a></td>
			<td class="tdBtn");"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/categorias/view/' . $value['codCategoria']);?>"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-view.png')?>"></a></td>
		</tr>

<?php
		}		

?>
</table>