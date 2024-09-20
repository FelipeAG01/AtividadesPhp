<?php
// Inicializar a variável que armazenará a soma
$soma = 0;

// Usar um loop para somar os números de 1 a 100
for ($i = 1; $i <= 100; $i++) {
    // Mostrar o cálculo atual
    echo "Soma atual: $soma + $i = " . ($soma + $i) . "<br>";
    
    // Adicionar o valor atual à soma
    $soma += $i; "<br>";
}

// Exibir o resultado final
echo "A soma final dos números de 1 a 100 é: " . $soma . "<br>";
?>
