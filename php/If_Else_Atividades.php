<?php
//Recebe as notas
$nota1 = 9;
$nota2 = 10;
$nota3 = 7;

//Imprime as notas
echo $nota1 . '<br/>';
echo $nota2 . '<br/>';
echo $nota3 . '<br/>';

//Calcular a média das notas
$media = ($nota1 + $nota2 + $nota3) / 3;

//Exibe a média calculada
echo '- A média final do aluno é: ' . $media . '<br>';

//Verifica se o aluno está aprovado ou não
if ($media >= 7) {
    echo '*O aluno está aprovado.*';
} else {
    echo '*O aluno está reprovado*';
}
