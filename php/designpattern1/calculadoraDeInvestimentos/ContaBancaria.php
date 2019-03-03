<?php

class ContaBancaria {
    private $saldo;

    public function __construct($saldo){
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function realizarDeposito($valorDeposito){
        $this->saldo += $valorDeposito;
    }
}