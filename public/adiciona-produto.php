<?php

require(__DIR__ . "/banco-produtos.php");
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
$inseriu_produto = insereProduto($pdo,$nome,$preco,$descricao,$categoria_id);
require_once(__DIR__ . "/../app/templates/adicionar-produto-template.phtml");
