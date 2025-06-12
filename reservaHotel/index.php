<?php
require_once 'ReservaHotel.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Reserva de Hospedagem</title>
</head>
<body>
    <h2>Faça sua reserva</h2>
    <form method="post">
        Nome do hóspede: <input type="text" name="nomeHospede" required><br><br>
        Número de noites: <input type="number" name="numNoites" required><br><br>
        Tipo de quarto: 
        <select name="tipoQuarto" required>
            <option value="simples">Simples</option>
            <option value="luxo">Luxo</option>
            <option value="suíte">Suíte</option>
        </select><br><br>
        <input type="submit" value="Reservar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $hospedagem = new Hospedagem(
            $_POST['nomeHospede'],
            (int)$_POST['numNoites'],
            $_POST['tipoQuarto']
        );

        echo "<h3>Resumo da Reserva:</h3>";
        echo $hospedagem->exibirDados();
    }
    ?>
</body>
</html>