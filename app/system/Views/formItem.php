<div class="content">

	<fieldset>
	   <legend>Cadastrar Item</legend>
	   
	   <style type="text/css">
	   	 td {
	   	 	float: left;

	   	 }
	   </style>
	
		<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/item')?>">
			
			<table>
				<tr>
					
					<td><label>Código do Pedido</label><br><input type="number" name="codPedido"></td>
					<td><label>Código do Produto</label><br><input type="number" name="codProduto"></td>
					<td><label>Quantidade</label><br><input type="number" name="quantidade"></td>
					<td><label>Preço</label><br><input type="text" name="preco"></td>
					<td><label>Estado</label><br><input type="text" name="estado"></td>
					<td><label>Observação</label><br><input type="text" name="observacao"></td>

					<td style="padding: 15px;"><input type="button" value="Inserir" style="height: 100%;" onclick="confirmarExclusao('Confirmar cadastro?');"></td>	
					</tr>
			</table>

		</form>

	</fieldset>
</div>