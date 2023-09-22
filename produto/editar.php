<?php

require dirname(dirname(__FILE__)).'/config.php';

$cadastro = [];

$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $sql = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $cadastro = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: lista.php");
        exit;
    }

    $sql = $pdo->query("SELECT * FROM categorias");
    if ($sql->rowCount() > 0) {
        $categorias = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

}



?>

<ul>
    <h2>Editar o cadastro do produto</h2>
</ul>
<ul>
    <p>Nessa parte você podera editar o produto e a sua categoria escolhido!</p>
</ul>

<form method="post" action="salvar_edicao.php">
    <label>
        <input type="hidden" name="id" value="<?= $cadastro['id']; ?>">

        <ul>Produto: <input type="text" name="produto" value="<?= $cadastro['produto']; ?>"></ul>

        <label>
            <ul>Categoria : <select name="categoria" required>
            <?php foreach ($categorias as $categoria) { ?>
                        <option value="<?php echo $categoria['id']; ?>"
                        <?php 
                        if ($categoria['id'] == $cadastro['id_categoria']) {
                            echo  'selected';
                        }
                        
                        ?>
                        > <?php echo $categoria['categoria']; ?></option>
                    <?php } ?>
                </select></ul>
        </label>

        </ul>

    </label>
    <label>
        <ul><input type="submit" value="Atualizar Cadastro"></ul>

        <ul><a href="listar.php">Voltar</a></ul>

    </label>

</form>