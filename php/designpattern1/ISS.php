<?php
    class ISS implements Imposto {
        public function calcular(Orcamento $orcamento){
            return $orcamento->getValor() * 0.06;
        }
    }