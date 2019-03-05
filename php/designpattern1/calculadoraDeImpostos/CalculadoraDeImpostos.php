<?php   
class CalculadoraDeImpostos {
    public function realizaCalculo(Orcamento $orcamento, Imposto $imposto){
        $valor = $imposto->calcular($orcamento);
        return $valor;
    }

}