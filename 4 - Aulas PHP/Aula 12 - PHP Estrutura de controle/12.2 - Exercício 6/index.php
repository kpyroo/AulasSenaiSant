<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 - Exercício 1</title>
</head>
<body>
    <form method="GET">
        <label>valor da tabuada</label>
        <input type="number" name="valor1" required>
        <button type="submit">ver</button>



        <br></br>
    </form>
    <?php 
    
        if (isset($_GET["valor1"])){ 
            $valor1 = $_GET["valor1"];
            for($i=1;$i<11;$i++) {
                echo $valor1 * $i. "<br><br>";
            }
        }

        

    
    ?>
</body>
</html>