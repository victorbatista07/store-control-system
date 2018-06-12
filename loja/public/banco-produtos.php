<?php
require_once(__DIR__ . "/../app/libs/conexao-db.php");

function removeProduto($pdo,$id){
    $sql_delete = 'delete from Produtos where id = :id LIMIT 1';
    $stmt_d = $pdo->prepare($sql_delete);
    return $stmt_d->execute(array(':id' => $id));
}

function insereProduto($pdo,$nome,$preco,$descricao,$categoria_id){
    $sql_insert = 'insert into Produtos(nome,preco,descricao,categoria_id) values (:nome, :preco, :descricao,:categoria_id)';
    $stmt_i = $pdo->prepare($sql_insert);
    return $stmt_i->execute(array(':preco' => $preco, ':nome' => $nome, ':descricao' => $descricao, ':categoria_id' => $categoria_id));
}

function alteraProduto($pdo,$id,$nome,$preco,$descricao){
	$sql_alter = 'update Produtos set nome = :nome, preco = :preco, descricao = :descricao where id = :id limit 1';
	$stmt_a = $pdo->prepare($sql_alter);
	return $stmt_a->execute(array(':nome' => $nome, ':preco' => $preco, ':descricao' => $descricao, ':id' => $id));
}

function selecionaProduto($pdo,$inicio,$limite){
	$stmt_s = $pdo->query(sprintf('SELECT p.id, p.nome, p.preco, p.descricao, c.nome as nome_categoria FROM Produtos as p inner join categorias as c on p.categoria_id = c.id order by p.id limit %d,%d' , $inicio, $limite));
	if(!$stmt_s){
	    var_dump($pdo->errorInfo());
	    exit;
	} else {
	return $stmt_s;
	}
}
