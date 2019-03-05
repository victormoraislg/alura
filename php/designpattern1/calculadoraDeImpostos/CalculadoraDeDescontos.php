<?php
class CalculadoraDeDescontos {

    public function darDesconto(Orcamento $orcamento){
        $desconto5Itens = new Desconto5Itens();
        $desconto500Reais = new Desconto500Reais();
        $semDesconto = new SemDesconto();

        $desconto5Itens->setProximo($desconto500Reais);
        $desconto500Reais->setProximo($semDesconto);

        return $desconto5Itens->desconta($orcamento);
    }
    
}