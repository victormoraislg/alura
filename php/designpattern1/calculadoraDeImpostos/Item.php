<?php
class Item {
    private $nome;
    private $valor;

    public function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }

}