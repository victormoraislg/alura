<?php
class RealizadorDeInvestimentos {
    public function realizarInvestimento(Investimento $investimento, ContaBancaria $conta){
        $lucro = $investimento->investir($conta->getSaldo());
        $conta->realizarDeposito($lucro - ($lucro * 0.25));
    }
}