<?php
if (isset($_GET["v1"]) && isset($_GET["v1"]) && isset($_GET["v3"])){
            $v1 = $_GET["v1"];
            $v2 = $_GET["v2"];
            $v3 = $_GET["v3"];
            $total = $v1 + $v2 + $v3;
            echo "<h2>Valor somado: $total</h2>";
    }

?>