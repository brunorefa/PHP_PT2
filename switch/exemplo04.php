<?php

$diaDaSemana = date("w"); 
$data = "Hoje é ";

switch ($diaDaSemana) {
case 0:
echo $data ."Domingo";
break;
case 1:
echo $data ."Segunda";
break;
case 2;
echo $data ."Terça";
break;
case 3;
echo $data ."Quarta";
break;
case 4;
echo $data ."Quinta";
break;
case 5;
echo $data ."Sexta";
break;
case 6;
echo $data ."Sábado";
break;
}


?>