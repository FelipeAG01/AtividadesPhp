<?php

// Receber o salário e as horas extras trabalhadas
$salario = 1800.00; // Exemplo de salário
$horas_extras = 12; // Exemplo de horas extras trabalhadas

// Inicializar o bônus como 0
$bonus = 0.0;

// Verificar as condições para aplicar o bônus
if ($salario < 2000.00 && $horas_extras > 10) {
    // Bônus de 20% do salário
    $bonus = 0.20 * $salario;
} elseif ($salario >= 2000.00 && $horas_extras > 5) {
    // Bônus de 18% do salário
    $bonus = 0.18 * $salario;
}

// Calcular o salário total com o bônus
$salario_total = $salario + $bonus;

// Exibir o resultado
echo "Salário base: R$ " . number_format($salario, 2, ',', '.') . "\n";
echo "Bônus: R$ " . number_format($bonus, 2, ',', '.') . "\n";
echo "Salário total: R$ " . number_format($salario_total, 2, ',', '.') . "\n";

?>
