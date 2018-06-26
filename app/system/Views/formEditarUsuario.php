<div class="cadastro">
	<div class="col-4">
		<div class="title-cadastro">
			Informações do Usuário
		</div>
		<div class="form-cadastro">

		<?php foreach ($dados['Usuario'] as $value => $key){?>

			<form method="POST" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/usuario/editar/'. $key['cpf'])?>">

				<div class="form-group">
					<label for="nome">Nome</label>
					<input id="nome" type="text" name="nome" value="<?php echo $key['nome'] ?>">
					<span class="desc">? 
						<span class="desc-text">Nome completo do novo usuário</span>
					</span>
				</div>
				
				<div class="form-group">
					<label for="cpf">CPF</label>
					<input type="text" id="cpf" name="cpf" value="<?php echo $key['cpf'] ?>">
					<span class="desc">?
						<span class="desc-text">CPF do novo usuário, utilize somente números</span>
					</span>
				</div>
				<div class="form-group">
					<label for="senha">Senha</label>
					<input id="senha" type="password" name="senha" value="<?php echo $key['senha'] ?>">
					<span class="desc">?
						<span class="desc-text">Senha que deve ser utilizada pelo novo usuário para logar no painel administrativo do sistema.</span>
					</span>
				</div>
				<div class="form-group">
					<label for="dtnasc">Data de Nascimento</label>
					<input type="date" id="dtnasc" name="dataNasc" value="<?php echo $key['dataNasc'] ?>">
					<span class="desc">?
						<span class="desc-text">Data de nascimento do novo usuário</span>
					</span>
				</div>
				<div class="form-group">
					<label for="rg">RG</label>
					<input type="text" name="rg" value="<?php echo $key['rg'] ?>">
					<span class="desc">?
						<span class="desc-text">RG do novo usuário</span>
					</span>

				</div>
				<div class="form-group">
					<label for="cpf">Telefone</label>
					<input placeholder="Telefone" type="text" name="telefone" value="<?php echo $key['telefone'] ?>">
					<span class="desc">?
						<span class="desc-text">Telefone do novo usuário.</span>
					</span>
				</div>
				<div class="form-group">
					<label for="cpf">E-mail</label>
					<input type="text" name="email" value="<?php echo $key['email'] ?>">
					<span class="desc">?
						<span class="desc-text">E-mail de contato do novo usuário.</span>
					</span>
				</div>
				<div class="form-group">
					<label for="cpf">Função</label>
					<!-- <input type="text" name="funcao" value="<?php echo $key['funcao'] ?>"> -->
					<select name="funcao">
						<?php if($key['funcao'] == 'Gerente'){
							echo "<option value='Gerente' selected >Gerente</option>";
							echo "<option value='Caixa'>Caixa</option>";
							echo "<option value='Garcom'>Garçom</option>";
						} else if($key['funcao'] == 'Caixa'){
							echo "<option value='Gerente'>Gerente</option>";
							echo "<option value='Caixa' selected>Caixa</option>";
							echo "<option value='Garcom'>Garçom</option>";
						} else if($key['funcao'] == 'Garcom'){
							echo "<option value='Gerente'>Gerente</option>";
							echo "<option value='Caixa'>Caixa</option>";
							echo "<option value='Garcom' selected>Garçom</option>";
						}?>
					</select>
					<span class="desc">?
						<span class="desc-text">Função do novo usuário no sistema (Caixa / Garçom / Gerente)</span>
					</span>
				</div>
				<div class="form-group">
					<label for="estado">Estado do usuário</label>
					<select name="estado">
						<?php if($key['estado'] == 1){
							echo "<option value='1' selected >Ativo</option>";
							echo "<option value='0'>Inativo</option>";
						} else {
							echo "<option value='1'>Ativo</option>";
							echo "<option value='0' selected>Inativo</option>";
						}?>
					</select>
					<span class="desc">?</span>	
				</div>

				<div class="form-group">
					<label for="cep">CEP</label>
					<input id="cep" type="text" name="cep" value="<?php echo ($key['cep']); ?>">
					<span class="desc">?</span>
				</div>
				<div class="form-group">
					<label for="num">Número</label>
					<input id="num" type="text" name="numero" value="<?php echo ($key['numero']); ?>">
					<span class="desc">?</span>
				</div>
				<div class="form-group">
					<label for="cpf">Complemento</label>
					<input id="complemento" type="text" name="complemento" value="<?php echo ($key['complemento']); ?>">
					<span class="desc">?</span>
				</div>

				<input class="cl-both btn-submit" type="submit" value="Salvar alterações">
				<div class="btn-voltar">
					<a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/usuario')?>"> Voltar </a>
				</div>

			</form>

			<?php } ?>

		</div>

	</div>
</div>