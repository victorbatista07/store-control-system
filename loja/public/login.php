<?php
session_start();
require_once(__DIR__ . "/banco-usuarios.php");
$email = $_POST['user'];
$senha = md5($_POST['password']);
$usuario = buscaUsuario($pdo,$email,$senha);
if ($usuario){
	$_SESSION['usuario-logado'] = $email;
} else {
		$_SESSION['falha-no-login'] = "Falha no login, revise seus atos e tente novamente";
}
header('location:index.php');
