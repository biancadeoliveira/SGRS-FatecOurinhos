<div class="cadastro">
	<div class="col-4">
		<div class="title-cadastro">
			Dados Pessoais
		</div>
		<div class="form-cadastro">	

			<form method="POST" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/usuario/add')?>">
					

				<div class="form-group">
					<label for="nome">Nome</label>
					<input id="nome" type="text" name="nome">
					<span class="desc">? 
						<span class="desc-text">Nome completo do novo usuário</span>
					</span>
				</div>
				
				<div class="form-group">
					<label for="cpf">CPF</label>
					<input type="text" id="cpf" name="cpf">
					<span class="desc">?
						<span class="desc-text">CPF do novo usuário, utilize somente números</span>
					</span>
				</div>
				<div class="form-group">
					<label for="senha">Senha</label>
					<input id="senha" type="password" name="senha">
					<span class="desc">?
						<span class="desc-text">Senha que deve ser utilizada pelo novo usuário para logar no painel administrativo do sistema.</span>
					</span>
				</div>
				<div class="form-group">
					<label for="dtnasc">Data de Nascimento</label>
					<input type="date" id="dtnasc" name="dataNasc">
					<span class="desc">?
						<span class="desc-text">Data de nascimento do novo usuário</span>
					</span>
				</div>
				<div class="form-group">
					<label for="cpf">RG</label>
					<input placeholder="RG" type="text" name="rg">
					<span class="desc">?
						<span class="desc-text">RG do novo usuário</span>
					</span>

				</div>
				<div class="form-group">
					<label for="cpf">Telefone</label>
					<input placeholder="Telefone" type="text" name="telefone">
					<span class="desc">?
						<span class="desc-text">Telefone do novo usuário.</span>
					</span>
				</div>
				<div class="form-group">
					<label for="cpf">E-mail</label>
					<input placeholder="Email" type="text" name="email">
					<span class="desc">?
						<span class="desc-text">E-mail de contato do novo usuário.</span>
					</span>
				</div>
				<div class="form-group">
					<label for="cpf">Função</label>
					<input placeholder="Função" type="text" name="funcao">
					<span class="desc">?
						<span class="desc-text">Função do novo usuário no sistema (Caixa / Garçom / Administrador)</span>
					</span>
				</div>
				<div class="form-group">
					<label for="cpf">Estado do usuário</label>
					<select name="estado">
						<option value="1">Ativo</option>
						<option value="0">Inativo</option>
					</select>
					<span class="desc">?</span>	
				</div>
		</div>
	</div>
<div class="col-4 cl-both">
	<div class="title-cadastro">
		Dados de Endereço
	</div>

			<div class="form-group">
				<label for="cep">CEP</label>
				<input id="cep" type="text" name="cep">
				<span class="desc">?</span>
			</div>
			<div class="form-group">
				<label for="num">Número</label>
				<input id="num" type="text" name="numero">
				<span class="desc">?</span>
			</div>
			<div class="form-group">
				<label for="cpf">Complemento</label>
				<input id="complemento" type="text" name="complemento">
				<span class="desc">?</span>
			</div>
		
			<input class="cl-both btn-submit" type="submit" value="Cadastrar">
		
	</div>			
</div>			
	
