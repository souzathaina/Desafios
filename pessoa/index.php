<?php
require_once 'IMC.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h2>Calcule seu IMC</h2>
    <form method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Peso (kg): <input type="number" step="0.1" name="peso" required><br><br>
        Altura (m): <input type="number" step="0.01" name="altura" required><br><br>
        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $imc = new IMC(
            $_POST['nome'],
            (float)$_POST['peso'],
            (float)$_POST['altura']
        );

        echo "<h3>Resultado:</h3>";
        echo $imc->exibirDados();
    }
    ?>
</body>
</html>