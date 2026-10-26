<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Cliente</title>
</head>
<body>

<h2>Cadastro de Cliente</h2>

<form method="post">
    Nome: <input type="text" name="nome"><br><br>
    Idade: <input type="number" name="idade"><br><br>
    Email: <input type="email" name="email"><br><br>
    Telefone: <input type="text" name="telefone"><br><br>
    Endereço: <input type="text" name="endereco"><br><br>

    <input type="submit" value="Cadastrar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cliente = [
        "nome" => $_POST["nome"],
        "idade" => $_POST["idade"],
        "email" => $_POST["email"],
        "telefone" => $_POST["telefone"],
        "endereco" => $_POST["endereco"]
    ];

    echo "<h2>Dados cadastrados:</h2>";
    echo "Nome: " . $cliente["nome"] . "<br>";
    echo "Idade: " . $cliente["idade"] . "<br>";
    echo "Email: " . $cliente["email"] . "<br>";
    echo "Telefone: " . $cliente["telefone"] . "<br>";
    echo "Endereço: " . $cliente["endereco"] . "<br>";
}

?>

</body>
</html>
