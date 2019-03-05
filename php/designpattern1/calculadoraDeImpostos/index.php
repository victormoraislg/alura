<?php
    function autoload($class) {
        include $class.".php";
    }
    spl_autoload_register("autoload");

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $orcamento = new Orcamento(500);
    $calculadoraDeImposto = new CalculadoraDeImpostos();

    $icms = $calculadoraDeImposto->realizaCalculo($orcamento, new ICMS());
    $iss = $calculadoraDeImposto->realizaCalculo($orcamento, new ISS());
    $iccc = $calculadoraDeImposto->realizaCalculo($orcamento, new ICCC());

    $orcamento->adicionarItem(new Item('Cadeira', 150));
    $orcamento->adicionarItem(new Item('Mesa', 250));
    $orcamento->adicionarItem(new Item('Prato', 15));
    $orcamento->adicionarItem(new Item('Lapis', 45));
    $orcamento->adicionarItem(new Item('Caneta', 150));

    echo 'Valor do Orcamento -> ' . $orcamento->getValor();
    echo '<br>Quantidade de Itens -> ' . count($orcamento->getItens());
    echo '<br>ICMS ->' . $icms;
    echo '<br>ISS ->' . $iss;
    echo '<br>ICCC ->' . $iccc;
    
    $calculadoraDeDescontos = new CalculadoraDeDescontos();
    $desconto = $calculadoraDeDescontos->darDesconto($orcamento);

    echo '<br>Valor do desconto -> ' . $desconto;