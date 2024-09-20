<?php
// Definir a constante para o número máximo
define('NUMERO_MAXIMO', 75);

// Inicializar o contador com o primeiro número ímpar
$contador = 1;

do {
    // Imprimir o número ímpar
    echo $contador . "\n";
    
    // Incrementar o contador em 2
    $contador += 2;
} while ($contador <= NUMERO_MAXIMO);
?>