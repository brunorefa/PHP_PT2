<?php

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;
    private $estado;
    private $cep;
    public function __construct($a, $b, $c, $d, $e){
        $this->logradouro = $a;  
        $this->numero = $b;
        $this->cidade = $c;
        $this->estado = $d;
        $this->cep = $e;
    }
    //public function __destruct(){
      //  var_dump("DESTRUIR");
    //}
    public function __toString(){
        return $this->logradouro.", ".$this->numero." - ".$this->cidade." - ".$this->estado." . ".$this->cep;
    }
}
$meuEndereco = new Endereco("Rua Virginio Palu", "122", "São José dos Pinhais", "Paraná", "83323123");
echo $meuEndereco;
?>