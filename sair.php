<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Saindo...</title>

	<?php 

	session_start();

		$_SESSION['login'];
		$_SESSION['senha'];

	 ?>

</head>
<body>

	<h2>Você tem certeza que quer sair?</h2>
	<p>
	<a href="validar.php">Não</a>
	<a href="index.php">Sim <?php session_destroy(); ?></a>

</body>
</html>