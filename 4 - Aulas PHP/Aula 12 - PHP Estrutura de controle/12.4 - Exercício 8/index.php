<?php
if (isset($_GET["nomet1"]) && isset($_GET["nomet2"]) && isset($_GET["placart1"]) && isset($_GET["placart2"])) {
    $nomet1 = $_GET["nomet1"];
    $nomet2 = $_GET["nomet2"];
    $placart1 = $_GET["placart1"];
    $placart2 = $_GET["placart2"];
    if ($placart1 == $placart2) {
        echo "<h2 style='color: green;'>O placar está empatado...</h2>";
    }
    elseif ($placart1 > $placart2) {
        echo "<h2 style='color: green;'>O time $nomet1 está ganhando por $placart1:$placart2</h2>";
    }
    elseif ($placart1 < $placart2) {
        echo "<h2 style='color: green;'>O time $nomet2 está ganhando por $placart2:$placart1</h2>";
    }
}
?>
