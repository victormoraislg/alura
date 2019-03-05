<?php
abstract class RespostaAbstrata implements Resposta {
    private $proximaResposta;

    public function setProxima(Resposta $resposta){
        $this->proximaResposta = $resposta;
        return $resposta;
    }

    public function responde(Requisicao $requisicao, Conta $conta){
        if($this->proximaResposta){
            return $this->proximaResposta->responde($requisicao, $conta);
        }
        return null;
    }
}