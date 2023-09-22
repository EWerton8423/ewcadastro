<?php

require dirname(dirname(__FILE__)) . '/config.php';

//Recupera o dado que vem do formulario
$produto = $_POST['produto'];
$id_categoria = $_POST['id_categoria'];

//Cadastra no banco 
$sql = $pdo->prepare("INSERT INTO produtos (produto, id_categoria) VALUES (:produto, :id_categoria)");
$sql->bindValue(':produto',$produto);
$sql->bindValue(':id_categoria',$id_categoria);
$sql->execute();

header("Location: listar.php");
exit;
