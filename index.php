<?php
require_once 'user.php';
$u = new Usuario();
?>

<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<title>Projeto Login</title>

	<link rel="stylesheet" href="./css/cadastro.css">
	<link rel="stylesheet" href="./connect/connect.php">

	<meta name="viewport" content="width=device-width">
</head>

<body>
	<div id="corpo-form">
		<h1>Entrar</h1>
		<form method="POST">
			<input type="email" placeholder="Usuário" name="email">
			<input type="password" placeholder="Senha" name="senha">
			<input type="submit" value="ACESSAR">
			<a href="cadastro.php">Ainda não é inscrito?<strong>Cadastre-se!</strong></a>
		</form>
	</div>