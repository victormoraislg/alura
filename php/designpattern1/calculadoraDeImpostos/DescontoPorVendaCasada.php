<?php
class DescontoPorVendaCasada implements Desconto {
    private $proximo;

    public function desconta(Orcamento $orcamento){
        $temLapis = $this->possuiItem('Lapis', $orcamento);
        $temCaneta = $this->possuiItem('Caneta', $orcamento);

        if($temLapis && $temCaneta){
            return $orcamento->getValor() * 0.05;
        } else {
            return $this->proximo->desconta($orcamento);
        }
    }

    public function setProximo(Desconto $desconto){
        $this->proximo = $desconto;
    }

    private function possuiItem($nomeDoItem, Orcamento $orcamento) {
        foreach ($orcamento->getItens() as $item) {
            if($item->getNome() == $nomeDoItem) return true;
        }
        return false;
    }
}