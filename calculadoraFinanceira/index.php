<?php
require_once 'CalculadoraFinanceira.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Simulador de Financiamento</title>
</head>
<body>
    <h2>Informe os detalhes do financiamento</h2>
    <form method="post">
        Valor da compra: <input type="number" step="0.01" name="valorCompra" required><br><br>
        Número de parcelas: <input type="number" name="numParcelas" required><br><br>
        Taxa de juros mensal (%): <input type="number" step="0.01" name="taxaJuros" required><br><br>
        <input type="submit" value="Calcular Financiamento">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $financiamento = new Financiamento(
            (float)$_POST['valorCompra'],
            (int)$_POST['numParcelas'],
            (float)$_POST['taxaJuros']
        );

        echo "<h3>Resultado do Financiamento:</h3>";
        echo $financiamento->exibirDados();
    }
    ?>
</body>
</html>