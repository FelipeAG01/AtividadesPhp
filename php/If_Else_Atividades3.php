<?php

// Variáveis de exemplo
$valor_compras = 550.00; // Valor total das compras do cliente
$cliente_vip = true; // Se o cliente é VIP ou não (true para VIP, false para não VIP)

// Verificar se o cliente tem direito ao desconto
if ($valor_compras > 500.00 || $cliente_vip) {
    echo "Cliente com desconto aplicado";
} else {
    echo "Cliente sem desconto";
}

?>