<?php
require dirname(dirname(__FILE__)) . '/config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM categorias");
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<ul>
    <h2>Lista das categorias cadastradas</h2>
</ul>

<ul>
    <tr>
        <table border="5">
            <th>ID</th>
            <th>Categoria</th>
            <th>Data</th>
            <th>Ações</th>


    </tr>

    <?php foreach ($lista as $categoria) : ?>
        <ul>
            <tr>
                <td><?= $categoria['id']; ?></td>
                <td><?= $categoria['categoria']; ?></td>
                <td><?= $categoria['data']; ?></td>
        </ul>
        <td><a href="editar.php?id=<?= $categoria['id']; ?>">[Editar]</a>
        </td>
        </tr>

    <?php endforeach; ?>
</ul>

</table>

<p><a href="cadastro.php">Voltar para a página de cadastro</a></p>

<ul><a href="/CadastroProduto">Voltar</a></ul>