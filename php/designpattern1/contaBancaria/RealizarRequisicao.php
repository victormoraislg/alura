<?php
class RealizarRequisicao {
    public function enviarRequisicao(Requisicao $requisicao, Conta $conta){
        $requisicaoXML = new RespostaXML();
        $requisicaoCSV = new RespostaCSV();
        $requisicaoPorcentagem = new RespostaPorcento();

        $requisicaoXML->setProxima($requisicaoCSV)->setProxima($requisicaoPorcentagem);

        $resposta = $requisicaoXML->responde($requisicao, $conta);

        return $resposta;
    }
}