<table class="dados">
			<tr>
				<th><label>Cep</label></th>
				<th><label>Cidade</label></th>
				<th><label>Rua</label></th>
				<th><label>Bairro</label></th>	
				<th colspan="2"><label>-</label></th>
			</tr>

		<?php


			foreach ($dados as $key => $value) {
			
			if($key%2 == 0){
				echo "<tr class='l1'>";
				
			} else {
				echo "<tr>";
				
			}

				
		?>
				
					<td><?php echo $value['cep'];?></td>
					<td><?php echo $value['codCidade'];?></td>
					<td><?php echo $value['rua'];?></td>
					<td><?php echo $value['bairro'];?></td>
					<td class="btn-editar"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/enderecos/editar/' . $value['cep']);?>">Editar</a>
					<td class="btn-excluir"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/enderecos/delete/' . $value['cep']);?>">Excluir</a></td>
				</tr>

		<?php
				}		

		?>
</table>