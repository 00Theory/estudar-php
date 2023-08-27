<?php

declare(strict_types=1);

namespace App;

class ContaBancaria {
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function exibirDadosConta(): array{
        return [
            'banco' => $this -> banco,
            'nomeTitular' => $this -> nomeTitular,
            'numeroAgencia' => $this -> numeroAgencia,
            'numeroconta' => $this -> numeroConta,
            'saldo' => $this -> saldo,
        ];
    }

	public function getBanco(): string
    {
        return $this->banco;
    }

	public function getNomeTitular(): string {
		return $this->nomeTitular;
	}
	
	public function getNumeroAgencia(): string {
		return $this->numeroAgencia;
	}

	public function getNumeroConta(): string {
		return $this->numeroConta;
	}

	public function getSaldo(): float {
		return $this->saldo;
	}
}

