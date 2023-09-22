<?php

require dirname(dirname(__FILE__)).'/config.php';

$cadastro = [];

$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $sql = $pdo->prepare("SELECT * FROM categorias WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $cadastro = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: lista.php");
        exit;
    }

}

?>

<ul>
    <h2>Editar o cadastro da categoria!</h2>
</ul>
<ul>
    <p>Nessa parte você podera editar a categoria que foi escolhido!</p>
</ul>

<form method="post" action="salvar_edicao.php">
    <label>
        <input type="hidden" name="id" value="<?= $cadastro['id']; ?>">

        <label>
        <label>
            <ul>Categoria: <input type="text" name="categoria" value="<?= $cadastro['categoria']; ?>"></ul>
        </label>
        </label>

        </ul>

    </label>
    <label>
        <ul><input type="submit" value="Atualizar Cadastro"></ul>

        <ul><a href="listar.php">Voltar</a></ul>

    </label>

</form>