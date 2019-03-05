<?php

function autoload($class) {
    include $class.".php";
}
spl_autoload_register("autoload");

error_reporting(E_ALL);
ini_set("display_errors", 1);

$conta = new Conta('Joao Victor de Morais', 1500);
$tipoRequisicao = new Requisicao('CSV');
$requisicao = new RealizarRequisicao();

$resposta = $requisicao->enviarRequisicao($tipoRequisicao, $conta);

echo 'Resposta: ';
echo '<br />';
echo '<pre>' . $resposta . '</pre>';

echo '<br />';
echo 'Infos da conta:';
echo '<br />';
echo 'Nome do titular: ' . $conta->getNomeTitular();
echo '<br />';
echo 'Saldo: ' . $conta->getSaldo();
?>