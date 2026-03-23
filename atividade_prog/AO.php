<?php

    class conta{
        public $numeroConta;
        public $titular;
        public $saldo;
        public $juros;

        public function depositar($valor){
            $this->saldo += $valor;
        }
        public function sacar($valor){
            if($valor <= $this->saldo){
                $this->saldo -= $valor;
            } else {
                return "Saldo insuficiente para saque.";
            }
        }
    }

    $conta_do_lolo = new conta();
    $conta_do_lolo->numeroConta = "123456";
    $conta_do_lolo->titular = "Lorenzolegal";
    $conta_do_lolo->saldo = 1000.0;

    $conta_do_theofeio = new conta();
    $conta_do_theofeio->numeroConta = "654321";
    $conta_do_theofeio->titular = "Theofeio";
    $conta_do_theofeio->saldo = 2000.0;
   
    echo "Número da Conta: " . $conta_do_lolo->numeroConta . "<br>";
    echo "Titular: " . $conta_do_lolo->titular . "<br>";
    echo "Saldo: R$ " . $conta_do_lolo->saldo . "<br><br>";

    $conta_do_lolo->depositar(500.0);
    echo "Saldo após depósito de R$ 500.0: R$ " . $conta_do_lolo->saldo . "<br>";

    $conta_do_lolo->sacar(1000.0);
    echo "Saldo após saque de R$ 1000.0: R$ " . $conta_do_lolo->saldo . "<br><br>";

    echo "Número da Conta: " . $conta_do_theofeio->numeroConta . "<br>";
    echo "Titular: " . $conta_do_theofeio->titular . "<br>";
    echo "Saldo: R$ " . $conta_do_theofeio->saldo . "<br><br>";

    $conta_do_theofeio->sacar(300.0);
    echo "Saldo após saque de R$ 300.0: R$ " . $conta_do_theofeio->saldo . "<br>";

    $conta_do_theofeio->depositar(2500.0);
    echo "Saldo após depósito de R$ 2500.0: R$ " . $conta_do_theofeio->saldo . "<br>";
?>