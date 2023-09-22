<?php 

require dirname(dirname(__FILE__)) . '/config.php';

$id = $_POST['id'];
$categoria = $_POST['categoria'];

$sql = $pdo->prepare("UPDATE categorias SET categoria = :categoria WHERE id = :id");
$sql->bindValue(':categoria', $categoria);
$sql->bindValue(':id', $id);
$sql->execute();

//Codigo para voltar para a pagina que foi selecionada
header("Location: listar.php");
exit;

?>
