<?php

class Banco {
    private $nome, $endereco, $telefone, $email;

    public function __construct($nome, $endereco, $telefone, $email){
       $this->nome = $nome;
       $this->endereco = $endereco;
       $this->telefone = $telefone;
       $this->email = $email;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getEmail(){
        return $this->email;
    }
}