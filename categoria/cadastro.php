<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR CATEGORIA</title>
</head>

<body>
    <ul>
        <h2>Cadastrar a categoria do produto</h2>
    </ul>
    <ul>
        <p>Aqui você ira cadastrar a categoria do produto</p>
        <p>Coloque no campo de baixo a categoria do seu produto!</p>
    </ul>

    <form method="post" action="salvar.php">

        <label>
            <ul>Categoria: <input type="text" name="categoria"></ul>
        </label>

        <label>
        <ul><input type="submit" value="Cadastrar"></ul>
        <ul><a href="/CadastroProduto">Voltar</a></ul>
    </form>
</body>

</html>