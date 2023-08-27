<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$contaBancaria = new ContaBancaria(
    'Banco do Brasil',
    'Marco Lima',
    '9132',
    '1321-01',
    '1000000'
);

echo $contaBancaria -> obterSaldo();
echo PHP_EOL;

echo $contaBancaria -> depositar(500000);
echo PHP_EOL;

echo $contaBancaria -> obterSaldo();
echo PHP_EOL;

echo $contaBancaria -> sacar(950000);
echo PHP_EOL;

echo $contaBancaria -> obterSaldo();
echo PHP_EOL;