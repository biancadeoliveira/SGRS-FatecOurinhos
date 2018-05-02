<table class="dados">
			<tr>
				<th><label>CPF</label></th>
				<th><label>Mesa</label></th>
				<th><label>Data</label></th>
				<th><label>Hora</label></th>
				<th><label>Estado</label></th>	
				<th colspan="2"><label>-</label></th>
			</tr>

		<?php


			foreach ($dados as $key => $value) {
			
			if($key%2 == 0){
				echo "<tr>";
			} else {
				echo "<tr class='l1'>";
			}

				
		?>
				
					<td><?php echo $value['cpfCliente'];?></td>
					<td><?php echo $value['codMesa'];?></td>
					<td><?php echo $value['dataReserva'];?></td>
					<td><?php echo $value['hora'];?></td>
					<td><?php echo $value['estado'];?></td>
<!-- 					<td><?php echo $value['email'];?></td> -->
					<td class="tdBtn editar"><a href="#"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-edit.png')?>"></a></td>
					<td class="tdBtn excluir"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/cliente/delete/' . $value['cpf']);?>"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-delete.png')?>"></a></td>
				</tr>

		<?php
				}		

		?>
		</table>