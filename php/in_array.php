<?php

//Cria um array chamado $frutas contendo três elementos: "maça", "banana" e "laranja".
$frutas = array("maça", "banana", "laranja");

//Verifica se "banana" está presente no array $frutas
if (in_array("banana", $frutas)) {
    //Se "banana" estiver no array, exibe a mensagem "Banana está na lista de frutas".
    echo "Banana está na lista de frutas.";
} else {
    //Se "banana" não estiver no array, exibe a mensagem "Banana não está na lista de frutas.".
    echo "Banana não está na lista de frutas.";
}

?>