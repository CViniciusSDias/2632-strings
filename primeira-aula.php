<?php

$nome = 'Vinicius dos Santos';

$ehDaMinhaFamilia = str_contains($nome, 'Dias');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}
