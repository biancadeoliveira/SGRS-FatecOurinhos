<table class="dados">
			<tr>
				<th><label>Cidade</label></th>
				<th><label>Código Postal</label></th>
				<th><label>Estado</label></th>
				<th><label>Pais</label></th>	
				<th colspan="2"><label>-</label></th>
			</tr>

		<?php


			foreach ($dados['Cidades'] as $key => $value) {
			
			if($key%2 == 0){
				echo "<tr>";
			} else {
				echo "<tr class='l1'>";
			}

				
		?>
				
					<td><?php echo $value['nome'];?></td>
					<td><?php echo $value['codPostal'];?></td>
					<td><?php echo $value['estado'];?></td>
					<td><?php echo $value['pais'];?></td>
					<td class="tdBtn editar"><a href="#"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-edit.png')?>"></a></td>
					<td class="tdBtn excluir"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/cidade/delete/' . $value['codCidade']);?>"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-delete.png')?>"></a></td>
				</tr>

		<?php
				}		

		?>
</table>