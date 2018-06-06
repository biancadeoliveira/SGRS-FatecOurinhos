<table class="dados">
			<tr>
				<th><label>CPF</label></th>
				<th><label>Nome</label></th>
				<th><label>Função</label></th>
				<th><label>Telefone</label></th>	
				<th colspan="2"></th>
			</tr>

		<?php


			foreach ($dados as $key => $value) {
			
			if($key%2 == 0){				
				echo "<tr class='l1'>";
			} else {
				echo "<tr>";
			}

				
		?>
				
					<td><?php echo $value['cpf'];?></td>
					<td><?php echo $value['nome'];?></td>
					<td><?php echo $value['funcao'];?></td>
					<td><?php echo $value['telefone'];?></td>
					<td class="btn-editar"><a href="#">Editar</a></td>
					<td class="btn-excluir"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/usuario/delete/' . $value['cpf']);?>">Excluir</a></td>
				</tr>

		<?php
				}		

		?>
		</table>
