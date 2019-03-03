<?php
require 'ContaBancaria.php';
require 'Investimento.php';
require 'InvestimentoConservador.php';
require 'InvestimentoModerado.php';
require 'InvestimentoArrojado.php';
require 'RealizadorDeInvestimentos.php';

$realizadorDeInvestimento = new RealizadorDeInvestimentos();
$contaBancaria = new ContaBancaria(1000);

echo 'Saldo inicial = ' . $contaBancaria->getSaldo();
$realizadorDeInvestimento->realizarInvestimento(new InvestimentoArrojado(), $contaBancaria);
echo '<br>Saldo atualizado= ' . $contaBancaria->getSaldo();