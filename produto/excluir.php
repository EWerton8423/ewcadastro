<?php 

require dirname(dirname(__FILE__)).'/config.php';

$id = filter_input(INPUT_GET, 'id');

if($id){

    $sql = $pdo->prepare("DELETE FROM produtos WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

}
 
header("Location: listar.php");

?>