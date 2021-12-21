<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velociade);
    public function trocarMarcha($marcha);
}
class Civic implements Veiculo {
    public function acelerar ($velocidade)
    {
        echo "o veículo acelerou até " . $velocidade . " km/h";
    }
    public function frenar ($velocidade)
    {
        echo "o veiculo frenou até " . $velociade . " km/h";
    }
    public function trocarMarcha ($marcha)
    {
        echo "o veiculo engatou a marcha " . $marcha;
    }
}
$carro = new Civic();
$carro->acelerar(120);
$carro->trocarMarcha(5);
?>
