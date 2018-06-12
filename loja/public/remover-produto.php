<?php
session_start();

require(__DIR__ . '/banco-produtos.php');
$id = $_POST['id'];
$removeu_produto = removeProduto($pdo,$id);
if($removeu_produto){
    $_SESSION['flashdata'] = array(
        'texto' => 'Produto removido com sucesso!',
        'class' => 'alert-success',
    );
} else {
    $_SESSION['flashdata'] = array(
       'texto' => 'Produto não foi removido, tente novamente!',
        'class' => 'alert-danger',
    );
}
header("Location:lista-produtos.php");
die ();
