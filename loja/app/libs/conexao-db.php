<?php


$dsn = 'mysql:host=localhost;port=3306;dbname=meu-banco;charset=utf8';
$usuario = 'meu-usuario';
$senha = '';

try {
    $pdo = new PDO($dsn,$usuario,$senha);
} catch (PDOException $e){
    echo 'Erro: '.$e->getMessage();
    exit;
}

