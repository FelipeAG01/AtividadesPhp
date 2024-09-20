<?php
$limite = 10; // Defina até qual número você quer gerar a tabuada

// Loop para os números de 1 ao limite definido
for ($b = 1; $b <= $limite; $b++) {
    echo "Tabuada do $i:<br>";
    
    // Loop para multiplicar o número atual por 1 até o limite definido
    for ($a = 1; $a <= $limite; $a++) {
        $resultado = $b * $a;
        echo "$b x $a = $resultado<br>";
    }
    
    echo "<br>"; // Separador entre as tabuadas
}
?>