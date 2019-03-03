<?php
    function autoload($class) {
        include $class.".php";
    }
    spl_autoload_register("autoload");

    $orcamento = new Orcamento(3001);
    $calculadoraDeImposto = new CalculadoraDeImpostos();

    $icms = $calculadoraDeImposto->realizaCalculo($orcamento, new ICMS());
    $iss = $calculadoraDeImposto->realizaCalculo($orcamento, new ISS());
    $iccc = $calculadoraDeImposto->realizaCalculo($orcamento, new ICCC());

    echo 'Orcamento -> ' . $orcamento->getValor();
    echo '<br>ICMS ->' . $icms;
    echo '<br>ISS ->' . $iss;
    echo '<br>ICCC ->' . $iccc;