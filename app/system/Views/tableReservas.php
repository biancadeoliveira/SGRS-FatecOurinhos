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


			foreach ($dados['Reservas'] as $key => $value) {
			
			if($key%2 == 0){
				echo "<tr class='l1' id'" .$value['codReserva']."'>";
			} else {
				echo "<tr id'" .$value['codReserva']."'>";
			}

				
		?>
				
					<td><?php echo $value['cpfCliente'];?></td>
					<td><?php echo $value['codMesa'];?></td>
					<td><?php echo $value['dataReserva'];?></td>
					<td><?php echo $value['hora'];?></td>
					<td><?php echo $value['estado'];?></td>
<!-- 					<td><?php echo $value['email'];?></td> -->
					<td class="btn-editar"><a href="#">Editar</a></td>
					<td class="btn-excluir"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/reservas/delete/' . $value['codReserva']);?>">Excluir</a></td>
				</tr>

		<?php
				}		

		?>
		</table>