<table class="dados">
			<tr>
				<th><label>Cep</label></th>
				<th><label>Cidade</label></th>
				<th><label>Rua</label></th>
				<th><label>Bairro</label></th>	
				<th colspan="2"><label>-</label></th>
			</tr>

		<?php


			foreach ($dados['Cep'] as $key => $value) {
			
			if($key%2 == 0){
				echo "<tr>";
			} else {
				echo "<tr class='l1'>";
			}

				
		?>
				
					<td><?php echo $value['cep'];?></td>
					<td><?php echo $value['codCidade'];?></td>
					<td><?php echo $value['rua'];?></td>
					<td><?php echo $value['bairro'];?></td>
					<td class="tdBtn editar"><a href="#"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-edit.png')?>"></a></td>
					<td class="tdBtn excluir"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/cep/delete/' . $value['cep']);?>"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-delete.png')?>"></a></td>
				</tr>

		<?php
				}		

		?>
</table>