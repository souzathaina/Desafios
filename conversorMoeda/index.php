<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
</head>

<body>
    <h1>Conversor de Moeda</h1>

    <form method="POST">
        <label>Valor em reais:</label>
        <input type="number" step="0.01" name="valorReais" required><br><br>

        <label>Moeda de destino:</label>
        <select name="moedaDestino">
            <option value="USD">Dólar (USD)</option>
            <option value="EUR">Euro (EUR)</option>
        </select><br><br>

        <label>Cotação atual:</label>
        <input type="number" step="0.01" name="cotacaoAtual" required><br><br>

        <button type="submit">Converter</button>
    </form>

    <?php
    require_once "ConversorMoeda.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorReais = (float) $_POST["valorReais"];
        $moedaDestino = $_POST["moedaDestino"];
        $cotacaoAtual = (float) $_POST["cotacaoAtual"];

        $conversor = new ConversorMoeda($valorReais, $moedaDestino, $cotacaoAtual);

        echo "<h3>Resultado:</h3>";
        echo $conversor->exibirResultado();
    }
    ?>
</body>

</html>