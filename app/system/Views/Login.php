<!DOCTYPE html>

<!--
** Author: Lucas de Abreu Mendonça
** Date: 2018-04-30
**
** Tela login-->

<html>
<head>
	<title>SGRS - Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['$urlpadrao'] . 'assets/login.css'?>">
</head>
<body>

	<div class="login">
	<h1>
		Login
	</h1>	
		<form method='post' action="<?php echo $GLOBALS['$urlpadrao'] . 'app/login'?>">
			<input type='text' name='login' placeholder='CPF: xxx.xxx.xxx-xx'><br>
			<input type='password' name='senha' placeholder='Senha'><br>
			<input type='submit' value='Entrar' class="btn btn-primary btn-block btn-large">
		</form>

	</div>
</body>
</html>
