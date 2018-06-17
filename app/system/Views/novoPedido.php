<div class="dados" style="clear: both;">

	<form>
		<div class="col-3">
			<?php 
				foreach ($dados as $key => $value) {
					echo ("<input style='width: auto' type='checkbox' name='" . $value['nome'] . "'>" . $value['nome'] );
					echo "<br>";

				}



			?>

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

	<div id="teste">
		teste
	</div>

	<form>
	
		<div class="l-pedido salgado">
			<input class="qtd-pedido" type="number" id="qtd-004" name="qtd-004" placeholder="0" disabled="true">
			<input type="checkbox" name="004" id="004" onclick="verficar('004')">
			<label for="004">Pizza Salgado</label>
		</div>	
		<div class="l-pedido pizza">
			<input class="qtd-pedido" type="number" id="qtd-001" name="qtd-001" placeholder="0" disabled="true">
			<input type="checkbox" name="001" id="001" onclick="verficar('001')">
			<label for="001">Pizza de palmito</label>
		</div>

		<div class="l-pedido pizza">
			<input class="qtd-pedido" type="number" id="qtd-002" name="qtd-002" placeholder="0" disabled="true">
			<input type="checkbox" name="002" id="002" onclick="verficar('002')">
			<label for="002">Pizza Croata</label>
		</div>
		<div class="l-pedido pizza">
			<input class="qtd-pedido" type="number" id="qtd-003" name="qtd-003" placeholder="0" disabled="true">
			<input type="checkbox" name="003" id="003" onclick="verficar('003')">
			<label for="003">Pizza Strogonoff</label>
		</div>
		<div class="l-pedido pizza">
			<input class="qtd-pedido" type="number" id="qtd-004" name="qtd-004" placeholder="0" disabled="true">
			<input type="checkbox" name="004" id="004" onclick="verficar('004')">
			<label for="004">Pizza 4 Queijos</label>
		</div>
		<div class="l-pedido doce">
			<input class="qtd-pedido" type="number" id="qtd-004" name="qtd-004" placeholder="0" disabled="true">
			<input type="checkbox" name="004" id="004" onclick="verficar('004')">
			<label for="004">Pizza Brigadeiro</label>
		</div>
		
	</form>

		</div>
		<div class="col-3">
			
		</div>
	</form>

</div>