<?php
class SemDesconto implements Desconto {
    private $proximo;

    public function desconta(Orcamento $orcamento){
        return 0;
    }

    public function setProximo(Desconto $desconto){

    }
}