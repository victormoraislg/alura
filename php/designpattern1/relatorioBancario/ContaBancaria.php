<?php

class ContaBancaria {
    private $banco, $agencia, $titular, $nmrConta, $saldo;

    public function __construct(Banco $banco, $agencia, $titular, $nmrConta, $saldo){
       $this->banco = $banco;
       $this->agencia = $agencia;
       $this->titular = $titular;
       $this->nmrConta = $nmrConta;
       $this->saldo = $saldo;
    }

    public function getBanco(){
        return $this->banco;
    }

    public function getAgencia(){
        return $this->agencia;
    }

    public function getTitular(){
        return $this->titular;
    }

    public function getNmrConta(){
        return $this->nmrConta;
    }

    public function getSaldo(){
        return $this->saldo;
    }
}