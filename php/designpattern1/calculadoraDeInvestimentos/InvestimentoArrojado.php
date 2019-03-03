<?php
class InvestimentoArrojado implements Investimento {
    public function investir($valorInvestido){
        $chance = mt_rand(1,100);

        if($chance < 20) {
            return $valorInvestido * 0.05;
        } else if ($chance < 30){
            return $valorInvestido * 0.03;
        } else {
            return $valorInvestido * 0.006;
        }
    }
}