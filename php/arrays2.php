<?php

// Criando a array Lista de frutas
$lista_frutas = ["Banana", "Maça", "Morango", "Uva"];

echo '<pre>';
print_r ($lista_frutas);
echo $lista_frutas[0];
echo "<br>";
echo "</pre>";

echo "<pre>";
// Alterando o Valor 0 -> Banana para Melancia
$lista_frutas[0] = "Melancia";
print_r ($lista_frutas);
echo "</pre>";

echo "<br>";

echo $lista_frutas[0];

?>