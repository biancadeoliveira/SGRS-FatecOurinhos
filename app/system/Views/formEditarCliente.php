<div class="cadastro">
	<div class="col-4">
		<div class="title-cadastro">
			Informações do cliente
		</div>
		<div class="form-cadastro">

		<?php foreach ($dados['Clientes'] as $value => $key){?>

			<form method="POST" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/clientes/editar/'.$key['cpf'])?>">

				<div class="form-group">
					<label for="cpf">CPF</label>
					<input id="cpf" type="number" name="cpf" value="<?php echo $key['cpf']?>">
					<span class="desc">? 
						<span class="desc-text">Número do CPF do cliente</span>
					</span>
				</div>

				<div class="form-group">
					<label for="nome">Nome</label>
					<input id="nome" type="text" name="nome" value="<?php echo $key['nome']?>">
					<span class="desc">? 
						<span class="desc-text">Nome do cliente</span>
					</span>
				</div>


				<div class="form-group">
					<label for="rg">RG</label>
					<input id="rg" type="number" name="rg" value="<?php echo $key['rg']?>">
					<span class="desc">? 
						<span class="desc-text">Número de RG do cliente</span>
					</span>
				</div>

				<div class="form-group">
					<label for="telefone">Telefone</label>
					<input id="telefone" type="number" name="telefone" value="<?php echo $key['telefone']?>">
					<span class="desc">? 
						<span class="desc-text">Número de telefone do cliente</span>
					</span>
				</div>


				<div class="form-group">
					<label for="email">E-mail</label>
					<input id="email" type="text" name="email" value="<?php echo $key['email']?>">
					<span class="desc">? 
						<span class="desc-text">Endereço de e-mail do cliente</span>
					</span>
				</div>



				<?php 
					if(isset($_GET['status'])){
						if ($_GET['status'] == 1){
							echo "<span class='ok'>Alterações salvas com sucesso!</span>";
						}
					} 
				?>

				<input class="cl-both btn-submit" type="submit" value="Salvar alterações">
				<div class="btn-voltar">
					<a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/clientes')?>"> Voltar </a>
				</div>

			</form>

			<?php } ?>

		</div>

	</div>
</div>