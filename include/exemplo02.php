<?php

$qualSuaIdade = 17;

$IdadeCrianca = 12;
$IdadeMaior = 18;
$IdadeMelhor = 65;

if ($qualSuaIdade < $IdadeCrianca) {
    echo "Criança";
} else if ($qualSuaIdade < $IdadeMaior){
echo "Adolescente";
} else if ($qualSuaIdade < $IdadeMelhor){
echo "Adulto";
} else {
echo "Idoso";
}
echo "<br>";
echo ($qualSuaIdade < $IdadeMaior)?"Menor de idade":"Maior de idade";

?>