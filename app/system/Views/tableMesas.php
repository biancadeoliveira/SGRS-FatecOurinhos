<table class="dados">
			<tr>
				<th><label>Mesa</label></th>
				<th colspan="2"><label>-</label></th>
			</tr>

		<?php


			foreach ($dados['mesas'] as $key => $value) {
			
			// if($key%2 == 0){
				echo "<tr style='border: 1px groove #000; padding: 0; margin: 5px; display block; float: left'>";
			// } else {
			// 	echo "<tr style='padding: 0; margin: 5px;  display block; float: left' class='l1'>";
			// }

				
		?>
					<td style="padding: 5px;">
					<?php 
						if ($value['codMesa'] == '1') {
							echo "<div style='border-top: 7px solid green; padding: 3px; font-size: 1.5em; text-align: center;'>";
						} else {
							echo "<div style='border-top: 7px solid red; padding: 3px; font-size: 1.5em; text-align: center;'>";
						}
						echo ("<span style='margin: 10px 0; display: inline-block;'>" . $value['codMesa'] . "</span>");

					?>
						<br>
						<span class="tdBtn editar"><a href="#"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-edit.png')?>"></a></span>
						<span class="tdBtn excluir"><a href="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/cidade/delete/' . $value['codCidade']);?>"><img src="<?php echo ($GLOBALS['$urlImg'].'icons/btn-delete.png')?>"></a></span>
					</td>
					
				</tr>

		<?php
				}		

		?>
</table>