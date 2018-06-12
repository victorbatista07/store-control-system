<?php
session_start();
setlocale(LC_MONETARY,'pt_BR');
require_once(__DIR__ . '/banco-produtos.php');
define("LIMITE",100);
$inicio = 0;
$stmt_s = selecionaProduto($pdo,$inicio,LIMITE);

$mensagem = false;
if (isset($_SESSION['flashdata'])) {
    $mensagem = $_SESSION['flashdata'];
    unset($_SESSION['flashdata']);
}
require_once(__DIR__ . '/../app/templates/lista-produtos.phtml');
