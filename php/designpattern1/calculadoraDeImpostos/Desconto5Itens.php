<?php
class Desconto5Itens implements Desconto {
    private $proximo;

    public function desconta(Orcamento $orcamento){
        if(count($orcamento->getItens()) > 5){
            return $orcamento->getValor() * 0.1;
        } else {
            return $this->proximo->desconta($orcamento);
        }
    }

    public function setProximo(Desconto $desconto){
        $this->proximo = $desconto;
    }
}