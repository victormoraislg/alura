<?php
    class ICMS implements Imposto{
        public function calcular(Orcamento $orcamento){
            return $orcamento->getValor() * 0.05;
        }
    }