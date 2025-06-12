<?php
require_once 'CalculadoraGeometrica.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Área</title>
</head>
<body>
    <h2>Escolha a figura e insira as medidas</h2>
    <form method="post">
        Tipo de figura:
        <select name="tipoFigura" required>
            <option value="quadrado">Quadrado</option>
            <option value="retângulo">Retângulo</option>
            <option value="círculo">Círculo</option>
        </select><br><br>
        Medida 1: <input type="number" step="0.01" name="medida1" required><br><br>
        Medida 2 (caso retângulo): <input type="number" step="0.01" name="medida2"><br><br>
        <input type="submit" value="Calcular Área">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $figura = new Calculadora(
            $_POST['tipoFigura'],
            (float)$_POST['medida1'],
            isset($_POST['medida2']) ? (float)$_POST['medida2'] : null
        );

        echo "<h3>Resultado:</h3>";
        echo $figura->exibirDados();
    }
    ?>
</body>
</html>