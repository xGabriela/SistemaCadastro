<?php
	session_start();
	include_once("menu.inc");
	$usuario = $_SESSION['usuarioNome'];
	echo "<center></br>Bem vindo " . $usuario . " </br>Ao Nivel <b>nivel colaborador</b> do nosso sistema de cadastro</center>";	


?>
<br>
<!-- <a href="sair.php">Sair</a> -->