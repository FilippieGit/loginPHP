<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validação</title>

	<?php 

		$_SESSION['login'] = $_POST['login'];
		$_SESSION['senha'] = $_POST['senha'];

	 ?>

</head>
<body>


	<?php

		$con = 0;

		if ($_SESSION['login'] == 'admin' && $_SESSION['senha'] == '1234') {
			$con++;
			$_SESSION['usuario'] = "Administrador";
		}elseif ($_SESSION['login'] == 'visit' && $_SESSION['senha'] == '12345') {
			$con++;
			$_SESSION['usuario'] = "Visitante";
		}elseif ($_SESSION['login'] == 'colab' && $_SESSION['senha'] == '123456') {
			$con++;
			$_SESSION['usuario'] = "Colaborador";
		}else{
			echo "Houve um erro ao validar seus dados.<br><a href='index.php'>Tentar novamente<?php session_destroy(); ?> </a>";
		}

		if ($con == 1) {

	?>

			<p>Seja bem-vindo <?php echo $_SESSION['usuario']; ?></p>
			<p>
			<a class="btn btn-dark" href="sair.php">Sair</a>


	<?php } ?>

</body>
</html>