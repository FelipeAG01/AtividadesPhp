<?php
// Criando a array $Cadastro com as subarrays usuario e senha
$Cadastro = [
    'usuario' => ['João', 'Maria', 'Pedro'],
    'senha' => ['1234', 'abcd', '5678']
];
// Alterando o valor "Maria" para "Ana" na subarray usuario
$Cadastro['usuario'][1] = 'Ana';

// Alterando o valor "abcd" para "efgh" na subarray senha
$Cadastro['senha'][1] = 'efgh' ; 

// Exibindo a array completa para verificar as alterações
print_r($Cadastro);
?>
