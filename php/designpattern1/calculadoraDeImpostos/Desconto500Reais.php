<?php
class Desconto500Reais implements Desconto {
    private $proximo;

    public function desconta(Orcamento $orcamento){
        if($orcamento->getValor() > 500){
            return $orcamento->getValor() * 0.07;
        } else {
            return $this->proximo->desconta($orcamento);
        }
    }

    public function setProximo(Desconto $desconto){
        $this->proximo = $desconto;
    }
}