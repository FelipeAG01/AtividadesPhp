<?php

//Criando a Array cadastro
$cadastro = [];

//Criando uma subarray (nomes)
$cadastro ['nomes'] = ['Felipe', 'Arthur', 'Enzo', 'Gabriel', 'Hamilton'];

//Criando uma subarray (e-mails)
$cadastro ['e-mails'] = ['felipe.a.go@gmail.com', 'arthur.s.sa@gmail.com', 'gabriel.c.pe@gmail.com', 'hamilton.m.neto@gmail.com', 'enzo.y.et@gmail.com'];

echo '<pre>';
print_r($cadastro);
echo '<hr>';
echo $cadastro ['nomes'] [2];
echo $cadastro ['e-mails'] [3];
echo '</pre>';

//$cadastro ['nomes'] [2] = 'SENAI';
//$cadastro ['e-mails'] [0] = 'aluno@senai.br';