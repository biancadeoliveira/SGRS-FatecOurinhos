<table class="dados">
			<tr>
				<th><label>CPF</label></th>
				<th><label>Nome</label></th>
				<th><label>Função</label></th>
				<th><label>Telefone</label></th>	
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
				
					<td><?php echo $value['cpf'];?></td>
					<td><?php echo $value['nome'];?></td>
					<td><?php echo $value['funcao'];?></td>
					<td><?php echo $value['telefone'];?></td>
					<td class="tdBtn editar"><!-- <a href="#"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-edit.png')?>"></a> --></td>
					<td class="tdBtn excluir"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/usuario/delete/' . $value['cpf']);?>"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-delete.png')?>"></a></td>
				</tr>

		<?php
				}		

		?>
		</table>
