<div class="content">

	<fieldset>
	   <legend>Cadastrar Categoria</legend>
	   
	
		<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/categorias')?>">
			
			<table>
				<tr>
					<td><label>Código da categoria</label></td>
					<td><label>Nome</label></td>
					<td><label>Departamento</label></td>
					<td rowspan="2"><input type="button" value="Inserir" style="height: 100%;" onclick="confirmarExclusao('Confirmar cadastro?');"></td>			
				</tr>
				<tr>
					<td><input type="nember" name="codCategoria"></td>
					<td><input type="text" name="nome"></td>
					<td><input type="text" name="departamento" placeholder="Cozinha / Bar / ..."></td>
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
				<th><label>Cod</label></th>
				<th><label>Nome</label></th>
				<th><label>Departamento</label></th>
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
				
					<td><?php echo $value['codCategoria'];?></td>
					<td><?php echo $value['nome'];?></td>
					<td><?php echo $value['departamento'];?></td>
					<td class="tdBtn editar"><a href="#">Editar</a></td>
					<td class="tdBtn excluir"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/categorias/delete/' . $value['codCategoria']);?>">Excluir</a></td>
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