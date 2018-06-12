<?php


$dsn = 'mysql:host=localhost;port=3306;dbname=Produtos;charset=utf8';
$usuario = 'joao.batista';
$senha = '';

try {
    $pdo = new PDO($dsn,$usuario,$senha);
} catch (PDOException $e){
    echo 'Erro: '.$e->getMessage();
    exit;
}

