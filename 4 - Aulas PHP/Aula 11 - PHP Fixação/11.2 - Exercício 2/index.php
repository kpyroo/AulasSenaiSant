<?php
if (isset($_GET["nota1"]) && isset($_GET["nota2"]) && isset($_GET["nota3"])){
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];
            $nota3 = $_GET["nota3"];
            $nome = $_GET["nome"];
            $total = round(($nota1 + $nota2 + $nota3) / 3, 2);
            echo "<h2>Olá $nome, A sua nota total é: $total</h2>";
            if ($total >= 6.0) {
                echo "<h2 style='color: green;'>Aprovado!</h2>";
            }
            else {
                echo "<h2 style='color: red;'>Reprovado</h2>";
            };
    }

?>