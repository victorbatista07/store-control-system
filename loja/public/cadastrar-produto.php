<?php
ini_set('display_errors', 1);

require(__DIR__ . "/../app/libs/conexao-db.php");

$stmt_s = $pdo->query(sprintf('SELECT id, nome FROM categorias order by id'));

$categorias = iterator_to_array($stmt_s);

include(__DIR__ . '/../app/templates/produto-formulario.phtml');

