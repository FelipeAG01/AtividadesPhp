<?php
$posicoes = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Exibindo o array criado
echo "Array inicial: ";
print_r($posicoes);

// 2. Alterando os valores nas posições específicas
$posicoes[0] = 100; // Posição 0: Alterando para 100
$posicoes[4] = 500; // Posição 4: Alterando para 500
$posicoes[9] = 1000; // Posição 9: Alterando para 1000

// Exibindo o array completo após as alterações
echo "Array após alterações: ";
print_r($posicoes);
?>