<div class="cadastro">
	<div class="title-cadastro">
		Cadastrar Usuário
	</div>
	<div class="form-cadastro">	

		<form method="POST" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/usuario')?>">
				
				<input placeholder="CPF" type="text" name="cpf">
				<input placeholder="Nome" type="text" name="nome">
				<input placeholder="Senha" type="password" name="senha">
				<span style="font-size: .7em; text-align: left;"> Data de Nascimento </span>
				<input type="date" name="dataNasc">
				<input placeholder="RG" type="text" name="rg">
				<input placeholder="Telefone" type="text" name="telefone">
				<input placeholder="Email" type="text" name="email">
				<input placeholder="Função" type="text" name="funcao">
				<select name="estado">
					<option>Estado do usuário</option>
					<option value="1">Ativo</option>
					<option value="0">Inativo</option>
				</select>	
				<br>
				<hr>
				<span style="font-size: .7em; text-align: left;"> Dados de endereço </span>
				<input placeholder="CEP" type="text" name="cep">
				<input placeholder="Número" type="text" name="numero">
				<input placeholder="Complemento" type="text" name="complemento">
				
	</div>			
	<div class="submit-cadastro">
			<input type="submit" value="Enviar">
		</form>
	</div>
</div>