<?php

function autoload($class) {
    include $class.".php";
}
spl_autoload_register("autoload");

error_reporting(E_ALL);
ini_set("display_errors", 1);

$bancoBrasil = new Banco('Banco do Brasil', 'Avenida Barao de Itapura, 507, Botafogo, Campinas - SP', '19 3429-7426', 'contato@bdb.com');
$contaJose = new ContaBancaria($bancoBrasil, 16485, 'Jose Almeida Figo', 74185, 2500);

$relatorioSimples = new RelatorioSimples();
$relatorioSimples->imprimir($contaJose);

echo '<br /><br /><br /><br />';

$relatorioComplexo = new RelatorioComplexo();
$relatorioComplexo->imprimir($contaJose);