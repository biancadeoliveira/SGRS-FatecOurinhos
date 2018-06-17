<div class="dados" style="clear: both;">
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
						
						echo ("<span style='margin: 5px 0; display: inline-block;'>" . $value['codMesa'] . "</span><span class='edt-mesa' style='display: block; font-size: .6em'>editar</span>");


					?>
					</div>

		<?php
				}		
				echo "</div>";

		?>
</div>
</div>