<?php

require dirname(dirname(__FILE__)) . '/config.php';

//Recupera o dado que vem do formulario
$categoria = $_POST['categoria'];

//Cadastra no banco 
$sql = $pdo->prepare("INSERT INTO categorias (categoria) VALUES (:categoria)");
$sql->bindValue(':categoria',$categoria);
$sql->execute();

header("Location: listar.php");
exit;