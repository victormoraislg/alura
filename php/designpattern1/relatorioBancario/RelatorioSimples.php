<?php

class RelatorioSimples extends Relatorio {

    public function imprimirCabecalho(ContaBancaria $conta){
        echo $conta->getBanco()->getNome();
    }

    public function imprimirCorpo(ContaBancaria $conta){
        echo 'Titular: ' . $conta->getTitular();
        echo '<br />Saldo: ' . $conta->getSaldo();
    }

    public function imprimirRodape(ContaBancaria $conta){
        echo $conta->getBanco()->getTelefone();
    }
    
}