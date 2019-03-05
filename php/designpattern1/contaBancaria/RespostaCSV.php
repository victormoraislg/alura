<?php
class RespostaCSV extends RespostaAbstrata {
    public function responde(Requisicao $requisicao, Conta $conta){
        if($requisicao->getFormato() == 'CSV'){
            return $conta->getNomeTitular() . ";" . $conta->getSaldo();
        } else {
            return parent::responde($requisicao, $conta);
        }
    }
}