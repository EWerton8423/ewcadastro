<?php 

require dirname(dirname(__FILE__)) . '/config.php';

$id = $_POST['id'];
$produto = $_POST['produto'];
$categoria = $_POST['categoria'];

$sql = $pdo->prepare("UPDATE produtos SET produto = :produto, id_categoria = :id_categoria WHERE id = :id");
$sql->bindValue(':produto', $produto);
$sql->bindValue(':id_categoria', $categoria);
$sql->bindValue(':id', $id);
$sql->execute();

//Codigo para voltar para a pagina que foi selecionada
header("Location: listar.php");
exit;

?>