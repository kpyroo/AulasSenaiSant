<?php



$filmes = [
    ["Filme" => "Homem-Aranha", "Genero" => "Ação"],
    ["Filme" => "Toy Story", "Genero" => "Animação"],
    ["Filme" => "Vingadores", "Genero" => "Ação"],
    ["Filme" => "Interestelar", "Genero" => "Ficção Científica"]
];


echo "Filmes de 2026:" . PHP_EOL;
echo $filmes[0]["Filme"] . " - " . $filmes[0]["Genero"] . PHP_EOL;
echo $filmes[1]["Filme"] . " - " . $filmes[1]["Genero"] . PHP_EOL;

?>
