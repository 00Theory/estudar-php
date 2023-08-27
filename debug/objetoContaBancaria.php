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


$contaBancaria -> setBanco("Banco do Brasil");
$contaBancaria -> setNomeTitular("Marco Lima");
$contaBancaria -> setNumeroAgencia("9132");
$contaBancaria -> setNumeroConta("1321-01");
$contaBancaria -> setSaldo("1000000");

var_dump($contaBancaria -> getBanco());
