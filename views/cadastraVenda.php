<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Vendas</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <a href="../index.php" class="home-button">🏠</a>

    <h2>Cadastro de Vendas:</h2>
    <form id="cadastroForm" action="../services/processaCadastroVendas.php" method="post">
        <label>Id do cliente</label>
        <input type="text" name="idcliente" required>
        <label>Preço total:</label>
        <input type="number" name="precototal" required>
        <label>Produto:</label>
        <input type="text" name="produto" required>


        <button type="submit">Cadastra Venda</button>
    </form>

    <a href="indexVendas.php" class="button">Ver Lista de Vendas</a>

</body>

</html>