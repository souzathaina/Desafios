<?php
require_once 'Aluno.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Avaliação do Aluno</title>
</head>
<body>
    <h2>Formulário de Notas</h2>
    <form method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Disciplina: <input type="text" name="disciplina" required><br><br>
        Nota 1: <input type="number" step="0.01" name="nota1" required><br><br>
        Nota 2: <input type="number" step="0.01" name="nota2" required><br><br>
        Nota 3: <input type="number" step="0.01" name="nota3" required><br><br>
        <input type="submit" value="Calcular Resultado">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $aluno = new Aluno(
            $_POST['nome'],
            $_POST['disciplina'],
            (float)$_POST['nota1'],
            (float)$_POST['nota2'],
            (float)$_POST['nota3']
        );

        echo "<h3>Resultado:</h3>";
        echo $aluno->exibirDetalhes();
    }
    ?>
</body>
</html>
