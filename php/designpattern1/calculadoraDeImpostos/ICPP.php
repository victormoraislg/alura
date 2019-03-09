<?php
class ICPP extends TemplateDeImpostoCondicional {
    public function deveUsarTaxacaoMaxima(Orcamento $orcamento){
        return $orcamento->getValor() >= 500;
    }
    
    public function taxacaoMaxima(Orcamento $orcamento){
        return $orcamento->getValor() * 0.07;
    }

    public function taxacaoMinima(Orcamento $orcamento){
        return $orcamento->getValor() * 0.05;
    }
}