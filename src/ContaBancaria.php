<?php

declare(strict_types=1);

namespace App;

class ContaBancaria {
    public string $banco = "Banco Cuide";
    public string $nomeTitular = "Marco Lima";
    public string $numeroAgencia = "8244";
    public string $numeroConta = "39120-69";
    public float $saldo = 0;

    public function exibirDadosConta(): array{
        return [
            'banco' => $this -> banco,
            'nomeTitular' => $this-> nomeTitular,
            'numeroAgencia' => $this -> numeroAgencia,
            'numeroconta' => $this -> numeroConta,
            'saldo' => $this -> saldo,
        ];
    }
}

$contaBancaria = new ContaBancaria();
var_dump($contaBancaria);