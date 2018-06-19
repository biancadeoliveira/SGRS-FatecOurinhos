<table class="dados">
			<tr>
				<th><label>CPF</label></th>
				<th><label>Nome</label></th>
				<th><label>Telefone</label></th>
				<th><label>Email</label></th>	
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
					<td><?php echo $value['telefone'];?></td>
					<td><?php echo $value['email'];?></td>
					<td class="btn-editar"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/clientes/editar/' . $value['cpf']);?>">Editar</a>
					<td class="btn-excluir"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/clientes/delete/' . $value['cpf']);?>">Excluir</a></td>
					<td class="tdBtn"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/clientes/view/' . $Clientes['cod']);?>"></a></td>
				</tr>

		<?php
				}		

		?>
		</table>