<?php
// Inicializar a variável para a soma das raízes quadradas
$somaRaizes = 0;

// Loop para calcular e exibir a raiz quadrada de cada número de 1 a 50
for ($i = 1; $i <= 50; $i++) {
    // Calcular a raiz quadrada
    $raizQuadrada = sqrt($i);
    
    // Exibir o número e sua raiz quadrada
    echo "Raiz quadrada de $i é " . number_format($raizQuadrada, 2) . "<br>";
    
    // Adicionar a raiz quadrada à soma total
    $somaRaizes += $raizQuadrada;
}
?>
