<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR UM PRODUTO</title>
</head>

<body>
    <ul>
        <h2>Cadastrar um Produto</h2>
    </ul>
    <ul>
        <p>Aqui você ira cadastrar o seu produto!</p>
        <p>Por gentileza colocar o nome do produto e a categoria!</p>
    </ul>

    <form method="post" action="salvar.php">

        <label>
            <ul>Produto: <input type="text" name="produto"></ul>

        </label>

        <label>
            <ul>
                <p>Coloque a categoria do produto!</p>
            </ul>
            <?php

            require dirname(dirname(__FILE__)).'/config.php';

            $sql = $pdo->query("SELECT * FROM categorias");
            if ($sql->rowCount() > 0) {
                $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
            }
            ?>
            <ul>
                <select name="id_categoria">
                    <?php foreach ($lista as $c) { ?>
                        <option value="<?php echo $c['id']; ?>"> <?php echo $c['categoria']; ?></option>
                    <?php } ?>
                </select>
            </ul>
        </label>

        <ul><input type="submit" value="Cadastrar"></ul>

        <ul><a href="/CadastroProduto">Voltar</a></ul>

    </form>
</body>

</html>