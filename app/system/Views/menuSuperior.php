<!DOCTYPE html>
<html>
<head>
	<title>SGRS - Painel</title>
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://localhost/framework/public/assets/style.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/framework/public/assets/responsivo.css">
	<?php echo ("<script type='text/javascript' src='http://localhost/framework/app/system/js/validacaoForms.js'> </script>"); ?>
</head>
<body style="margin: 0; padding: 0;">

	<div class="wrapper">
		<div id="nav-sidebar">
				<h1 id="nav-logo">SGRS</h1>
				<ul>
					<?php 
					
					$i = 0;

					//Percorre o variável Menu, que é um array com os links que devem ser mostrados na tela
					foreach ($menu as $key => $value) {
						
						//Se $ value for um array significa que o item possui um submenu
						if (is_array($value)) {
							
							//Exibe o nome do item no menu principal
							echo "<a href='#'><img class='icone-menu' src='" . $icones[$i] . "'> <li> " . $key . "<ul class='submenu'>";

							//Percorre o submenu daquele item
							foreach ($value as $k => $v) {
								
								echo "<a href='" . $v . "'> <li> " . $k . "</li></a>";								
							}

							echo "</ul></li>";

						} else {

							echo "<a href='" . $value . "'> <img class='icone-menu' src='" . $icones[$i] . "'> <li> " . $key . "</li></a>";						

						}

						$i++;
					}

					?>
				</ul>
		</div>
	</div>
	