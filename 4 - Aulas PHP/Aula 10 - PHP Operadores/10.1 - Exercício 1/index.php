<?php
if (isset($_GET["quantidade"]) && isset($_GET["valor"])){
            $quantidade = $_GET["quantidade"];
            $valor = $_GET["valor"];
            $total = round(($quantidade * $valor), 2);
            echo "<h2>Valor total: $total</h2>";
    }

?>