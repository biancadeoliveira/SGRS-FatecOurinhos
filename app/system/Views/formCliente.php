<div class="cadastro">
	<div class="title-cadastro">
		Cadastrar Cliente
	</div>
	<div class="form-cadastro">	   
	
		<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/clientes')?>">
	
					<input type="number" name="cpf" placeholder="CPF">
					<input type="text" name="nome" placeholder="Nome">
					<input type="text" name="rg" placeholder="RG">
					<input type="number" name="telefone" placeholder="Telefone/Celular">
					<input type="text" name="email" placeholder="E-mail">
	</div>
	<div class="submit-cadastro">
		<input type="button" value="Inserir" style="height: 100%;" onclick="confirmarExclusao('Confirmar cadastro?');">
		</form>
	</div>
</div>