<?php
require_once 'Viagem.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Viagem</title>
</head>
<body>
    <h2>Informe os detalhes da viagem</h2>
    <form method="post">
        Origem: <input type="text" name="origem" required><br><br>
        Destino: <input type="text" name="destino" required><br><br>
        Distância (km): <input type="number" step="0.1" name="distancia" required><br><br>
        Tempo estimado (horas): <input type="number" step="0.1" name="tempoEstimado" required><br><br>
        Consumo do veículo (litros/km): <input type="number" step="0.01" name="consumoPorKm" required><br><br>
        Preço do combustível (R$/litro): <input type="number" step="0.01" name="precoCombustivel" required><br><br>
        <input type="submit" value="Calcular Viagem">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $viagem = new Viagem(
            $_POST['origem'],
            $_POST['destino'],
            (float)$_POST['distancia'],
            (float)$_POST['tempoEstimado'],
            (float)$_POST['consumoPorKm'],
            (float)$_POST['precoCombustivel']
        );

        echo "<h3>Resultado da Viagem:</h3>";
        echo $viagem->exibirDados();
    }
    ?>
</body>
</html>