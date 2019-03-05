<?php
class RespostaPorcento extends RespostaAbstrata {
    public function responde(Requisicao $requisicao, Conta $conta){
        if($requisicao->getFormato() == 'Porcentagem'){
            return $conta->getNomeTitular() . "%" . $conta->getSaldo();
        } else {
            return parent::responde($requisicao, $conta);
        }
    }
}