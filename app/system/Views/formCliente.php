<div class="content">

	<fieldset>
	   <legend>Cadastrar cliente</legend>
	   
	
		<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/cliente')?>">
			
			<table>
				<tr>
					<td><label>CPF</label></td>
					<td><label>Nome</label></td>
					<td><label>Rg</label></td>
					<td><label>Telefone</label></td>
					<td><label>Email</label></td>
					<td rowspan="2"><input type="button" value="Inserir" style="height: 100%;" onclick="confirmarExclusao('Confirmar cadastro?');"></td>			
				</tr>
				<tr>
					<td><input type="number" name="cpf" placeholder="12345678900"></td>
					<td><input type="text" name="nome"></td>
					<td><input type="text" name="rg"></td>
					<td><input type="number" name="telefone" placeholder="14999887766"></td>
					<td><input type="text" name="email"></td>
				</tr>
			</table>

		</form>

		<!-- <?php 

			if(!is_null($GLOBALS['mensagem'])){
				echo($GLOBALS['mensagem']);
			}

		?> -->

	</fieldset>
	<br><br>
		<table class="dados">
			<tr>
				<th><label>CPF</label></th>
				<th><label>Nome</label></th>
				<th><label>Rg</label></th>
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
					<td><?php echo $value['rg'];?></td>
					<td><?php echo $value['telefone'];?></td>
					<td><?php echo $value['email'];?></td>
					<td class="tdBtn editar"><a href="#">Editar</a></td>
					<td class="tdBtn excluir"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/cliente/delete/' . $value['cpf']);?>">Excluir</a></td>
				</tr>

		<?php
				}		

		?>
		</table>

		<div class="buttons">
			<h3>Cadastrar</h3>
			<h3>Buscar</h3>
		</div>
	

</div>