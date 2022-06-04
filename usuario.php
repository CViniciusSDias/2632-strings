<?php

$email = 'ana@alura.com.br';

$posicaoDoArroba = strpos($email, '@');

echo substr($email, 0, $posicaoDoArroba) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;
