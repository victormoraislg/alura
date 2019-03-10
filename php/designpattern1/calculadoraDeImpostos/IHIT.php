<?php
class IHIT extends TemplateDeImpostoCondicional {
    // public function deveUsarTaxacaoMaxima(Orcamento $orcamento){
    //     $arNomesItens = array();
    //     foreach($orcamento->getItens() as $item){
    //         $arNomesItens[] = $item->getNome();
    //     }

    //     $itensDuplicados = array_unique( array_diff_assoc( $arNomesItens, array_unique( $arNomesItens ) ) );
    //     $temItemDuplicado = !empty($itensDuplicados);

    //     if( $temItemDuplicado )
    //         return true;

    //     return false;
    // }

    public function deveUsarTaxacaoMaxima(Orcamento $orcamento){
        $noOrcamento = Array();

        foreach($orcamento->getItens() as $item) {
          if(in_array($item->getNome(),$noOrcamento)) return true;
          else $noOrcamento[] = $item->getNome();
        }

        return false;
    }
    
    public function taxacaoMaxima(Orcamento $orcamento){
        return ($orcamento->getValor() * 0.13) + 100;
    }

    public function taxacaoMinima(Orcamento $orcamento){
        return ($orcamento->getValor() * 0.01) * count($orcamento->getItens());
    }
}