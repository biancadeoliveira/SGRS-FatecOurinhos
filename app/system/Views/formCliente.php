<div class="cadastro">
	<div class="col-4">
	<div class="title-cadastro">
		Cadastrar Cliente
	</div>
	<div class="form-cadastro">	   
	
		<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/clientes/add')?>">
				
				<div class="form-group">
					<label for="cpf">CPF</label>
					<input id="cpf" type="number" name="cpf">
					<span class="desc">? 
						<span class="desc-text">CPF do cliente. Insira apenas numeros</span>
					</span>
				</div>

				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" id="nome" name="nome">
					<span class="desc">?
						<span class="desc-text">Nome completo do cliente</span>
					</span>
				</div>

				<div class="form-group">
					<label for="rg">RG</label>
					<input placeholder="RG" type="text" name="rg">
					<span class="desc">?
						<span class="desc-text">RG do cliente</span>
					</span>
				</div>

				<div class="form-group">
					<label for="telefone">Telefone</label>
					<input placeholder="Telefone" type="text" name="telefone">
					<span class="desc">?
						<span class="desc-text">Telefone do cliente</span>
					</span>
				</div>

				<div class="form-group">
					<label for="email">E-mail</label>
					<input placeholder="Email" type="text" name="email">
					<span class="desc">?
						<span class="desc-text">E-mail de contato do cliente.</span>
					</span>
				</div>

				<input class="cl-both btn-submit" type="submit" value="Cadastrar">
		</form>

	</div>
	</div>
</div>
</div>