<?php

$email = 'ana@alura.com.br';
$senha = 'kafsjdfkahdjkfas';

echo strlen($senha) . PHP_EOL;

if (strlen($senha) < 8) {
    echo 'Senha insergura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

echo substr($email, 0, $posicaoDoArroba) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;
