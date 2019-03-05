<?php
class RespostaXML extends RespostaAbstrata {
    public function responde(Requisicao $requisicao, Conta $conta){
        if($requisicao->getFormato() == 'XML'){
            return '<conta><titular>' . $conta->getNomeTitular() . '</titular><saldo>' . $conta->getSaldo() . '</saldo></conta>';
        } else {
            return parent::responde($requisicao, $conta);
        }
    }
}