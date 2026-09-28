<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12.7 - Desafio</title>
</head>
<body>
    <h1>Média de nota</h1>
    <form method="GET">
        <label>primeiro valor</label>
        <input type="number" name="valor1" required>

        <br></br>

        <label>segundo valor</label>
        <input type="number" name="valor2" required>

        <br></br>

        <button type="submit">Calcular</button>

    </form>
    <?php 
        if (isset($_GET["valor1"]) && isset($_GET["valor2"])){
            $valor1 = $_GET["valor1"];
            $valor2 = $_GET["valor2"];
            $media = ($valor1 + $valor2) / 2;
            
        echo "<h2>O resuldado da média é $media</h2>";
            if ($media < 40) {
                echo "<h2 style='color: red;'>Reprovado!</h2>";
            }
            elseif ($media < 60) {
                echo "<h2 style='color: yellow;'>Recuperação!</h2>";
            }
            elseif ($media >= 60) {
                echo "<h2 style='color: green;'>Aprovado!</h2>";
            }
        }
    ?>
</body>
</html>