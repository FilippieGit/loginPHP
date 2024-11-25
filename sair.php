<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Saindo...</title>

	<?php 

		$_SESSION['con'] = 0;

	 ?>


</head>
<body>

	<h2>Você tem certeza que quer sair?</h2>
	<p>
	<a href="index.php">Não <?php $_SESSION['con']++; ?></a>
	<a href="index.php">Sim <?php session_destroy(); ?></a>

</body>
</html>