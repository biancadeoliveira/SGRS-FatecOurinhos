<div class="cadastro">
	<div class="title-cadastro">
		Adicionar Reserva
	</div>
	<div class="form-cadastro">

		<form method="POST" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/reservas')?>">
		
				<input placeholder="CPF Cliente" type="number" name="cpfCliente">
				<input placeholder="Código da mesa" type="number" name="codMesa">
				<label>Data da reserva</label>
				<input type="date" name="dataReserva">
				<label>Hora</label>
				<input type="time" name="hora">
				<select name="estado">
					<option value="1">Estado da reserva </option>
					<option value="1">Ativo</option>
					<option value="0">Inativo</option>
				</select>

	</div>
	<div class="submit-cadastro">
				<input type="submit" value="Enviar">
		</form>

	</div>
</div>