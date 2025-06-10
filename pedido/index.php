<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
</head>

<body>
    <h1>Formulário de Pedido</h1>
    <form method="POST">
        <label>Nome do Produto:</label>
        <input type="text" name="nomeProduto" required><br><br>

        <label>Quantidade:</label>
        <input type="number" name="quantidade" required><br><br>

        <label>Preço Unitário:</label>
        <input type="number" step="0.01" name="precoUnitario" required><br><br>

        <label>Tipo de Cliente:</label>
        <select name="tipoCliente">
            <option value="normal">Normal</option>
            <option value="premium">Premium</option>
        </select><br><br>

        <button type="submit">Calcular Pedido</button>
    </form>

    <?php
    require_once "Pedido.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nomeProduto"];
        $quantidade = (int) $_POST["quantidade"];
        $precoUnitario = (float) $_POST["precoUnitario"];
        $clientePremium = ($_POST["tipoCliente"] === "premium");

        $pedido = new Pedido($nome, $quantidade, $precoUnitario, $clientePremium);

        echo "<h3>Resultado:</h3>";
        echo $pedido->exibirDetalhes();
    }
    ?>
</body>

</html>