<?php
session_start();
require(__DIR__ . '/banco-produtos.php');
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$id = $_POST['id'];
$descricao = $_POST['descricao'];
$altera_produto = alteraProduto($pdo,$id,$nome,$preco,$descricao);
if ($altera_produto){
	$_SESSION['flashdata'] = array(
	'texto' => 'Produto alterado com sucesso!',
	'class' => 'alert-success',
	);
} else {
	$_SESSION['flashdata'] = array(
	'texto' => 'Produto não foi alterado!',
	'class' => 'alert-danger',
	);
}
require
header('Location:lista-produtos.php');
die();
