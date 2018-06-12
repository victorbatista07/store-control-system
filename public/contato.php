<?php
session_start();

$nome = $_POST['nome'];
$email = $_SESSION['usuario-logado'];
$mensagem = $_POST['mensagem'];

require_once(__DIR__ . '/../app/templates/contato.phtml');
