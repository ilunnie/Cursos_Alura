<?php

class Conta
{
    private string $cpf;
    private string $nome;
    private float $saldo = 0;
    private static int $numContas = 0;

    public function __construct(string $cpf, string $nome)
    {
        echo "Criando nova conta..." . PHP_EOL;
        $this->saldo = 0;
        $this->cpf = $cpf;
        $this->ValidarNome($nome);
        echo "Conta Criada!" . PHP_EOL;

        self::$numContas++;
    }
    private function ValidarNome(string $nome)
    {
        if (strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres" . PHP_EOL;
            exit();
        }
        $this->nome = $nome;
    }
    public function sacar(float $valor): void
    {
        if ($valor > $this->saldo){
            echo 'Saldo indisponivel';
            return;
        }
        $this->saldo -= $valor;
    }
    public function depositar(float $valor): void
    {
        if ($valor < 0){
            echo 'Valor invalido';
            return;
        }
        $this->saldo += $valor;
    }
    public function tranferir(float $valor, Conta $destino): void
    {
        if ($valor > $this->saldo){
            echo 'Saldo indisponivel';
            return;
        }
        $this->sacar($valor);
        $destino->depositar($valor);
    }
    public function returnCpf(): string
    {
        return $this->cpf;
    }
    public function returnNome(): string
    {
        return $this->nome;
    }
    public function returnSaldo(): float
    {
        return $this->saldo;
    }
    public function printConta(){
        echo "Cpf: " . $this->returnCpf() . PHP_EOL;
        echo "Nome: " . $this->returnNome() . PHP_EOL;
        echo "Saldo: " . $this->returnSaldo() . PHP_EOL;
    }

    public static function returnContas(): int
    {
        return self::$numContas;
    }
}

