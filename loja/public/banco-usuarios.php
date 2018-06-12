<?php

require(__DIR__ . '/../app/libs/conexao-db.php');

function buscaUsuario($pdo,$email,$senha){
	$stmt_select = "select senha from usuarios where email = :email limit 1";
	$stmt_s = $pdo -> prepare($stmt_select);
	$stmt_s -> execute(array(':email' => $email));
	if (!$stmt_s->rowCount()){
		return false;
	}
    $usuario = $stmt_s->fetchObject();
	return $usuario->senha == $senha;
}
