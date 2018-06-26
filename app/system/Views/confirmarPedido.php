<div class="dados" style="clear: both;">

	<form method="POST" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/pedidos/add')?>">
		<div class="col-4">

				<div>
					<h2>Mesa selecionada: <?php echo $dados['Mesa']?></h2>
				</div>
				<input type="hidden" name="mesa" value="<?php echo $dados['Mesa']?>">
				<div>
	<?php 

	//Conta a quantidade total de informaões no array, cada produto possui duas informaões, a primeira é a quantidade dele pedida e a segunda é seu código
		
			
			$j = count($dados['Produtos']);

			$numProduto = 0;

//			var_dump($dados['Produtos']);
//			echo "<br> $j <br>";

			echo "<table>";

			//var_dump($dados);

			for ($i=0; $i < $j; $i = $i+2) { 

//				echo "<br>Quantidade = $dados[$i] <br><br> ";				
				$t = $i+1;

				for($a=1; $a<=$dados['Produtos'][$i]; $a++){

					foreach ($dados['Cardapio'] as $k => $v) {

						if($v['codProduto'] == $dados['Produtos'][$t]){
						echo "<tr>";
							echo ('<td>'.$dados['Produtos'][$t] . " - " . $v['nome'] . '</td>');

						}

					}



					echo "<input type='hidden' name='" . $numProduto . "' value=" . $dados['Produtos'][$i+1] . ">";
					

					
					//echo "Produto = " . $dados['Produtos'][$t];	
					echo "<td><textarea name='desc-".$numProduto."' cols='60' rows='3'> </textarea></td></tr>";


					$numProduto++;
				}

			}
 ?>
 			</table>

 				<input class="cl-both btn-submit" type="submit" value="Confirmar Pedido">
 		</div>
 		</div>
 		
</form>
</div>