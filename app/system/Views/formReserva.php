<div class="cadastro">
	<div class="col-4">
	<div class="title-cadastro">
		Adicionar Reserva
	</div>
	<div class="form-cadastro">

		<form method="POST" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/reserva/add')?>">
		
				<div class="form-group">
					<label for="nome">CPF</label>
					<input id="cpfCliente" type="number" name="cpfCliente">
					<span class="desc">? 
						<span class="desc-text">CPF do cliente</span>
					</span>
				</div>

				<div class="form-group">
					<label for="codMesa">Codigo Mesa</label>
					<input id="codMesa" type="number" name="codMesa">
					<span class="desc">? 
						<span class="desc-text">Codigo da Mesa</span>
					</span>
				</div>

				<div class="form-group">
					<label for="dataReserva">Data da Reserva</label>
					<input type="date" id="dataReserva" name="dataReserva">
					<span class="desc">?
						<span class="desc-text">Data da reserva</span>
					</span>
				</div>

				<div class="form-group">
					<label for="hora">Hora da Reserva</label>
					<input type="time" id="hora" name="hora">
					<span class="desc">?
						<span class="desc-text">Data da reserva</span>
					</span>
				</div>

				<div class="form-group">
					<label for="cpf">Estado da reserva</label>
					<select name="estado">
						<option value="1">Ativo</option>
						<option value="0">Inativo</option>
					</select>
					<span class="desc">?</span>	
				</div>

	</div>
	<input class="cl-both btn-submit" type="submit" value="Cadastrar">
	</div>

	</div>
</div>