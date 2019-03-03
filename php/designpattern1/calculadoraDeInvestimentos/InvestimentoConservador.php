<?php
class InvestimentoConservador implements Investimento {
    public function investir($valorInvestido){
        return $valorInvestido * 0.008;
    }
}