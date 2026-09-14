<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>
    <h1>Somar dois valor</h1>
    <form method="GET">
        <label>primeiro valor</label>
        <input type="number" name="valor1" required>

        <br></br>

        <label>segundo valor</label>
        <input type="number" name="valor2" required>

        <br></br>

        <button type="submit">Somar</button>

    </form>
    <?php 
        if (isset($_GET["valor1"]) && isset($_GET["valor2"])){
            $valor1 = $_GET["valor1"];
            $valor2 = $_GET["valor2"];
            $soma = $valor1 + $valor2;
            
        echo "<h2>O resuldado da soma é $soma</h2>";
        }

        

    
    ?>
</body>
</html>