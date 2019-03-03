<?php
class InvestimentoModerado implements Investimento {
    public function investir($valorInvestido){
        $chance = mt_rand(1,100);

        if($chance < 50) {
            return $valorInvestido * 0.025;
        } else {
            return $valorInvestido * 0.007;
        }
    }
}