<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 - Exercício 3</title>
</head>
<body>
    <h1>Calcular IMC</h1>
    <form method="GET">
        <label>Qual é seu peso? (em KG)</label>
        <input type="number" name="peso" required>

        <br></br>

        <label>Qual é sua altura? (em metros)</label>
        <input type="float" name="altura" required>

        <br></br>

        <button type="submit">Calcular</button>

    </form>
    <?php 
        if (isset($_GET["peso"]) && isset($_GET["altura"])){
            $peso = $_GET["peso"];
            $altura = $_GET["altura"];
            $imc = round($peso / ($altura * $altura), 2);
            
        echo "<h2>Seu IMC é $imc</h2>";
        }
    ?>
</body>
</html>