<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Estoque</title>
</head>

<body>
    <h1>Gerenciamento de Estoque</h1>

    <form method="POST">
        <label>Nome do Produto:</label>
        <input type="text" name="nomeProduto" required><br><br>

        <label>Quantidade Inicial:</label>
        <input type="number" name="quantidadeInicial" required><br><br>

        <label>Valor Unitário:</label>
        <input type="number" step="0.01" name="valorUnitario" required><br><br>

        <label>Movimentação:</label>
        <select name="movimentacao">
            <option value="entrada">Entrada</option>
            <option value="saida">Saída</option>
        </select><br><br>

        <label>Quantidade:</label>
        <input type="number" name="quantidadeMovimento" required><br><br>

        <button type="submit">Atualizar Estoque</button>
    </form>

    <?php
    require_once "Produto.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nomeProduto"];
        $quantidadeInicial = (int) $_POST["quantidadeInicial"];
        $valorUnitario = (float) $_POST["valorUnitario"];
        $movimentacao = $_POST["movimentacao"];
        $quantidadeMovimento = (int) $_POST["quantidadeMovimento"];

        $produto = new Produto($nome, $quantidadeInicial, $valorUnitario);

        if ($movimentacao === "entrada") {
            $produto->entradaEstoque($quantidadeMovimento);
        } elseif ($movimentacao === "saida") {
            echo "<p>" . $produto->saidaEstoque($quantidadeMovimento) . "</p>";
        }

        echo "<h3>Estoque Atualizado:</h3>";
        echo $produto->exibirDetalhes();
    }
    ?>
</body>

</html>