	<?php
session_start();
$servidor = 'localhost';
$usuario = 'root';
$senha = 'usbw';
$banco ='db_alunos';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
$mysqli->set_charset("utf8");
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>
<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
	<title>Alunos</title>
</head>
<body>