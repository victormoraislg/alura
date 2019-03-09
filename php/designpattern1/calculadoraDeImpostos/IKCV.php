<?php
class IKCV extends TemplateDeImpostoCondicional {
    public function deveUsarTaxacaoMaxima(Orcamento $orcamento){
        $isValorSuperior500 = $orcamento->getValor() > 500;
        $possuiItemComValorSuperior100 = false;
        foreach($orcamento->getItens() as $item){
            if($item->getValor() > 100)
                $possuiItemComValorSuperior100 = true;
        }

        return $isValorSuperior500 && $possuiItemComValorSuperior100;
    }
    
    public function taxacaoMaxima(Orcamento $orcamento){
        return $orcamento->getValor() * 0.1;
    }

    public function taxacaoMinima(Orcamento $orcamento){
        return $orcamento->getValor() * 0.06;
    }
}