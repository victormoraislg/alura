<?php

class RelatorioComplexo extends Relatorio {

    public function imprimirCabecalho(ContaBancaria $conta){
        echo $conta->getBanco()->getNome() . '<br />';
        echo $conta->getBanco()->getEndereco() . '<br />';
        echo $conta->getBanco()->getTelefone();
    }

    public function imprimirCorpo(ContaBancaria $conta){
        echo 'Titular: ' . $conta->getTitular();
        echo '<br />Agencia: ' . $conta->getAgencia();
        echo '<br />Conta: ' . $conta->getNmrConta();
        echo '<br />Saldo: ' . $conta->getSaldo();
    }

    public function imprimirRodape(ContaBancaria $conta){
        echo $conta->getBanco()->getEmail();
        echo '<br />' . date('d/m/Y');
    }
    
}