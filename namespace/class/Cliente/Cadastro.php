<?php
namespace Cliente;
class Cadastro extends \Cadastro {
    public function registrarVenda(){
        echo "foi reguistrada uma venda para o cliente ".$this->getNome();
    }
}

?>