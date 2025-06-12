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
        <label>Modelo:</label>
        <input type="text" name="modelo" required><br><br>

        <label>Tipo de Combustivel:</label>
        <select name="combustivel">
            <option value="normal">Gasolina</option>
            <option value="premium">Etanol</option>
        </select><br><br>

        <label>Consumo (Km/l):</label>
        <input type="number" name="consumo" required><br><br>

        <label>Valor do Combustivel:</label>
        <input type="number" step="0.01" name="precoCombustivel" required><br><br>

        <label>Kilometros rodados:</label>
        <input type="number" name="kmRodado" required><br><br>

        <label>Capacidade do Tanque (litros):</label>
        <input type="number" step="0.01" name="tanque" required><br><br>

        <button type="submit">Verificar</button>
    </form>

    <?php
    require_once "Carro.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $modelo = $_POST["modelo"];
        $combustivel = ($_POST["combustivel"] === "gasolina");
        $tanque = (int) $_POST["tanque"];
        $consumo = (float) $_POST["consumo"];
        $kmRodado = (float) $_POST["kmRodado"];
        $precoCombustivel = (float) $_POST["precoCombustivel"];

        $pedido = new Carro($modelo, $combustivel, $tanque, $consumo, $kmRodado);
        echo "<h3>Resultado:</h3>";
        echo $pedido->exibirDados($precoCombustivel);
    }
    ?>
</body>

</html>