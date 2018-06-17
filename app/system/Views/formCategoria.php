<div class="cadastro">
	<div class="col-4">
		<div class="title-cadastro">
			Adicionar Categoria
		</div>
		<div class="form-cadastro">
			<form method="POST" id="form" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/categoria/add')?>">
				
				<div class="form-group">
					<label for="codCategoria">Código da categoria</label>
					<input id="codCategoria" type="text" name="codCategoria">
					<span class="desc">? 
						<span class="desc-text">Nome completo do novo usuário</span>
					</span>
				</div>

				<div class="form-group">
					<label for="Nome">Nome</label>
					<input id="Nome" type="text" name="nome">
					<span class="desc">? 
						<span class="desc-text">Nome completo do novo usuário</span>
					</span>
				</div>

				<div class="form-group">
					<label for="departamento">Departamento</label>
					<input id="departamento" type="text" name="departamento">
					<span class="desc">? 
						<span class="desc-text">Nome completo do novo usuário</span>
					</span>
				</div>
				<input class="cl-both btn-submit" type="submit" value="Cadastrar">
			</form>
		</div>
	</div>
</div>