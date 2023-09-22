<?php
 require dirname(dirname(__FILE__)).'/config.php';

$lista = [];
$sql = $pdo->query("SELECT 
p.id as id,
p.produto as produto,
p.data as data,
c.categoria as categoria
FROM produtos as p
inner join categorias c on p.id_categoria=c.id");
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<ul>
    <h2>Lista de produtos cadastrados</h2>
</ul>

<ul>
    <tr>
        <table border="5">
            <th>ID</th>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Data</th>
            <th>Ações</th>
    </tr>

    <?php foreach ($lista as $cadastro) : ?>
        <ul>
            <tr>
                <td><?= $cadastro['id']; ?></td>
                <td><?= $cadastro['produto']; ?></td>
                <td><?= $cadastro['categoria']; ?></td>
                <td><?= $cadastro['data']; ?></td>
        </ul>

        <td><a href="editar.php?id=<?= $cadastro['id']; ?>">[Editar]</a>
            <a href="excluir.php?id=<?= $cadastro['id']; ?>">[Excluir]</a>
        </td>
        </tr>
    <?php endforeach; ?>
</ul>

</table>

<p><a href="cadastro.php">Voltar para a página de cadastro</a></p>

<ul><a href="/CadastroProduto">Voltar</a></ul>