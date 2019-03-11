<?php

abstract class Relatorio {

    public final function imprimir(ContaBancaria $conta){
        $this->imprimirCabecalho($conta);
        echo '<br />';
        echo '----------------------------------------------------------------------';
        echo '<br /><br /><br />';

        $this->imprimirCorpo($conta);

        echo '<br /><br /><br />';
        echo '----------------------------------------------------------------------';
        echo '<br />';
        $this->imprimirRodape($conta);
    }

    public abstract function imprimirCabecalho(ContaBancaria $conta);

    public abstract function imprimirCorpo(ContaBancaria $conta);

    public abstract function imprimirRodape(ContaBancaria $conta);
}