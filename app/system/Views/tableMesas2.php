<div class="dados" style="clear: both;">


<div class="col-3">
	
	<?php

		$b = COUNT($dados['produtos']);
		echo "<div class='comanda'>";
		if($b > 0){

		echo"<h3>===== Produtos =====</h3><br>";
		echo "<br>";
		echo "Mesa selecionada: " . $dados['mesa'];
		echo "<br>";
		echo "<br>";
		echo "<table style='background-color: #fff!important'>";
		foreach ($dados['produtos'] as $key => $value){
			echo "<tr style='background-color: #fff!important'>";
			echo ('<td>'.$value['nome'] . "</td><td>R$" .$value['preco']);
			echo "</td></div>";
		}
		echo "</table>";

		

		
			echo "<a href='http://localhost/framework/public/painel/mesas/encerrar/$dados[mesa]'><div class='fecharmesa'> Fechar mesa</div></a>";
		}else{
			echo "A mesa não esta aberta";

			echo "<a href='http://localhost/framework/public/painel/pedidos/add'><div class='abrirmesa'> Abrir mesa</div></a>";
		}

		
		echo "</div>";

	?>
</div>
<div class="mesa">			
		<?php

			echo "<br>";
			echo date('d/m/Y');
			echo " - ";
			echo date('l');
			echo "<br><br><hr> <br>";

			echo "<div class='mesas'>";

			foreach ($dados['mesas'] as $key => $value) {
			
			// if($key%2 == 0){
				// echo "<div style='border: 1px groove #000; padding: 0; margin: 5px; display block; float: left'>";
			// } else {
			// 	echo "<tr style='padding: 0; margin: 5px;  display block; float: left' class='l1'>";
			// }

				
		?>

					<div style="width: 20%; padding: 10px; text-align: center; float: left; display: block; border:2px solid #222; margin: 5px; /*font-weight: bold;*/ background: #222222aa; color: #fff;">
					<?php 

						
						echo ("<a style='color: #fff;' href='". $GLOBALS['$urlpadrao'] . 'painel/mesa/' .$value['codMesa']."''><span style='margin: 5px 0; display: inline-block;'>" . $value['codMesa'] . "</span><span class='edt-mesa' style='display: block; font-size: .6em'>editar</span></a>");


					?>
					</div>

		<?php
				}		
				echo "</div>";

		?>
</div>
</div>