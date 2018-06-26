<div class="dados" style="clear: both;">
	<div class="col-4">
			<?php 
					if(isset($_GET['status'])){
						if ($_GET['status'] == 0){
							echo "<span class='ok'>Pedido cadastrado com sucesso!</span>";
						}
					} 
				?>
	</div>

	<form method="POST" action="<?php echo ($GLOBALS['$urlpadrao'] . 'painel/pedidos/add/confirmar')?>">
		<div class="col-4">

				<div class="form-group">
					<h3 for="nome">Selecionar mesa </h3>

					<select name="Mesa">
						<?php foreach ($dados['Mesas'] as $key => $value) { ?>
						<option value="<?php echo $value['codMesa'] ?>"><?php echo ('Mesa ' . $value['codMesa']);?></option>
						<?php } ?>
					</select>
				</div>
			
			<?php 

				//Produtos
				foreach ($dados['Cardapio'] as $key => $value) { ?>
					<div class="l-pedido <?php echo $value['nomeCat']?>">
						<input class="qtd-pedido" type="number" id="<?php echo('qtd-'. $value['codProduto']);?>" name="<?php echo('qtd-'. $value['codProduto']);?>" placeholder="0" disabled="true">
						<input type="checkbox" name="<?php echo $value['codProduto']; ?>" value="<?php echo $value['codProduto']; ?>" id="<?php echo $value['codProduto']; ?>" onclick="<?php echo 'verficar(' . $value['codProduto'] . ');' ?>">
						<label for="<?php echo $value['codProduto']; ?>"><?php echo ($value['nomeCat'] . ' - ' . $value['nome'] . ' (' . $value['numProduto'] . ')'); ?></label>
					</div>	

					
				<?php }

			?>

			<input class="cl-both btn-submit" type="submit" value="Próximo">

		</div>
	</form>

			<style>
		*{
			font-family: Roboto;
		}

		.qtd-pedido{
			width: 50px!important;
			padding: 5px;
			font-size: 1em;
			text-align: center;
		}
		
		.l-pedido{
			font-size: 1.2em;
			margin: 5px 0;
			width: 50%;
			float: left;
		}

		.l-pedido input{
			width: auto;
		}

		.busca{
			margin: 15px 0;
		}

	</style>

	<script>

		function verficar(elemento){
			if (document.getElementById(elemento).checked){

				 document.getElementById('qtd-'+elemento).disabled = false;				
				 document.getElementById('qtd-'+elemento).value = '1';

			} else{
				document.getElementById('qtd-'+elemento).disabled = true;					
				document.getElementById('qtd-'+elemento).value = null;
			}
		}

		function filtrar() {
			var b = document.getElementById('src').value;
			
			//Todos os produtos
		    var x = document.getElementsByClassName('l-pedido');


		    var i = 0;
		    var t = x.length;


		    //Produtos da seleção
		    var a = document.getElementsByClassName(b);
		    var c = a.length;
		    alert(c);
		    
		    var i = 0;

		    //Quantidade de produtos
		    var t = x.length;
		    
		    if(t > 0){
			    while (i < t){
			    	x[i].style.display="block";	

			    	for (j = 0; j < c; j++){
			    		if (x[i] != a[j]) {
			    			x[i].style.display="none";	
			    			break;
			    		}
			    	}

			    	//document.getElementById("demo").innerHTML = x[i].innerHTML;
			        i++;
			    }
			}
		}

		function displayBlock(){
			//Todos os produtos
		    var x = document.getElementsByClassName('l-pedido');

		    var i = 0;
		    var t = x.length;

		    while (i < t){
		    	x[i].style.display="block";
		    }

		}

	</script>
</head>
<body>

	<div class="busca"> 
		<input type="text" id="src" name="busca">
		<input type="button" onclick="filtrar()" value="Filtrar">
	</div>


		</div>
		<div class="col-3">
			
		</div>

</div>