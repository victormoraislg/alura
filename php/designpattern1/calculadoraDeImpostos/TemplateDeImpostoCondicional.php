<?php
abstract class TemplateDeImpostoCondicional implements Imposto {
    public function calcular(Orcamento $orcamento){
        if($this->deveUsarTaxacaoMaxima($orcamento)){
            return $this->taxacaoMaxima($orcamento);
        } else {
            return $this->taxacaoMinima($orcamento);
        }
    }

    public abstract function deveUsarTaxacaoMaxima(Orcamento $orcamento);

    public abstract function taxacaoMaxima(Orcamento $orcamento);

    public abstract function taxacaoMinima(Orcamento $orcamento);
}