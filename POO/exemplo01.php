<?php

class Pessoa {
    public $nome;//atributo
    public function falar(){//método
        return "O meu nome é ".$this->nome;
    }
}
$bruno = new Pessoa();
$bruno->nome ="Bruno Refael";
echo $bruno->falar();
?>