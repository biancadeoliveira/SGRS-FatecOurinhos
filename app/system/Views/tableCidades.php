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
			
			if($key%1 == 0){				
				echo "<tr class='l1'>";
			} else {
				echo "<tr>";
			}


				
		?>
				
					<td><?php echo $value['nome'];?></td>
					<td><?php echo $value['codPostal'];?></td>
					<td><?php echo $value['estado'];?></td>
					<td><?php echo $value['pais'];?></td>
					<td class="btn-editar"><a href="#">Editar</a></td>
					<td class="btn-excluir"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/cidade/delete/' . $value['codCidade']);?>">Deletar</a></td>
				</tr>

		<?php
				}		

		?>
</table>