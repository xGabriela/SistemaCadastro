<?php
	session_start();
	include_once("menu.inc");
	// echo "Usuario: ". $_SESSION['usuarioNome'];
	$usuario = $_SESSION['usuarioNome'];
	echo "<center></br>Bem vindo " . $usuario . " </br>Ao Nivel <B> CLIENTE </B> a nosso sistema de cadastro</center>";	
?>
<br>
<!-- <a href="sair.php">Sair</a> -->